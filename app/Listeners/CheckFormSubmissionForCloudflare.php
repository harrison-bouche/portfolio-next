<?php

namespace App\Listeners;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Statamic\Events\FormSubmitted;
use Statamic\Exceptions\ValidationException;

class CheckFormSubmissionForCloudflare
{
    const string ERROR_MSG = "Cloudflare Captcha validation failed. Please try again.";

    private ?string $turnstileResponse;
    private ?string $remoteIp;

    public function __construct(Request $request)
    {
        $this->turnstileResponse = $request->input("cf-turnstile-response");
        $this->remoteIp = $request->server(
            "HTTP_CF_CONNECTING_IP",
            $request->server("HTTP_X_FORWARDED_FOR", $request->server("REMOTE_ADDR")),
        );
    }

    /**
     * Handle the event.
     */
    public function handle(FormSubmitted $event): void
    {
        $url = "https://challenges.cloudflare.com/turnstile/v0/siteverify";

        if (!$this->turnstileResponse) {
            throw ValidationException::withMessages([self::ERROR_MSG]);
        }

        $cfVerifyData = [
            "secret" => config("services.cloudflare.turnstile.secret"),
            "response" => $this->turnstileResponse,
            "remoteip" => $this->remoteIp
        ];

        try {
            $response = Http::post($url, $cfVerifyData);
        } catch (\Exception $e) {
            Log::error('Cloudflare Captcha validation failed', $e);
        }   

        if (!$response->json("success")) {
            throw ValidationException::withMessages([self::ERROR_MSG]);
        }
    }
}

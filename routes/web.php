<?php

use App\Data\ContactFormData;
use App\Mail\ContactEstablished;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get("/", function () {
    $contents = View::make("welcome");

    return Response::make($contents)->withHeaders([
        "Cache-Control" => "max-age=86400, public, stale-while-revalidate=3600",
    ]);
})->name("home");

Route::post("/contact", function (Request $request, ContactFormData $data) {
    if (app()->environment("production")) {
        $validated = $request->validate([
            "cf-turnstile-response" => "required",
        ]);

        $url = "https://challenges.cloudflare.com/turnstile/v0/siteverify";

        $cfVerifyData = [
            "secret" => config("services.cloudflare.turnstile.key"),
            "response" => $validated["cf-turnstile-response"],
            "remoteip" => $request->server(
                "HTTP_CF_CONNECTING_IP",
                $request->server("HTTP_X_FORWARDED_FOR", $request->server("REMOTE_ADDR")),
            )
        ];

        try {
            $response = Http::post($url, $cfVerifyData);
        } catch (\Exception $e) {
            return abort(400, "Cloudflare Turnstile validation failed.");
        }

        if (!$response->json("success")) {
            return abort(400, "Cloudflare Turnstile validation failed.");
        }
    }

    Mail::to("harrison@bouche.dev")->send(new ContactEstablished($data));

    return to_route("home");
})->name("contact");
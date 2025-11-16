<?php

namespace App\Data;

use Spatie\LaravelData\Attributes\Validation\Email;
use Spatie\LaravelData\Data;

class ContactFormData extends Data {
    public function __construct(
        public string $name,
        #[Email]
        public string $email,
        public string $subject,
        public ?string $message,
    ) {}
}
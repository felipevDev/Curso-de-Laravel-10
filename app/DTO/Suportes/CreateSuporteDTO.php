<?php

namespace App\DTO;

use App\Http\Requests\StoreUpdateSuporte;

class CreateSuporteDTO
{
    public function __construct(
        public string $subject,
        public string $status,
        public string $body,
    )
    {}

    public static function makeFromRequest(StoreUpdateSuporte $request): self
    {
        return new self(
            $request->subject,
            'a',
            $request->body
        );
    }
}

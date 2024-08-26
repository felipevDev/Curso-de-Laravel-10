<?php

namespace App\DTO\Suportes;

use App\Http\Requests\StoreUpdateSuporte;

class UpdateSuporteDTO
{
    public function __construct(
        public string $id,
        public string $subject,
        public string $status,
        public string $body,
    )
    {}

    public static function makeFromRequest(StoreUpdateSuporte $request): self
    {
        return new self(
            $request->id,
            $request->subject,
            'a',
            $request->body,
        );
    }
}

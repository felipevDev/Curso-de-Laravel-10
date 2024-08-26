<?php

namespace App\Enums;

enum SuporteStatus: string
{
    case A = "Open";
    case C = "Closed";
    case P = "Pendente";

    public static function fromValue(string $name): string
    {
        foreach (self::cases() as $status){
            if ($name === $status->name) {
                return $status->value;
            }
        }

        throw new \ValueError("$status in not a valid");
    }
}

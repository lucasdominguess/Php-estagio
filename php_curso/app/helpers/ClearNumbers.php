<?php

namespace App\helpers;

class ClearNumbers
{
    public static function clearCpf(string $cpf)
    {
        return preg_replace('/\D+/', '', $cpf);
    }
}
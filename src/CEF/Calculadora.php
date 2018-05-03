<?php
declare(strict_types=1);

namespace CEF;

class Calculadora
{
    const SUDOESTE = 1;
    const TAGUATINGA = 2;

    public function calcular(float $metrosQuadrados, int $cidade): float
    {
        if ($cidade == self::SUDOESTE) {
            return $metrosQuadrados * 10000;
        }
        
        return $metrosQuadrados * 5000;
    }
}

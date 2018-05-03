<?php
declare(strict_types=1);

namespace CEF;

class Calculadora
{
    const SUDOESTE = 1;
    const TAGUATINGA = 2;

    public $cidadesParticipantes = [
        self::SUDOESTE,
        self::TAGUATINGA
    ];

    public function calcular(float $metrosQuadrados, int $cidade): float
    {
        if (!in_array($cidade, $this->cidadesParticipantes)) {
            throw new \Exception('Cidade não participante');
        }

        $valorTotal = $metrosQuadrados * 5000;

        if ($cidade == self::SUDOESTE) {
            $valorTotal = $metrosQuadrados * 10000;
        }

        if ($metrosQuadrados > 50) {
            $valorTotal *= 1.1;
        }

        return $valorTotal;
    }
}

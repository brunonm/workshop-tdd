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

    /**
     * @var Logger
     */
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function calcular(float $metrosQuadrados, int $cidade): float
    {
        if (!in_array($cidade, $this->cidadesParticipantes)) {
            $this->logger->log("Cidade '$cidade' não participante");
            throw new \Exception('Cidade não participante');
        }

        $valorTotal = $metrosQuadrados * 5000;

        if ($cidade == self::SUDOESTE) {
            $valorTotal = $metrosQuadrados * 10000;
        }

        if ($metrosQuadrados > 50) {
            $valorTotal *= 1.1;
        }

        $this->logger->log('Cálculo realizado');

        return $valorTotal;
    }
}

<?php
declare(strict_types=1);

namespace Tests\CEF;

use PHPUnit\Framework\TestCase;
use CEF\Calculadora;

class CalculadoraTest extends TestCase
{
    public function testDeveCalcularValorDoImovel()
    {
        $calculadora = new Calculadora();
        
        $this->assertEquals(
            1000000,
            $calculadora->calcular(100, Calculadora::SUDOESTE)
        );
    }
}

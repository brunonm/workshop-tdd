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
            1100000,
            $calculadora->calcular(100, Calculadora::SUDOESTE)
        );
    }

    public function testDeveAcrescentar10PorcentoSeImovelForMaiorQue50Metros()
    {
        $calculadora = new Calculadora();
        
        $this->assertEquals(
            330000,
            $calculadora->calcular(60, Calculadora::TAGUATINGA)
        );
    }
}

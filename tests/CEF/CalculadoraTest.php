<?php
declare(strict_types=1);

namespace Tests\CEF;

use PHPUnit\Framework\TestCase;
use CEF\Calculadora;

class CalculadoraTest extends TestCase
{
    protected $calculadora;

    protected function setUp()
    {
        $this->calculadora = new Calculadora();
    }

    public function testDeveCalcularValorDoImovel()
    {
        $this->assertEquals(
            1100000,
            $this->calculadora->calcular(100, Calculadora::SUDOESTE)
        );
    }

    public function testDeveAcrescentar10PorcentoSeImovelForMaiorQue50Metros()
    {
        $this->assertEquals(
            330000,
            $this->calculadora->calcular(60, Calculadora::TAGUATINGA)
        );
    }

    /**
     * @expectedException \Exception
     */
    public function testDeveFalharSeCidadeNaoExistir()
    {
        $this->calculadora->calcular(40, 3);        
    }
}

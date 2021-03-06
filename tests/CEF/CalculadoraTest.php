<?php
declare(strict_types=1);

namespace Tests\CEF;

use PHPUnit\Framework\TestCase;
use CEF\Calculadora;
use CEF\Logger;
use Mockery as M;

class CalculadoraTest extends TestCase
{
    protected $calculadora;

    protected function setUp()
    {
        $mockLogger = M::mock(Logger::class);
        $mockLogger->shouldReceive('log')->once();

        $this->calculadora = new Calculadora($mockLogger);
    }

    public function providerCalculos()
    {
        return [
            [1100000, 100, Calculadora::SUDOESTE, 'fluxo normal'],
            [330000, 60, Calculadora::TAGUATINGA, '10%'],
            [50000, 10, Calculadora::TAGUATINGA, 'menor 50m']
        ];
    }

     /**
     * @dataProvider providerCalculos
     */
    public function testDeveCalcularValorDoImovel(
        float $valorEsperado,
        float $tamanho,
        int $cidade,
        string $erroEsperado
    ) {
        $this->assertEquals(
            $valorEsperado,
            $this->calculadora->calcular($tamanho, $cidade),
            $erroEsperado
        );
    }

    /**
     * @expectedException \Exception
     */
    public function testDeveFalharSeCidadeNaoExistir()
    {
        $this->calculadora->calcular(40, 3);        
    }

    protected function tearDown()
    {
        parent::tearDown();
        \Mockery::close();
    }
}

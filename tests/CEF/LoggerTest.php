<?php
declare(strict_types=1);

namespace Tests\CEF;

use PHPUnit\Framework\TestCase;
use CEF\Logger;

class LoggerTest extends TestCase
{
    public function testDeveLogarComSucesso()
    {
        $logger = new Logger();
        $logger->log('testando...');
    }
}

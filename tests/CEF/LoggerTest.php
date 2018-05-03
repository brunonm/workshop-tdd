<?php
declare(strict_types=1);

namespace Tests\CEF;

use PHPUnit\Framework\TestCase;
use CEF\Logger;

class LoggerTest extends TestCase
{
    /**
     * @doesNotPerformAssertions
     */
    public function testDeveLogarComSucesso()
    {
        $logger = new Logger();
        $logger->log('testando...');
    }

    protected function tearDown()
    {
        parent::tearDown();
        $logFile = __DIR__ . '/../../var/log/log.txt';
        if (file_exists($logFile)) {
            unlink($logFile);
        }
    }
}

<?php
declare(strict_types=1);

namespace CEF;

class Logger
{
    public function log($texto)
    {
        file_put_contents(
            __DIR__ . '/../../var/log/log.txt',
            $texto . PHP_EOL,
            FILE_APPEND
        );
    }
}
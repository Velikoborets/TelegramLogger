<?php

namespace App\Logging;

use Monolog\Logger;

class TelegramLogger
{
    /**
     * Invokes the logger configuration
     *
     * @return \Monolog\Logger
     */
    public function __invoke()
    {
        $logger = new Logger('Logger');

        $logger->pushHandler(new TelegramLoggerHandler())
               ->pushHandler(new DatabaseLoggerHandler());

        return $logger;
    }
}

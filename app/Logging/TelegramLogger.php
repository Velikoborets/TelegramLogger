<?php

namespace App\Logging;

use Monolog\Logger;

class TelegramLogger
{
    /**
     * Invokes the logger configuration for Telegram
     *
     * @return \Monolog\Logger
     */
    public function __invoke()
    {
        $logger = new Logger('telegramLogger');
        $logger->pushHandler(new TelegramLoggerHandler());
        return $logger;
    }
}

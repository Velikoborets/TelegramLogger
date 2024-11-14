<?php

namespace App\Logging;

use Monolog\Logger;

class DatabaseLogger
{
    /**
     * Invokes the logger configuration for Repositories
     *
     * @return \Monolog\Logger
     */
    public function __invoke()
    {
        $logger = new Logger('repositoryLogger');
        $logger->pushHandler(new DatabaseLoggerHandler());
        return $logger;
    }

}

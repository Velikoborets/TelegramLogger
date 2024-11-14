<?php

namespace App\Logging;

use Monolog\Handler\AbstractProcessingHandler;
use Monolog\Logger;
use App\Models\Log;

class DatabaseLoggerHandler extends AbstractProcessingHandler
{
    /**
     * Writes the log record to the database
     *
     * @param array $record The log record to write
     *
     * @return void
     */
    protected function write(array $record): void
    {
        Log::create(['message' => $record['message']]);
    }
}

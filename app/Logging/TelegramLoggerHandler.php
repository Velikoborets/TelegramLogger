<?php

namespace App\Logging;

use Illuminate\Support\Facades\Http;
use Monolog\Handler\AbstractProcessingHandler;

class TelegramLoggerHandler extends AbstractProcessingHandler
{
    /**
     * Writes the log record to the telegram
     *
     * @param array $record The log record to write
     *
     * @return void
     */
    protected function write(array $record): void
    {
        $chat_id = config('services.telegram.chat_id');
        $token = config('services.telegram.bot_token');

        Http::post("https://api.telegram.org/bot{$token}/sendMessage", [
            'chat_id' => $chat_id,
            'text' => $record['message'],
        ]);
    }
}

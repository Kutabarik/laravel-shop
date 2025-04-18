<?php

declare(strict_types=1);

namespace App\Services\Telegram;

use Illuminate\Support\Facades\Http;

final class TelegramBotApi
{
    public const HOST = 'https://api.telegram.org/bot';

    public static function sendMessage(string $token, string $chatId, string $message): void
    {
        Http::get(self::HOST.$token.'/sendMessage', [
            'chat_id' => $chatId,
            'text' => $message,
        ]);
    }
}

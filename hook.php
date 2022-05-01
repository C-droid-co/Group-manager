<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$bot_api_key  = 'your:5365581542:AAFxDnN7tZmn4XUelxbJSTAIvUO7vxCOcLA';
$bot_username = '@Groupprotectorate_bot';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Handle telegram webhook request
    $telegram->handle();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // Silence is golden!
    // log telegram errors
    // echo $e->getMessage();
}

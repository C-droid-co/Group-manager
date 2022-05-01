<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$bot_api_key  = 'your:5365581542:AAFxDnN7tZmn4XUelxbJSTAIvUO7vxCOcLA';
$bot_username = '@Groupprotectorate_bot';
$hook_url     = 'https://github.com/Fintechbot/Group-manager/5365581542:AAFxDnN7tZmn4XUelxbJSTAIvUO7vxCOcLA/hook.php';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Set webhook
    $result = $telegram->setWebhook($hook_url);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    // echo $e->getMessage();
}

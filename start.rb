require 'telegram/bot'

token = '5365581542:AAFxDnN7tZmn4XUelxbJSTAIvUO7vxCOcLA'

Telegram::Bot::Client.run(token) do |bot|
  bot.listen do |message|
    case message.text
    when '/start'
      bot.api.send_message(chat_id: message.chat.id, text: "Hello #{message.from.first_name}, I'ma powerful group management bot made in RUBY to secure groups")
     end
when Telegram::Bot::Types::Message
    kb = [
      Telegram::Bot::Types::InlineKeyboardButton.new(text: 'Channel', url: 'https://google.com'),
      Telegram::Bot::Types::InlineKeyboardButton.new(text: 'Group', url" 'touch'),
      Telegram::Bot::Types::InlineKeyboardButton.new(text: 'Add bot to group', url: 'some text')
    ]
    markup = Telegram::Bot::Types::InlineKeyboardMarkup.new(inline_keyboard: kb)
    bot.api.send_message(chat_id: message.chat.id, text: 'Select What you want', reply_markup: markup)
  end
end

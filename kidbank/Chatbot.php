<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kids Banking - Chat Interface</title>
  <link rel="stylesheet" href="./assets/css/chatbot.css">
</head>
<body>
  <div class="chat-container">
    <div class="chat-box" id="chat-box">
      <div class="chat-message received">
        <p>Hi there! How can I help you today?</p>
      </div>
    </div>
    <form id="message-form" class="message-form">
      <input type="text" id="user-message" placeholder="Type your message here...">
      <button type="submit">Send</button>
    </form>
  </div>

  <script src="./assets/js/chatbot.js"></script>
</body>
</html>

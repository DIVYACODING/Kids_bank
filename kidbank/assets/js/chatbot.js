
var isFirstInteraction = true;

document.getElementById('message-form').addEventListener('submit', function(event) {
  event.preventDefault();
  var userMessage = document.getElementById('user-message').value.trim(); // Trim whitespace from the input
  if (userMessage !== '') { // Check if the message is not empty
    sendMessage(userMessage);
    document.getElementById('user-message').value = '';
  }
  isFirstInteraction = false; // Update isFirstInteraction to false after the first interaction
});

document.getElementById('user-message').addEventListener('focus', function(event) {
  if (isFirstInteraction) {
    customAlert("Type 'hi' to access the guide menu.");
    isFirstInteraction = false; // Update isFirstInteraction to false after the alert is shown
  }
});

function customAlert(message) {
  var modal = document.createElement('div');
  modal.style.position = 'fixed';
  modal.style.top = '0';
  modal.style.left = '0';
  modal.style.width = '100%';
  modal.style.height = '100%';
  modal.style.background = 'rgba(0, 0, 0, 0.5)';
  modal.style.display = 'flex';
  modal.style.justifyContent = 'center';
  modal.style.alignItems = 'center';
  modal.style.zIndex = '9999';
  modal.innerHTML = '<div style="background-color: #fff; padding: 20px; border-radius: 10px;">' + message + '<br><button onclick="closeAlert()">OK</button></div>';
  document.body.appendChild(modal);
}

function closeAlert() {
  var modal = document.querySelector('div[style*="rgba(0, 0, 0, 0.5)"]');
  modal.parentNode.removeChild(modal);
}

function sendMessage(message) {
  var chatBox = document.getElementById('chat-box');
  var newMessage = document.createElement('div');
  newMessage.classList.add('chat-message', 'sent');
  newMessage.innerHTML = '<p>' + message + '</p>';
  chatBox.appendChild(newMessage);
  setTimeout(function() {
    var replyMessage = document.createElement('div');
    replyMessage.classList.add('chat-message', 'received');
    var replyText;
    if (message.toLowerCase().trim() === "hi") {
      replyText = "Hello! I am a chat bot. My work is to guide you on any type of problem you may face while using our site. For deposit related problems, type 'D'. For transaction related problems, type 'T'. To talk to a human customer service representative, type 'H'.";
    } else if (message.toLowerCase().trim() === "d") {
      replyText = "Possible causes for errors in deposits could be incorrect account details, network issues, or insufficient funds. To fix these, please double-check the account details, ensure a stable internet connection, or deposit sufficient funds. If the issue persists, please contact us at +91 9889989989.";
    } else if (message.toLowerCase().trim() === "t") {
      replyText = "Possible causes for errors in transactions could be insufficient funds, incorrect recipient information, or technical issues. To fix these, please ensure you have sufficient funds, double-check the recipient information, or try again later. If the issue persists, please contact us at +91 9889989989.";
    } else if (message.toLowerCase().trim() === "h") {
      replyText = "To talk to a human customer service representative, please contact us at +91 9889989989.";
    } else {
      replyText = "Thanks for reaching out! For more information, please contact us at +91 9889989989.";
    }
    var reply = '<p>' + replyText + '</p>';
    replyMessage.innerHTML = reply;
    chatBox.appendChild(replyMessage);
    chatBox.scrollTop = chatBox.scrollHeight;
  }, 1000);
}

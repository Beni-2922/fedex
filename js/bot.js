$(document).ready(function () {
  var messages = [
    "Hola, ¿Cuál es tu nombre?",
    "¿Cómo puedo ayudarte?",
    "¿Cuál es tu correo electrónico?",
    "¿Cuál es tu número de teléfono?",
    "¿En qué ciudad te encuentras?",
    "¿En qué puedo ayudarte con respecto a los servicios de FedEx?",
    "¿Deseas programar una recolección o entrega?",
    "¿Qué tipo de envío te interesa?",
    "¿Cuál es el tamaño y peso de tu paquete?",
    "¿Tienes alguna preferencia de tiempo de entrega?",
    "¿Algo más en lo que pueda ayudarte?",
    
  ];

  var chatbox = document.getElementById("chatbox");
  var messageInput = document.getElementById("message");

  function sendMessage() {
    var message = messageInput.value.trim();
    if (message.length > 0) {
      addMessage("user", message);
      messageInput.value = "";
      setTimeout(function () {
        var reply = messages.shift();
        messages.push(reply);
        addMessage("bot", reply);
      }, 1000);
    }
  }

  function addMessage(sender, message) {
    var messageElement = document.createElement("div");
    messageElement.classList.add(sender + "-message");
    messageElement.textContent = message;
    chatbox.appendChild(messageElement);
  }
  $("#send").click(function () {
    sendMessage();
  });

  $("#message").keypress(function (event) {
    if (event.which == 13) {
      sendMessage();
    }
  });
});

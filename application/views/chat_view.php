<!DOCTYPE html> 
<html> 
<head> 
    <title>CHATEANDO ☹  </title> 
    <style> 
        body { 
            font-family: Arial, sans-serif; 
            background-color: #e0e0e0;  /* Fondo general gris suave */ 
            margin: 0; 
            padding: 0; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
        } 
        #chat-container { 
            width: 40%; 
            background-color: #2d2d2d; /* Fondo oscuro para el contenedor del chat */ 
            border-radius: 10px; 
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2); 
            overflow: hidden; 
        } 
        #header { 
            background-color: #ff5722;  /* Encabezado naranja oscuro */ 
            color: white; 
            text-align: center; 
            padding: 15px; 
            font-size: 20px; 
        } 
        #chat { 
            height: 400px; 
            padding: 10px; 
            overflow-y: auto; 
            border-bottom: 1px solid #ccc; 
            background-color: #f7f7f7;  /* Fondo gris claro del área de chat */ 
        } 
        .message { 
            margin: 10px 0; 
            padding: 10px; 
            border-radius: 5px; 
            max-width: 80%; 
        } 
        .sent { 
            background-color: #4a90e2;  /* Mensaje enviado en azul oscuro */ 
            color: white; 
            align-self: flex-end; 
        } 
        .received { 
            background-color: #e0e0e0;  /* Mensaje recibido en gris claro */ 
            color: black; 
            align-self: flex-start; 
        } 
        #input-container { 
            display: flex; 
            padding: 10px; 
            background-color: #393939;  /* Fondo gris oscuro para la entrada de mensaje */ 
        } 
        #message { 
            flex: 1; 
            padding: 10px; 
            border: 1px solid #555; 
            border-radius: 5px; 
            font-size: 16px; 
            margin-right: 10px; 
            background-color: #f0f0f0;  /* Fondo gris claro del campo de entrada */ 
            color: black; 
        } 
        #send { 
            background-color: #4a90e2;  /* Botón enviar en azul oscuro */ 
            color: white; 
            border: none; 
            padding: 10px 20px; 
            border-radius: 5px; 
            font-size: 16px; 
            cursor: pointer; 
        } 
        #send:hover { 
            background-color: #357ab7;  /* Botón enviar más oscuro al pasar el ratón */ 
        } 
    </style> 
</head> 
<body> 
    <div id="chat-container"> 
        <div id="header">Chat en Tiempo Real</div> 
        <div id="chat"></div> 
        <div id="input-container"> 
            <input type="text" id="message" placeholder="Escribe tu mensaje"> 
            <button id="send">Enviar</button> 
        </div> 
    </div> 
 
    <script> 
        var conn = new WebSocket('ws://localhost:8080'); 
        var chat = document.getElementById('chat'); 
        var sendButton = document.getElementById('send'); 
        var messageInput = document.getElementById('message'); 
 
        conn.onopen = function(e) { 
            chat.innerHTML += '<div class="message received">Conexión establecida</div>'; 
        }; 
 
        conn.onmessage = function(e) { 
            var receivedMsg = '<div class="message received">' + e.data + '</div>'; 
            chat.innerHTML += receivedMsg; 
            chat.scrollTop = chat.scrollHeight; 
        }; 
 
        sendButton.onclick = function() { 
            sendMessage(); 
        }; 
 
        messageInput.addEventListener("keypress", function(e) { 
            if (e.key === "Enter") { 
                sendMessage(); 
            } 
        }); 
 
        function sendMessage() { 
            var msg = messageInput.value; 
            if (msg.trim() !== "") { 
                conn.send(msg); 
                chat.innerHTML += '<div class="message sent">' + msg + '</div>'; 
                messageInput.value = ''; 
                chat.scrollTop = chat.scrollHeight; 
            } 
        } 
    </script> 
</body> 
</html>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat de Suporte</title>
    <style>
   body { font-family: Arial, sans-serif; 
    margin: 0;
            padding: 0;
            background-color: #eedc72; /* Cor de fundo */
            font-family: Arial, sans-serif;
            overflow-x: hidden; /* Limita o scroll horizontal */}
        .container { width: 100%; max-width: 500px; margin: 0 auto; padding: 20px; }
        .chat-box { width: 100%; height: 400px; border: 1px solid #ccc; padding: 10px; overflow-y: scroll; margin-bottom: 10px; }
        .chat-input { width: calc(100% - 60px); padding: 10px; }
        .send-button { padding: 10px; }
        .top-bar {
            width: 100%;
            height: 20vh;
            background-color: #ff8a43;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            position: relative;
        }
        .top-bar h1 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 55px;
            font-weight: bold;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            margin: 0;
        }
        .divider {
            width: calc(100% - 40px); /* Largura igual à da top-bar menos o padding de 20px de cada lado */
            height: 2vh;
            background-color: #693c17; /* Cor mais escura */
            position: absolute;
            bottom: 0;
            left: 0px; /* Posição esquerda igual ao padding da top-bar */
        }
        .container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            position: relative;
        }
        .left-div, .right-div {
            width: 45%; /* Define a largura de cada div */
            height: 20vh; /* Define a altura de cada div */
            border-radius: 10px;
            padding: 20px;
        }
        .bottom-left, .bottom-right {
            width: 45%; /* Define a largura de cada div */
            height: 20vh; /* Define a altura de cada div */
            background-color: #ffffff; /* Cor de fundo */
            border-radius: 10px;
            padding: 20px;
        }
        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10px;
        }
        .right-div {
            margin-left: 20px; /* Espaço entre as divs */
        }
        .title {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 4vh;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .profile-img {
            position: absolute;
            top: 20px;
            right: 80px;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            cursor: pointer;
        }
        .login-text {
            font-size: 12px;
            font-weight: bold;
            color: #444; /* Cor do texto */
            margin-right: 10px;
        }
        #fileInput {
            display: none;
        }
        .profile-container {
            display: none;
            position: absolute;
            top: 100px;
            right: 80px;
            width: 300px;
            background-color: white;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .profile-container input[type="text"], .profile-container input[type="file"] {
            width: 100%;
            margin-bottom: 10px;
        }
        .profile-container .button {
            width: 100%;
            background-color: #007bff;
        }
    </style>
</head>
<body>
<div class="top-bar">
        <h1>Pet Delivery <span class="login-text"><a href="Cadastro.php">Cadastre-se</a></span> | <span class="login-text"><a href="Log.php">Login</a></span><span>|</span> <a class="login-text" href="menu.php">Voltar para o menu</a></h1> 
        <img class="profile-img" src="rapido.png" alt="Perfil" id="profileImage">
        <div class="divider"></div>
    </div>

    <div class="profile-container" id="profileContainer">
        <h2>Editar Perfil</h2>
        <input type="file" id="fileInput" accept="image/*">
        <input type="text" id="profileName" placeholder="Nome do perfil">
        <button class="button" id="saveProfile">Salvar</button>
    </div>

    <h2>Chat de Suporte</h2>
    <div class="chat-box" id="chat-box"></div>
    <input type="text" id="message" class="chat-input" placeholder="Digite sua mensagem...">
    <button onclick="sendMessage()">Enviar</button>

    <script>
        function sendMessage() {
            var message = document.getElementById('message').value;
            if (message.trim() === '') return;

            var chatBox = document.getElementById('chat-box');
            chatBox.innerHTML += '<div class="message"><strong>Você:</strong> ' + message + '</div>';
            chatBox.scrollTop = chatBox.scrollHeight;
            document.getElementById('message').value = '';

            var xhr = new XMLHttpRequest();
            xhr.open('POST', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    chatBox.innerHTML += '<div class="message"><strong>Suporte:</strong> ' + xhr.responseText + '</div>';
                    chatBox.scrollTop = chatBox.scrollHeight;
                }
            };
            xhr.send('message=' + encodeURIComponent(message));
        }
    </script>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = $_POST['message'];

    // Respostas simples de simulação
    $responses = [
        'Olá! Como posso ajudá-lo hoje?',
        'Pode me dar mais detalhes sobre o problema?',
        'Entendi, estamos trabalhando nisso.',
        'Obrigado por nos informar, vamos resolver isso o mais rápido possível.'
    ];

    // Seleciona uma resposta aleatória
    $response = $responses[array_rand($responses)];

    echo $response;
}
?>
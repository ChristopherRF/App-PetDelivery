<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Delivery</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #eedc72; /* Cor de fundo */
            font-family: Arial, sans-serif;
            overflow-x: hidden; /* Limita o scroll horizontal */
        }
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

        .bottom-single {
    width: 30%; /* Define a largura total da div */
    height: 10vh; /* Define uma altura menor para a nova div */
    background-color: #ffffff; /* Cor de fundo */
    border-radius: 10px;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;

    
}
    </style>
</head>
<body>
    <div class="top-bar">
        <h1>Pet Delivery <span class="login-text"><a href="Cadastro.php">Cadastre-se</a></span> | <span class="login-text"><a href="Log.php">Login</a></span>|</span> <a class="login-text" href="Chat.php">Converse com o Suporte ao Vivo</a></h1>
        <img class="profile-img" src="rapido.png" alt="Perfil" id="profileImage">
        <div class="divider"></div>
    </div>

    <div class="profile-container" id="profileContainer">
        <h2>Editar Perfil</h2>
        <input type="file" id="fileInput" accept="image/*">
        <input type="text" id="profileName" placeholder="Nome do perfil">
        <button class="button" id="saveProfile">Salvar</button>
    </div>

    <div class="schedule-container">
        <h2 class="title">Agendamento de Entrega</h2>
        <form id="schedule-form">
            <div class="form-group">
                <label for="pet-name">Nome do Pet</label>
                <input type="text" id="pet-name" name="pet-name" required>
            </div>

            <div class="form-group">
                <label for="delivery-date">Data da Entrega</label>
                <input type="date" id="delivery-date" name="delivery-date" required>
            </div>

            <div class="form-group">
                <label for="delivery-time">Horário da Entrega</label>
                <input type="time" id="delivery-time" name="delivery-time" required>
            </div>

            <div class="form-group">
                <label for="delivery-address">Endereço de Entrega</label>
                <input type="text" id="delivery-address" name="delivery-address" required>
            </div>

            <div class="form-group">
                <button type="submit" class="button">Agendar Entrega</button>
            </div>
        </form>
        <div id="schedule-result" class="schedule-result"></div>
    </div>

    <script>
        document.getElementById('schedule-form').addEventListener('submit', function(event) {
            event.preventDefault();
            const petName = document.getElementById('pet-name').value;
            const deliveryDate = document.getElementById('delivery-date').value;
            const deliveryTime = document.getElementById('delivery-time').value;
            const deliveryAddress = document.getElementById('delivery-address').value;
            
            const result = `Entrega agendada para ${petName} em ${deliveryDate} às ${deliveryTime} no endereço: ${deliveryAddress}.`;

            document.getElementById('schedule-result').innerText = result;
        });
    </script>
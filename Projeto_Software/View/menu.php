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

.menu {
    display: flex;
    justify-content: center;
    margin-top: 50px;
}

.card1 {
    background-color: #4CAF50;
    color: white;
    padding: 20px;
    margin: 10px;
    border-radius: 8px;
    cursor: pointer;
    text-align: center;
    width: 200px;
    position: relative;
    margin-right:140vh;
}

.card2 {
    background-color: #4CAF50;
    color: white;
    padding: 20px;
    margin: 10px;
    border-radius: 8px;
    cursor: pointer;
    text-align: center;
    width: 200px;
    position: relative;
}

.card h3 {
    margin-top: 0;
}

.card p {
    margin-top: 10px;
    
}

.card:hover {
    background-color: #45a049;
}

.dialog-box {
    position: fixed;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    background-color: #fff;
    padding: 20px;
    border: 2px solid #4CAF50;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
    max-width: 300px;
    text-align: center;
    transition: opacity 0.3s ease;  /* Para animação de transição */
}

.hidden {
    display: none;
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

    <div class="menu">
    <div class="card1" onclick="showSuggestion('delivery')">
        <h3>Delivery</h3>
        <p id="delivery-description" class="hidden">
            Nosso serviço de delivery de ração oferece praticidade e variedade. Com apenas alguns cliques, você pode escolher entre uma ampla gama de alimentos, acessórios e brinquedos para o seu pet. Entregamos tudo na sua porta, garantindo conveniência e conforto para você e seu companheiro peludo.
        </p>
    </div>
    <div class="card2" onclick="showSuggestion('resgate')">
        <h3>Resgate</h3>
        <p id="resgate-description" class="hidden">
            Esta aqui é a opção de resgate ao animal perdido. Você, dono do animal, deverá dizer o nome do animal, a raça dele, sua cor, e uma foto dele. Adicione também o último local que você esteve com seu pet.
        </p>
    </div>
</div>

<div id="dialog-box" class="dialog-box hidden">
    <p id="dialog-text"></p>
</div>

    <div class="container">
        <div class="bottom-left">
            <h2 class="title">Produtos</h2>
            <h4> Conferir: <a href="Produtos.php" class="button">Ir</a></h4>
        </div>
        <div class="bottom-right">
            <h2 class="title">Dados</h2>
            <h4>Insira as informações do animal aqui: <a href="Resgate.php" class="button">Ir</a></h4>
        </div>
    </div>

    <div class="container">
    <div class="bottom-single">
        <h4>Quiz para Identificar a Melhor Ração: <a href="Quiz.php" class="button">Ir</a></h4>
    </div>

    
</div>

<div class="container">
    <div class="bottom-single">
        <h4>Agendamento de Compras Recorrentes: <a href="Agendamento.php" class="button">Ir</a></h4>
    </div>

    <script>
        document.getElementById('profileImage').addEventListener('click', function() {
            var profileContainer = document.getElementById('profileContainer');
            if (profileContainer.style.display === 'none' || profileContainer.style.display === '') {
                profileContainer.style.display = 'block';
            } else {
                profileContainer.style.display = 'none';
            }
        });

        document.getElementById('saveProfile').addEventListener('click', function() {
            const fileInput = document.getElementById('fileInput');
            const profileName = document.getElementById('profileName').value;

            if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('profileImage').src = e.target.result;
                }
                reader.readAsDataURL(fileInput.files[0]);
            }

            // Atualizar o nome do perfil em algum lugar, se necessário
            // Por exemplo: document.getElementById('profileNameDisplay').textContent = profileName;

            // Fechar o contêiner
            document.getElementById('profileContainer').style.display = 'none';
        });

        function showSuggestion(serviceType) {
    const dialogBox = document.getElementById("dialog-box");
    const dialogText = document.getElementById("dialog-text");

    if (serviceType === 'delivery') {
        const deliveryDesc = document.getElementById("delivery-description").innerHTML;
        dialogText.innerHTML = deliveryDesc;
    } else if (serviceType === 'resgate') {
        const resgateDesc = document.getElementById("resgate-description").innerHTML;
        dialogText.innerHTML = resgateDesc;
    }

    dialogBox.classList.remove("hidden");
}

function closeDialog() {
    const dialogBox = document.getElementById("dialog-box");
    dialogBox.classList.add("hidden");
}


    </script>
</body>
</html>

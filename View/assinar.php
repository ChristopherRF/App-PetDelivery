<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assinatura de Produtos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
        font-family: Arial, sans-serif; 
    margin: 0;
            padding: 0;
            background-color: #eedc72; /* Cor de fundo */
            font-family: Arial, sans-serif;
            overflow-x: hidden; /* Limita o scroll horizontal */
}

h1 {
    text-align: center;
}

form {
    max-width: 400px;
    margin: 0 auto;
}

label {
    display: block;
    margin: 10px 0 5px;
}

input, select {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
}

button {
    padding: 10px 15px;
    background-color: #28a745;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #218838;
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
</style>
<body>
<div class="top-bar">
        <h1>Pet Delivery <span class="login-text"><a href="Cadastro.php">Cadastre-se</a></span> | <span class="login-text"><a href="Log.php">Login</a></span>
        <span>|</span> <a class="login-text" href="menu.php">Voltar para o menu</a></h1>
        <img class="profile-img" src="rapido.png" alt="Perfil" id="profileImage">
        <div class="divider"></div>
    </div>

    <div class="profile-container" id="profileContainer">
        <h2>Editar Perfil</h2>
        <input type="file" id="fileInput" accept="image/*">
        <input type="text" id="profileName" placeholder="Nome do perfil">
        <button class="button" id="saveProfile">Salvar</button>
    </div>
    
    <h1>Assinatura de Produtos</h1>
    <form id="subscription-form">
        <label for="product">Escolha o produto:</label>
        <select id="product" name="product">
            <option value="racao-cachorro">Ração para Cachorro</option>
            <option value="racao-gato">Ração para Gato</option>
            <!-- Adicione mais opções conforme necessário -->
        </select>

        <label for="quantity">Quantidade:</label>
        <input type="number" id="quantity" name="quantity" min="1" required>

        <label for="frequency">Frequência de Entrega:</label>
        <select id="frequency" name="frequency">
            <option value="semanal">Semanal</option>
            <option value="quinzenal">Quinzenal</option>
            <option value="mensal">Mensal</option>
        </select>

        <button type="submit">Assinar</button>
    </form>

    <script src="script.js"></script>
</body>
</html>

<style>
document.getElementById('subscription-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const product = document.getElementById('product').value;
    const quantity = document.getElementById('quantity').value;
    const frequency = document.getElementById('frequency').value;

    fetch('/subscribe', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            product: product,
            quantity: quantity,
            frequency: frequency
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Assinatura criada com sucesso!');
        } else {
            alert('Erro ao criar assinatura.');
        }
    })
    .catch(error => {
        console.error('Erro:', error);
        alert('Erro ao criar assinatura.');
    });
});

const express = require('express');
const bodyParser = require('body-parser');
const app = express();
const port = 3000;

// Middleware
app.use(bodyParser.json());
app.use(express.static('public'));

// Rota para criar a assinatura
app.post('/subscribe', (req, res) => {
    const { product, quantity, frequency } = req.body;

    // Aqui você deve adicionar a lógica para armazenar a assinatura no banco de dados
    // Este é um exemplo de resposta de sucesso
    console.log(`Produto: ${product}, Quantidade: ${quantity}, Frequência: ${frequency}`);

    res.json({ success: true });
});

app.listen(port, () => {
    console.log(`Servidor rodando na porta ${port}`);
});
</style>

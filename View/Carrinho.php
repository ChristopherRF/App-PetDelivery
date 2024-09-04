<?php
session_start(); // Inicia a sessão (se ainda não estiver iniciada)

// Verifica se há um carrinho de compras na sessão; se não houver, inicializa como um array vazio
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Adiciona o produto ao carrinho de compras (recebido via POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productDetails = json_decode(file_get_contents("php://input"), true);

    // Adiciona o produto ao carrinho de compras
    $_SESSION['cart'][] = $productDetails;

    // Retorna uma resposta de sucesso (opcional)
    echo json_encode(['message' => 'Produto adicionado ao carrinho de compras com sucesso!']);
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Processar os dados do formulário aqui
    
    // Redirecionar o usuário para a tela específica
    header("Location: obrigado.php");
    exit(); // Certifique-se de sair do script após o redirecionamento
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>

    body {
        margin: 0;
        padding: 0;
        background-color: #eedc72; /* Cor de fundo */
        font-family: Arial, sans-serif;
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
    .left-div, .right-div{
        width: 45%; /* Define a largura de cada div */
        height: auto; /* Altura automática */
        border-radius: 10px;
        padding: 20px;
    }
    .bottom-left, .bottom-right{
        width: 45%; /* Define a largura de cada div */
        height: auto; /* Altura automática */
        background-color: #ffffff; /* Cor de fundo */
        border-radius: 10px;
        padding: 20px;
       
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
    .login-text {
        font-size: 12px;
        font-weight: bold;
        color: #444; /* Cor do texto */
        margin-right: 10px;
    }
    .form-group {
        margin-bottom: 20px;
    }
    .form-group label {
        font-weight: bold;
    }
    .form-group input[type="text"], 
    .form-group input[type="file"],
    .form-group select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 16px;
    }

    .payment-section {
    width: 80%;
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.payment-section h2 {
    font-size: 24px;
    font-weight: bold;
    color: #333;
    margin-bottom: 20px;
    text-align: center;
}

.add-payment {
    text-align: center;
}

.add-payment-button {
    background-color: #4CAF50;
    color: #fff;
    border: none;
    padding: 12px 20px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.add-payment-button:hover {
    background-color: #45a049;
}
</style>

<div class="top-bar">
    <h1>Pet Delivery <span class="login-text"><a href="Cadastro.php">Cadastre-se</a></span> | <span class="login-text"><a href="Log.php">Login</a></span> <span>|</span> <a class="login-text" href="menu.php">Voltar para o menu</a></h1>
    <img class="profile-img" src="rapido." alt="Perfil">
    <div class="divider"></div>
</div>

<h1>Meu Carrinho de Compras</h1>

<!-- Exibe os produtos do carrinho de compras -->
<ul>
    <?php foreach ($_SESSION['cart'] as $product): ?>
        <li>
            <strong><?= $product['title']; ?></strong> - <?= $product['price']; ?>
        </li>
    <?php endforeach; ?>
</ul>



<div class="payment-section">
    <h2>Adicionar Forma de Pagamento</h2>
    <div class="add-payment">
        <button class="add-payment-button">Adicionar Forma de Pagamento</button>
    </div>
</div>

<div><a class="login-text" href="Produtos.php">Voltar para a página anterior
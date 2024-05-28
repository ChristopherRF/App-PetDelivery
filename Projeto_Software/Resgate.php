
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
</style>

<div class="top-bar">
    <h1>Pet Delivery <span class="login-text"><a href="Cadastro.php">Cadastre-se</a></span> | <span class="login-text"><a href="Log.php">Login</a></span> <span>|</span> <a class="login-text" href="menu.php">Voltar para o menu</a></h1>
    <img class="profile-img" src="rapido." alt="Perfil">
    <div class="divider"></div>
</div>

<div class="container">
    <div class="left-div">
        <h2 class="title">Informações do Animal</h2>
        <form action="envio.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome">
            </div>
            <div class="form-group">
                <label for="raca">Raça:</label>
                <input type="text" id="raca" name="raca">
            </div>
            <div class="form-group">
                <label for="sexo">Sexo:</label>
                <select id="sexo" name="sexo">
                    <option value="macho">Macho</option>
                    <option value="femea">Fêmea</option>
                </select>
            </div>
            <div class="form-group">
                <label for="localizacao">Localização:</label>
                <input type="text" id="localizacao" name="localizacao">
            </div>
            <div class="form-group">
                <label for="imagem">Imagem:</label>
                <input type="file" id="imagem" name="imagem">
            </div>
            <button type="submit" class="button">Enviar</button>
        </form>
    </div>
   
    <?php
// Verifica se o método de requisição é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexão com o banco de dados (substitua os valores conforme necessário)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "PROJ_SOFT";

    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Prepara os dados do formulário para inserção no banco de dados
    $nome = $_POST['NOME'];
    $raca = $_POST['RAÇA'];
    $sexo = $_POST['SEXO'];
    $localizacao = $_POST['LOCALIZACAO'];

    // Instrução SQL para inserir dados
    $sql = "INSERT INTO RESGATE (NOME, RAÇA, SEXO, LOCALIZACAO) VALUES ('$nome', '$raca', '$sexo', '$localizacao')";

    if ($conn->query($sql) === TRUE) {
        // Redireciona o usuário para a tela específica
        header("location: obrigado.php");
        exit(); // Certifique-se de sair do script após o redirecionamento
    } else {
        echo "Erro ao inserir dados: " . $conn->error;
    }

    // Fecha a conexão
    $conn->close();
}
?>


    

</body>
</html>

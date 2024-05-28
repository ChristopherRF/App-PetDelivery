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
        height: 20vh; /* Define a altura de cada div */
        border-radius: 10px;
        padding: 20px;
    }
    .bottom-left, .bottom-right{
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
</style>

<div class="top-bar">
    <h1>Pet Delivery <span class="login-text"><a href="Cadastro.php">Cadastre-se</a></span> | <span class="login-text"><a href="Log.php">Login</a></span></h1>
    <img class="profile-img" src="rapido." alt="Perfil">
    <div class="divider"></div>
</div>

<div class="container">
    <div class="left-div">
        <h2 class="title">Delivery</h2>
        <p style="font-size:2.3vh;">Nosso serviço de delivery de ração oferece praticidade e variedade. 
        Com apenas alguns cliques, você pode escolher entre uma ampla gama de alimentos, 
        acessórios e brinquedos para o seu pet. Entregamos tudo na sua porta, 
        garantindo conveniência e conforto para você e seu companheiro peludo.</p>
    </div>
    <div class="right-div">
        <h2 class="title">Resgate</h2>
        <p style="font-size:2.3vh;">Bom, esta aqui é a opção de resgate ao animal perdido. Aqui você dono do animal devera dizer o nome do animal,
             a raça dele, sua cor, e uma foto dele ( A raça do animal e opcional caso você não saiba )
              adicione também o ultimo local que você esteve com seu pet.</p>
    </div>
</div>

<div class="container">
    <div class="bottom-left">
        <h2 class="title">Produtos</h2>
        <h4> Conferir: <a href="produtos.php" class="button">Ir</a></h4>
        
    </div>
    <div class="bottom-right">
        <h2 class="title">Dados</h2>
        <h4>Insira as informações do animal aqui: <a href="Resgate.php" class="button">Ir</a></h4>
    </div>
        
</div>

</body>
</html>

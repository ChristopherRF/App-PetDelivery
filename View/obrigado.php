<!DOCTYPE html>
<html lang="en">
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
            flex-wrap: wrap;
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
        .category-select {
            background-color: #fff;
            border: 2px solid #693c17;
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
            color: #444;
            margin-bottom: 20px;
        }
        .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }
        .product-item {
            width: 30%;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            margin: 10px;
            padding: 15px;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
        }
        .product-item img {
            width: 100%;
            border-radius: 10px;
        }
        .product-title {
            font-size: 18px;
            font-weight: bold;
            margin: 10px 0;
        }
        .product-price {
            color: #ff8a43;
            font-size: 16px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="top-bar">
<h1>Pet Delivery <span class="login-text"><a href="Cadastro.php">Cadastre-se</a></span> | <span class="login-text"><a href="Log.php">Login</a></span> <span>|</span> <a class="login-text" href="menu.php">Voltar para o menu</a></h1>
    <div class="divider"></div>
</div>


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

    .rating {
    direction: ltr; /* Exibe as estrelas da esquerda para a direita */
    font-size: 2em; /* Aumenta o tamanho das estrelas */
    margin-bottom: 10px;
}

.star::before {
    content: "\2605"; /* Caractere Unicode para estrela */
    color: #ccc; /* Cor das estrelas não selecionadas */
    cursor: pointer; /* Indica que as estrelas são interativas */
    font-size: 2em;
}

.star.hovered::before,
.star.selected::before {
    color: #25da73; /* Cor das estrelas selecionadas */
}

textarea {
    width: 100%;
    height: 80px;
    margin-bottom: 10px;
}

button {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

#comment-display {
    font-size: 0.9em; /* Tamanho de fonte pequeno para os comentários exibidos */
}

</style>

<div class="top-bar">
    <h1>Pet Delivery <span class="login-text"><a href="Cadastro.php">Cadastre-se</a></span> | <span class="login-text"><a href="Log.php">Login</a></span> <span>|</span> <a class="login-text" href="menu.php">Voltar para o menu</a></h1>
    <img class="profile-img" src="rapido." alt="Perfil">
    <div class="divider"></div>
</div>

<h1> Avaliações </h1>

<div class="rating">
    <span class="star" data-value="1"></span>
    <span class="star" data-value="2"></span>
    <span class="star" data-value="3"></span>
    <span class="star" data-value="4"></span>
    <span class="star" data-value="5"></span>
</div>
<input type="hidden" id="rating-value" name="rating" value="">

<p>Avaliação: <span id="selected-rating">0</span> estrelas</p>

<!-- Campo de comentário -->
<textarea id="comment" placeholder="Digite seu comentário aqui..."></textarea>
<button onclick="submitComment()">Enviar Comentário</button>

<!-- Exibição do comentário e avaliação -->
<div id="comment-display" style="margin-top: 20px;">
    <p><strong>Seu Comentário:</strong> <span id="display-comment">Nenhum comentário enviado</span></p>
    <p><strong>Avaliação:</strong> <span id="display-rating">0</span> estrelas</p>
</div>

<button onclick="clearComment()">Limpar Comentário</button>

<p><strong>Data e Hora da Avaliação:</strong> <span id="display-date-time">Não disponível</span></p>

<script>
    
    const stars = document.querySelectorAll('.star');
const ratingValue = document.getElementById('rating-value');
const selectedRating = document.getElementById('selected-rating');
const commentField = document.getElementById('comment');
const displayComment = document.getElementById('display-comment');
const displayRating = document.getElementById('display-rating');

stars.forEach(star => {
    star.addEventListener('mouseover', () => {
        resetStars();
        highlightStars(star);
    });

    star.addEventListener('click', () => {
        ratingValue.value = star.getAttribute('data-value');
        selectedRating.innerText = ratingValue.value;
        setSelectedStars(ratingValue.value); // Atualiza a seleção das estrelas
    });

    star.addEventListener('mouseout', () => {
        resetStars();
        setSelectedStars(ratingValue.value); // Mantém a seleção após o mouse sair
    });
});

function resetStars() {
    stars.forEach(star => {
        star.classList.remove('hovered');
        star.classList.remove('selected');
    });
}

function highlightStars(star) {
    star.classList.add('hovered');
    let previousSibling = star.previousElementSibling;
    while (previousSibling) {
        previousSibling.classList.add('hovered');
        previousSibling = previousSibling.previousElementSibling;
    }
}

function setSelectedStars(value) {
    stars.forEach(star => {
        if (star.getAttribute('data-value') <= value) {
            star.classList.add('selected');
        }
    });
}

function submitComment() {
    const comment = commentField.value.trim();
    const rating = ratingValue.value;
    if (comment !== "" && rating !== "") {
        displayComment.innerText = comment;
        displayRating.innerText = rating;
    } else {
        displayComment.innerText = "Por favor, insira um comentário e uma avaliação.";
    }
}

function clearComment() {
    commentField.value = "";
    ratingValue.value = "";
    selectedRating.innerText = "0";
    displayComment.innerText = "Nenhum comentário enviado";
    displayRating.innerText = "0";
    resetStars(); // Remove a seleção das estrelas
}

function submitComment() {
    const comment = commentField.value.trim();
    const rating = ratingValue.value;
    if (comment !== "" && rating !== "") {
        displayComment.innerText = comment;
        displayRating.innerText = rating;

        // Exibir a data e hora atual
        const now = new Date();
        const dateTimeString = now.toLocaleString();
        document.getElementById('display-date-time').innerText = dateTimeString;
    } else {
        displayComment.innerText = "Por favor, insira um comentário e uma avaliação.";
        document.getElementById('display-date-time').innerText = "Não disponível";
    }
}

</script>
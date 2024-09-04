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

    .quiz-container {
    background-color: #ffffff;
    border-radius: 10px;
    padding: 30px;
    width: 80%;
    max-width: 500px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-left:65vh;
    margin-top:10vh;
}

.title {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

.quiz-question {
    margin-bottom: 20px;
}

.quiz-question label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.quiz-question select {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    text-align: center;
}

.button:hover {
    background-color: #45a049;
}

.quiz-result {
    margin-top: 20px;
    font-size: 16px;
    font-weight: bold;
    color: #333;
    text-align: center;
}
</style>

<div class="top-bar">
    <h1>Pet Delivery <span class="login-text"><a href="Cadastro.php">Cadastre-se</a></span> | <span class="login-text"><a href="Log.php">Login</a></span> <span>|</span> <a class="login-text" href="menu.php">Voltar para o menu</a></h1>
    <img class="profile-img" src="rapido." alt="Perfil">
    <div class="divider"></div>
</div>

<div class="quiz-container">
        <h2 class="title">Quiz: Encontre a Melhor Ração para Seu Pet</h2>
        <form id="quiz-form">
            <div class="quiz-question">
                <label for="pet-type">Qual é o tipo do seu pet?</label>
                <select id="pet-type" name="pet-type" required>
                    <option value="dog">Cachorro</option>
                    <option value="cat">Gato</option>
                    <option value="other">Outro</option>
                </select>
            </div>
            
            <div class="quiz-question">
                <label for="pet-age">Qual é a idade do seu pet?</label>
                <select id="pet-age" name="pet-age" required>
                    <option value="puppy">Filhote (0-1 ano)</option>
                    <option value="adult">Adulto (1-7 anos)</option>
                    <option value="senior">Sênior (7+ anos)</option>
                </select>
            </div>
            
            <div class="quiz-question">
                <label for="pet-size">Qual é o porte do seu pet?</label>
                <select id="pet-size" name="pet-size" required>
                    <option value="small">Pequeno</option>
                    <option value="medium">Médio</option>
                    <option value="large">Grande</option>
                </select>
            </div>
            
            <div class="quiz-question">
                <label for="food-preference">Seu pet tem alguma preferência alimentar?</label>
                <select id="food-preference" name="food-preference" required>
                    <option value="no-preference">Sem preferência</option>
                    <option value="chicken">Frango</option>
                    <option value="beef">Carne</option>
                    <option value="fish">Peixe</option>
                </select>
            </div>
            
            <div class="quiz-question">
                <button type="submit" class="button">Ver Resultado</button>
            </div>
        </form>
        <div id="result" class="quiz-result"></div>
    </div>

    <script>
        document.getElementById('quiz-form').addEventListener('submit', function(event) {
            event.preventDefault();
            const petType = document.getElementById('pet-type').value;
            const petAge = document.getElementById('pet-age').value;
            const petSize = document.getElementById('pet-size').value;
            const foodPreference = document.getElementById('food-preference').value;
            
            let result = `Seu pet é um ${petType} `;
            if (petType === "dog") {
                result += `de porte ${petSize} `;
            }
            result += `com ${petAge} anos e prefere ${foodPreference === 'no-preference' ? 'qualquer tipo de ração' : foodPreference}.`;

            document.getElementById('result').innerText = result;
        });
    </script>
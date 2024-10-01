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
            background-color: #eedc72;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
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
            width: calc(100% - 40px);
            height: 2vh;
            background-color: #693c17;
            position: absolute;
            bottom: 0;
            left: 0;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            margin-top: 20px;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin: 10px 0 5px;
        }
        input, select {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        #result {
            margin-top: 20px;
            text-align: center;
        }
        #rationAmount {
            font-size: 1.5em;
            font-weight: bold;
        }
    .ok{font-size:20px}
    </style>
</head>
<body>
    <div class="top-bar">
        <h1>Pet Delivery <a href=Produtos.php class=ok>Voltar</a>
        <div class="divider"></div>
    </div>

    <div class="container">
        <div class="form-container">
            <h1>Calculadora de Porção de Ração</h1>
            <form id="rationForm">
                <label for="animalType">Tipo de Animal:</label>
                <select id="animalType" required>
                    <option value="dog">Cachorro</option>
                    <option value="cat">Gato</option>
                </select>
                <label for="weight">Peso (em kg):</label>
                <input type="number" id="weight" step="0.1" required>
                <label for="age">Idade (em anos):</label>
                <input type="number" id="age" step="0.1" required>
                <label for="activity">Nível de Atividade:</label>
                <select id="activity" required>
                    <option value="low">Baixo</option>
                    <option value="moderate">Moderado</option>
                    <option value="high">Alto</option>
                </select>
                <button type="button" onclick="calculateRation()">Calcular</button>
            </form>
            <div id="result">
                <h2>Quantidade Recomendada:</h2>
                <p id="rationAmount">0 kg</p>
            </div>
        </div>
    </div>

    <script>
        function calculateRation() {
            const animalType = document.getElementById('animalType').value;
            const weight = parseFloat(document.getElementById('weight').value);
            const activity = document.getElementById('activity').value;
            
            let rationAmount = 0;

            if (animalType === 'dog') {
                if (activity === 'low') {
                    rationAmount = weight * 0.03;
                } else if (activity === 'moderate') {
                    rationAmount = weight * 0.05;
                } else if (activity === 'high') {
                    rationAmount = weight * 0.07;
                }
            } else if (animalType === 'cat') {
                if (activity === 'low') {
                    rationAmount = weight * 0.04;
                } else if (activity === 'moderate') {
                    rationAmount = weight * 0.06;
                } else if (activity === 'high') {
                    rationAmount = weight * 0.08;
                }
            }

            document.getElementById('rationAmount').textContent = `${rationAmount.toFixed(2)} kg`;
        }
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rastreamento de Entrega</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style>
        body {
    font-family: Arial, sans-serif;
    padding: 20px;
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

input {
    width: calc(100% - 22px);
    padding: 8px;
    margin-bottom: 10px;
}

button {
    padding: 10px 15px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

#tracking-info {
    margin-top: 20px;
}
</style>
    <h1>Rastreamento de Entrega</h1>
    <form id="tracking-form">
        <label for="orderId">ID do Pedido:</label>
        <input type="text" id="orderId" name="orderId" required>
        <button type="submit">Rastrear</button>
    </form>
    <div id="tracking-info"></div>

    <script src="script.js"></script>
</body>
</html>

<style>
    document.getElementById('tracking-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const orderId = document.getElementById('orderId').value;

    fetch(`/track/${orderId}`)
        .then(response => response.json())
        .then(data => {
            const trackingInfo = document.getElementById('tracking-info');
            if (data.success) {
                trackingInfo.innerHTML = `
                    <h2>Status da Entrega:</h2>
                    <p><strong>Entrega:</strong> ${data.status}</p>
                    <p><strong>Localização:</strong> ${data.location}</p>
                    <p><strong>Tempo Estimado:</strong> ${data.estimatedTime}</p>
                `;
            } else {
                trackingInfo.innerHTML = `<p>Pedido não encontrado.</p>`;
            }
        })
        .catch(error => {
            console.error('Erro:', error);
            document.getElementById('tracking-info').innerHTML = `<p>Erro ao rastrear o pedido.</p>`;
        });
});

const express = require('express');
const app = express();
const port = 3000;

// Middleware
app.use(express.static('public'));

// Dados fictícios para rastreamento
const trackingData = {
    '12345': {
        status: 'Em trânsito',
        location: 'São Paulo - SP',
        estimatedTime: '30 minutos'
    },
    '67890': {
        status: 'Entregue',
        location: 'Endereço final',
        estimatedTime: 'N/A'
    }
};

// Rota para rastreamento de pedidos
app.get('/track/:orderId', (req, res) => {
    const orderId = req.params.orderId;
    const data = trackingData[orderId];

    if (data) {
        res.json({ success: true, ...data });
    } else {
        res.json({ success: false });
    }
});

app.listen(port, () => {
    console.log(`Servidor rodando na porta ${port}`);
});
</style>
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

        .search-bar {
            
            padding: 10px;
            width: 70vh;
            font-size: 16px;
            border: 2px solid #693c17;
            border-radius: 5px;
            margin-left:5vh
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
        
        .button1 {
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
            margin-bottom:3vh;
            margin-left:5vh;
        }
    </style>
</head>
<body>

<div class="top-bar">
<h1>Pet Delivery <span class="login-text"><a href="Cadastro.php">Cadastre-se</a></span> | <span class="login-text"><a href="Log.php">Login</a></span> <span>|</span> <a class="login-text" href="menu.php">Voltar para o menu</a>
<span>|</span> <a class="login-text" href="assinar.php">Fazer assinatura</a><span>|</span> <a class="login-text" href="Acompa.php">Acompanhemento de produto em tempo real</a></h1>
    <div class="divider"></div>
</div>

<div class="container">
    <div class="left-div">
        <div class="title">Categorias</div>
        <select id="category-select" class="category-select">
            <option value="todas">Todas as Categorias</option>
            <option value="cachorros">Cachorros</option>
            <option value="gatos">Gatos</option>
            <option value="passaros">Pássaros</option>
            <option value="peixes">Peixes</option>
            <option value="roedores">Roedores</option>
        </select>
        <select id="type-select" class="category-select">
            <option value="todos">Todos os Tipos</option>
            <option value="alimento">Alimento</option>
            <option value="brinquedos">Brinquedos</option>
            <option value="acessorios">Acessórios</option>
            <option value="adicionais">Adicionais</option>
        </select>
    </div>
</div>

<div><a href="Calculadora.php" class="button1">Calculadora de Ração</a></div>

<input type="text" id="search-bar" class="search-bar" placeholder="Buscar produto...">

<div class="product-list" id="product-list">
    <div class="product-item" data-category="cachorros" data-type="alimento">
        <img src="https://cobasi.vteximg.com.br/arquivos/ids/939251/racao-golden-special-para-caes-adultos-frango-e-carne-3310549-15kg-Lado.jpg?v=638122446361370000" alt="Produto 1">
        <div class="product-title">Ração Golden Special para Cães Adultos Frango e Carne 15 kg</div>
        <div class="product-price">R$ 133,41</div>
        <button class="add-to-wishlist-button">Adicionar à Lista de Desejos</button>
        <button class="add-to-cart-button">Adicionar ao Carrinho</button>
        <a href="Avaliacao.php" class="button">Avaliar</a>


    </div>
    <div class="product-item" data-category="cachorros" data-type="alimento">
        <img src="https://cdn.awsli.com.br/600x450/1250/1250681/produto/90266366/a8a3dcfdd3.jpg" alt="Produto 2">
        <div class="product-title">Ração Seca Quatree Supreme Adultos Raças Pequenas Sabor Frango e Batata Doce 15kg</div>
        <div class="product-price">R$ 215,70</div>
        <button class="add-to-wishlist-button">Adicionar à Lista de Desejos</button>
        <button class="add-to-cart-button">Adicionar ao Carrinho</button>
        <a href="Avaliacao.php" class="button">Avaliar</a>

    </div>
    <div class="product-item" data-category="cachorros" data-type="alimento">
        <img src="https://imgs.casasbahia.com.br/1532746171/1xg.jpg" alt="Produto 3">
        <div class="product-title">Ração Magnus - Cães de Grande Porte</div>
        <div class="product-price">R$ 149,99</div>
        <button class="add-to-wishlist-button">Adicionar à Lista de Desejos</button>
        <button class="add-to-cart-button">Adicionar ao Carrinho</button>
        <a href="Avaliacao.php" class="button">Avaliar</a>
        
    </div>
</div>
<div class="product-list" id="product-list">
    <div class="product-item" data-category="gatos" data-type="brinquedos">
        <img src=https://cdn.awsli.com.br/2500x2500/1233/1233228/produto/145194115/7fc378df50.jpg alt="Produto 4">
        <div class="product-title">Arranhador Mini Poste Cinza</div>
        <div class="product-price">R$ 39,50</div>
        <button class="add-to-wishlist-button">Adicionar à Lista de Desejos</button>
        <button class="add-to-cart-button">Adicionar ao Carrinho</button>
        <a href="Avaliacao.php" class="button">Avaliar</a>

    </div>
    <div class="product-item" data-category="gatos" data-type="brinquedos">
        <img src="https://images.petz.com.br/fotos/1725983287297.jpg" alt="Produto 5">
        <div class="product-title">Brinquedo Petz Laser para Gatos - Cores Sortidas</div>
        <div class="product-price">R$ 28,99</div>
        <button class="add-to-wishlist-button">Adicionar à Lista de Desejos</button>
        <button class="add-to-cart-button">Adicionar ao Carrinho</button>
        <a href="Avaliacao.php" class="button">Avaliar</a>

    </div>
    <div class="product-item" data-category="gatos" data-type="brinquedos">
        <img src="https://img.irroba.com.br/fit-in/2000x2000/filters:format(webp):fill(fff):quality(80)/brincalh/catalog/brinquedos-brincat/varinhas/penas-28-5/39140-39184-1.jpg" alt="Produto 6">
        <div class="product-title">Varinha Penas 28,5cm Cores Sortidas</div>
        <div class="product-price">R$ 9,90</div>
        <button class="add-to-wishlist-button">Adicionar à Lista de Desejos</button>
        <button class="add-to-cart-button">Adicionar ao Carrinho</button>
        <a href="Avaliacao.php" class="button">Avaliar</a>

    </div>
</div>

<div class="product-list" id="product-list">
    <div class="product-item" data-category="passaros" data-type="alimento">
        <img src="https://down-br.img.susercontent.com/file/sg-11134201-7rbni-lm51h7qr9dz90a" alt="Produto 1">
        <div class="product-title">Alpiste 500g - Reino das Aves</div>
        <div class="product-price">R$20,12</div>
        <button class="add-to-wishlist-button">Adicionar à Lista de Desejos</button>
        <button class="add-to-cart-button">Adicionar ao Carrinho</button>
        <a href="Avaliacao.php" class="button">Avaliar</a>

    </div>
    <div class="product-item" data-category="passaros" data-type="acessorios">
        <img src="https://images.tcdn.com.br/img/img_prod/928979/gaiola_amasavi_n6_cb_1895_1_eb0a57fe0f3e76cf249352350f9b97ff.png" alt="Produto 2">
        <div class="product-title">Gaiola Amasavi n6 CB</div>
        <div class="product-price">R$ 252,00</div>
        <button class="add-to-wishlist-button">Adicionar à Lista de Desejos</button>
        <button class="add-to-cart-button">Adicionar ao Carrinho</button>
        <a href="Avaliacao.php" class="button">Avaliar</a>

    </div>
    <div class="product-item" data-category="passaros" data-type="acessorios">
        <img src="https://acdn.mitiendanube.com/stores/002/668/514/products/91-7fcc1c0feffc467ecb16724548340554-640-0.webp" alt="Produto 3">
        <div class="product-title">Bebedouro Para Passarinho Tamanho Medio 120ml</div>
        <div class="product-price">R$ 3,50</div>
        <button class="add-to-wishlist-button">Adicionar à Lista de Desejos</button>
        <button class="add-to-cart-button">Adicionar ao Carrinho</button>
        <a href="Avaliacao.php" class="button">Avaliar</a>

    </div>
</div>


<script>
    document.getElementById('category-select').addEventListener('change', filterProducts);
    document.getElementById('type-select').addEventListener('change', filterProducts);
    document.getElementById('search-bar').addEventListener('input', filterProducts);

    function filterProducts() {
        const category = document.getElementById('category-select').value;
        const type = document.getElementById('type-select').value;
        const searchText = document.getElementById('search-bar').value.toLowerCase();
        const products = document.querySelectorAll('.product-item');

        products.forEach(product => {
            const productCategory = product.getAttribute('data-category');
            const productType = product.getAttribute('data-type');
            const productTitle = product.querySelector('.product-title').textContent.toLowerCase();

            const categoryMatch = (category === 'todas' || productCategory === category);
            const typeMatch = (type === 'todos' || productType === type);
            const textMatch = productTitle.includes(searchText);

            if (categoryMatch && typeMatch && textMatch) {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });

        const addToWishlistButtons = document.querySelectorAll('.add-to-wishlist-button');

addToWishlistButtons.forEach(button => {
    button.addEventListener('click', addToWishlist);
});

function addToWishlist(event) {
    const productItem = event.target.closest('.product-item');
    const productDetails = {
        title: productItem.querySelector('.product-title').textContent,
        price: productItem.querySelector('.product-price').textContent
    };

    // Enviar os dados para a página PHP
    fetch('LstDesejo.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(productDetails),
    }).then(response => {
        // Lógica opcional após enviar os dados (por exemplo, atualizar a interface)
        console.log('Produto adicionado à lista de desejos!');
    }).catch(error => {
        console.error('Erro ao adicionar produto à lista de desejos:', error);
    });
}
    }

    const addToCartButtons = document.querySelectorAll('.add-to-cart-button');

addToCartButtons.forEach(button => {
    button.addEventListener('click', addToCart);
});

function addToCart(event) {
    const productItem = event.target.closest('.product-item');
    const productDetails = {
        title: productItem.querySelector('.product-title').textContent,
        price: productItem.querySelector('.product-price').textContent
    };

    // Enviar os dados para a página PHP
    fetch('adicionar_carrinho_compras.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(productDetails),
    }).then(response => {
        // Lógica opcional após enviar os dados (por exemplo, atualizar a interface)
        console.log('Produto adicionado ao carrinho de compras!');
    }).catch(error => {
        console.error('Erro ao adicionar produto ao carrinho de compras:', error);
    });
}
</script>

</body>
</html>
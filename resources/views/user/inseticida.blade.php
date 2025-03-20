<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mali Orgânica</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="./imagens/logo.png" alt="Mali Orgânica">
            <h1><i>Mali Orgânica</i></h1>
        </div>
        <nav>
            <ul>
                <li onclick="redirecionar('produtos-user')" ><i class="bi bi-house"></i> Início</li>
                <li><i class="bi bi-search"></i> Busca</li>
                <li onclick="redirecionar('carrinhoVazio-user')" ><i class="bi bi-basket"></i > Carrinho</li>
                <li onclick="redirecionar('suporte-user')" ><i class="bi bi-headset"></i> Suporte</li>
            
            </ul>
        </nav>
    </header>
    
    <main>
        <div class="container">
            <div class="product-image">
                <img src="./imagens/inse.png" alt="Produto">
            </div>
            <div class="product-info">
                <h2>R$78,50</h2>
                <p>à vista no pix ou débito</p>
                <p class="price"><strong>Ou em até 10x de R$7,85/mês</strong></p>
                <p class="delivery">Entrega grátis até: quinta-feira, 20 de fevereiro</p>
                <label for="quantity">Em estoque</label>
                <select id="quantity">
                    <option>Quantidade: 1</option>
                </select>
                <button  id="carrinho" class="add-cart">Adicionar ao carrinho</button>
                <button  class="buy-now" onclick="redirecionar('compra-user')" >Comprar agora</button>
            </div>
        </div>
    </main>
    
    <footer>
        <div class="social">
            <i class="bi bi-instagram"></i> Instagram
            <i class="bi bi-facebook"></i> Facebook
            <p>maliorganica@gmail.com</p>
        </div>
    </footer>

    <script>
        document.getElementById("carrinho").addEventListener("click", function() {
            window.location.href = "/carrinhoInse-user"; // Redireciona para o checkout
        });
        
        //redirecionar
        function redirecionar(url) {
                    window.location.href = url;
                }
        
        </script>


    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        
        header {
            background-color: #4c8c5a;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .logo img {
            width: 60px;
            height: auto;
        }
        
        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
            padding: 0;
            margin: 0;
        }
        
        nav ul li {
            display: flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 50px auto;
            width: 80%;
            gap: 40px;
        }
        
        .product-image {
            background-color: #4c8c5a;
            padding: 40px;
            border-radius: 20px;
        }
        
        .product-image img {
            width: 300px;
            display: block;
            margin: 0 auto;
        }
        
        
        .color {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            display: inline-block;
            border: 1px solid #000;
        }
        
        
        .product-info {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h2 {
            color: #333;
        }
        
        .price strong {
            font-weight: bold;
        }
        
        .delivery {
            color: #777;
        }
        
        select {
            width: 100%;
            padding: 5px;
            margin-top: 5px;
        }
        
        button {
            display: block;
            width: 100%;
            margin-top: 10px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        
        .add-cart {
            background-color: #6aaf57;
            color: white;
        }
        
        .buy-now {
            background-color: #f0ad4e;
            color: white;
        }
        
        footer {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-color: #3e7342;
            color: white;
            font-size: 14px;
        }
    </style>


</body>
</html>


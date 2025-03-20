<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mali Orgânica - Produtos</title>
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
                <li><i class="bi bi-search"></i> Busca</li>
                <li  onclick="redirecionar('carrinhoVazio-user')" ><i class="bi bi-basket" ></i  > Carrinho</li>
                <li><i class="bi bi-person"></i> Entre ou <b>Cadastre-se</b></li>
                <li><i class="bi bi-headset" onclick="redirecionar('suporte-user')" ></i>Suporte</li>
            </ul>
        </nav>
    </header>
    
    <section class="produtos">
        <h2><i>Produtos</i></h2>
        <div class="produtos-container">
            <div class="produto">
                <img src="./imagens/mali.png" alt="Mali geração 1" onclick="redirecionar('mali-user')">
                <p>Mali geração 1</p>
                <p class="preco">R$890,90</p>
            </div>
            <div class="produto">
                <img src="./imagens/carregador.png" alt="Carregador por indução" onclick="redirecionar('carregador-user')">
                <p>Carregador por indução</p>
                <p class="preco">R$290,90</p>
            </div>
            <div class="produto">
                <img src="./imagens/inse.png" alt="Inseticida Mali" onclick="redirecionar('inseticida-user')">
                <p>Inseticida Mali</p>
                <p class="preco">R$78,50</p>
            </div>
        </div>
    </section>

    <footer>
        <div class="social">
            <i class="bi bi-instagram"></i> Instagram
            <i class="bi bi-facebook"></i> Facebook
            <p>maliorganica@gmail.com</p>
        </div>
    </footer>

    <script>
        function redirecionar(url) {
            window.location.href = url;
        }
    </script>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            color: #000;
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
        }

        .logo img {
            width: 50px;
            margin-right: 10px;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        nav ul li {
            display: flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
        }

        .produtos {
            text-align: center;
            padding: 20px;
        }

        .produtos h2 {
            font-style: italic;
            color: #4c8c5a;
            border-bottom: 3px solid #4c8c5a;
            display: inline-block;
            padding-bottom: 5px;
        }

        .produtos-container {
            display: flex;
            justify-content: center;
            gap: 200px;
            margin-top: 20px;
        }

        .produto {
            text-align: center;
            cursor: pointer;
        }

        .produto img {
            width: 180px;
            height: auto;
        }

        .preco {
            font-weight: bold;
            margin-top: 5px;
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





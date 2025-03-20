<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <title>Carrinho de Compras</title>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">Mali orgânica</div>
            <nav>
                <ul>
                    <li  onclick="redirecionar('produtos-user')" ><i class="bi bi-house"></i> Início</li>
                    <li><i class="bi bi-search"></i> Busca</li>
                    <li><i class="bi bi-person"></i> Entre ou <b>Cadastre-se</b></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="cart-box">
            <h2>Carrinho</h2>
            <p>Nenhum item no carrinho</p>
            <div class="cep-box">
                <label for="cep">Informe seu CEP:</label>
                <input type="text" id="cep" placeholder="Digite seu CEP" />
                <button onclick="calcularFrete()">Calcular</button>
            </div>
            <p>Total: <strong id="total">R$0,00</strong></p>
            <div class="buttons">
                <button class="btn-secondary" onclick="redirecionar('produtos-user')" >Continuar Comprando</button>
                <button class="btn-primary" onclick="redirecionar('compra-user')" >Comprar</button>
                <li onclick="redirecionar('suporte-user')" ><i class="bi bi-headset"></i> Suporte</li>
            </div>
        </div>
    </div>

        <!-- Rodapé -->
        <div class="footer">
            <i class="bi bi-instagram"></i> Instagram
            <i class="bi bi-facebook"></i> Facebook<br>
            maliorganica@gmail.com
           </div>
       </div>

   

    <script>
        function calcularFrete() {
            const cep = document.getElementById('cep').value;
            if (!cep) {
                alert('Por favor, digite um CEP válido.');
                return;
            }
            alert(`Frete calculado para o CEP: ${cep}`);
        }
            //redirecionar
        function redirecionar(url) {
            window.location.href = url;
        }
    

    </script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .navbar {
            background-color: #4c8056;
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar nav a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
            font-size: 16px;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
        }

        .cart-box {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 500px;
        }

        h2 {
            color: #4c8056;
        }

        .cep-box {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .cep-box input {
            flex: 1;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 8px;
        }

        .cep-box button {
            background-color: #4c8056;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .cep-box button:hover {
            background-color: #3a6244;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
        }

        .btn-secondary {
            background-color: #4d4d4d;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-secondary:hover {
            background-color: #3b3b3b;
        }

        .btn-primary {
            background-color: #4c8056;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #3a6244;
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

        .footer {
            padding: 20px;
            text-align: center;
            font-size: 14px;
            color: #555;
        }

        .footer img {
            height: 20px;
            margin-right: 5px;
            vertical-align: middle;
        }
    </style>
</body>
</html>

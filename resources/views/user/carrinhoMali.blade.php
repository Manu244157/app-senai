<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <title>Carrinho de Compras</title>

</head>
<body>
    <div class="header">
        <img src="./imagens/logo.png" alt="Robô Mali" class="product-image">
        <nav>
            <ul>
                <li  onclick="redirecionar('produtos-user')" ><i class="bi bi-house"></i> Início</li>
                <li><i class="bi bi-search"></i> Busca</li>
                <li><i class="bi bi-person"></i> Entre ou <b>Cadastre-se</b></li>
                <li onclick="redirecionar('suporte-user')" ><i class="bi bi-headset"></i> Suporte</li>
            </ul>
        </nav>
    </div>
    </div>

    <div class="container">
        <h2 class="title">Carrinho</h2>
        <table class="product-table">
            <tr>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Valor</th>
            </tr>
            <tr>
                <td>
                    <img src="./imagens/mali.png" alt="Robô Mali" class="product-image"> Robô Mali
                    
                </td>
                <td>
                    <button onclick="changeQuantity(-1)">-</button>
                    <input id="quantity" type="number" value="1" min="1" style="width: 40px; text-align: center;" onchange="updateTotal()" />
                    <button onclick="changeQuantity(1)">+</button>
                    <span class="remove-link" onclick="removeItem()">Remover</span>
                </td>
                <td id="price">R$890,90</td>
            </tr>
        </table>

        <div class="cep-container">
            Informe seu CEP:
            <input type="text" class="cep-input" placeholder="Digite seu CEP" />
            <button class="btn-calculate">Calcular</button>
        </div>

        <div id="total" class="total">Total: R$890,90</div>

        <div class="btn-container">
            <button class="btn-continue" onclick="redirecionar('produtos-user')" >Continuar Comprando</button>
            <button class="btn-buy"  onclick="redirecionar('compra-user')" >Comprar </button>
        </div>
    </div>

    <script>
        let unitPrice = 890.90;

        function changeQuantity(amount) {
            let quantityInput = document.getElementById('quantity');
            let currentValue = parseInt(quantityInput.value) || 0;
            let newValue = currentValue + amount;
            if (newValue < 1) newValue = 1;
            quantityInput.value = newValue;
            updateTotal();
        }

        function updateTotal() {
            let quantity = parseInt(document.getElementById('quantity').value) || 1;
            let total = (unitPrice * quantity).toFixed(2).replace('.', ',');
            document.getElementById('total').innerText = `Total: R$${total}`;
        }

        function removeItem() {
            if (confirm('Deseja remover o item do carrinho?')) {
                document.querySelector('.product-table').innerHTML = '<tr><td colspan="3">Nenhum item no carrinho</td></tr>';
                document.getElementById('total').innerText = 'Total: R$0,00';
            }
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
        }

        .header {
            background-color: #4c8b5f;
            color: white;
            padding: 15px 35px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
            font-weight: bold;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .title {
            color: #4c8b5f;
            margin-bottom: 20px;
        }

        .product-table {
            width: 100%;
            border-collapse: collapse;
        }

        .product-table th,
        .product-table td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        .product-table th {
            background-color: #d8f0d1;
            color: #333;
            font-weight: bold;
        }

        .product-image {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 4px;
        }

        .cep-container {
            margin-top: 20px;
        }

        .cep-input {
            padding: 5px;
            width: 150px;
            margin-right: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn-calculate {
            background-color: #4c8b5f;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 4px;
        }

        .btn-calculate:hover {
            background-color: #3a6b47;
        }

        .total {
            color: #4c8b5f;
            font-weight: bold;
            margin-top: 20px;
        }

        .btn-container button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            margin-right: 10px;
        }

        .btn-buy {
            background-color: #4c8b5f;
            color: white;
        }

        .btn-buy:hover {
            background-color: #3a6b47;
        }

        .btn-continue {
            background-color: #666;
            color: white;
        }

        .btn-continue:hover {
            background-color: #555;
        }

        .remove-link {
            color: red;
            cursor: pointer;
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
    </style>

    
</body>
</html>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <title>Finalizar Compra - Mali Orgânica</title>
</head>
<body>

<div class="container">
    <!-- Cabeçalho -->
    <div class="header">
        <img src="./imagens/logo.png" alt="Logo Mali Orgânica" /> 
        <h1>Mali orgânica</h1>
        <div class="actions">
            <i class="bi bi-arrow-left-circle"  onclick="redirecionar('produtos-user')" >Voltar</i>
            <i class="bi bi-person">Minha Conta</i>
            <i class="bi bi-headset" onclick="redirecionar('suporte-user')">Suporte</i>
        </div>
    </div>

    <!-- Seção de Pagamento -->
    <div class="payment-section">
        <h2>2 - PAGAMENTO</h2>
        <p>
            ✅ PIX PARCELADO 4X SEM JUROS <span class="green-badge">2 horas</span>
        </p>
        <ul>
            <li>Parcele sua compra em até <strong>4X</strong> no Pix</li>
            <li>Você será notificado através do <em>e-mail</em> a cada parcela</li>
        </ul>

        <div class="payment-option">
            <label>
                <input type="radio" name="payment" value="credito" />
                Cartão de Crédito
            </label>
            <label>
                <input type="radio" name="payment" value="debito" />
                Cartão de Débito
            </label>
            <label>
                <input type="radio" name="payment" value="pix" checked />
                Pix
            </label>
        </div>
    </div>

    <!-- Seção de Resumo -->
    <div class="summary-section">
        <h2>3 - FINALIZAR COMPRA</h2>
        <table>
            <tr>
                <td>Sub-total:</td>
                <td>R$890,90</td>
            </tr>
            <tr>
                <td>Frete:</td>
                <td>R$10,00</td>
            </tr>
            <tr>
                <td class="total">Total:</td>
                <td class="total" id="total">R$900,90</td>
            </tr>
        </table>

        <button class="checkout-btn" onclick="finalizarCompra()">Finalizar Compra</button>

        <div class="voucher-section">
            <input type="checkbox" id="gift-code" />
            <label for="gift-code">Incluir código de Vale Presente</label>
            <br />
            <input type="text" placeholder="Possui um cupom? Digite no campo aberto" />
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
    function finalizarCompra() {
        const formaPagamento = document.querySelector('input[name="payment"]:checked').value;
        alert(`Compra finalizada com sucesso!\nForma de pagamento: ${formaPagamento}`);
    }

    //redirecionar
    function redirecionar(url) {
            window.location.href = url;
        }

</script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            max-width: 900px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        .header {
            background-color: #4d7c50;
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .header img {
            height: 50px;
        }

        .header h1 {
            font-size: 24px;
            font-style: italic;
            margin: 0;
        }

        .header .actions {
            display: flex;
            align-items: center;
            gap: 15px;
            cursor: pointer;
        }

        .payment-section, .summary-section {
            border: 2px solid #4d90fe;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        h2 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .green-badge {
            background-color: #a6dba0;
            color: #fff;
            padding: 5px 10px;
            border-radius: 12px;
            font-size: 14px;
            font-weight: bold;
        }

        .payment-option {
            margin-top: 10px;
        }

        .payment-option label {
            display: block;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 5px;
            transition: background-color 0.2s;
        }

        .payment-option input[type="radio"] {
            margin-right: 10px;
        }

        .payment-option label:hover {
            background-color: #f0f0f0;
        }

        .summary-section {
            border: 1px solid #ccc;
        }

        .summary-section table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }

        .summary-section table td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        .total {
            font-weight: bold;
            color: #4d7c50;
        }

        .checkout-btn {
            background-color: #4d7c50;
            color: white;
            padding: 12px;
            width: 100%;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .checkout-btn:hover {
            background-color: #3b5d3c;
        }

        .voucher-section input[type="checkbox"],
        .voucher-section input[type="text"] {
            margin-right: 10px;
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
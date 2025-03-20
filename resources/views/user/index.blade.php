<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Mali org</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="./imagens/logo.png" alt="Mali Orgânica" width="150px">
        </div>
        <h1>Mali orgânica</h1>
    </header>


    <main>
        <div class="container">
            <div class="text">
                <p>
                    Projetamos a Mali para uma agricultura sustentável onde os agricultores podem programar a hora e a duração da aplicação de pesticidas nas plantações remotamente, otimizando o uso de insumo e promovendo a saúde do solo.
                </p>
                <button class="btn"  > <a href="./produtos-user">Compre já</a> </button>
            </div>
            <div class="image">
                <img src="./imagens/mato.png" alt="Robô Mali">
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




<style> body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}
header {
    background-color: #3e7342;
    color: white;
    text-align: center;
    padding: 20px;
    font-size: 24px;
    font-weight: bold;
    display: flex;
    justify-content:row;
    
}
.container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 40px;
    background-color: #e0f0d9;
    }
.text {
    max-width: 50%;
    font-size: 18px;
    color: #333;
}
.btn {
    display: inline-block;
    background-color: #91c398;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    font-size: 16px;
    margin-top: 20px;
    border-radius: 5px;
}
.btn:hover {
     background-color: #68a672;
}
.image img {
    width: 400px;
    border-radius: 50%;
    border: 5px solid #3e7342;
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
.social img {
    width: 20px;
    margin-right: 10px;
}
</style>

</body>
</html>
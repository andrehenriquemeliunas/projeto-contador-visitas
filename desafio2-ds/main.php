<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2 - Número de acessos</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Olá Visitante</h1>
        <h2>Muito obrigado por acessar o meu site! Volte sempre.</h2>
            <div class="counter">
                Você é nosso visitante nº :
                <?php
                    include("counter.php")
                ?>
            </div>
    </div>
</body>
</html>
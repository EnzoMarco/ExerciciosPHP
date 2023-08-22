<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
    <link rel="stylesheet" href="des01.css">
</head>
<body>
    <h1>Resposta</h1>
    <?php
    $a = $_GET["numero"] ?? 0 ;
    echo "<p>Seu antecessor é ". ($a - 1). " e seu sucessor é ". ($a + 1) . "</p>" ;
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
</body>
</html>
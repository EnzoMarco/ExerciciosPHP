<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sortear Número</title>
    <link rel="stylesheet" href="des03.css">
</head>
<body>
    <?php
    $reais = $_GET["reais"];
    $dolares = $reais / 5;
    echo "voce tem $reais Reais, que equivalem a $dolares Dólares";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n1 = $_GET['n1'] ?? 0;
    $n2 = $_GET['n2'] ?? 0;
    ?>
    <h1>Somador</h1>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
        <label for="n1">Valor 1:</label>
        <input type="number" name="n1" value="<?=$n1?>">
        <label for="n2">Valor 2:</label>
        <input type="number" name="n2" value="<?=$n2?>">
        <input type="submit" value="Somar">
    </form>
    <?php
        $_soma = $n1 + $n2;
        echo "$_soma";
    ?>
    <br>
    <button onclick="javascript:history.go(-1)">Voltar</button>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
    $sal = $_GET['salario'] ?? 0;
    ?>
    <header>
        <h1>Informe seu Salário:</h1>
    </header>
    <section>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário R$ :</label>
            <input type="number" name="salario" value="<?=$sal?>">
            <input type="submit" value="Enviar">
        </form>
    </section>
    <footer>
        <?php 
        $x = (int) ($sal / 1380);
        $resto = $sal % 1380;
        echo "Quem recebe um salário de $sal ganha $x 
        salários mínimos + $resto R$.";
        ?>
    </footer>
</body>
</html>
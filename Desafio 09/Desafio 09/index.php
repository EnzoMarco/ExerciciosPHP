<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisando Raízes</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
    $number = $_GET['num']?? 0;
    ?>
    <header>
        <h1>Informe um número:</h1>
    </header>
    <section>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número:</label>
            <input type="number" name="num" value="<?=$number?>">
            <input type="submit" value="Enviar">
        </form>
    </section>
    <footer>
        <p class="resultado">
            <?php
            echo "Analisando o número $number, temos: <br> 
            <li>A sua raiz quadrada é ". sqrt($number)."<br>
            <li>A sua raiz cúbica é ". $number**(1/3);
            ?>
        </p>
    </footer>
</body>
</html>
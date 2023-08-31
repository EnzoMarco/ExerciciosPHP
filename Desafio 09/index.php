<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisando Raízes</title>
</head>
<body>
    <?php
    $number = $_GET['num']?? 0;
    ?>
    <header>
        <h1>Informe um número:</h1>
    </header>
    <section>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="$_GET">
            <label for="num">Número:</label>
            <input type="number" name="num">
            <input type="submit" value="Enviar">
        </form>
    </section>
    <footer>
        <p class="resultado">
            <?php
            echo "Analisando o número $number, temos:"<br>
            "<ul> A sua raiz quadrada é {$number *(1/2)}"<br>
            "<ul> A sua raiz cúbica é {$number *(1/3)}"
            ?>
        </p>
    </footer>
</body>
</html>
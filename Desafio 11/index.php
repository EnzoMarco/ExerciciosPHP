<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando a sua idade</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<?php
        $anoatual = date("Y");
        $anonasc = $_GET['anonasc'] ?? 2000;
        $anofut = $_GET['anofut'] ?? $anoatual;
        ?>
    <header>
        <h1>Calculando a sua idade</h1>
    </header>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="anonasc">Digite o ano em que nasceu:</label>
            <input type="number" name="anonasc" min="1900" max="<?=($anoatual-1)?>" value="<?=$anonasc?>">
            <label for="anofut">Digite o ano no qual você deseja saber a sua idade:</label>
            <input type="number" name="anofut" min="1900" value="<?=$anofut?>">
            <input type="submit" value="Enviar">
        </form>
    </section>
    <footer>
        <p class="resultado">
            <?php
            $idade = $anofut - $anonasc;
            echo "Quem nasceu em $anonasc terá $idade anos em $anofut";
            ?>
        </p>
    </footer>
    <button onclick="javascript:history.go(-1)">Voltar</button>
</body>
</html>
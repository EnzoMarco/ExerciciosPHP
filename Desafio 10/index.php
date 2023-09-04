<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <h1>Médias Aritméticas</h1>
    </header>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="m1">1* Média</label>
        <input type="number" name="m1" value="<?=$_GET["m1"]?>">
        <label for="p1">2* Peso</label>
        <input type="number" name="p1" value="<?=$_GET["p1"]?>">
        <label for="m2">2* Média</label>
        <input type="number" name="m2" value="<?=$_GET["m2"]?>">
        <label for="p2">2* Peso</label>
        <input type="number" name="p2" value="<?=$_GET["p2"]?>">
        <input type="submit" value="Enviar">
        </form>
    </section>
    <footer>
        <p class="resultado">
        <?php
            $m1 = $_GET['m1'];
            $p1 = $_GET['p1'];
            $m2 = $_GET['m2'];
            $p2 = $_GET['p2'];
            $MA = ($m1 + $m2) / 2;
            $Mp = ($m1 * $p1) + ($m2 * $p2);
            $MP = $Mp / 2;
            echo "A média aritmética é $MA <br>
            A média ponderada vale $MP";
        ?>
        </p>
        <button onclick="javascript:history.go(-1)">Sair</button>
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 07</title>
    <link rel="stylesheet" href="AnaDiv.css">
</head>
<body>
    <?php 
    $n1 = $_GET['n1'] ?? 0;
    $n2 = $_GET['n2'] ?? 0;
    ?>
    <header>
        <h1>Anatomia de uma Divisão</h1>
    </header>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="n1">Dividendo</label>
        <input type="number" name="n1" value="<?=$n1?>">
        <label for="n1">Divisor</label>
        <input type="number" name="n2" value="<?=$n2?>">
        <input type="submit" value="Analisar">
        </form>
    </section>
    <footer>
        <?php 
        $resto = $n1 % $n2;
        $resultado = floor($n1 / $n2);
        echo "$n1"," $n2"," $resto", " $resultado"; 
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </footer>
</body>
</html>
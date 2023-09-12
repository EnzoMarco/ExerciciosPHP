<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
    $preço = $_GET['preço']?? 0;
    $reajuste = $_GET['reajuste']?? 0;
    ?>
    <header>
        <h1>Reajustador de Preços</h1>
    </header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="preço">Preço do Produto (R$)</label>
        <input type="number" name="preço" id="preço" min="0.10" step="0.01">
        <label for="reajuste">Qual será o percentual de reajuste <span id="a">?</span></label>
        <input type="range" name="reajuste" min="0" max="100" step="1" oninput="mudaValor()">
        <input type="submit" value="Reajustar">
        </form>
    </main>
    <footer>
        <p>O valor era $ e após o reajuste passou a ser de $</p>
    </footer>
    <script>
        function mudaValor() {
            a.innerText = reajuste.value;
        }     
    </script>
</body>
</html>
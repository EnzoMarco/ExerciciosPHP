<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 05</title>
    <link rel="stylesheet" href="des05.css">
</head>
<body>
    <main>
        <?php 
        $num = $_GET["num"];
        $virgula = $num % 1;
        $numreal = round($num);
        echo "<p id='resultado'>O número real é $numreal <br> O número fracionado é $num</p>";
        ?>
    </main>
</body>
</html>
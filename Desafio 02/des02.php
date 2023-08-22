<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de Números</title>
</head>
<body>
    <header>
        <h1>Sorteador de Números</h1>
        <p>Clique em "Sortear" para um novo número</p>
    </header>
    <section>
        <?php 
        function sortear() {
            $num = rand(0,1000);
            echo "O número sorteado foi $num";
        }
        sortear();
        ?>
    </section>
    <button></button>
    <footer></footer>
</body>
</html>
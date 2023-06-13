<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 10</title>

</head>
<body>
    <?php 
        $anonascimento = $_GET["anonascimento"];
        $anoescolha = $_GET["anoescolha"] ?: date('Y');
        $idade = $anoescolha - $anonascimento;
    ?>  

    <main>
        <h2>Médias Aritméticas</h2>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="anonascimento">Em que ano você nasceu?</label>
            <input type="number" name="anonascimento" id="anonascimento">
            <label for="anoescolha">Quer saber sua idade em que ano? (atualmente estamos em <?php echo "<strong>".date('Y')."</strong>"?>)</label>
            <input type="number" name="anoescolha" id="anoescolha" >
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
            echo "Quem nasceu em $anonascimento vai ter <strong>$idade anos</strong> em $anoescolha!";
        ?>
    </section>
</body>
</html>
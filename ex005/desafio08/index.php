<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 08</title>

</head>
<body>
    <?php 
        $numero = $_GET['numero'];
        $raizquadrada = sqrt($numero);
        $raizcubica=pow($numero,1.0/3.0);
    ?>  

    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" step="0.01">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
            echo "Analisando o <strong>número $numero</strong>, temos";
            print "<ul><li>A sua raiz quadrada é <strong>" . number_format($raizquadrada, 3, ",", ".") . "</strong></li>";
            echo "<li>A sua raiz cúbica é <strong>" . number_format($raizcubica, 3, ",", ".") . "</strong></li></ul>";
        ?>
    </section>
</body>
</html>
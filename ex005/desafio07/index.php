<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 06</title>

</head>
<body>
    <?php 
        $salario = $_GET['salario'];
        $salarioMinimo = 1380;
        $resto = $salario % $salarioMinimo;
        $totalSalarios = ($salario - $resto) / $salarioMinimo
        
    ?>

    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" step="0.01">
            Considerando o salário mínimo de <strong>R$1.380,00</strong>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
            echo "Quem recebe um salário de R$". number_format($salario,2, ",", ".") . " ganha <strong>$totalSalarios salários mínimos</strong> + R$" . number_format($resto, 2, ",", ".");
        ?>
    </section>
</body>
</html>
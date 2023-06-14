<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 09</title>

</head>
<body>
    <?php 
        $valor1 = $_GET['valor1'] ?: '';
        $valor2 = $_GET['valor2'] ?: '';
        $peso1 = $_GET['peso1'] ?: '';
        $peso2 = $_GET['peso2'] ?: '';
        $mediasimples = ($valor1 + $valor2) / 2;
        $mediaponderada = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2);
    ?>  

    <main>
        <h2>Médias Aritméticas</h2>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">1º Valor</label>
            <input type="number" name="valor1" id="valor1" required value="<?=$valor1?>" step="0.01">
            <label for="peso1">1º Peso</label>
            <input type="number" name="peso1" id="peso1" required value="<?=$peso1?>" step="0.01">
            <label for="valor2">2º Valor</label>
            <input type="number" name="valor2" id="valor2" required value="<?=$valor2?>" step="0.01">
            <label for="peso2">2º Peso</label>
            <input type="number" name="peso2" id="peso2" required value="<?=$peso2?>" step="0.01">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
            echo "Analisando os valores $valor1 e $valor2 :";
            print "<ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a " . number_format($mediasimples, 2, ",", ".") .".</li>";
            echo "<li>A <strong>Média Aritimética Ponderada</strong> com pesos $peso1 e $peso2 é igual a " . number_format($mediaponderada, 2, ",", ".") . ".</li></ul>";
        ?>
    </section>
</body>
</html>
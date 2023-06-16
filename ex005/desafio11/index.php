<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 11</title>

</head>
<body>
    <?php 
        $preco = $_GET["preco"] ?: 0;
        $percentual = $_GET["percentual"] ?: 0;
        $preconovo = (($preco / 100) * $percentual) + $preco;
        
    ?>  

    <main>
        <h2>Médias Aritméticas</h2>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" value="<?=$preco?>">
            <label for="percentual">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="percentual" id="percentual" value="<?=$percentual?>" min="0" max="100" oninput="mudaValor()">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            echo "O produto que custava R$" . number_format($preco, 2, ",",".") . " com <strong>$percentual% de aumento</strong> vai passar a custar <strong>R$" . number_format($preconovo, 2, ",", ".") . "</strong> a partir de agora.";
        ?>
    </section>
    <script>
        mudaValor()
        function mudaValor() {
            p.innerText = percentual.value;
        }
    </script>
</body>
</html>
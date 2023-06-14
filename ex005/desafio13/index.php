<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 13</title>

</head>
<body>
    <?php 
        $notas = $_GET["notas"] ?: 0;
        $valortotal = $notas;
        if ($notas >= 100) {
            $cemsobra = $notas % 100;
            $cem = ($notas - $cemsobra) / 100;
            $notas = $cemsobra;
            if ($notas >= 50) {
                $cinquentasobra = $notas % 50;
                $cinquenta = ($notas - $cinquentasobra) / 50;
                $notas = $cinquentasobra;
            } if ( $notas >= 10) {
                $dezsobra = $notas % 10;
                $dez = ($notas - $dezsobra) / 10;
                $notas = $dezsobra;
            } if ($notas >= 5) {
                $cincosobra = $notas % 5;
                $cinco = ($notas - $cincosobra) / 5;
            }
        }if ($notas >= 50) {
            $cinquentasobra = $notas % 50;
            $cinquenta = ($notas - $cinquentasobra) / 50;
            $notas = $cinquentasobra;
        } if ( $notas >= 10) {
            $dezsobra = $notas % 10;
            $dez = ($notas - $dezsobra) / 10;
            $notas = $dezsobra;
        } if ($notas >= 5) {
            $cincosobra = $notas % 5;
            $cinco = ($notas - $cincosobra) / 5;
        }if ( $notas >= 10) {
            $dezsobra = $notas % 10;
            $dez = ($notas - $dezsobra) / 10;
            $notas = $dezsobra;
        } if ($notas >= 5) {
            $cincosobra = $notas % 5;
            $cinco = ($notas - $cincosobra) / 5;
        }
    ?>  

    <main>
        <h2>Caixa Eletrônico</h2>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="notas">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="notas" id="notas" step="5">
            <p>*Notas disponíveis: R$100 , R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    
    <section>
        <h2>Saque de R$<?=number_format($valortotal, 2, ",", ".")?> realizado</h2>
        <?php 
            echo "Analisando o valor que você digitou, <strong>".number_format($segundosinicial,0,"",".") ." segundos</strong> equivalem a um total de:";
            print "<ul><li><img src='100reais.jpg' style='width:100px;'> x$cem</li>";
            print "<li><img src='50reais.jpg' style='width:95px;'> x$cinquenta</li>";
            print "<li><img src='10reais.jpg' style='width:90px;'> x$dez</li>";
            print "<li><img src='5reais.jpg' style='width:85px;'> x$cinco</li></ul>";
        ?>
    </section>
</body>
</html>
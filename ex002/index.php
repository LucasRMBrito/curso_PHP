<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia " . date("d/M/Y");
        echo " e a hora atual é " . date("G:i:s T");

    ?>
    <p>
    <h3>Fibonacci</h3>
    <span>7 termos</span>
    <p>
    <?php 
        /// 0 - 1 - 1 - 2- 3 - 5 - 8 - 13
        $t1 = 0;
        $t2 = 1;
        $cont = 0;
        $valor = 7;

        
        while ($cont < $valor) {
            echo "$t1 - ";
            $prox = $t2 + $t1;
            $t1 = $t2;
            $t2 = $prox;
            $cont += 1;
        };
    ?>
</body>
</html>
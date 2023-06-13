<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 12</title>

</head>
<body>
    <?php 
        $segundos = $_GET["segundos"];
        //$minutos = 60;
        //$horas = 3600;
        //$dias = 86400;
        //$semanas = 604800;
        //$restosegundo = $segundos % 60;
        //$restominuto = $segundos % 3600;

        if ($segundos >= 604800) {
            $sobrasemana = $segundos % 604800;
            $semanas = ($segundos - $sobrasemana) / 604800;
            $segundos = $sobrasemana;
            if ($segundos >= 86400){
                $sobradia = $segundos % 86400;
                $dias = ($segundos - $sobradia) / 86400;
                $segundos = $sobradia;
            } if ($segundos >= 3600) {
                $sobrahora = $segundos % 3600;
                $horas = ($segundos - $sobrahora) / 3600;
                $segundos = $sobrahora;
            } if ($segundos >= 60) {
                $sobraminutos = $segundos % 60;
                $minutos = ($segundos - $sobraminutos) / 60;
                $segundos = $sobraminutos;
            }
            
        }
        
                
    ?>  

    <main>
        <h2>Calculadora de Tempo</h2>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizando tudo</h2>
        <?php 
            echo "Analisando o valor que você digitou, <strong>$segundos segundos</strong> equivalem a um total de:";
            print "<ul><li>". $semanas ." semanas</li>";
            print "<li>$dias dias</li>";
            print "<li>$horas horas</li>";
            print "<li>$minutos minutos</li>";
            print "<li>$segundos segundos</li></ul>";
            echo "sobra " . $sobrasemana;
        ?>
    </section>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relacionamento entre Classes</title>
</head>
<body>
    <h1>Relacionamento entre Classes</h1>
    <pre>
        <?php 
            require_once 'Lutador.php';
            require_once 'Luta.php';

            $lutadores = array();
            $lutadores[0] = new Lutador("Pretty Boy", "França", 30, 1.75, 90.9, 11, 2, 1);
            $lutadores[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 90.9, 14, 2, 3);
            $lutadores[2] = new Lutador("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
            // $lutadores[1]->apresentar();
            // $lutadores[1]->status();
            // $lutadores[1]->apresentar();

            // echo "<br><br>";

            // print_r($lutadores);

            $luta1 = new Luta();
            $luta1->marcarLuta($lutadores[0],$lutadores[1]);
            $luta1->lutar();

            echo "<br><br>";

            // print_r($lutadores[0]);
            print_r($luta1);
            // print $lutadores[0]->getCategoria();

        ?>
    </pre>
</body>
</html>
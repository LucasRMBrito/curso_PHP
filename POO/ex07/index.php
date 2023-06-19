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
            require_once 'Aluno.php';
            require_once 'Visitante.php';
            require_once 'Bolsista.php';
            require_once 'Professor.php';
            require_once 'Tecnico.php';

            $t= new Tecnico();
            $t->praticar();

            $v1 = new Visitante();
            $v1->setNome("Lucas");
            $v1->setSexo("masculino");
            $v1->setIdade(30);
            $v1->fazerAniversaro();  
            
            $a1 = new Aluno();
            $a1->setNome("Lucas");
            $a1->setMatr(201921192);
            $a1->setCurso("Engenharia de Software");
            $a1->setSexo("masculino");
            $a1->setIdade(30);
            $a1->fazerAniversaro();
            $a1->pagarMensalidade();

            $b1 = new Bolsista();
            $b1->setNome("ROGER");
            $b1->setMatr(201921192);
            $b1->setCurso("Engenharia de Software");
            $b1->setSexo("masculino");
            $b1->setIdade(30);
            $b1->fazerAniversaro();
            $b1->pagarMensalidade();
            $b1->setBolsa(15.5);
            

            echo "<br>";
            print_r($t);
            // print_r($a1);


        ?>
    </pre>
</body>
</html>
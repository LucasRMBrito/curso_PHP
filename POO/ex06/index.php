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
            require_once 'Pessoa1.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';

            $a1 = new Aluno();
            $a1->setNome("Lucas");
            $a1->setMatr(201921192);
            $a1->setCurso("Engenharia de Software");
            $a1->setSexo("masculino");
            $a1->setIdade(30);
            $a1->fazerAniversaro();

            $p1 = new Professor();
            $p1->setNome("Gustavo Guanabara");
            $p1->setSalario(5000);
            $p1->receberAumento(500.50);

            $f1 = new Funcionario();
            $f1->setNome("Kleber");
            $f1->setSetor("Estoque");
            

            echo "<br>";
            print_r($a1);
            print_r($p1);
            print_r($f1);

        ?>
    </pre>
</body>
</html>
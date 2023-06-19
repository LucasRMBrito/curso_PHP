<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <pre>
        <?php 
            require_once 'Mamifero.php';
            require_once 'Reptil.php';
            require_once 'Ave.php';
            require_once 'Peixe.php';
            require_once 'Canguru.php';
            require_once 'Cachorro.php';
            require_once 'PeixeDourado.php';
            require_once 'Arara.php';
            require_once 'Cobra.php';
            require_once 'Tartaruga.php';


            $m = new Mamifero();
            $r = new Reptil();
            $a = new Ave();
            $p = new Peixe();
            $ar = new Arara();

            $ar->locomover();

            echo "<hr>";

            $cao = new Cachorro();
            $cao->locomover();
            $cao->enterrarOsso();

            echo "<hr>";

            $tar = new Tartaruga();
            $tar->locomover();
            
            echo "<hr>";

            $can= new Canguru();
            $can->locomover();

            echo "<hr>";

            // $m->setPeso(85.3);
            // $m->setIdade(2);
            // $m->setMembros(4);
            // $m->setCorPelo("Preto");
            $m->locomover();
            // $m->alimentar();
            // $m->emitirSom();
            
            echo "<hr>";

            // $p->setPeso(0.35);
            // $p->setIdade(1);
            // $p->setMembros(0);
            // $p->setCorEscama("Dourado");
            $p->locomover();
            // $p->alimentar();
            // $p->emitirSom();
            // $p->soltarBolha();

            echo "<hr>";

            // $a->setPeso(0.89);
            // $a->setIdade(2);
            // $a->setMembros(2);
            // $a->setCorPena("Amarelo");
            $a->locomover();
            // $a->alimentar();
            // $a->emitirSom();
            // $a->fazerNinho();

            // print_r($m);
            // print_r($p);

        ?>
    </pre>
    
</body>
</html>
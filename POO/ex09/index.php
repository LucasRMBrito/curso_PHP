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
            require_once 'Lobo.php';
            require_once 'Cachorro.php';

            $m = new Mamifero();
            $l = new Lobo();
            $c = new Cachorro();


            $c->emitirSom();
            $c->reagirFrase("toma comida");
            $c->reagirDono(false);
            $c->reagirHora(12,0);
            

        ?>
    </pre>
</body>
</html>
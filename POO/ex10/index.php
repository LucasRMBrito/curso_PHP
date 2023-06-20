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
            require_once 'Video.php';
            require_once 'Gafanhoto.php';
            require_once 'Visualizacao.php';

            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 1 de PHP");
            $v[2] = new Video("Aula 1 de HTML");

            $g = new Gafanhoto("Lucas", 30, "M", "Lucas@gmail");
            
            $vis[0] = new Visualizacao($g, $v[0]);
            $vis[1] = new Visualizacao($g, $v[1]);

            $vis[0]->avaliar();
            $vis[1]->avaliarPorc(85);

            print_r($vis);
            
            // print_r($g);
            // print_r($v[0]);
            // print_r($v[1]);
            // print_r($v[2]);

        ?>
    </pre>    
</body>
</html>
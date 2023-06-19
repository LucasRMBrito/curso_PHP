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
            require_once 'Pessoa.php';
            require_once 'Livro.php';

            $p[0] = new Pessoa("Lucas", 30, "M");
            $p[1] = new Pessoa("Nathalia", 26, "F");
            
            $l[0] = new Livro("Miranha 01", "Stan Lee", 50, $p[0]);
            $l[1] = new Livro("A seleção", "Desconhecido", 300, $p[1]);

            echo "<br>";

            $l[0]->abrir();
            $l[0]->folhear(15);
            $l[0]->voltarPag();
            $l[0]->detalhes();  
            
            echo"<hr>";

            $l[1]->abrir();
            $l[1]->folhear(56);
            $l[1]->voltarPag();
            $l[1]->detalhes();  

        ?>
    </pre>
</body>
</html>
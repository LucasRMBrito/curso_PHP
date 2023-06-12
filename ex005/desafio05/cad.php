<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        
    </header>
    <main>
        <h1>Analisador de numero Real</h1>
        <?php 
            $num = $_POST["numero"];
            
            echo "<p>Analisando o numero <strong>" . number_format($num, 3, ",", ".") . "</strong> informado pelo usuario:</p>";

            $int = (int)$num;
            $fra = $num - $int;

            print "<ul><li> A parte inteira do numero é <strong>". number_format($int, 0, ",", ".") ."</strong></li>";
            echo "<li> A parte fracionária do numero é <strong>" . number_format($fra, 3, ",", ".") . "</strong></li></ul>"
        ?>
        <button onclick='javascript:history.go(-1)'>Voltar</button>
    </main>
    
</body>
</html>
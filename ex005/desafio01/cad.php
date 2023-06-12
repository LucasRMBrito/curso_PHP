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
        <h1>Resultado final</h1>
        <?php 
            $num = $_GET["numero"];
            $antecessor = $num - 1;
            $sucessor = $num + 1;
            echo "<p>O numero escolhido foi <strong>$num</strong></p>";
            print "<p>O seu antecessor é $antecessor</p>";
            echo "<p>O seu sucessor é $sucessor</p>"
        ?>
        <button onclick="javascrip:window.location.href='index.html'"> &#x2B05; Voltar</button>
    </main>
    
</body>
</html>
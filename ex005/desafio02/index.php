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
        <h1>Trabalhando com numeros aleatorios</h1>
        <?php 
            $gera = mt_rand(1,100);
            echo "<p>Gerando um numero aleatorio entre 0 e 100...</p>";
            print "<p>O valor gerado foi <strong>$gera</strong></p>";

        ?>
        <button onclick="javascript:window.location.href='index.php'">&#x1F504; Gerar outro</button>
    </main>
    
</body>
</html>
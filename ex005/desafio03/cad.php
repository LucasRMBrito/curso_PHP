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
            $cotacao = 4.88;
            $dolar = $num / $cotacao;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Seus ". numfmt_format_currency($padrao, $num, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
            print "<p><strong>Cotacao fixa de R$ $cotacao</strong> informada diretamente no codigo.</p>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
    
</body>
</html>
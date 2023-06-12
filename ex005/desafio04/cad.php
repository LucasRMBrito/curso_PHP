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
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
            //var_dump($dados);
            $cota = $dados["value"][0]["cotacaoCompra"];
            //echo "A cotacao foi $cota";
            $dolar = $num / $cota;
            
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            

            echo "<p>Seus ". numfmt_format_currency($padrao, $num, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
            print "<p><strong>Cotacao fixa de " . numfmt_format_currency($padrao, $cota, "BRL") . "</strong> informada diretamente no codigo.</p>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
    
</body>
</html>
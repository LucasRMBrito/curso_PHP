<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio PHP</title>
</head>
<body>

    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <pre>
        <?php 
            class Caneta {
                public $modelo;
                public $cor;
                private $ponta;
                protected $carga;
                protected $tampada;

                public function __construct($modelo,$cor,$ponta,$carga){ //pode ter o mesmo nome da classe >>> Caneta
                    $this->modelo = $modelo;
                    $this->cor = $cor;
                    $this->ponta = $ponta;
                    $this->carga = $carga;
                    $this->tampar();
                }

                public function getModelo(){
                    return $this->modelo;
                }

                public function setModelo($m){
                    $this->modelo = $m;
                }

                public function getPonta(){
                    return $this->ponta;
                }

                public function setPonta($p){
                    $this->ponta = $p;
                }

                public function rabiscar(){
                    if ($this->tampada == true){
                        print "<p>Erro, a caneta está tampada!</p>";
                    } else {
                        echo '<p>estou rabiscando...</p>';
                    }
                }

                public function tampar(){
                    $this->tampada = true;
                }

                public function destampar(){
                    $this->tampada = false;
                }
            }

            
            $c1 = new Caneta("Bic Cristal", "Azul", 0.5, 100);
            $c2 = new Caneta("BIC", "Vermelha", 1, 50);

            print_r($c1);
            echo'<br>';
            print_r($c2);
            print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}"
            
        ?>
    </pre>
    </section>
    
</body>
</html>
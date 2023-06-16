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
        <h2>Controle Remoto</h2>
        
        <pre>
        <?php 
            interface Controlador {
                public function ligar();
                public function desligar();
                public function abrirMenu();
                public function fecharMenu();
                public function maisVolume();
                public function menosVolume();
                public function ligarMudo();
                public function desligarMudo();
                public function play();
                public function pause();
            }

            class ControleRemoto implements Controlador {
                //Atributos
                private $volume;
                private $ligado;
                private $tocando;

                public function __construct(){
                    $this->volume = 50;
                    $this->ligado = false;
                    $this->tocando = false;
                }

                private function getVolume(){
                    return $this->volume;
                }

                private function setVolume($v){
                    $this->volume = $v;
                }

                private function getLigado(){
                    return $this->ligado;
                }

                private function setLigado($l){
                    $this->ligado = $l;
                }

                private function getTocando(){
                    return $this->tocando;
                }
                
                private function setTocando($t){
                    $this->tocando = $t;
                }

                public function ligar(){
                    $this->setLigado(true);
                    $this->setTocando(true);
                }

                public function desligar(){
                    $this->setLigado(False);
                }

                public function abrirMenu(){
                    echo "<br>Está ligado?: " . ($this->getLigado()?"SIM":"NÃO");
                    echo "<br>Está tocando? " . ($this->getTocando()?"SIM":"NÃO");
                    echo "<br>Volume: " . $this->getVolume(). " ";
                    for($i = 0; $i < $this->getVolume(); $i += 10){
                        echo "|";
                    }
                    echo "<br>";
                }

                public function fecharMenu(){
                    echo "<br>Fechando Menu...";
                }

                public function maisVolume(){
                    if ($this->getLigado()){
                        $this->setVolume($this->getVolume() + 10);
                    } else {
                        echo "<p>Tv desligada, impossivel aumentar o volume!</p>";
                    }
                }

                public function menosVolume(){
                    if ($this->getVolume()){
                        $this->setVolume($this->getVolume() - 10);
                    }
                }

                public function ligarMudo(){
                    if ($this->getLigado() && $this->getVolume() > 0){
                        $this->setVolume(0);
                    }
                }

                public function desligarMudo(){
                    if ($this->getLigado() && $this->getVolume() == 0){
                        $this->setVolume(50);
                    }
                }

                public function play(){
                    if($this->getLigado() && !($this->getTocando())){
                        $this->setTocando(true);
                    }
                }

                public function pause(){
                    if ($this->getLigado() && $this->getTocando()){
                        $this->setTocando(false);
                    }
                }
            }            
            
            
            $c = new ControleRemoto();
            $c->ligar();
            $c->maisVolume();
            $c->abrirMenu();


            echo "<br>";

            print_r($c);
    
            
        ?>
        </pre>

    </section>
    
</body>
</html>
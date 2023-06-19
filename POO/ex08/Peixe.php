<?php 
    require_once 'Animal.php';

    class Peixe extends Animal {
        
        private $corEscama;

        function locomover(){
            echo "<p>Nadando!</p>";
        }

        function alimentar(){
            echo "<p>Comendo substâncias</p>";
        }

        function emitirSom(){
            echo "<p>Peixe não faz Som</p>";
        }

        function soltarBolha(){
            echo "<p>Soltou uma bolha</p>";
        }

        function setCorEscama($escama){
            $this->corEscama = $escama;
        }

        function getCorEscama(){
            return $this->corEscama;
        }
    }
?>
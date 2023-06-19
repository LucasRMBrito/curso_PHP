<?php 
    require_once 'Animal.php';

    class Reptil extends Animal {

        private $corEscama;
        
        function locomover(){
            echo "Rastejando!";
        }

        function alimentar(){
            echo "Comer Vegetais";
        }

        function emitirSom(){
            echo "Som de Réptil";
        }

        function setCorEscama($cor){
            $this->corEscama = $cor;
        }

        function getCorEscama(){
            return $this->corEscama;
        }
    }
?>
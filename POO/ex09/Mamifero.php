<?php 
    require_once 'Animal1.php';

    class Mamifero extends Animal1 {
        
        protected $corPelo;

        function emitirSom(){
            echo "<p>Som de Mamífero</p>";
        }

        function setCorPelo($pelo){
            $this->corPelo = $pelo;
        }

        function getCorPelo(){
            return $this->corPelo;
        }
    }
?>
<?php 

    require_once 'Mamifero.php';

    class Canguru extends Mamifero {

        function usarBolsa(){
            echo "Usando Bolsa";
        }

        function locomover(){
            echo "<p>Saltando!</p>";
        }
    }
?>
<?php 
    require_once 'Mamifero.php';

    class Cachorro extends Mamifero {

        function enterrarOsso(){
            echo "<p>Enterrando Osso!</p>";
        }

        function abanarRabo(){
            echo "<p>Abanando o Rabo!</p>";
        }
    }
?>
<?php 
    require_once 'Lobo.php';

    class Cachorro extends Lobo {

        function emitirSom()
        {
            echo "<p>Au Au Au!</p>";
        }

        function reagir($frase){
            if ($frase == "toma comida" or $frase == "olá"){
                echo "Abanar e Latir";
            } else {
                echo "rosnar";
            }
        }

        // function reagir($hora, $min){
        //     if($hora < 12 ){
        //         echo "Abanar";
        //     } elseif ($hora >= 18){
        //         echo "Ignrar";
        //     } else {
        //         echo "Abanar e Latir"
        //     }
        // }

    }
?>
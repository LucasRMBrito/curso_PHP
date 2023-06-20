<?php 
    require_once 'Lobo.php';

    class Cachorro extends Lobo {

        function emitirSom()
        {
            echo "<p>Au Au Au!</p>";
        }

        function reagirFrase($frase){
            if ($frase == "toma comida" || $frase == "olá"){
                echo "Abanar e Latir";
            } else {
                echo "rosnar";
            }
        }

        function reagirHora($hora, $min){
            if($hora < 12 ){
                echo "Abanar";
            } elseif ($hora >= 18){
                echo "Ignrar";
            } else {
                echo "Abanar e Latir";
            }
        }

        function reagirDono($dono){
            if ($dono) {
                echo "<p>Abanar</p>";
            } else {
                echo "<p>Rosnar e Latir</p>";
            }
        }

        function reagirIdadePeso($idade, $peso){
            if ($idade < 5){
                if ($peso < 10) {
                    echo "<p>Abanar</p>";
                } else {
                    "<p>Latir</p>";
                }
            } else {
                if ($peso < 10) {
                    echo "Rosnar";
                } else {
                    echo "<p>Ignorar</p>";
                }
            } 
        }

    }
?>
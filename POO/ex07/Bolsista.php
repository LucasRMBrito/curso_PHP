<?php 
    require_once 'Aluno.php';

    class Bolsista extends Aluno {
        private $bolsa;

        public function renovarBolsa(){
            echo "<p>Bolsa renovada!</p>";
        }

        function pagarMensalidade(){
            echo "<p><strong>". $this->nome . "</strong> é bolsista! Então paga com desconto!</p>";
        }

        function setBolsa($bolsa){
            $this->bolsa = $bolsa;
        }

        function getBolsa(){
            return $this->bolsa;
        }
    }
?>
<?php 

    require_once 'Pessoa2.php';

    class Aluno extends Pessoa2 {

        private $matricula;
        private $curso;

        public function pagarMensalidade(){
            echo "<p>Pagando mensalidade do aluno <strong>". $this->nome . "</strong></p>";
        }

        function setMatr($matricula){
            $this->matricula = $matricula;
        }

        function getMatr(){
            return $this->matricula;
        }

        function setCurso($curso){
            $this->curso = $curso;
        }

        function getCurso(){
            return $this->curso;
        }
    }
?>
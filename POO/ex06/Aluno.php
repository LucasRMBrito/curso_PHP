<?php 

    require_once 'Pessoa1.php';

    class Aluno extends Pessoa1 {

        private $matricula;
        private $curso;

        function cancelarMatr(){
            echo "Matrícula será cancelada!";
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
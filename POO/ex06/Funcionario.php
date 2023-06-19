<?php 
    require_once 'Pessoa1.php';

    class Funcionario extends Pessoa1 {
        private $setor;
        private $trabalhando;

        function mudarTrabalho(){
            $this->trabalhando = ! $this->trabalhando;
        }

        function setSetor($setor){
            $this->setor = $setor;
        }

        function getSetor(){
            return $this->setor;
        }

        function setTrabalhando($trabalhando){
            $this->trabalhando = $trabalhando;
        }

        function getTrabalhando(){
            return $this->trabalhando;
        }
    }
?>
<?php 
    abstract class Animal1 {
        protected $peso;
        protected $idade;
        protected $membros;

        abstract function emitirSom();

        function setPeso($peso){
            $this->peso = $peso;
        }

        function getPeso(){
            return $this->peso;
        }

        function setIdade($idade){
            $this->idade = $idade;
        }

        function getIdade(){
            return $this->idade;
        }

        function setMembros($membros){
            $this->membros = $membros;
        }

        function getMembros(){
            return $this->membros;
        }
    }
?>
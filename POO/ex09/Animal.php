<?php 
    abstract class Animal {
        protected $peso;
        protected $idade;
        protected $membros;
        // abstract function locomover();
        // abstract function alimentar();
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
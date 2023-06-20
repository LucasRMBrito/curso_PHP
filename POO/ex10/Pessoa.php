<?php 
    abstract class Pessoa {
        protected $nome;
        protected $idade;
        protected $sexo;
        protected $experiencia;

        function __construct($nome, $idade, $sexo){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
            $this->experiencia = 0;
        }

        protected function ganharExp($n){
            $this->experiencia += $n;
        } 

        function setNome($nome){
            $this->nome = $nome;
        }

        function getNome(){
            return $this->nome;
        }

        function setIdade($idade){
            $this->idade = $idade;
        }

        function getIdade(){
            return $this->idade;
        }

        function setSexo($sexo){
            $this->sexo =$sexo;
        }

        function getSexo(){
            return $this->sexo;
        }

        function setExperiencia($xp){
            $this->experiencia = $xp;
        }

        function getExperiencia(){
            return $this->experiencia;
        }

    }
?>
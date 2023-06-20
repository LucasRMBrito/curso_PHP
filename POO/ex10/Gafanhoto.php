<?php 
    require_once 'Pessoa.php';

    class Gafanhoto extends Pessoa {
        private $login;
        private $totAssistido;

        function __construct($nome, $idade, $sexo, $login){
            parent::__construct($nome, $idade, $sexo);
            $this->login = $login;
            $this->totAssistido = 0;
        }

        function assistirMaisUm(){
            $this->totAssistido ++;
        }

        function setTotAssistido($total){
            $this->totAssistido = $total;
        }

        function getTotAssistido(){
            return $this->totAssistido;
        }
    }
?>
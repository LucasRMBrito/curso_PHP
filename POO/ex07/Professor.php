<?php 
    require_once 'Pessoa2.php';

    class Professor extends Pessoa2 {
        private $especialidade;
        private $salario;

        function receberAumento($aumeto){
            $this->salario = $this->getSalario() + $aumeto;
        }

        function setEspecialidade($especialidade){
            $this->especialidade = $especialidade;
        }

        function getEspecialidade(){
            return $this->especialidade;
        }

        function setSalario($salario){
            $this->salario = $salario;
        }

        function getSalario(){
            return $this->salario;
        }
    }
?>
<?php 
    require_once 'Pessoa1.php';

    class Professor extends Pessoa1 {
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
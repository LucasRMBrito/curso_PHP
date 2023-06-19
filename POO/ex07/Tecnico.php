<?php 
    require_once 'Aluno.php';

    class Tecnico extends Aluno {
        private $registroProfisional;

        function praticar(){
            echo "Estou praticanto";
        }

        function setRegistroProfissional($regProf){
            $this->registroProfisional = $regProf;
        }

        function getRegistroProfissional(){
            return $this->registroProfisional;
        }
    }
?>
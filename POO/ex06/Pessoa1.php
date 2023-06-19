<?php 

class Pessoa1 {
    
    private $nome;
    private $idade;
    private $sexo;
    
    public function fazerAniversaro(){
        $this->idade ++;
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
        $this->sexo = $sexo;
    }

    function getSexo(){
        return $this->sexo;
    }

}

?>
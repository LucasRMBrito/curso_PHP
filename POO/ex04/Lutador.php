<?php 

    class Lutador {
        //ATRIBUTOS
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias, $derrotas, $empates;

        //METODOS ESPECIAIS
        public function __construct(
            $no, $na, $id, $al, $pe, $vi, $de, $en
        ){
            $this->nome = $no;
            $this->nacionalidade = $na;
            $this->idade = $id;
            $this->altura = $al;
            $this->setPeso($pe);
            $this->vitorias = $vi;
            $this->derrotas = $de;
            $this->empates = $en;
        }

        function setNome($nome){
            $this->nome = $nome;
        }

        function getNome(){
            return $this->nome;
        }

        function setNacionalidade($nacional){
            $this->nacionalidade = $nacional;
        }

        function getNacionalidade(){
            return $this->nacionalidade;
        }

        function setIdade($idade){
            $this->idade = $idade;
        }

        function getIdade(){
            return $this->idade;
        }

        function setAltura($altura){
            $this->altura = $altura;
        }

        function getAltura(){
            return $this->altura;
        }

        function setPeso($peso){
            $this->peso = $peso;
            $this->setCategoria();
            
        }

        function getPeso(){
            return $this->peso;
        }

        function setCategoria(){
            if ($this->peso < 52.2){
                $this->categoria = "Invalido";
            } elseif ($this->peso <= 70.3){
                $this->categoria = "Leve";
            } elseif ($this->peso <= 83.9){
                $this->categoria = "Médio";
            } elseif ($this->peso <= 120.2){
                $this->categoria = "Pesado";
            } else {
                $this->categoria = "Invalido";
            }
        }

        function getCategoria(){
            return $this->categoria;
        }

        function setVitorias ($vitoria){
            $this->vitorias = $vitoria;
        }

        function getVitorias (){
            return $this->vitorias;
        }

        function setDerrotas ($derrota){
            $this->derrotas = $derrota;
        }

        function getDerrotas (){
            return $this->derrotas;
        }

        function setEmpates ($empate){
            $this->empates = $empate;
        }

        function getEmpates (){
            return $this->empates;
        }

        //METODOS
        function apresentar(){
            echo "<p>--------------------------</p>";
            echo "<p>CHEGOU A HORA : O lutador " . $this->getNome();
            echo " veio diretamente de ". $this->getNacionalidade();
            echo " Tem ". $this->getIdade() . " anos e pesa ". $this->getPeso() . "Kg";
            echo "<br>Ele tem " . $this->getVitorias() . " vitórias ";
            echo $this->getDerrotas() . " derrotas e ". $this->getEmpates() . " empates.";
        }

        function status(){
            echo "<p>--------------------------</p>";
            echo "<p>". $this->getNome() ." é um peso " . $this->getCategoria();
            echo " e já ganhou ". $this->getVitorias() . " vezes e ";
            echo "perdeu ". $this->getDerrotas(). " vezes e ";
            echo "empatou ". $this->getEmpates() . " vezes!</p>";
        }

        function ganharLuta(){
            $this->setVitorias($this->getVitorias() + 1);
            // $this->vitorias = $this->vitorias + 1;
        }

        function perderLuta(){
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);
        }
    }

?>
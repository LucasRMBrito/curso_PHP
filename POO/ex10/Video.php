<?php 

require_once 'AcoesVideo.php';
    
    class Video implements AcoesVideo {
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;

        function __construct($titulo){
            $this->titulo = $titulo;
            $this->avaliacao = 1;
            $this->views = 0;
            $this->curtidas = 0;
            $this->reproduzindo = false;
        }

        function setTitulo($t){
            $this->titulo = $t;
        }

        function getTitulo(){
            return $this->titulo;
        }

        function setAvaliacao($a){
            $media = ($this->avaliacao + $a)/$this->views;
            $this->avaliacao = $media;
        }

        function getAvaliacao(){
            return $this->avaliacao;
        }

        function setViews($v){
            $this->views = $v;
        }

        function getViews(){
            return $this->views;
        }

        function setCurtidas($c){
            $this->curtidas = $c;
        }

        function getCurtidas(){
            return $this->curtidas;
        }

        function setReproduzindo($r){
            $this->reproduzindo = $r;
        }

        function getReprodizindo(){
            return $this->reproduzindo;
        }

        function play(){
            $this->reproduzindo = true;
        }

        function pause(){
            $this->reproduzindo = false;
        }

        function like(){
            $this->curtidas ++;
        }
    }
?>
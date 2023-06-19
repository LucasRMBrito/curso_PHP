<?php 

require_once 'Pessoa.php';
require_once 'Publicacao.php';

    class Livro implements Publicacao {

        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;
        
        public function detalhes(){
            echo "Livro " . $this->titulo . " escrito por ". $this->autor;
            echo "<br> Páginas: ". $this->totPaginas ." atual ". $this->pagAtual;
            echo "<br> Sendo lido por ". $this->leitor->getNome();
        }

        function __construct(
            $titulo, $autor, $totPaginas, $leitor
        )
        {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas = $totPaginas;
            $this->aberto = false;
            $this->pagAtual = 0;
            $this->leitor = $leitor;
        }

        function setTitulo($titulo){
            $this->titulo = $titulo;
        }

        function getTitulo(){
            return $this->titulo;
        }

        function setAutor($autor){
            $this->autor = $autor;
        }

        function getAutor(){
            return $this->autor;
        }

        function setTotalPaginas($totPaginas){
            $this->totPaginas = $totPaginas;
        }

        function getTotalPaginas(){
            return $this->totPaginas;
        }

        function setPagAtual($pagAtual){
            $this->pagAtual = $pagAtual;
        }

        function getPagAtual(){
            return $this->pagAtual;
        }

        function setAberto($aberto){
            $this->aberto = $aberto;
        }

        function getAberto(){
            return $this->aberto;
        }

        function setLeitor($leitor){
            $this->leitor = $leitor;
        }

        function getLeitor(){
            return $this->leitor;
        }

        public function abrir(){
                $this->aberto = true;
        }

        public function fechar(){
            $this->aberto = false;
        }

        public function folhear($p){
            if($p > $this->totPaginas){
                $this->pagAtual = 0;
            } else {
                $this->pagAtual = $p;
            }
        }

        public function avancarPag(){
            $this->pagAtual ++;
        }

        public function voltarPag(){
            $this->pagAtual --;
        }

    }
?>
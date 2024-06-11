<?php 
    require_once "../control/connection.php";
    class Books{
        private $codLivro;
        private $ativo;
        private $titulo;
        private $autor;
        private $editora;
        private $genero;
        private $quantidade;

        public function getCodLivro(){
            return $this->codLivro;
        }

        public function setCodLivro($codLivro){
            return $this->codLivro = $codLivro;
        }

        public function getAtivo(){
            return $this->ativo;
        }

        public function setAtivo($ativo){
            return $this->ativo = $ativo;
        }

        public function getTitulo(){
            return $this->titulo;
        }

        public function setTitulo($titulo){
            return $this->titulo = $titulo;
        }

        public function getAutor(){
            return $this->autor;
        }

        public function setAutor($autor){
            return $this->autor = $autor;
        }

        public function getEditora(){
            return $this->editora;
        }

        public function setEditora($editora){
            return $this->editora = $editora;
        }

        public function getGenero(){
            return $this->genero;
        }

        public function setGenero($genero){
            return $this->genero = $genero;
        }

        public function getQuantidade(){
            return $this->quantidade;
        }

        public function setQuantidade($quantidade){
            return $this->quantidade = $quantidade;
        }

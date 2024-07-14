<?php 
require_once '../model/booksModel.php';

    class BooksControl{
        private $books;

        public function __construct(){
            $this->books = new BooksModel();
        }

        public function viewAllDatas($inicio, $limite){
            return  $datas = $this->books->getDatas($inicio, $limite);
        }

        public function countAllDatas(){
            return  $datas = $this->books->countDatas();
        }

        public function getBook($Cod_livro){
            return  $datas = $this->books->getBook($Cod_livro);
        }
    }
?>
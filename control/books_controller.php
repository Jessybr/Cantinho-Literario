<?php 
require_once '../model/books.php';

    class BooksControler extends Books{

        public function viewAllDatas($inicio, $limite){
            $books = new Books;
            return  $datas = $books->getDatas($inicio, $limite);
        }

        public function countAllDatas(){
            $books = new Books;
            return  $datas = $books->countDatas();
        }
    }
?>
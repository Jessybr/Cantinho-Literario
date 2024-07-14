<?php 
require_once '../model/booksModel.php';

    class BooksControl{
        private $books;

        public function __construct(){
            $this->books = new BooksModel();
        }

    }
?>
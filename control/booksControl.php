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

        public function updateBook($Cod_livro, $Foto, $Titulo, $Autor, $Editora, $Genero, $Quantidade){
            $result = $this->books->updateBook($Cod_livro, $Foto, $Titulo, $Autor, $Editora, $Genero, $Quantidade);
            

            if($result == TRUE) {
                echo '<script>window.location.href = "./livros.php"</script>';
            }else{
                echo '<script>alert("Erro ao atualizar o livro")</script>';
            }
        }
    }
?>

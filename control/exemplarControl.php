<?php 
require '../model/exemplarModel.php';

    class ExemplarControl{
        private $exemplar;

        public function __construct(){
            $this->exemplar = new ExemplarModel();
        }

        public function getQuanttdExemplar($Cod_livro){
            return  $datas = $this->exemplar->getQuantddExemplar($Cod_livro);
        }
        

        public function updateQuantddExemplares($Cod_livro, $Titulo, $Autor, $Editora, $Genero, $Quantidade){
            $result = $this->exemplar->updateQuantidadeExemplares($Cod_livro, $Titulo, $Autor, $Editora, $Genero, $Quantidade);
        
            if($result === FALSE) {
                echo '<script>alert("Erro ao atualizar o exemplar")</script>';
            }else{
                echo '<script>alert("Exemplar atualizado com sucesso")</script>';
            }
        }        
        
    }

?>
<?php 
    require_once "../database/connection.php";
    class BooksModel{
        private $conn;

        public function __construct(){
            $database = new Connection;
            $this->conn = $database->getConnection();
        }

        public function getDatas($inicio, $limite){
            $datas = [];

            try{
                $sql = "SELECT * FROM tb_livro LIMIT $inicio, $limite";
                $pdo = $this->conn->prepare($sql);
                $pdo->execute();
            
                while($result = $pdo->fetch(PDO::FETCH_ASSOC)){
                    $datas[] = $result;
                }
                return $datas;
            }catch(PDOexception $e){
                echo $e->getMessage();
            }
        }

        public function countDatas(){
            try{
                $sql = "SELECT COUNT(*) as total FROM tb_livro";
                $pdo = $this->conn->prepare($sql);
                $pdo->execute();
                $row = $pdo->fetch(PDO::FETCH_ASSOC);
                $total_registros = $row['total'];
                return $total_registros;
            }catch(PDOexception $e){
                echo $e->getMessage();
            }
        }

        public function getBook($Cod_livro){
            //$datas = [];

            try{
                $sql = "SELECT * FROM tb_livro WHERE Cod_livro = $Cod_livro";
                $pdo = $this->conn->prepare($sql);
                $pdo->execute();
            
                // while($result = $pdo->fetch(PDO::FETCH_ASSOC)){
                //     $datas[] = $result;
                // }
                return $pdo;
            }catch(PDOexception $e){
                echo $e->getMessage();
            }
        }
    }
?>
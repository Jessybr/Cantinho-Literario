<?php 
    require_once "../database/connection.php";
    class ExemplarModel{
        private $conn;

        public function __construct(){
            $database = new Connection;
            $this->conn = $database->getConnection();
        }

        public function getDatas($inicio, $limite){
            $datas = [];

            try{
                $sql = "SELECT * FROM tb_exemplar LIMIT $inicio, $limite";
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

        public function getQuantddExemplar($Cod_livro){
            try {
                $sql = "SELECT * FROM tb_exemplar WHERE Cod_livro = :Cod_livro";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam(':Cod_livro', $Cod_livro, PDO::PARAM_INT);
                $stmt->execute();
                $quantidade = $stmt->rowCount();
                return $quantidade;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function updateQuantidadeExemplares($Cod_livro, $Titulo, $Autor, $Editora, $Genero, $Quantidade) {
            $quantdd = $this->getQuantddExemplar($Cod_livro);
            
            if($Quantidade > $quantdd) {
                $novaQtdd = $Quantidade - $quantdd;
                
                for($i = 0; $i < $novaQtdd; $i++) {
                    try {
                        $sql = "INSERT INTO tb_exemplar (Cod_livro, Titulo, Autor, Editora, Genero) 
                                VALUES (:Cod_livro, :Titulo, :Autor, :Editora, :Genero)";
                        $pdo = $this->conn->prepare($sql);
                        $pdo->bindParam(':Cod_livro', $Cod_livro);
                        $pdo->bindParam(':Titulo', $Titulo, PDO::PARAM_STR);
                        $pdo->bindParam(':Autor', $Autor, PDO::PARAM_STR);
                        $pdo->bindParam(':Editora', $Editora, PDO::PARAM_STR);
                        $pdo->bindParam(':Genero', $Genero, PDO::PARAM_STR);
                        $pdo->execute();
                    } catch (PDOException $e) {
                        echo $e->getMessage();
                    }
                }
            }
        }
        
    }
?>
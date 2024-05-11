<?php 
class Connection {
    private $pdo;

    public function start() {
        try{
            $this->pdo = new PDO('mysql:host=localhost;dbname=db_biblioteca', "root", "");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOexception $e){
            echo $e->getMessage();
        }
        
    }

    public function selectFuncionario($email, $senha) {
        $sql = "SELECT * FROM tb_funcionario WHERE Email = :email AND Senha = :senha";
        $stmt = $this->pdo->prepare($sql);

        try {
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch(PDOException $e) {
            echo $e->getMessage();
            return null; // Retorna nulo em caso de erro
        }
    }
}

?>
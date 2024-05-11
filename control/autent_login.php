<?php 
require_once "../control/connection.php";

class Login{
    private $email;
    private $senha;
    private $nome;
    private $connect;

    function __construct($email, $senha) {
        $this->email = $email;
        $this->senha = $senha;
    }

    function dbConnect(){
        $this->connect = new Connection;
        $this->connect->start();
    }

    function autenticar(){
        $this->dbConnect();
        $logar = $this->connect->selectFuncionario($this->email, $this->senha);
        if($logar != NULL){
            header("Location: ../view/home.php");
        }else{
            echo '<script>alert("Login ou senha errados")</script>';
        }
    }
}

?>
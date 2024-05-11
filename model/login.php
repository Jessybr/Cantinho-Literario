<?php
include "../control/autent_login.php";

$email = $_POST['email']? $_POST['email']:"";
$senha = $_POST['senha']? $_POST['senha']:"";

if(!empty($email) && !empty($senha)){
    $login = new Login($email, $senha);
    $login->autenticar();
}else{
   echo '<script>alert("Erro")</script>';
}

?>
<?php
@$username = trim($_POST["usuario"]);
@$senha = trim($_POST["senha"]);
@$email = trim($_POST["email"]);


if(strlen($username) == 0 || strlen(($senha)==0) ||  strlen(($email)==0) ){
    header("Location: erro.php");
   exit(0);
} 

$con = new mysqli("localhost", "root","","login");
$sql = "INSERT INTO usuarios VALUES (null,'$username','$email', '$senha')";
$result = $con->query($sql);

  
if(!$result){
    header("Location: erro.php");
    exit(0);

} else{
    setcookie("usuario", "$username");
    setcookie("senha", "$senha");
    header("Location: primeira.php");
    exit(0);
}

?>
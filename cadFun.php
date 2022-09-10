<?php include("conn.php");
include("validaregistro.php");

@$nome = trim($_POST["nome"]);
@$sobrenome = trim($_POST["sobrenome"]);
@$idade= trim($_POST["idade"]);
@$setor = trim($_POST["setor"]);
@$email = trim($_POST["email"]);
@$telefone = trim($_POST["telefone"]);

$sql = "INSERT INTO funcionarios VALUES(null,'$nome','$sobrenome',$idade,'$setor', '$email', '$telefone')";
$result = $conn->query($sql);
if(!$result){
    header("Location: erro.php");
    exit(0);

} else{
     header("Location: funcionarios.php");
     exit(0);
}
?>

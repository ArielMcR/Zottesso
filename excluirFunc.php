<?php 
require_once("validaregistro.php");
require_once("conn.php");
$id = $_GET['id'];
$sql = "DELETE FROM funcionarios WHERE id = '$id'";
$result = $conn->query($sql);

if ($result){
    header("location: funcionarios.php");
    }
    else {
        header("location: erro.php");
    }
    $con->close();
    ?>


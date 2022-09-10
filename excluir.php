<?php 
require_once("validaregistro.php");
require_once("conn.php");
$id = $_GET['id'];
$sql = "DELETE FROM vendas WHERE id = '$id'";
$result = $conn->query($sql);

if ($result){
    header("location: vendas.php");
    }
    else {
        header("location: error.php");
    }
    $con->close();
    ?>


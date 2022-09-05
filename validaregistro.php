<?php

$nome = $_COOKIE["usuario"];
$senha = $_COOKIE["senha"];

$con = new mysqli("localhost", "root", "", "login");
$sql = "SELECT * FROM usuarios WHERE nome='$nome' AND senha='$senha'";
$roda = $con->query($sql);

if ($roda->num_rows != 1) {
    header("Location: erro.php");
    exit(0);
}



?>
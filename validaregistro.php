<?php
session_start();

$nome = $_SESSION['usuario'];
$senha = $_SESSION["senha"];

$con = new mysqli("localhost", "root", "", "login");
$sql = "SELECT * FROM usuarios WHERE nome='$nome' AND senha='$senha'";
$roda = $con->query($sql);

if ($roda->num_rows != 1) {
    header("Location: erro.php");
    exit(0);
}



?>
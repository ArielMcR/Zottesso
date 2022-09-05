<?php
setcookie("usuario", "", time() - 3600);
setcookie("senha", "", time() - 3600);
unset($_COOKIE["nome"]);
unset($_COOKIE["senha"]);
header("Location: index.php");


?>
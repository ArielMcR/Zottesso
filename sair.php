<?php
/*setcookie("usuario", "", time() - 3600);
setcookie("senha", "", time() - 3600);
unset($_COOKIE["nome"]);
unset($_COOKIE["senha"]);
header("Location: index.php");
*/
session_start();
session_unset();
session_destroy();
header("Location: index.php");
?>
<?php
// Iniciar a sessão
session_start();
 
// Desmarque todas as variáveis ​​de sessão
$_SESSION = array();
 
// Destroir a sessão
session_destroy();
 
// Redirecionar para a página do Login
header("location: login.php");
exit;
?>
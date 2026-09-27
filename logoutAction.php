<?php
// Garante que a sessão está ativa antes de destruí-la
require_once('verificarAcesso.php');

// Remove a variável de sessão específica de controlo de acesso
unset($_SESSION['logado']);

// Redireciona o navegador para a página de login inicial
header("location:index.php");
die();
?>
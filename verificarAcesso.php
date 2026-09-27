<?php
/* 
 * Verifica se a sessão do PHP ainda não foi iniciada. 
 * Caso não esteja ativa, inicializa o gerenciamento de sessões.
 */
if (!isset($_SESSION)) {
    session_start();
}

/* 
 * Valida se a variável global de controle de autenticação ('logado') existe.
 * Se o usuário tentar acessar uma página protegida sem ter feito o login,
 * a função 'header' o redireciona imediatamente para a página de acesso negado,
 * e a função 'die' encerra a execução do script para impedir brechas de segurança.
 */
if (!isset($_SESSION['logado'])) {
    header('location: acessoNegado.php');
    die();
}
?>
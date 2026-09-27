<?php
$servername = "localhost";
$username = "root";

// Para ambientes locais utilizando o XAMPP, a senha padrão do MySQL costuma ser vazia.
// Caso o servidor de produção exija, insira a senha correspondente entre as aspas.
$password = ""; 

$dbname = "pwii";

// Criando a conexão com o banco de dados
$conexao = new mysqli($servername, $username, $password, $dbname);

// Checando se houve algum erro na conexão e interrompendo em caso de falha
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

// Configurando o charset para aceitar acentuação corretamente
$conexao->set_charset("utf8");
?>
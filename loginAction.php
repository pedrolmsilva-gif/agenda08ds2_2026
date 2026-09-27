<?php
// Inicia a sessão para permitir o armazenamento e rastreio de dados do usuário autenticado
session_start();

// Captura os dados enviados via método POST pelo formulário de autenticação
$nome = $_POST['txtNome'];
$senha = $_POST['txtSenha'];

/* 
 * Importa o arquivo externo 'conexaoBD.php' localizado no mesmo diretório. 
 * A utilização do 'require_once' garante que o script de conexão ao banco de dados 
 * MySQL seja incluído apenas uma vez, centralizando as credenciais e evitando 
 * redundâncias estruturais no código.
 */
require_once 'conexaoBD.php';

// Constrói a instrução SQL para buscar o registro correspondente ao nome informado
$sql = "SELECT * FROM professor WHERE nome = '" . $nome . "';";
$resultado = $conexao->query($sql);

// Converte o resultado da consulta em um array associativo para manipulação dos dados
$linha = mysqli_fetch_array($resultado);

// Verifica se o registro retornado não é nulo (ou seja, se o usuário existe)
if ($linha != null) {
    // Compara a senha fornecida no formulário com a senha armazenada na base de dados
    if ($linha['senha'] == $senha) {
        // Armazena o identificador do usuário em uma variável global de sessão
        $_SESSION['logado'] = $nome;
        
        // Exibe feedback visual de sucesso e direciona para a página restrita do sistema
        echo '<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
                <a href="professor.php" style="text-decoration: none;">
                    <h1 class="w3-button w3-green w3-block w3-round-large">Login Realizado com Sucesso!</h1>
                </a>
              </div>';
    } else {
        // Exibe feedback visual de erro caso a senha esteja incorreta
        echo '<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
                <a href="index.php" style="text-decoration: none;">
                    <h1 class="w3-button w3-red w3-block w3-round-large">Login Inválido (Senha incorreta)!</h1>
                </a>
              </div>';
    }
} else {
    // Exibe feedback visual de erro caso o nome de usuário não seja encontrado na base
    echo '<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
            <a href="index.php" style="text-decoration: none;">
                <h1 class="w3-button w3-red w3-block w3-round-large">Login Inválido (Usuário não encontrado)!</h1>
            </a>
          </div>';
}

// Fecha a conexão ativa com o servidor de banco de dados MySQL
$conexao->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Importação do framework CSS para padronização visual dos elementos de aviso -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Validando Login</title>
</head>
<body class="w3-black">
</body>
</html>
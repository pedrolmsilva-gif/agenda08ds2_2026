<?php 
// Impede o acesso direto via URL caso o utilizador não esteja autenticado
require_once('verificarAcesso.php');
require_once('cabecalho.php'); 
?>

<div class="w3-padding w3-content w3-half w3-display-topmiddle w3-margin">
    <h1 class="w3-center w3-green w3-margin">Professores</h1>
    <table class="w3-table-all w3-centered w3-text-black">
        <thead>
            <tr class="w3-center w3-green">
                <th>Código</th>
                <th>Nome</th>
                <th>Disciplina</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // Importa a conexão modular com a base de dados
        require_once 'conexaoBD.php';
        
        $conexao->set_charset("utf8");
        
        // Executa a consulta para selecionar todos os registos da tabela de professores
        $sql = "SELECT * FROM professor";
        $resultado = $conexao->query($sql);
        
        // Percorre os resultados utilizando a estrutura 'foreach' e exibe na tabela HTML
        if ($resultado != null) {
            foreach ($resultado as $linha) {
                echo '<tr>';
                echo '<td>' . $linha['idprofessor'] . '</td>';
                echo '<td>' . $linha['nome'] . '</td>';
                echo '<td>' . $linha['disciplina'] . '</td>';
                echo '</tr>';
            }
        }
        
        // Encerra a ligação ativa com a base de dados
        $conexao->close();
        ?>
        </tbody>
    </table>
</div>

<!-- Botão de Logout posicionado no canto inferior direito -->
<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-bottomright">
    <form action="logoutAction.php" class="w3-container" method="post">
        <button name="btnLogout" class="w3-button w3-red w3-cell w3-round-large w3-right w3-margin-right">
            <i class="w3-xxlarge fa fa-times-rectangle"></i> Logout
        </button>
    </form>
</div>

<?php 
require_once('rodape.php'); 
?>
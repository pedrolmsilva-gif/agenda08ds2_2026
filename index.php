<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Framework W3.CSS e ícones para o layout -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login - Sistema</title>
</head>
<body class="w3-black">

<div class="w3-container w3-round-xxlarge w3-display-middle w3-card-4 w3-third w3-dark-grey" style="">
    <div class="w3-center">
        <br>
        <!-- Ícone representativo do usuário para o cabeçalho do login -->
        <i class="fa fa-user-circle w3-margin-top" style="font-size: 5em; color: #4CAF50;"></i>
    </div>
    
    <!-- Formulário que envia os dados via POST para a página de ação de login -->
    <form class="w3-container" action="loginAction.php" method="post">
        <div class="w3-section">
            <label style="font-weight: bold;">Usuário</label>
            <input class="w3-input w3-border w3-margin-bottom w3-light-grey" type="text" placeholder="Digite o nome" name="txtNome" required>
            
            <label style="font-weight: bold;">Senha</label>
            <input class="w3-input w3-border w3-light-grey" type="password" placeholder="Digite a Senha" name="txtSenha" required>
            
            <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Entrar</button>
        </div>
    </form>
    <br>
</div>

</body>
</html>
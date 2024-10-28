<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Cadastro</title>
</head>

<body>
    <header>
        <nav>
            <div>
                <a href="index.php">
                    <img src="imagens/Logo_Cine3-removebg-preview.png" alt="Cine3 Logo" class="logo">
                </a>
            </div>
            <a href="login.php" class="back">VOLTAR</i></a>
        </nav>
    </header>
    <div class="container">
        <form>
                <div>
                    <h1>Cadastro</h1>
                </div>
            <!--campo de pree. usuario-->
            <label for="username">Nome de Usuário</label>
            <input type="text" id="username" name="username" required>
            <!--campo de pree. email-->
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <!--campo de pree. senha-->
            <label for="password">Senha</label>
            <div>
                <input type="password" id="password" name="password" required>
                 <!-- Ícone de olho -->
            </div>
            <!--campo de confirmação de senha-->
            <label for="confirm-password">Confirme sua senha</label>
            <div>
                <input type="password" id="confirm-password" name="confirm-password" required>
                 <!-- Ícone de olho -->
            </div>
            
            <!--campo de pree. cpf-->
            <label for="cpf">Digite seu CPF</label>
            <input type="text" id="cpf" name="cpf" required>
            <!--campo de pree. cep-->
            <label for="cep">Digite seu CEP</label>
            <input type="text" id="cep" name="cep" required>
            <!--campo de pree. termos de uso-->
            <div class="checkbox-container">
                <input type="checkbox"  id="privacy-policy" name="terms-of-use" required>
                <label for="terms-of-use"><a href="termos.php" 
                id="privacy-policy">Concordar com termos de uso?</a></label>
            </div>
            <!--campo de pree. termos de privacidade-->
            <div class="checkbox-container">
                <input type="checkbox" id="privacy-policy" name="privacy-policy" required>
                <label for="privacy-policy"><a href="#" id="privacy-policy"
                >Concordar com termos de privacidade?</a></label>
            </div>
            <!--campo de pree. botão-->
            <button class="button" type="submit" onclick="cadastro(event)">Cadastrar-se</button>
            <p class="login-link"><a href="login.php">Já tem uma conta?</a></p>
        </form>
        <div id="teste"></div>
    </div>

    <script src="javascript/cadastro.js"></script>
</body>
</html>
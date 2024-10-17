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
                <a href="principal.php">
                    <img src="imagens/Logo_Cine3-removebg-preview.png" alt="Cine3 Logo" class="logo">
                </a>
            </div>
            <a href="login.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
        </nav>
    </header>
    <div class="container">
        <form>
                <div>
                    <h1>Cadastro</h1>
                </div>
            <!--campo de pree. usuario-->
            <label for="username"><strong>Nome de Usuário</strong></label>
            <input type="text" id="username" name="username" required>
            <!--campo de pree. email-->
            <label for="email"><strong>Email</strong></label>
            <input type="email" id="email" name="email" required>
            <!--campo de pree. senha-->
            <label for="password"><strong>Senha</strong></label>
            <div>
                <input type="password" id="password" name="password" required>
                <i class="fa fa-eye" onclick="togglePasswordVisibility()"></i> <!-- Ícone de olho -->
            </div>
            <!--campo de confirmação de senha-->
            <label for="confirm-password"><strong>Confirme sua senha</strong></label>
            <div>
                <input type="password" id="confirm-password" name="confirm-password" required>
                <i class="fa fa-eye" onclick="togglePasswordVisibility()"></i> <!-- Ícone de olho -->
            </div>
            
            <!--campo de pree. cpf-->
            <label for="cpf"><strong>Digite seu CPF</strong></label>
            <input type="text" id="cpf" name="cpf" required>
            <!--campo de pree. cep-->
            <label for="cep"><strong>Digite seu CEP</strong></label>
            <input type="text" id="cep" name="cep" required>
            <!--campo de pree. termos de uso-->
            <div class="checkbox-container">
                <input type="checkbox" id="terms-of-use" name="terms-of-use" required>
                <label for="terms-of-use"><a href="#">Concordar com termos de uso?</a></label>
            </div>
            <!--campo de pree. termos de privacidade-->
            <div class="checkbox-container">
                <input type="checkbox" id="privacy-policy" name="privacy-policy" required>
                <label for="privacy-policy"><a href="#">Concordar com termos de privacidade?</a></label>
            </div>
            <!--campo de pree. botão-->
            <button class="button" type="submit" onclick="cadastro(event)">Cadastrar-se</button>
            <p class="login-link"><a href="#">Já tem uma conta?</a></p>
        </form>
        <div id="teste"></div>
    </div>

    <footer>
        <div class="term">
            <div>
                <a href="#">
                    <p>TERMOS DE USO</p>
                </a>
            </div>
                <div>
                    <a href="#">
                        <p>POLÍTICA DE PRIVACIDADE</p>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <p>CONTATO</p>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <p>LOCAL</p>
                    </a>
                </div>
        </div>
        <div class="container_footer">
        <div class="tampa"><i class="fa fa-language" aria-hidden="true"></i>
            <select name="Idioma" id="idioma">
                <option value="PT">PORTUGUÊS</option>
                <option value="IG">INGLÊS</option>
                <option value="ES">ESPANHOL</option>
                <option value="CO">COREANO</option>
            </select>
        </div>


    </footer>
    <script src="javascript/cadastro.js"></script>
</body>
</html>
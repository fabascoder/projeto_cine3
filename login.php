<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <script src="js/login.js" defer></script>
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
<header>
        <nav>
            <div>
                <a href="index.php">
                    <img src="imagens/Logo_Cine3-removebg-preview.png" alt="Cine3 Logo" class="logo">
                </a>
            </div>
            <a href="index.php" class="back">VOLTAR</i></a>
        </nav>
    </header>

    <main>
        <div class="login-container">
            <h1>Login</h1>
            <form onsubmit="validateLogin(event)">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
        
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" required>
        
                <div class="options">
                    <div>
                        <input type="checkbox" id="remember-me" name="remember-me">
                        <label for="remember-me">Lembrar-me</label>
                    </div>
                    <a href="#">Esqueceu sua senha?</a>
                </div>
        
                <button type="submit">Entrar</button>
            </form>
            <a href="cadastro.php" class="signup">Cadastre-se!</a>
        </div>
    </main>
    <script src="javascript/login.js"></script>
</body>
</html>

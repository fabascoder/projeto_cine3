<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<style>
    body {
        background-color: #f4f4f4;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 600px;
        background-color: #fff;
        margin: 20px auto;
    }

    .cabecalho {
        background-color: #401c26;
        border-radius: 5px 5px 0 0;
    }

    .logo {
        width: 200px;
    }

    p {
        padding: 10px 30px;
        color: #222;
    }

    .copy {
        text-align: center;
        color: #d9d9d9;

    }

    a {
        text-align: center;
        color: #d9d9d9;
        margin-left: 100px;
        text-decoration: none
    }
    a:hover {
        transition: 0.1s;
        color: #d95f80;
    }
</style>
<body>
    <?php 
    ?>
    <div class="container">
        <header class="cabecalho">
            <img class="logo" src="imagens/Logo_Cine3.png" alt="Logo Cine3">
        </header>
        <div>
            <p>🎬 Bem-vindo ao CINE3!</p>
            <p>Olá <?php $_POST['nome'];?>!</p>
            <p>Obrigado por se juntar à nossa comunidade de cinema! Agora você tem acesso às últimas novidades, críticas e recomendações de filmes que vão deixar suas sessões de cinema ainda mais emocionantes.</p>
            <p>Prepare-se para explorar o melhor do mundo cinematográfico e descobrir novas histórias incríveis!</p>
            <p>Se precisar de ajuda, estamos aqui para você.</p>
            <p>Boas sessões e até breve!</p>
            <p>Equipe CINE3 🎥!</p>
        </div>
        <footer>
            <p class="copy">©cine3<a href="#">www.cine3.com</a></p>
        </footer>
    </div>
</body>
</html>
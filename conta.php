<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Conta</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/conta.css">
    <link rel="shortcut icon" type="imagex/png" href="icones/Icone_Cine3.ico">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <header>

        <div class="logo-pesquisa">
            <a href="index.php"><img src="imagens/Logo_Cine3-removebg-preview.png" alt="Imagem CINE3" width="200px"></a>
            <div class="div_pesquisa">
                <input type="search" id="pesquisa" placeholder="Pesquisar">
            </div>
        </div>
        <div class="menu-hamburguer">
            <input type="checkbox" id="menu-toggle" class="menu-toggle">
            <label for="menu-toggle" class="menu-icon">
                <span class="material-symbols-outlined">menu</span>
            </label>
            <nav class="menu">
                <ul>
                    <li><a href="javascript:void(0)" id="openModal">
                            <div>
                                <span id="icon_ingresso" class="material-symbols-outlined">
                                    confirmation_number
                                </span>
                            </div>
                            Ingressos
                        </a></li>
                    <li><a href="produtos.php">
                            <div>
                                <span id="icon_produto" class="material-symbols-outlined">
                                    shopping_bag
                                </span>
                            </div>
                            Produtos
                        </a></li>
                    <li><a href="local.php">
                            <div>
                                <span id="icon_local" class="material-symbols-outlined">
                                    pin_drop
                                </span>
                            </div>
                            Local
                        </a></li>
                    <li class="li-1"><a href="conta.php">
                            <div>
                                <span id="icon_profile" class="material-symbols-outlined">
                                    account_circle
                                </span>
                            </div>
                            Perfil
                        </a></li>
                </ul>
            </nav>
        </div>

        <nav id="navegacao">
            <!-- Modal HTML -->
            <dialog id="modal-ingressos" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2 class="ingressos">Ingressos</h2>
                    <div>
                        <p class="p1">Padrão Inteira</p>
                        <p class="v1">Válido de quinta-feira, sexta-feira, sábado e domingo.</p>
                        <p class="t1">R$18,00</p>
                    </div>
                    <hr>
                    <div>
                        <p class="p1">Meia Promocional</p>
                        <p class="v1">Válido de segunda-feira, terça-feira e quarta-feira OU com Comprovante
                            Escolar.</p>
                        <p class="t1">R$9,00</p>
                    </div>
                </div>
            </dialog>
        </nav>
    </header>
    <main>
        <div class="barra-lateral">
            <p style="color:#7c7c7c;">Olá <span style="color: #d95f80; text-decoration: underline;"><?php echo $_SESSION['nome'];?>,</span> Esse <br>é o seu Perfil</p>
            
            <ul>
                <li class="li-1">
                    <a href="conta.php">Minha Conta</a>
                </li>
                <li>
                    <a href="minhas_compras.php">Minhas Compras</a>
                </li>

                <li>
                    <a href="minha_senha.php">Minha Senha</a>
                </li>
                
                <div style="display: flex; justify-content: end; color: red;">
                    <a href="logout.php">SAIR</a>
                </div>
            </ul>
        </div>
        <div class="barra-principal">
            <h1>Meus Dados</h1>
            <div class="dados">
                <div class="caixa-nome"><label>*Nome</label><input placeholder="<?php echo $_SESSION['nome'];?>" name="account.name"
                        class="caixas"></div>
                <div class="caixa-cpf"><label>*CPF</label><input type="text" class="caixas"
                        placeholder="***.***.***-**"></div>
                <div class="caixa-email"><label>*Email</label><input type="text" class="caixas"
                        placeholder="<?php echo $_SESSION['email'];?>"></div>
                <div class="caixa-senha"><label>*Senha</label><input type="text" class="caixas" placeholder="******">
                    <a href="minha_senha.php">Alterar senha</a>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
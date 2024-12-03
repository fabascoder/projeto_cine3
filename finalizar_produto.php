
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Cine3</title>
    <link rel="shortcut icon" type="imagex/png" href="icones/Icone_Cine3.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/produto.css">
    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/finalizar_produto.css">
</head>

<body style="background: #fff;">


<?php 
    session_start();
    $_SESSION['valor_produto_1'] = $_POST['valor_produto_1'];
    $_SESSION['valor_produto_2'] = $_POST['valor_produto_2'];
    $_SESSION['valor_produto_3'] = $_POST['valor_produto_3'];
?>

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
                    <li><a href="javascript:void(0)" id="openModal"><div>
                                    <span id="icon_ingresso" class="material-symbols-outlined">
                                        confirmation_number
                                    </span>
                                </div>
                                Ingressos
                            </a></li>
                    <li class="li-1"><a href="produtos.php"><div>
                            <span id="icon_produto" class="material-symbols-outlined">
                                shopping_bag
                            </span>
                        </div> 
                        Produtos
                    </a></li>
                    <li><a href="local.php"><div>
                            <span id="icon_local" class="material-symbols-outlined">
                                pin_drop
                            </span>
                        </div>
                        Local
                    </a></li>
                    
                    <?php 
                    
                    if(isset($_SESSION['nome'])) {
                     echo '   <li><a href="conta.php"><div>
                            <span id="icon_profile" class="material-symbols-outlined">
                                account_circle
                            </span>
                        </div>
                        
                        '.$_SESSION['nome'].'
                    </a></li>';
                    } else {

                    
                
                  echo '<li><a href="login.php"><div>
                            <span id="icon_profile" class="material-symbols-outlined">
                                account_circle
                            </span>
                        </div>
                        
                        Login
                    </a></li>';
                 }
                ?>


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

    <div class="topo">
        <a href="produtos.php"><img src="imagens/seta.png" alt="Seta" width="40px" id="seta"></a>
        <h1 class="h1">Produtos</h1>
    </div>

    <div class="caixa-principal">
        <div style="">
            <div>Camiseta CINE3!</div>
            <div>Camiseta CINE3!</div>
            <div>Camiseta CINE3!</div>
        </div>
        <div>
            <div>
                <?php 
                echo $_SESSION['valor_produto_1'];
                ?>
            </div>
            <div>
                <?php 
                echo $_SESSION['valor_produto_2'];
                ?>
            </div>
            <div>
                <?php 
                echo $_SESSION['valor_produto_3'];
                ?>
            </div>
        </div>
    </div>
</body>
</html>
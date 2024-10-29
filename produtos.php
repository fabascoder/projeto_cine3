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
</head>

<body style="background: #fff;">

<header>
        <div class="logo-pesquisa">
            <a href="./principal.php"><img src="imagens/Logo_Cine3-removebg-preview.png" alt="Imagem CINE3" width="200px"></a>
            <div class="div_pesquisa">
                <input type="search" id="pesquisa" placeholder="Pesquisar">
            </div>
        </div>

        <nav id="navegacao">
            <ul>
                <li>
                    <div id="window_ticket">
                        <div id="ingresso">
                            <a href="javascript:void(0)" id="openModal">
                                <div>
                                    <span id="icon_ingresso" class="material-symbols-outlined">
                                        confirmation_number
                                    </span>
                                </div>
                                Ingressos
                            </a>
                        </div>
                    </div>
                    </li>

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
                                <p class="v1">Válido de segunda-feira, terça-feira e quarta-feira OU com Comprovante Escolar.</p>
                                <p class="t1">R$9,00</p>
                            </div>
                        </div>
                    </dialog>


                    <li class="item_produto">
                        <a href="produtos.php">
                            <div>
                                <span id="icon_produto" class="material-symbols-outlined">
                                    shopping_bag
                                </span>
                            </div>
                            Produtos
                        </a>
                    </li>
                    <li>
                        <a href="local.php">
                            <div>
                                <span id="icon_local" class="material-symbols-outlined">
                                    pin_drop
                                </span>
                            </div>
                            Localização
                        </a>
                    </li>
                    <li>
                        <a href="login.php" id="login-link">
                    <div>
                        <span id="icon_profile" class="material-symbols-outlined">
                            account_circle
                        </span>
                    </div>
                    <span id="login-text">Login</span>
                </a>
                    </li>
            </ul>
        </nav>
    </header>

    <div class="topo">
        <a href="principal.php"><img src="imagens/seta.png" alt="Seta" width="40px" id="seta"></a>
        <h1 class="h1">Produtos</h1>
    </div>

    <div class="container">
        <section class="product-section">
            <h2>Confira os nossos produtos</h2>

            <!-- Produto Camiseta -->
            <div class="product-card">
                <div class="product-content">
                    <img src="imagens/Camiseta_Cine3.png" alt="Camiseta Cine3" class="product-image">
                    <div class="product-info">
                        <h3>Camiseta CINE3!</h3>
                        <div class="rating">
                            ★★★★★
                        </div>
                        <p class="unisex">UNISSEX</p>
                        <div class="sizes">
                            <button>P</button>
                            <button>M</button>
                            <button>G</button>
                        </div>
                        <p class="price">R$79,90</p>
                        <p class="free-shipping">Compras acima de R$129,99, você receberá frete grátis</p>
                        <div class="buy-cart-container">
                            <button class="buy-button button-active btn1">Comprar</button>
                            <div class="cart-notification">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span class="cart-count"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Produto Copos -->
            <div class="product-card">
                <div class="product-content">
                    <img src="imagens/Copos_cartao_Cine3.png" alt="Copos e cartões Cine3" class="product-image">
                    <div class="product-info">
                        <h3>Balde de pipoca CINE3 + <br>2 cartões CINE3</h3>
                        <div class="rating">
                            ★★★<span class="cinza">★★</span>
                        </div>
                        <div class="sizes">
                            <button>P</button>
                            <button>M</button>
                            <button>G</button>
                        </div>
                        <p class="price">R$29,90</p>
                        <p class="free-shipping">Compras acima de R$129,99, você receberá frete grátis</p>
                        <div class="buy-cart-container">
                            <button class="buy-button button-active btn2">Comprar</button>
                            <div class="cart-notification">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span class="cart-count"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Produto Acessórios -->
            <div class="product-card">
                <div class="product-content port">
                    <img src="imagens/Acessorios_Cine3.png" alt="Acessórios CINE3" class="product-image img">
                    <div class="product-info">
                        <h3>Acessórios CINE3 + camiseta + sacola + <br> óculos + chaveiro + 2 cartões</h3>
                        <div class="rating">
                            ★★★★<span class="cinza">★</span>
                        </div>
                        <p class="price">R$129,90</p>
                        <p class="free-shipping">Compras acima de R$129,99, você receberá frete grátis</p>
                        <div class="buy-cart-container">
                            <button class="buy-button button-active btn3">Comprar</button>
                            <div class="cart-notification">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span class="cart-count"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<script src="javascript/produto.js"></script>
</body>

</html>

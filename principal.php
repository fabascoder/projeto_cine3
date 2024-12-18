<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CINE 3</title>
    <link rel="shortcut icon" type="imagex/png" href="icones/Icone_Cine3.ico">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/principal.css">
</head>

<body>
    <header>
        <a href="./principal.php"><img src="imagens/Logo_Cine3.png" alt="Imagem CINE3" width="200px"></a>
        <div class="div_pesquisa">
            <input type="search" id="pesquisa" placeholder="Pesquisar">
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
            </ul>

            <div class="login">
                <a href="login.php">
                    <div>
                        <span id="icon_profile" class="material-symbols-outlined">
                            account_circle
                        </span>
                    </div>
                    Login
                    <!--foto-->
                </a>
            </div>
        </nav>
    </header>


    <main>

        <div class="container">
            <div class="esquerda">
                <div class="arrow1" id="prev">
                    < </div>
                </div>
                <div class="img_banner">
                    <a href="">
                        <img class="foto" src="imagens/Banner_Divertidamente2_Cine3 (6).jpg"
                            alt="Imagem - Divertidamente 2">
                    </a>
                </div>

                <div class="direita">
                    <div class="arrow2" id="next"> > </div>
                </div>
            </div>



            <section class="secao">
                <h1>FILMES EM CARTAZ</h1>
                <div class="container_secao">
                    <div class="casa_arrow">
                        <div class="arrow_esquerda_main">
                            <!-- > -->
                        </div>
                    </div>
                    <div class="container_imagens">
                        <div>
                            <a href="filme.php">
                                <img   src="imagens/umavidadeesperança.jpg" alt="Imagem Bad Boys" class="imagem_section tamanho">
                            </a>
                        </div>
                        <div>
                            <a href="filme.php">
                                <img  src="imagens/bad_boys_Cine3.jfif" alt="Imagem Bad Boys" class="imagem_section tamanho">
                            </a>
                        </div>
                        <div>
                            <a href="filme.php">
                                <img  src="imagens/Assasino_por_acaso_Cine3.jpg" alt="Imagem Bad Boys" class="imagem_section tamanho">
                            </a>
                        </div>
                        <div>
                            <a href="filme.php">
                                <img  src="imagens/Planeta_dos_macacos_Cine3_jpg.webp" alt="Imagem Bad Boys" class="imagem_section tamanho">
                            </a>
                        </div>

                        <div class="casa_arrow">
                            <div class="arrow_direita_main">
                                <!---->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php 
            include_once "conexao.php";
            $select = $conexao->prepare('SELECT * FROM filme WHERE ativo = 0');
            $select->execute();
            
            ?>
            <section class="secao">
                <h1>EM BREVE</h1>
                <div class="container_secao">
                    <div class="casa_arrow">
                        <div class="arrow_esquerda_main">
                            <!-- < -->
                        </div>
                    </div>
                    <div class="container_imagens">
                        <?php 
                        while ($resultado = $select->fetch()) {
                             $imagem = $resultado['imagem']??"umavidadeesperança.jpg";
                            if($imagem == '') {
                                $imagem = "umavidadeesperança.jpg";
                            };
                           
                            echo ' <div>
                            <a href="filme.php">
                                <img  src="imagens/'.$imagem.'" alt="'.$resultado['nome'].'" class="imagem_section tamanho">
                            </a>
                        </div>';
                        }
                        ?> 
                       
                        <div>
                            <a href="filme.php">
                                <img  src="imagens/umavidadeesperança.jpg" alt="Imagem Bad Boys" class="imagem_section tamanho">
                            </a>
                        </div>
                        <div>
                            <a href="filme.php">
                                <img  src="imagens/Planeta_dos_macacos_Cine3_jpg.webp" alt="Imagem Bad Boys" class="imagem_section tamanho">
                            </a>
                        </div>
                        <div>
                            <a href="filme.php">
                                <img  src="imagens/Assasino_por_acaso_Cine3.jpg" alt="Imagem Bad Boys" class="imagem_section tamanho">
                            </a>
                        </div>

                        <div class="casa_arrow">
                            <div class="arrow_direita_main">
                                <!---->
                            </div>
                        </div>
                    </div>
                </div>
            </section>


    </main>

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
            <div>
                <a href="cadastro_filme.php">
                    <p>CADASTRAR FILMES </p>
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


    <script src="javascript/principal.js"></script>
</body>

</html>
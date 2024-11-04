<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Boys</title>
    <link rel="shortcut icon" type="imagex/png" href="../icones/Icone_Cine3.ico">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/filme.css">
</head>

<body>
    <?php 
    include_once "conexao.php";
    $id = $_GET['id']??'';
    if($id) {
        $select = $conexao->prepare("SELECT * FROM filme WHERE id=:id");
        $select->execute(['id'=>$id]);
        $resultado = $select->fetch();
    }
    ?>
    <header>
        <div class="logo-pesquisa">
            <a href="principal.php"><img src="imagens/Logo_Cine3-removebg-preview.png" alt="Imagem CINE3"
                    width="200px"></a>
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
                    <a href="local.php"> <!--LOCAL - LINK-->
                        <div>
                            <span id="icon_local" class="material-symbols-outlined">
                                pin_drop
                            </span>
                        </div>
                        Localização
                    </a>
                </li>
                <li>
                <a href="login.php">
                    <div>
                        <span id="icon_profile" class="material-symbols-outlined">
                            account_circle
                        </span>
                    </div>
                    Login <!--foto-->
                </a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div>
            <a href="index.php">
                <img class="arrow_back" src="icones/arrow_left.jpg" alt="Arrow Left">
            </a>
        </div>
        <div id="container_principal">
            <?php 
              $imagem = $resultado['imagem']??"umavidadeesperança.jpg";
              if($imagem == '') {
                  $imagem = "umavidadeesperança.jpg";
              }
            ?>
            <div id="div_img">
                <img class="foto_bad_boys" src="imagens/<?=$imagem?>" alt="Foto do FIlmes - Bas Boys"></img>
            </div>

            <section id="grid">
                <h1>HORÁRIOS DE <span>PRÉ-VENDA</span></h1>
                <div id="div_column">
                    <div id="column1">
                        <ul>
                            <li>
                                    <a class="button_horario" href="pagamento_ingressos.php"><?php echo $resultado['horario'];?></a>
                                
                            </li>
                        </ul>
                        <ul>
                            <li>
                                    <a class="button_horario" href="pagamento_ingressos.php">-</a>
                                
                            </li>
                        </ul>
                        <ul>
                            <li>
                                    <a class="button_horario" href="pagamento_ingressos.php">-</a>
                                
                            </li>
                        </ul>
                    </div>
                    <div id="column2">
                        <div>
                            <ul>
                                <li>
                                    
                                        <a class="button_horario" href="pagamento_ingressos.php">-</a>
                                    
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    
                                        <a class="button_horario" href="pagamento_ingressos.php">-</a>
                                    
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    
                                        <a class="button_horario" href="pagamento_ingressos.php">-</a>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="descricao"> <!--MOVIE'S INFOTMARIONS-->
                    <p>Gênero: <span><?php echo $resultado['genero'];?></span> 

                    <p>Duração: <span><?php echo $resultado['duracao'];?>h</span></p>

                    <p>Diretor: <span><?php echo $resultado['direcao'];?></span></p>

                    <p>Dustribuído por: <span><?php echo $resultado['distribuicao'];?></span></p>

                    <p>Elenco: <span><?php echo $resultado['elenco'];?></span>
                </div>
            </section>
        </div>
        <hr>

        <section>
            <div class="sinopse">
                <h2>SINOPSE</h2>
                <p>
                <?php 
                echo $resultado['descricao'];
                ?>
                </p>
            </div>
        </section>
    </main>
    <script src="javascript/principal.js"></script>
</body>

</html>
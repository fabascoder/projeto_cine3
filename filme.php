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
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
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
                    
                            <?php 
                    session_start();
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
                        </a>
                    </li>
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
        <?php 
        session_start();
        $_SESSION['dia'] = $_GET['dia']??"qui";
        $_SESSION['hora'] = $_GET['hora']??"16";
        echo $_SESSION['hora'];
        echo $_SESSION['dia'];
        ?>
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
               <div class="conteudo-grid"> 
                <h1>HORÁRIOS DE <span>PRÉ-VENDA</span></h1>
                <div id="div_column">
                    <div id="column1">
                        <ul> 
                            <?php 
                            $diasDaSemana = ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'];
                            $select_horarios = $conexao->prepare('SELECT * FROM sessao_filme WHERE id_filme=?');
                            $select_horarios->execute([$resultado['id']]);
                            while( $horarios = $select_horarios->fetch()) {
                                $data_filme = new DateTime($horarios['data_filme']);
                                $diaSemana = $data_filme->format('w');
                          echo '<li>
                                    <a class="button_horario" href="pagamento_ingressos.php?hora='.$horarios['horario_filme'].'&dia='.$diasDaSemana[$diaSemana].'&id='.$resultado['id'].'">'.$data_filme->format('d/m/Y').' '.$diasDaSemana[$diaSemana].' '.$horarios['horario_filme'].'</a>
                                
                            </li>';
                        }
                            ?>
                        </ul>
                    </div>
                </div>

                <div class="descricao">
                    <!--MOVIE'S INFOTMARIONS-->
                    <p>Gênero: <span><?php echo $resultado['genero'];?></span>

                    <p>Duração: <span><?php echo $resultado['duracao'];?>h</span></p>

                    <p>Diretor: <span><?php echo $resultado['direcao'];?></span></p>

                    <p>Dustribuído por: <span><?php echo $resultado['distribuicao'];?></span></p>

                    <p>Elenco: <span><?php echo $resultado['elenco'];?></span>
                </div>
               </div> 
            </section>
        </div>
        <hr>
        <div class="caixa-trailer">
            <h1>TRAILER</h1>
            <picture>
            <iframe src="https://www.youtube.com/embed/2x-2iYxgMFU?si=zs49fDVUcPw86Wb-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </picture>            
        </div>                
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
    <footer>
        <img src="imagens/Logo_Cine3-removebg-preview.png" alt="">
        <div class="term">
            <div>
                <a href="termos.php">
                    <p>TERMOS DE USO</p>
                </a>
            </div>
            <div>
                <a href="termos.php">
                    <p>POLÍTICA DE PRIVACIDADE</p>
                </a>
            </div>
            <div>
                <a href="local.php">
                    <p>CONTATO</p>
                </a>
            </div>
            <div>
                <a href="local.php">
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
                    <option value="PT">PORTUGUÊS </option>
                    <option value="IG">INGLÊS</option>
                    <option value="ES">ESPANHOL</option>
                    <option value="CO">COREANO</option>
                </select>
            </div>
    </footer>
    <script src="javascript/principal.js"></script>
</body>

</html>
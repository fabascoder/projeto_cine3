<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
    <link rel="stylesheet" href="css/pagamento.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>
    <?php 
    include_once "conexao.php";
    $id = $_SESSION['id_filme']??'';
    if($id) {
        $select = $conexao->prepare("SELECT * FROM filme WHERE id=:id");
        $select->execute(['id'=>$id]);
        $resultado = $select->fetch();
    }
    ?>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="index.php">
                        <img src="imagens/Logo_Cine3-removebg-preview.png" alt="Cine3 Logo" class="logo">
                    </a>
                </li>

                <li>
                    <a href="">Olá, [Nome]</a>
                </li>
            </ul>
            <a href="index.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
        </nav>
        <div id="caixa">
            <div class="etapas-compra">
                <img src="imagens/ingressos.png" alt="">

                <p>Ingresso</p>
            </div>

            <div class="etapas-compra">
                <img src="imagens/secao.png" alt="">

                <p>Seção</p>
            </div>
            <div class="etapas-compra">
                <img src="imagens/pipoca.png" alt="">

                <p>Produtos</p>
            </div>
            <div class="etapas-compra4">
                <img src="imagens/cartao.png" alt="">

                <p>Pagamento</p>
            </div>
            <div class="etapas-compra">
                <img src="imagens/confirmacao.png" alt="">

                <p>Confirmação</p>
            </div>
        </div>
    </header>
    <main>
        <div class="caixa-principal" style="margin: 30px">
            <div style=" padding: 30px">
                <div>

                    <?php
                                $pipoca_p = $_POST['pipoca-pequena']?? 0;
                                $pipoca_m = $_POST['pipoca-media']?? 0;
                                $pipoca_g = $_POST['pipoca-grande']?? 0;
                                $qtd_p = intval($_POST['qtd_pipoca_p'])?? 0;
                                $qtd_m = intval($_POST['qtd_pipoca_m'])?? 0;
                                $qtd_g = intval($_POST['qtd_pipoca_g'])?? 0;
                                $refri_p = $_POST['refri_pequeno']?? 0;
                                $refri_m = $_POST['refri_medio']?? 0;
                                $refri_g = $_POST['refri_grande']?? 0;
                                $qtd_refri_p = intval($_POST['qtd_refri_p'])?? 0;
                                $qtd_refri_m = intval($_POST['qtd_refri_m'])?? 0;
                                $qtd_refri_g = intval($_POST['qtd_refri_g'])?? 0;
                                $total_produtos= 0;
                
                                if($pipoca_p) {
                                    $total_produtos += $qtd_p * 23.99;
                                }
                                if($pipoca_m){
                                    $total_produtos += $qtd_m * 33.99;
                                }
                                if($pipoca_g){
                                    $total_produtos += $qtd_g * 37.99;
                                }
                                if($refri_p) {
                                    $total_produtos += $qtd_refri_p * 23.99;
                                }
                                if($refri_m) {
                                    $total_produtos += $qtd_refri_m * 33.99;
                                }
                                if($refri_g) {
                                    $total_produtos += $qtd_refri_g * 37.99;
                                }
                    ?>

                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; gap: 250px">

                    <div>
                        <p class="title-php">Filme</p>
                        <div class="result-php">
                            <?php
                                        echo $resultado['nome'];
                                        ?>
                        </div>
                    </div>
                    <div>
                        <p class="title-php">Horário</p>
                        <div class="result-php">
                            <?php
                                        echo $_SESSION['hora'];
                                        ?>
                        </div>
                    </div>
                    <div>
                        <p class="title-php">Dia</p>
                        <div class="result-php">
                            <?php
                                        echo $_SESSION['dia'];
                                        ?>
                        </div>
                    </div>
                </div>

                <div style="margin-top: 40px;">
                    <hr>

                    <div style="display: flex; justify-content: space-between; padding-bottom: 15px">
                        <p class="title-php">Ingresso inteira <br>R$38,00</p>
                        <div>
                            <div style="">
                                <?php
                                    echo $_SESSION['quantidadeInteira']."x";
                                    ?>
                            </div>
                        </div>
                    </div>

                    <div style="display: flex; justify-content: space-between; padding-bottom: 15px">
                        <p class="title-php">Ingresso meia <br>R$19,00</p>
                        <div>
                            <div>
                                <?php
                                    echo $_SESSION['quantidadeMeia']."x";
                                    ?>
                            </div>
                        </div>
                    </div>

                    <div style="display: flex; justify-content: space-between; ">
                        <p class="title-php">Valor Produtos</p>
                        <div class="result-php">
                            <div>
                                <?php
                                            echo "R$".number_format($total_produtos, 2, ",", ".");
                                            ?>
                            </div>
                        </div>
                    </div>
                     <hr>
                    <div style="display: flex; justify-content: space-between;margin-top: 10px ">
                        <p class="title-php">TOTAL</p>
                        <div class="result-php">
                            <div>
                                <?php
                                $tmeia = 19.00 * $_SESSION['quantidadeMeia'];
                                $tinteira = 38.00 * $_SESSION['quantidadeInteira'];
                                $total = $tmeia + $tinteira;
                                $totalComProduto = $total + $total_produtos;
                                echo "R$".number_format($totalComProduto, 2, ",", ".");
                                ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>




        <!-- <div class="botao">
            <a class="btn" href="pagamento_confirmacao.php">CONTINUAR ></a>
        </div> -->
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
    <script src="header.js"></script>
</body>

</html>
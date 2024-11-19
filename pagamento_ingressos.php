<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingressos</title>
    <link rel="stylesheet" href="css/pagamento_ingressos.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>
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
            <!-- Etapas de Compra -->
            <div class="etapas-compra1">
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
            <div class="etapas-compra">
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
        <div class="titulo">
            <a href="index.php"><img src="imagens/seta.png" alt="" width="30px"></a>
            <p>Ingressos</p>
        </div>

        <div class="info-filme">
            <?php 
            include_once "conexao.php";
            $id = $_GET['id']??'';
            $horario = $_GET['hora']??'';
            $dia = $_GET['dia']??'';
            if($id) {
                $select = $conexao->prepare("SELECT * FROM filme WHERE id=:id");
                $select->execute(['id'=>$id]);
                $resultado = $select->fetch();
            }
            ?>


            <div>
                <p class="title-php">Filme</p>
                <div>
                    <?php
                    echo $resultado['nome'];
                    ?>
                </div>
            </div>

            <div>
                <p class="title-php">Horário</p>
                <div>
                    <?php 
                    echo $horario;
                    ?>
                </div>
            </div>

            <div>
                <p class="title-php">Dia</p>
                <div>
                    <?php 
                    echo $dia;
                    ?>
                </div>
            </div>
        </div>

        <div class="valores">
            <form action="pagamento_sessao.php" method="post" onsubmit="salvarQuantidade();">
                <input type="hidden" name="quantidadeInteira" id="quantidadeInteiraInput">
                <input type="hidden" name="quantidadeMeia" id="quantidadeMeiaInput">
                <input type="hidden" name="assentosSelecionados" id="assentosSelecionados">

                <!-- Ingresso Inteira -->
                <div class="caixa-valores">
                    <button type="button"><img src="imagens/lixeira-vermelha.png" alt="" width="30px"></button>
                    <div class="escolhas">
                        <div class="tipo-ingresso">
                            <p>Ingresso:</p>
                            <p>Padrão Inteira</p>
                        </div>
                        <div class="quantidade-ingresso">
                            <p>Quantidade</p>
                            <select name="quantidadeInteira" id="quantidadeInteira" onchange="calcularTotal()">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                        <div class="total-ingresso">
                            <p>Total:</p>
                            <p id="totalInteira">R$ 38,00</p>
                        </div>
                    </div>
                </div>

                <!-- Ingresso Meia -->
                <div class="caixa-valores">
                    <button type="button"><img src="imagens/lixeira-vermelha.png" alt="" width="30px"></button>
                    <div class="escolhas">
                        <div class="tipo-ingresso">
                            <p>Ingresso:</p>
                            <p>Meia Promocional</p>
                        </div>
                        <div class="quantidade-ingresso">
                            <p>Quantidade</p>
                            <select name="quantidadeMeia" id="quantidadeMeia" onchange="calcularTotal()">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                        <div class="total-ingresso">
                            <p>Total:</p>
                            <p id="totalMeia">R$ 19,00</p>
                        </div>
                    </div>
                </div>

                <!-- Total a Pagar -->
                <div class="caixa-finalizar">
                    <div class="finalizar">
                        <input type="hidden" id="total_pagar" name="total_pagar" value="0">
                        <p id="total_pagar_display">TOTAL À PAGAR R$ 0,00</p>
                        <button type="submit" class="btn">AVANÇAR ></button>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <footer>
        <img src="imagens/Logo_Cine3-removebg-preview.png" alt="">
        <div class="term">
            <div><a href="termos.php"><p>TERMOS DE USO</p></a></div>
            <div><a href="termos.php"><p>POLÍTICA DE PRIVACIDADE</p></a></div>
            <div><a href="local.php"><p>CONTATO</p></a></div>
            <div><a href="local.php"><p>LOCAL</p></a></div>
            <div><a href="cadastro_filme.php"><p>CADASTRAR FILMES</p></a></div>
        </div>
    </footer>

    <script src="javascript/pagamento_ingressos.js"></script>
</body>

</html>

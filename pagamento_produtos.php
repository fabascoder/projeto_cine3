<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="css/pagamento_produtos.css">
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
            <div class="etapas-compra">
                <img src="imagens/ingressos.png" alt="">

                <p>Ingresso</p>
            </div>

            <div class="etapas-compra">
                <img src="imagens/secao.png" alt="">

                <p>Seção</p>
            </div>
            <div class="etapas-compra3">
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
    <div class="titulo">
            <a href="pagamento_sessao.php"><img src="imagens/seta.png" alt="" width="30px"></a>
            <p>Produtos</p>
        </div>
<?php 
    
    session_start();
    $_SESSION['local'] = $_POST['local_sessao'];
    $_SESSION['assentos'] = $_POST['assentos'] ?? [];
    // foreach($_POST as $campos) {
    //      echo '<h2>'.$campos.'</h2>';
    // }
    for($i = 1; $i <= 120; $i++) {
        if(!empty($_POST['assentos'.$i])){
            $_SESSION['assentos'][$i] = $_POST['assentos'.$i];
          
        }
    }

    echo $_SESSION['quantidadeInteira'];
    echo $_SESSION['quantidadeMeia'];
    // $_POST['assentos'.$i];
    ?>
    <main>
        <form action="pagamento.php" method="post">
            <div class="caixa-principal">
                <h1>PRODUTOS E COMBOS</h1>
                <div class="caixa-secundaria">
                    <div class="pipocas">
                        <div class="porcoes">
                            <div class="pipoca-pequena">
                                <img src="imagens/balde-de-pipoca.png" alt="balde-de-pipoca.png" width="45px">
                                <input type="checkbox" class="checkbox" id="pipoca-pequena" name="pipoca-pequena">
                            </div>
                            <div class="preco-combo">
                                <p>PEQUENA</p>
                                <p style="color: #bf5672;">R$23,99</p>
                            </div>
                            <select name="qtd_pipoca_p" class="produto" style="display: none;">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>

                        <div class="porcoes">
                            <div class="pipoca-pequena">
                                <img src="imagens/balde-de-pipoca.png" alt="balde-de-pipoca.png" width="45px">
                                <input type="checkbox" class="checkbox" name="pipoca-media" id="pipoca-media">
                            </div>
                            <div class="preco-combo">
                                <p>MÉDIA</p>
                                <p style="color: #bf5672;">R$33,99</p>
                            </div>
                            <select name="qtd_pipoca_m" class="produto" style="display: none;">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>

                        <div class="porcoes">
                            <div class="pipoca-pequena">
                                <img src="imagens/balde-de-pipoca.png" alt="balde-de-pipoca.png" width="45px">
                                <input type="checkbox" class="checkbox" name="pipoca-grande" id="pipoca-grande">
                            </div>
                            <div class="preco-combo">
                                    <p>GRANDE <br>
                                        <del>37,49</del>
                                    </p>
                                <p style="color: #bf5672;">R$37,99</p>
                            </div>
                            <select name="qtd_pipoca_g" class="produto" style="display: none;">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>

                    </div>
                    <div class="refrigerantes">

                        <div class="porcoes">
                            <div class="pipoca-pequena">
                                <img src="imagens/refrigerante.png" alt="refrigerante.png" width="45px">
                                <input type="checkbox" class="checkbox" name="refri_pequeno" id="refri_pequeno">
                            </div>
                            <div class="preco-combo">
                                <p>PEQUENA <br>refrigerante 200ml</p>
                                <p style="color: #bf5672;">R$23,99</p>
                            </div>
                            <select name="qtd_refri_p" class="produto" style="display: none;">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>

                        <div class="porcoes">
                            <div class="pipoca-pequena">
                                <img src="imagens/refrigerante.png" alt="refrigerante.png" width="45px">
                                <input type="checkbox" class="checkbox" name="refri-medio" id="refri-medio">
                            </div>
                            <div class="preco-combo">
                                <p>MÉDIA <br>refrigerante 500ml</p>
                                <p style="color: #bf5672;">R$33,99</p>
                            </div>
                            <select name="qtd_refri_m" class="produto" style="display: none;">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>

                        <div class="porcoes">
                            <div class="pipoca-pequena">
                                <img src="imagens/refrigerante.png" alt="refrigerante.png" width="45px">
                                <input type="checkbox" class="checkbox" name="refri_grande" id="refri_grande">
                            </div>
                            <div class="preco-combo">
                                    <p>GRANDE <br>refrigerante <br>1 Litro</p>
                                <p style="color: #bf5672;">R$37,99</p>
                            </div>
                            <select name="qtd_refri_g" class="produto" style="display: none;">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="avancar">
                <button type="submit" class="btn">AVANÇAR</button>
                </div>
                <div class="caixa-preta">
                    <img src="imagens/Logo_Cine3-removebg-preview.png" alt="Logo_Cine3.png" width="200px">
                    <h1>PROMOÇÃO DE <span>PRÉ-VENDA</span></h1>
                    <div class="pipocas">
                        <div class="porcoes">
                            <div class="pipoca-media">
                                <img src="imagens/balde-de-pipoca.png" alt="balde-de-pipoca.png" width="45px">
                                
                            </div>
                            <div class="preco-combo">
                                <p>PEQUENA</p>
                                <p style="color: #bf5672;">R$23,99</p>
                            </div>
                        </div>
                        <div class="porcoes">
                            <div class="pipoca-media">
                                <img src="imagens/balde-de-pipoca.png" alt="balde-de-pipoca.png" width="45px">
                            </div>
                            <div class="preco-combo">
                                <p>MÉDIA</p>
                                <p style="color: #bf5672;">R$33,99</p>
                            </div>
                        </div>
                        <div class="porcoes">
                            <div class="pipoca-grande">
                                <img src="imagens/balde-de-pipoca.png" alt="balde-de-pipoca.png" width="45px">
                            </div>
                            <div class="preco-combo">
                                    <p>GRANDE <br>
                                        <del>37,49</del>
                                    </p>
                                <p style="color: #bf5672;">R$37,99</p>
                            </div>
                        </div>
                    </div>
                    <div class="refrigerantes">
                        <div class="porcoes">
                            <div class="pipoca-pequena">
                
                                <img src="imagens/refrigerante.png" alt="refrigerante.png" width="45px">
                            </div>
                            <div class="preco-combo">
                                <p>PEQUENA <br>refrigerante 200ml</p>
                                <p style="color: #bf5672;">R$23,99</p>
                            </div>
                        </div>
                        <div class="porcoes">
                            <div class="pipoca-pequena">
                                <img src="imagens/refrigerante.png" alt="refrigerante.png" width="45px">
                            </div>
                            <div class="preco-combo">
                                <p>MÉDIA <br>refrigerante 500ml</p>
                                <p style="color: #bf5672;">R$33,99</p>
                            </div>
                        </div>
                        <div class="porcoes">
                            <div class="pipoca-pequena">
                                <img src="imagens/refrigerante.png" alt="refrigerante.png" width="45px">
                            </div>
                            <div class="preco-combo">
                                    <p>GRANDE <br>refrigerante <br>1 Litro</p>
                                <p style="color: #bf5672;">R$37,99</p>
                            </div>
                        </div>
                    </div>
                    <div class="caixa-prevenda"><a href="index.php" class="pre-venda">FILMES EM<span style="color=white;"> PRÉ-VENDA</span></a></div>
            </div>
                    
            </form>
    </main>
    <footer style="margin-top: 45px;">
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
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkboxes = document.querySelectorAll('.checkbox');
        
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const selectBox = this.parentNode.parentNode.querySelector('.produto');
                if (this.checked) {
                    selectBox.style.display = 'block';
                } else {
                    selectBox.style.display = 'none';
                }
            });
        });
    });
    </script>

</body>
</html>
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
<?php 
    include_once "header_pagto.php";
    session_start();
    $_SESSION['assentos'] = [];
    for ($i = 1; $i <= 120; $i++) {
        if (!empty($_POST['assentos'.$i])){
            $_SESSION['assentos'][$i] = $_POST['assentos'.$i];
           echo  '<h2>'.$_POST['assentos'.$i].'</h2>';
        }
    }
    ?>
    <main>
            <div class="caixa-principal">
                <h1>PRODUTOS E COMBOS</h1>
                <div class="caixa-secundaria">
                    <div class="pipocas">
                        <div class="porcoes">
                            <div class="pipoca-pequena">
                                <img src="imagens/balde-de-pipoca.png" alt="balde-de-pipoca.png" width="45px">
                                <input type="checkbox" class="checkbox">
                            </div>
                            <div class="preco-combo">
                                <p>PEQUENA</p>
                                <p style="color: #bf5672;">R$23,99</p>
                            </div>
                        </div>
                        <div class="porcoes">
                            <div class="pipoca-pequena">
                                <img src="imagens/balde-de-pipoca.png" alt="balde-de-pipoca.png" width="45px">
                                <input type="checkbox" class="checkbox">
                            </div>
                            <div class="preco-combo">
                                <p>MÉDIA</p>
                                <p style="color: #bf5672;">R$33,99</p>
                            </div>
                        </div>
                        <div class="porcoes">
                            <div class="pipoca-pequena">
                                <img src="imagens/balde-de-pipoca.png" alt="balde-de-pipoca.png" width="45px">
                                <input type="checkbox" class="checkbox">
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
                                <input type="checkbox" class="checkbox">
                            </div>
                            <div class="preco-combo">
                                <p>PEQUENA <br>refrigerante 200ml</p>
                                <p style="color: #bf5672;">R$23,99</p>
                            </div>
                        </div>
                        <div class="porcoes">
                            <div class="pipoca-pequena">
                                <img src="imagens/refrigerante.png" alt="refrigerante.png" width="45px">
                                <input type="checkbox" class="checkbox">
                            </div>
                            <div class="preco-combo">
                                <p>MÉDIA <br>refrigerante 500ml</p>
                                <p style="color: #bf5672;">R$33,99</p>
                            </div>
                        </div>
                        <div class="porcoes">
                            <div class="pipoca-pequena">
                                <img src="imagens/refrigerante.png" alt="refrigerante.png" width="45px">
                                <input type="checkbox" class="checkbox">
                            </div>
                            <div class="preco-combo">
                                    <p>GRANDE <br>refrigerante <br>1 Litro</p>
                                <p style="color: #bf5672;">R$37,99</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="avancar">
                <a class="btn" href="pagamento.php">AVANÇAR</a>
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
</body>
</html>
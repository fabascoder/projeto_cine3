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
                    <a href="#">
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
            <a href=""><img src="imagens/seta.png" alt="" width="30px"></a>
            <p>ingressos</p>
        </div>
        <div class="valores">
            <form action="pagamento_sessao.php" method="post"></form>
            <div class="caixa-valores">
                <button type="submit"><img src="imagens/lixeira-vermelha.png" alt="" width="30px"></button>   
                <div class="escolhas">
                    <div class="tipo-ingresso">
                        <p style="margin: 4rem auto;">Ingresso:</p>
                        <p>Padrão Intera</p>
                    </div>
                    <div class="quantidade-ingresso">
                        <p style="margin: 4rem auto;">Quantidade</p>
                        <select name="" id="" onchange="calcularTotal()">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="total-ingresso" >
                        <p style="margin: 4rem auto;">Total:</p>
                        <p>R$ 38,00</p>
                    </div>
                </div>
            </div>
                
            <div class="caixa-valores">
                <button type="submit"><img src="imagens/lixeira-vermelha.png" alt="" width="30px">  </button> 
                <div class="escolhas">
                    <div class="tipo-ingresso">
                        <p style="margin: 4rem auto;">Ingresso:</p>
                        <p>Meia promocional</p>
                    </div>
                    <div class="quantidade-ingresso">
                        <p style="margin: 4rem auto;">Quantidade</p>
                        <select name="" id="" onchange="calcularTotal()">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="total-ingresso" >
                        <p style="margin: 4rem auto;">Total:</p>
                        <p>R$ 38,00</p>
                    </div>
                </div>
            </div>

            <div class="caixa-finalizar">
                <div class="finalizar">
                    <input type="hidden" id="total_pagar" name="total_pagar" value="111.9">
                    <p id="total_pagar_display">TOTAL À PAGAR R$ 111,90</p>

                    <button type="submit" class="btn" href="pagamento_sessao.php">AVANÇAR <img src="imagens/setinha-rosa.png" alt="" width="10px"></button>
                </div>
            </div>
        </form>
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




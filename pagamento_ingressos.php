<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingressos</title>
    <link rel="stylesheet" href="css/pagamento_ingressos.css">
</head>

<body>
<?php 
    include_once "header_pagto.php";
    ?>
    <main>
        <form action="pagamento_sessao.php" method="post">
        <div class="titulo">
            <a href=""><img src="imagens/seta.png" alt="" width="30px"></a>
            <p>ingressos</p>
        </div>
        <div class="valores">
            <div class="caixa-valores">
                <button type="submit"><img src="imagens/lixeira-vermelha.png" alt="" width="30px"></button>
                <div class="escolhas">
                    <div class="tipo-ingresso">
                        <p style="margin: 4rem auto;">Ingresso:</p>
                        <p>Padrão Intera</p>
                    </div>
                    <div class="quantidade-ingresso">
                        <p style="margin: 4rem auto;">Quantidade</p>
                        <select name="" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="total-ingresso">
                        <p style="margin: 4rem auto;">Total:</p>
                        <p>R$ 38,00</p>
                    </div>
                </div>
            </div>

            <div class="caixa-valores">
                <button type="submit"><img src="imagens/lixeira-vermelha.png" alt="" width="30px"> </button>
                <div class="escolhas">
                    <div class="tipo-ingresso">
                        <p style="margin: 4rem auto;">Ingresso:</p>
                        <p>Meia promocional</p>
                    </div>
                    <div class="quantidade-ingresso">
                        <p style="margin: 4rem auto;">Quantidade</p>
                        <input type="number" name="qtd_inteira" step="1">
                    </div>
                    <div class="total-ingresso">
                        <p style="margin: 4rem auto;">Total:</p>
                        <input type="hidden" value="18.50" name="valor_inteira">
                        <p>R$ 18,50</p>
                    </div>
                </div>
            </div>

            <div class="camiseta-valores">
                <button type="submit"><img src="/imagens/lixeira-vermelha.png" alt="" width="30px"> </button>

                <div class="escolhas-camisa">
                    <img src="imagens/Camiseta_Cine3.png" alt="" class="camiseta">
                    <div class="tamanho-camisa">
                        <p style="margin: 4.2rem auto;">Camisa <span style="font-family: Zen Dots;">CINE3!</span></p>

                        <select name="tamanho-camisa" id="tamanho-camisa">
                            <option value="P">Nenhuma</option>
                            <option value="P">P</option>
                            <option value="M">M</option>
                            <option value="G">G</option>
                        </select>
                    </div>
                    <div class="total-ingresso">
                        <p style="margin: 4rem auto;">Total:</p>
                        <input type="hidden" name="total" id="total" value="38">
                        <p>R$ 38,00</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="caixa-finalizar">
            <div class="finalizar">
                <input type="hidden" id="total_pagar" name="total_pagar" value="111.9">
                <p>TOTAL À PAGAR R$111,90</p>

                <button class="btn" href="pagamento_sessao.php">AVANÇAR <img src="imagens/setinha-rosa.png" alt=""
                        width="10px"></button>
            </div>
        </div>
        </form>
    </main>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingressos</title>
    <link rel="stylesheet" href="css/pagamento_ingressos.css">
</head>

<body>
<?php include_once "header_pagto.php"; ?>
    <main>
        <form action="pagamento_sessao.php" method="post">
            <div class="titulo">
                <a href=""><img src="imagens/seta.png" alt="" width="30px"></a>
                <p>ingressos</p>
            </div>
            <div class="valores">
                <div class="caixa-valores">
                    <button type="button"><img src="imagens/lixeira-vermelha.png" alt="" width="30px"></button>
                    <div class="escolhas">
                        <div class="tipo-ingresso">
                            <p>Ingresso:</p>
                            <p>Padrão Intera</p>
                        </div>
                        <div class="quantidade-ingresso">
                            <p>Quantidade</p>
                            <select id="quantidade-ingresso1" onchange="calcularTotal()">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="total-ingresso">
                            <p>Total:</p>
                            <p>R$ 38,00</p>
                        </div>
                    </div>
                </div>

                <div class="caixa-valores">
                    <button type="button"><img src="imagens/lixeira-vermelha.png" alt="" width="30px"> </button>
                    <div class="escolhas">
                        <div class="tipo-ingresso">
                            <p>Ingresso:</p>
                            <p>Meia promocional</p>
                        </div>
                        <div class="quantidade-ingresso">
                            <p>Quantidade</p>
                            <input type="number" id="quantidade-ingresso2" step="1" onchange="calcularTotal()">
                        </div>
                        <div class="total-ingresso">
                            <p>Total:</p>
                            <p>R$ 18,50</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="caixa-finalizar">
                <div class="finalizar">
                    <input type="hidden" id="total_pagar" name="total_pagar" value="111.9">
                    <p id="total_pagar_display">TOTAL À PAGAR R$ 111,90</p>

                    <button class="btn" href="pagamento_sessao.php">AVANÇAR <img src="imagens/setinha-rosa.png" alt="" width="10px"></button>
                </div>
            </div>
        </form>
    </main>
</body>

</html>
 <!--oi-->

    <!--Salve Haridade-->

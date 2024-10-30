<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingressos</title>
    <link rel="stylesheet" href="css/pagamento_ingressos.css">
    <script>
        function calcularTotal() {
            // Pegando os valores dos itens
            const quantidadeIngresso1 = parseInt(document.getElementById('quantidade-ingresso1').value) || 0;
            const quantidadeIngresso2 = parseInt(document.getElementById('quantidade-ingresso2').value) || 0;
            const precoIngresso1 = 38.00;
            const precoIngresso2 = 18.50;

            // Calculando o total
            const totalIngresso1 = quantidadeIngresso1 * precoIngresso1;
            const totalIngresso2 = quantidadeIngresso2 * precoIngresso2;
            const total = totalIngresso1 + totalIngresso2;

            // Atualizando o valor total na tela
            document.getElementById('total_pagar').value = total.toFixed(2);
            document.getElementById('total_pagar_display').textContent = `TOTAL À PAGAR R$ ${total.toFixed(2)}`;
        }
    </script>
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
                       
                            <div class="quantidade-ingresso">
                            <p style="margin: 4rem auto;">Quantidade</p>
                            <button type="button" onclick="decrementa('qtd_inteira')">-</button>
                            <input type="number" name="qtd_inteira" id="qtd_inteira" step="1" value="0">
                            <button type="button" onclick="incrementa('qtd_inteira')">+</button>
                        </div>
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
                            <div class="quantidade-ingresso">
                            <p style="margin: 4rem auto;">Quantidade</p>
                            <button type="button" onclick="decrementa('qtd_meia')">-</button>
                            <input type="number" name="qtd_meia" id="qtd_meia" step="1" value="0">
                            <button type="button" onclick="incrementa('qtd_meia')">+</button>
                        </div>
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
    <script src="javascript/pagamento_ingressos.js"></script>
    </body>

</html>

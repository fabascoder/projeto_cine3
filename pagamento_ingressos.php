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
        <!-- Código do header omitido para simplificação -->
    </header>

    <main>
        <div class="titulo">
            <a href="index.php"><img src="imagens/seta.png" alt="" width="30px"></a>
            <p>Ingressos</p>
        </div>

        <div class="valores">
            <form action="pagamento_sessao.php" method="post">
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
                            <select name="quantidadeInteira" id="quantidadeInteira" onchange="calcularTotal(); salvarQuantidade()">
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
                            <select name="quantidadeMeia" id="quantidadeMeia" onchange="calcularTotal(); salvarQuantidade()">
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
                        <input type="hidden" id="total_pagar" name="total_pagar" value="111.90">
                        <p id="total_pagar_display">TOTAL À PAGAR R$ 111,90</p>
                        <button type="submit" class="btn" onclick="salvarQuantidade()">AVANÇAR ></button>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <footer>
        <!-- Conteúdo do Rodapé -->
    </footer>

    <script>
    function salvarQuantidade() {
        const quantidadeInteira = parseInt(document.getElementById("quantidadeInteira").value) || 0;
        const quantidadeMeia = parseInt(document.getElementById("quantidadeMeia").value) || 0;
        const totalIngressos = quantidadeInteira + quantidadeMeia;

        // Salva o total de ingressos na sessionStorage para usar na próxima página
        sessionStorage.setItem("totalIngressos", totalIngressos);
    }
    </script>
</body>
</html>

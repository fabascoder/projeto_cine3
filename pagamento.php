<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
    <link rel="stylesheet" href="css/pagamento.css">
</head>
<body>
<?php 
    include_once "header_pagto.php";
    ?>
    <main>
        <div class="caixa-principal">
            <div class="local-data">
                <p class="local">Qui, 27, 13:30 | Sala 02 - e5; d11.</p>
                <a href="https://www.google.com/maps/dir//Av.+José+Pinheiro+Borges+-+Itaquera,+São+Paulo+-+SP,+08220-900/@-23.5405404,-46.5530448,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x94ce5e622db57c4f:0x3de99bb691d3dc68!2m2!1d-46.4706432!2d-23.5405621?entry=ttu&g_ep=EgoyMDI0MDkxOC4xIKXMDSoASAFQAw%3D%3D" class="data" target="_blank" rel="external"><img src="/imagens/local.png" alt="" width="30px">Shopping Metrô Itaquera-SP</a>
            </div>
            <div class="conferir-nota">
                <p class="itens">2x ingressos padrao</p>
                <p class="valor"><R1>38,00</R1></p>
            </div>
            <hr>
            <div class="total">
                <p>TOTAL</p>
                <p>R$38,00</p>
            </div>
            <p style="padding-left: 20px; font-weight: 500; font-family: sans-serif;">FORMA DE PAGAMENTO</p>
            <div class="forma-de-pagamento">
                <div class="labels">
                    <label class="label">
                        <input type="radio" name="radio" class="radio">
                        <span class="customizar-radio"></span>
                        <img src="imagens/visa.png" alt="Visa.png" width="60px">
                    </label>
                    <label class="label">
                        <input type="radio" name="radio" class="radio">
                        <span class="customizar-radio"></span>
                        <img src="imagens/MasterCard_Logo.svg.png" alt="MasterCard.png" width="60px">
                    </label>
                    <label class="label">
                        <input type="radio" name="radio" class="radio" >
                        <span class="customizar-radio"></span>
                        <img src="imagens/logo-pix-520x520.png" alt="Pix.png" width="60px">
                    </label>
                    <label class="label">
                        <input type="radio" name="radio" class="radio">
                        <span class="customizar-radio"></span>
                        <img src="imagens/boleto-logo-0.png" alt="boleto.png" width="60px">
                    </label>
                </div>
                <div class="qr-code">
                    <img src="imagens/qrcode.png" alt="QRcode.png" >
                </div>
            </div> 
        </div>
        <div class="botao">
            <a class="btn" href="pagamento_confirmacao.php">CONTINUAR ></a>
        </div>
    </main>
</body>
</html>
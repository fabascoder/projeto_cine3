<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação</title>
    <link rel="stylesheet" href="css/pagamento_confirmacao.css">
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
            <a href="pagina_pricipal.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
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
        <div class="caixa-principal">
            <div class="mensagem">
                <img src="imagens/confere.png" alt="" width="40px;">
                <p style="color: #5bd336;">CONCLUÍDO!</p>
                <p>AGORA, BASTA APRESENTAR O CÓDIGO DE BARRAS ABAIXO PARA ALGUM DOS FUNCIONÁRIOS DO CINE3 NO LOCAL SELECIONADO</p>
            </div>
            <div class="local-data">
                <p class="data">Qui, 27, 13:30 | Sala 02 - e5; d11.</p>
                <a href="https://www.google.com/maps/dir//Av.+José+Pinheiro+Borges+-+Itaquera,+São+Paulo+-+SP,+08220-900/@-23.5405404,-46.5530448,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x94ce5e622db57c4f:0x3de99bb691d3dc68!2m2!1d-46.4706432!2d-23.5405621?entry=ttu&g_ep=EgoyMDI0MDkxOC4xIKXMDSoASAFQAw%3D%3D" class="local" target="_blank" rel="external"><img src="/imagens/local.png" alt="" width="30px">Shopping Metrô Itaquera-SP</a>
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
            <div class="codigo-de-barras">
                <img src="imagens/25350.png" alt="">
            </div>
            <div class="voltar-inicio">
                <a href="principal.php">VOLTAR AO INÍCIO</a>
            </div>
        </div>
    </main>
</body>
</html>
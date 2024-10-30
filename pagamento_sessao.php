<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessão</title>
    <link rel="stylesheet" href="css/pagamento_sessao.css">
</head>

<body>
    <?php 
    include_once "header_pagto.php";
    $_SESSION['total_pagar'] = $_POST['total_pagar']??"";
    $_SESSION['total'] = $_POST['total']??"";
    $_SESSION['qtd_inteira'] = $POST['qtd_inteira']??"";
    $_SESSION['qtd_meia'] = $_POST['qtd_meia']??"";
    $_SESSION['valor_inteira'] = $_POST['valor_inteira']??"";
    $_SESSION['tamanho-camiseta'] = $_POST['tamanho-camiseta']??"";
    $_SESSION['tamanho-camiseta'] = $_POST['tamanho-camiseta']??"";
    ?>
    <main>
    <form action="pagamento_produtos.php" method="post" id="sessao">
       
        <div class="caixa-principal">
            <h1>SALA: 01</h1>
            <div class="cinema">
                <div class="caixa-assentos">
                    <div class="linha">
                        <div class="numero"></div>
                        <div class="numero">1</div>
                        <div class="numero">2</div>
                        <div class="numero">3</div>
                        <div class="numero">4</div>
                        <div class="numero">5</div>
                        <div class="numero">6</div>
                        <div class="numero">7</div>
                        <div class="numero">8</div>
                        <div class="numero">9</div>
                        <div class="numero">10</div>
                        <div class="numero">11</div>
                        <div class="numero">12</div>
                        <div class="numero">13</div>
                        <div class="numero">14</div>
                        <div class="numero">15</div>
                    </div>
                    <div class="linha">
                        <label>A</label>
                        <div class="assento"><input type="checkbox" name="A1" class="assentos" id="A1">
                        </div>
                        <div class="assento"><input type="checkbox" name="A2" class="assentos" id="A2">
                        </div>
                        <div class="assento"><input type="checkbox" name="A3" class="assentos" id="A3">
                        </div>
                        <div class="assento"><input type="checkbox" name="A4" class="assentos" id="A4">
                        </div>
                        <div class="assento"><input type="checkbox" name="A5" class="assentos" id="A5">
                        </div>
                        <div class="assento"><input type="checkbox" name="A6" class="assentos" id="A6">
                        </div>
                        <div class="assento"><input type="checkbox" name="A7" class="assentos" id="A7">
                        </div>
                        <div class="assento"><input type="checkbox" name="A8" class="assentos" id="A8">
                        </div>
                        <div class="assento"><input type="checkbox" name="A9" class="assentos" id="A9">
                        </div>
                        <div class="assento"><input type="checkbox" name="A10" class="assentos" id="A10">
                        </div>
                        <div class="assento"><input type="checkbox" name="A11" class="assentos" id="A11">
                        </div>
                        <div class="assento"><input type="checkbox" name="A12" class="assentos" id="A12">
                        </div>
                        <div class="assento"><input type="checkbox" name="A13" class="assentos" id="A13">
                        </div>
                        <div class="assento"><input type="checkbox" name="A14" class="assentos" id="A14">
                        </div>
                        <div class="assento"><input type="checkbox" name="A15" class="assentos" id="A15">
                        </div>
                    </div>
                    <div class="linha">
                        <label>B</label>
                        <div class="assento"><input type="checkbox" name="B1" class="assentos" id="B1">
                        </div>
                        <div class="assento"><input type="checkbox" name="B2" class="assentos" id="B2">
                        </div>
                        <div class="assento"><input type="checkbox" name="B3" class="assentos" id="B3">
                        </div>
                        <div class="assento"><input type="checkbox" name="B4" class="assentos" id="B4">
                        </div>
                        <div class="assento"><input type="checkbox" name="B5" class="assentos" id="B5">
                        </div>
                        <div class="assento"><input type="checkbox" name="B6" class="assentos" id="B6">
                        </div>
                        <div class="assento"><input type="checkbox" name="B7" class="assentos" id="B7">
                        </div>
                        <div class="assento"><input type="checkbox" name="B8" class="assentos" id="B8">
                        </div>
                        <div class="assento"><input type="checkbox" name="B9" class="assentos" id="B9">
                        </div>
                        <div class="assento"><input type="checkbox" name="B10" class="assentos" id="B10">
                        </div>
                        <div class="assento"><input type="checkbox" name="B11" class="assentos" id="B11">
                        </div>
                        <div class="assento"><input type="checkbox" name="B12" class="assentos" id="B12">
                        </div>
                        <div class="assento"><input type="checkbox" name="B13" class="assentos" id="B13">
                        </div>
                        <div class="assento"><input type="checkbox" name="B14" class="assentos" id="B14">
                        </div>
                        <div class="assento"><input type="checkbox" name="B15" class="assentos" id="B15">
                        </div>
                    </div>
                    <div class="linha">
                        <label>C</label>
                        <div class="assento"><input type="checkbox" name="C1" class="assentos" id="C1">
                        </div>
                        <div class="assento"><input type="checkbox" name="C2" class="assentos" id="C2">
                        </div>
                        <div class="assento"><input type="checkbox" name="C3" class="assentos" id="C3">
                        </div>
                        <div class="assento"><input type="checkbox" name="C4" class="assentos" id="C4">
                        </div>
                        <div class="assento"><input type="checkbox" name="C5" class="assentos" id="C5">
                        </div>
                        <div class="assento"><input type="checkbox" name="C6" class="assentos" id="C6">
                        </div>
                        <div class="assento"><input type="checkbox" name="C7" class="assentos" id="C7">
                        </div>
                        <div class="assento"><input type="checkbox" name="C8" class="assentos" id="C8">
                        </div>
                        <div class="assento"><input type="checkbox" name="C9" class="assentos" id="C9">
                        </div>
                        <div class="assento"><input type="checkbox" name="C10" class="assentos" id="C10">
                        </div>
                        <div class="assento"><input type="checkbox" name="C11" class="assentos" id="C11">
                        </div>
                        <div class="assento"><input type="checkbox" name="C12" class="assentos" id="C12">
                        </div>
                        <div class="assento"><input type="checkbox" name="C13" class="assentos" id="C13">
                        </div>
                        <div class="assento"><input type="checkbox" name="C14" class="assentos" id="C14">
                        </div>
                        <div class="assento"><input type="checkbox" name="C15" class="assentos" id="C15">
                        </div>
                    </div>
                    <div class="linha">
                        <label>D</label>
                        <div class="assento"><input type="checkbox" name="D1" class="assentos" id="D1">
                        </div>
                        <div class="assento"><input type="checkbox" name="D2" class="assentos" id="D2">
                        </div>
                        <div class="assento"><input type="checkbox" name="D3" class="assentos" id="D3">
                        </div>
                        <div class="assento"><input type="checkbox" name="D4" class="assentos" id="D4">
                        </div>
                        <div class="assento"><input type="checkbox" name="D5" class="assentos" id="D5">
                        </div>
                        <div class="assento"><input type="checkbox" name="D6" class="assentos" id="D6">
                        </div>
                        <div class="assento"><input type="checkbox" name="D7" class="assentos" id="D7">
                        </div>
                        <div class="assento"><input type="checkbox" name="D8" class="assentos" id="D8">
                        </div>
                        <div class="assento"><input type="checkbox" name="D9" class="assentos" id="D9">
                        </div>
                        <div class="assento"><input type="checkbox" name="D10" class="assentos" id="D10">
                        </div>
                        <div class="assento"><input type="checkbox" name="D11" class="assentos" id="D11">
                        </div>
                        <div class="assento"><input type="checkbox" name="D12" class="assentos" id="D12">
                        </div>
                        <div class="assento"><input type="checkbox" name="D13" class="assentos" id="D13">
                        </div>
                        <div class="assento"><input type="checkbox" name="D14" class="assentos" id="D14">
                        </div>
                        <div class="assento"><input type="checkbox" name="D15" class="assentos" id="D15">
                        </div>
                    </div>
                    <div class="linha">
                        <label>E</label>
                        <div class="assento"><input type="checkbox" name="E1" class="assentos" id="E1">
                        </div>
                        <div class="assento"><input type="checkbox" name="E2" class="assentos" id="E2">
                        </div>
                        <div class="assento"><input type="checkbox" name="E3" class="assentos" id="E3">
                        </div>
                        <div class="assento"><input type="checkbox" name="E4" class="assentos" id="E4">
                        </div>
                        <div class="assento"><input type="checkbox" name="E5" class="assentos" id="E5">
                        </div>
                        <div class="assento"><input type="checkbox" name="E6" class="assentos" id="E6">
                        </div>
                        <div class="assento"><input type="checkbox" name="E7" class="assentos" id="E7">
                        </div>
                        <div class="assento"><input type="checkbox" name="E8" class="assentos" id="E8">
                        </div>
                        <div class="assento"><input type="checkbox" name="E9" class="assentos" id="E9">
                        </div>
                        <div class="assento"><input type="checkbox" name="E10" class="assentos" id="E10">
                        </div>
                        <div class="assento"><input type="checkbox" name="E11" class="assentos" id="E11">
                        </div>
                        <div class="assento"><input type="checkbox" name="E12" class="assentos" id="E12">
                        </div>
                        <div class="assento"><input type="checkbox" name="E13" class="assentos" id="E13">
                        </div>
                        <div class="assento"><input type="checkbox" name="E14" class="assentos" id="E14">
                        </div>
                        <div class="assento"><input type="checkbox" name="E15" class="assentos" id="E15">
                        </div>
                    </div>
                    <div class="linha">
                        <label>F</label>
                        <div class="assento"><input type="checkbox" name="F1" class="assentos" id="F1">
                        </div>
                        <div class="assento"><input type="checkbox" name="F2" class="assentos" id="F2">
                        </div>
                        <div class="assento"><input type="checkbox" name="F3" class="assentos" id="F3">
                        </div>
                        <div class="assento"><input type="checkbox" name="F4" class="assentos" id="F4">
                        </div>
                        <div class="assento"><input type="checkbox" name="F5" class="assentos" id="F5">
                        </div>
                        <div class="assento"><input type="checkbox" name="F6" class="assentos" id="F6">
                        </div>
                        <div class="assento"><input type="checkbox" name="F7" class="assentos" id="F7">
                        </div>
                        <div class="assento"><input type="checkbox" name="F8" class="assentos" id="F8">
                        </div>
                        <div class="assento"><input type="checkbox" name="F9" class="assentos" id="F9">
                        </div>
                        <div class="assento"><input type="checkbox" name="F10" class="assentos" id="F10">
                        </div>
                        <div class="assento"><input type="checkbox" name="F11" class="assentos" id="F11">
                        </div>
                        <div class="assento"><input type="checkbox" name="F12" class="assentos" id="F12">
                        </div>
                        <div class="assento"><input type="checkbox" name="F13" class="assentos" id="F13">
                        </div>
                        <div class="assento"><input type="checkbox" name="F14" class="assentos" id="F14">
                        </div>
                        <div class="assento"><input type="checkbox" name="F15" class="assentos" id="F15">
                        </div>
                    </div>
                    <div class="linha">
                        <label>G</label>
                        <div class="assento"><input type="checkbox" name="G1" class="assentos" id="G1">
                        </div>
                        <div class="assento"><input type="checkbox" name="G2" class="assentos" id="G2">
                        </div>
                        <div class="assento"><input type="checkbox" name="G3" class="assentos" id="G3">
                        </div>
                        <div class="assento"><input type="checkbox" name="G4" class="assentos" id="G4">
                        </div>
                        <div class="assento"><input type="checkbox" name="G5" class="assentos" id="G5">
                        </div>
                        <div class="assento"><input type="checkbox" name="G6" class="assentos" id="G6">
                        </div>
                        <div class="assento"><input type="checkbox" name="G7" class="assentos" id="G7">
                        </div>
                        <div class="assento"><input type="checkbox" name="G8" class="assentos" id="G8">
                        </div>
                        <div class="assento"><input type="checkbox" name="G9" class="assentos" id="G9">
                        </div>
                        <div class="assento"><input type="checkbox" name="G10" class="assentos" id="G10">
                        </div>
                        <div class="assento"><input type="checkbox" name="G11" class="assentos" id="G11">
                        </div>
                        <div class="assento"><input type="checkbox" name="G12" class="assentos" id="G12">
                        </div>
                        <div class="assento"><input type="checkbox" name="G13" class="assentos" id="G13">
                        </div>
                        <div class="assento"><input type="checkbox" name="G14" class="assentos" id="G14">
                        </div>
                        <div class="assento"><input type="checkbox" name="G15" class="assentos" id="G15">
                        </div>
                    </div>
                    <div class="linha">
                        <label>H</label>
                        <div class="assento"><input type="checkbox" name="H1" class="assentos" id="H1">
                        </div>
                        <div class="assento"><input type="checkbox" name="H2" class="assentos" id="H2">
                        </div>
                        <div class="assento"><input type="checkbox" name="H3" class="assentos" id="H3">
                        </div>

                        <div class="assento"><input type="checkbox" name="H4" class="assentos" id="H4">
                        </div>
                        <div class="assento"><input type="checkbox" name="H5" class="assentos" id="H5">
                        </div>
                        <div class="assento"><input type="checkbox" name="H6" class="assentos" id="H6">
                        </div>
                        <div class="assento"><input type="checkbox" name="H7" class="assentos" id="H7">
                        </div>
                        <div class="assento"><input type="checkbox" name="H8" class="assentos" id="H8">
                        </div>
                        <div class="assento"><input type="checkbox" name="H9" class="assentos" id="H9">
                        </div>
                        <div class="assento"><input type="checkbox" name="H10" class="assentos" id="H10">
                        </div>
                        <div class="assento"><input type="checkbox" name="H11" class="assentos" id="H11">
                        </div>
                        <div class="assento"><input type="checkbox" name="H12" class="assentos" id="H12">
                        </div>

                        <div class="assento"><input type="checkbox" name="H13" class="assentos" id="H13">
                        </div>
                        <div class="assento"><input type="checkbox" name="H14" class="assentos" id="H14">
                        </div>
                        <div class="assento"><input type="checkbox" name="H15" class="assentos" id="H15">
                        </div>
                    </div>

                    <div class="tela">SALA 01</div>

                </div>
            </div>
            <p class=" assentos-escolhidos">ASSENTO(S) ESCOLHIDOS: <span  class="escolhidos"></span></p>
            <hr>

            <div class="localizacao">
    
                <div class="escolher-cidade">
                <p>LOCAL:</p>
                    <img src="/imagens/local.png" alt="" width="20px">
                    <select name="select" id="select">
                        <option value="São Paulo">São Paulo</option>
                        <option value="São Paulo">São Paulo</option>
                        <option value="São Paulo">São Paulo</option>
                    </select>
                </div>
                <img src="/imagens/local.png" alt="" width="20px">
                <a href="https://www.google.com/maps/dir//Av.+José+Pinheiro+Borges+-+Itaquera,+São+Paulo+-+SP,+08220-900/@-23.5405404,-46.5530448,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x94ce5e622db57c4f:0x3de99bb691d3dc68!2m2!1d-46.4706432!2d-23.5405621?entry=ttu&g_ep=EgoyMDI0MDkxOC4xIKXMDSoASAFQAw%3D%3D"
                    target="_blank" class="shop">Shopping Metrô Itaquera</a>
            </div>

            <div class="botao">
                <button type="submit" href="pagamento_produtos.php" class="btn">AVANÇAR ></button>
            </div>

        </div>
</form>
    </main>
    <script src="javascript/assentos.js"></script>
</body>

</html>
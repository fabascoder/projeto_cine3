<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessão</title>
    <link rel="stylesheet" href="css/pagamento_sessao.css">
    <link rel="stylesheet" href="css/footer.css">
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
                        <div class="assento"><input type="checkbox" name="assentos1" class="assentos" id="A1">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos2" class="assentos" id="A2">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos3" class="assentos" id="A3">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos4" class="assentos" id="A4">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos5" class="assentos" id="A5">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos6" class="assentos" id="A6">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos7" class="assentos" id="A7">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos8" class="assentos" id="A8">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos9" class="assentos" id="A9">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos10" class="assentos" id="A10">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos11" class="assentos" id="A11">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos12" class="assentos" id="A12">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos13" class="assentos" id="A13">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos14" class="assentos" id="A14">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos15" class="assentos" id="A15">
                        </div>
                    </div>
                    <div class="linha">
                        <label>B</label>
                        <div class="assento"><input type="checkbox" name="assentos1" class="assentos" id="B1">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos2" class="assentos" id="B2">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos3" class="assentos" id="B3">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos4" class="assentos" id="B4">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos5" class="assentos" id="B5">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos6" class="assentos" id="B6">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos7" class="assentos" id="B7">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos8" class="assentos" id="B8">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos9" class="assentos" id="B9">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos10" class="assentos" id="B10">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos11" class="assentos" id="B11">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos12" class="assentos" id="B12">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos13" class="assentos" id="B13">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos14" class="assentos" id="B14">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos15" class="assentos" id="B15">
                        </div>
                    </div>
                    <div class="linha">
                        <label>C</label>
                        <div class="assento"><input type="checkbox" name="assentos1" class="assentos" id="C1">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos2" class="assentos" id="C2">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos3" class="assentos" id="C3">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos4" class="assentos" id="C4">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos5" class="assentos" id="C5">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos6" class="assentos" id="C6">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos7" class="assentos" id="C7">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos8" class="assentos" id="C8">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos9" class="assentos" id="C9">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos10" class="assentos" id="C10">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos11" class="assentos" id="C11">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos12" class="assentos" id="C12">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos13" class="assentos" id="C13">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos14" class="assentos" id="C14">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos15" class="assentos" id="C15">
                        </div>
                    </div>
                    <div class="linha">
                        <label>D</label>
                        <div class="assento"><input type="checkbox" name="assentos1" class="assentos" id="D1">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos2" class="assentos" id="D2">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos3" class="assentos" id="D3">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos4" class="assentos" id="D4">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos5" class="assentos" id="D5">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos6" class="assentos" id="D6">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos7" class="assentos" id="D7">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos8" class="assentos" id="D8">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos9" class="assentos" id="D9">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos10" class="assentos" id="D10">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos11" class="assentos" id="D11">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos12" class="assentos" id="D12">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos13" class="assentos" id="D13">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos14" class="assentos" id="D14">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos15" class="assentos" id="D15">
                        </div>
                    </div>
                    <div class="linha">
                        <label>E</label>
                        <div class="assento"><input type="checkbox" name="assentos1" class="assentos" id="E1">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos2" class="assentos" id="E2">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos3" class="assentos" id="E3">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos4" class="assentos" id="E4">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos5" class="assentos" id="E5">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos6" class="assentos" id="E6">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos7" class="assentos" id="E7">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos8" class="assentos" id="E8">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos9" class="assentos" id="E9">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos10" class="assentos" id="E10">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos11" class="assentos" id="E11">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos12" class="assentos" id="E12">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos13" class="assentos" id="E13">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos14" class="assentos" id="E14">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos15" class="assentos" id="E15">
                        </div>
                    </div>
                    <div class="linha">
                        <label>F</label>
                        <div class="assento"><input type="checkbox" name="assentos1" class="assentos" id="F1">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos2" class="assentos" id="F2">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos3" class="assentos" id="F3">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos4" class="assentos" id="F4">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos5" class="assentos" id="F5">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos6" class="assentos" id="F6">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos7" class="assentos" id="F7">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos8" class="assentos" id="F8">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos9" class="assentos" id="F9">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos10" class="assentos" id="F10">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos11" class="assentos" id="F11">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos12" class="assentos" id="F12">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos13" class="assentos" id="F13">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos14" class="assentos" id="F14">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos15" class="assentos" id="F15">
                        </div>
                    </div>
                    <div class="linha">
                        <label>G</label>
                        <div class="assento"><input type="checkbox" name="assentos1" class="assentos" id="G1">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos2" class="assentos" id="G2">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos3" class="assentos" id="G3">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos4" class="assentos" id="G4">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos5" class="assentos" id="G5">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos6" class="assentos" id="G6">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos7" class="assentos" id="G7">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos8" class="assentos" id="G8">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos9" class="assentos" id="G9">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos10" class="assentos" id="G10">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos11" class="assentos" id="G11">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos12" class="assentos" id="G12">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos13" class="assentos" id="G13">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos14" class="assentos" id="G14">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos15" class="assentos" id="G15">
                        </div>
                    </div>
                    <div class="linha">
                        <label>H</label>
                        <div class="assento"><input type="checkbox" name="assentos1" class="assentos" id="H1">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos2" class="assentos" id="H2">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos3" class="assentos" id="H3">
                        </div>

                        <div class="assento"><input type="checkbox" name="assentos4" class="assentos" id="H4">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos5" class="assentos" id="H5">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos6" class="assentos" id="H6">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos7" class="assentos" id="H7">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos8" class="assentos" id="H8">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos9" class="assentos" id="H9">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos10" class="assentos" id="H10">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos11" class="assentos" id="H11">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos12" class="assentos" id="H12">
                        </div>

                        <div class="assento"><input type="checkbox" name="assentos13" class="assentos" id="H13">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos14" class="assentos" id="H14">
                        </div>
                        <div class="assento"><input type="checkbox" name="assentos15" class="assentos" id="H15">
                        </div>
                    </div>

                    <div class="tela">TELA</div>

                </div>
            </div>
            <p class=" assentos-escolhidos">ASSENTO(S) ESCOLHIDOS: <span  class="escolhidos"></span></p>
            <hr>

            <div class="localizacao">
    
                <div class="escolher-cidade">
                <p>LOCAL:</p>
                    <img src="/imagens/local.png" alt="" width="20px">
                    <select name="local_sessao" id="local_sessao">
                        <option value="São Paulo">São Paulo</option>
                        <option value="Lapa">Lapa</option>
                        <option value="Itaquera">Itaquera</option>
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
    <script src="javascript/assentos.js"></script>
    <script>
        // Recupera a quantidade total de ingressos da sessionStorage
        const maxAssentos = parseInt(sessionStorage.getItem("totalIngressos")) || 0;
        let selectedCount = 0;
        const listaAssentos = document.getElementById('listaAssentos');
        let assentosSelecionados = [];

        // Selecione todos os checkboxes de assento
        const checkboxes = document.querySelectorAll('.assentos');

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const assentoId = this.id;

                if (this.checked) {
                    if (selectedCount < maxAssentos) {
                        selectedCount++;
                        assentosSelecionados.push(assentoId);
                        this.parentElement.classList.add('assento-selecionado'); // Muda a cor do assento selecionado
                    } else {
                        this.checked = false; // Impede que mais assentos sejam selecionados
                    }
                } else {
                    selectedCount--;
                    assentosSelecionados = assentosSelecionados.filter(id => id !== assentoId);
                    this.parentElement.classList.remove('assento-selecionado'); // Remove a cor do assento desmarcado
                }

                // Atualiza a lista de assentos escolhidos
                listaAssentos.textContent = assentosSelecionados.length > 0 ? assentosSelecionados.join(', ') : 'Nenhum assento selecionado';
            });
        });
    </script>
</body>
</html>
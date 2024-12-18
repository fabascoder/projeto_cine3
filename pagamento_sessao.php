<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleção de Assentos</title>
    <link rel="stylesheet" href="css/pagamento_sessao.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
<?php 
    $_SESSION['total_pagar'] = $_POST['total_pagar']??"";
    $_SESSION['total'] = $_POST['total']??"";
    $_SESSION['qtd_inteira'] = $POST['qtd_inteira']??"";
    $_SESSION['qtd_meia'] = $_POST['qtd_meia']??"";
    $_SESSION['valor_inteira'] = $_POST['valor_inteira']??"";
    $_SESSION['tamanho-camiseta'] = $_POST['tamanho-camiseta']??"";
    $_SESSION['tamanho-camiseta'] = $_POST['tamanho-camiseta']??"";
    //adicionado 
    ?>

<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $_SESSION['quantidadeInteira'] = $_POST['quantidadeInteira'] ?? 0;
        $_SESSION['quantidadeMeia'] = $_POST['quantidadeMeia'] ?? 0;
    }

    // Total de assentos permitidos
    $totalAssentos = ($_SESSION['quantidadeInteira'] ?? 0) + ($_SESSION['quantidadeMeia'] ?? 0);
?>


    <header>
        <nav>
            <ul>
                <li>
                    <a href="index.php">
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

                <p >Ingresso</p>
            </div>

            <div class="etapas-compra2">
                <img src="imagens/secao.png" alt="">

                <p >Seção</p>
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

 <div class="titulo">
            <a href="pagamento_ingressos.php"><img src="imagens/seta.png" alt="" width="30px"></a>
            <p>Sessão</p>
        </div>
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
            <p style="font-family: Arial, Helvetica, sans-serif; padding-top: 18px; font-size: 15px; margin-left: 20px; color: #333;">Você pode selecionar até <span id="max-assentos"><?php echo $totalAssentos; ?></span> assentos.</p>
            <p class="assentos-escolhidos">ASSENTO(S) ESCOLHIDOS: <span class="escolhidos">0</span></p>


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
    <!-- <script src="javascript/pagamento_sessao.js"></script> -->
    <script>
    // Total de assentos permitido (passado do PHP)
    const totalAssentos = <?php echo $totalAssentos; ?>;

    document.addEventListener("DOMContentLoaded", () => {
        const assentos = document.querySelectorAll(".assentos");
        let selecionados = 0;

        assentos.forEach((assento) => {
            assento.addEventListener("change", () => {
                if (assento.checked) {
                    if (selecionados < totalAssentos) {
                        selecionados++;
                        assento.parentNode.style.backgroundColor = ""; // Muda a cor do assento selecionado
                    } else {
                        assento.checked = false;
                    }
                } else {
                    selecionados--;
                    assento.parentNode.style.backgroundColor = ""; // Remove a cor do assento desmarcado
                }

                // Desabilita os assentos extras
                if (selecionados >= totalAssentos) {
                    assentos.forEach((a) => {
                        if (!a.checked) {
                            a.disabled = true; // Desabilita assentos não selecionados
                            a.parentNode.style.opacity = "0.8"; // Visualmente indica desabilitação
                        }
                    });
                } else {
                    assentos.forEach((a) => {
                        a.disabled = false; // Reabilita todos os assentos
                        a.parentNode.style.opacity = "1"; // Remove o efeito visual
                    });
                }
            });
        });
    });


       // Obtém todos os checkboxes dos assentos
       const assentos = document.querySelectorAll('.assentos');
    const assentosEscolhidosEl = document.querySelector('.assentos-escolhidos .escolhidos');
    const maxAssentos = parseInt(document.getElementById('max-assentos').textContent, 10);
    let assentosSelecionados = [];

    // Função para atualizar os assentos selecionados
    function atualizarAssentosSelecionados() {
        assentosEscolhidosEl.textContent = assentosSelecionados.length; // Mostra a quantidade selecionada
        const assentosTexto = document.querySelector('.assentos-escolhidos');
        assentosTexto.innerHTML = `ASSENTO(S) ESCOLHIDOS: <span class="escolhidos">${assentosSelecionados.length}</span> ${assentosSelecionados.join(', ')}`;

    }

    // Adiciona o evento de clique para cada checkbox
    assentos.forEach((checkbox) => {
        checkbox.addEventListener('change', function () {
            if (this.checked) {
                if (assentosSelecionados.length < maxAssentos) {
                    assentosSelecionados.push(this.id); // Adiciona o ID do assento
                } else {
                    this.checked = false; // Impede seleção além do limite
                    alert('Você atingiu o limite máximo de assentos!'); 
                }
                this.value = this.id;
            } else {
                // Remove o assento desmarcado
                assentosSelecionados = assentosSelecionados.filter(id => id !== this.id);
            }
            atualizarAssentosSelecionados();
        });
    });
    

// Bloqueia envio do formulário se o número de assentos não for suficiente
document.getElementById('sessao').addEventListener('submit', function (event) {
    if (assentosSelecionados.length < maxAssentos) {
        event.preventDefault(); // Impede o envio do formulário
        alert(`Por favor, selecione todos os ${maxAssentos} assentos antes de continuar.`);
    }
});
</script>

</body>
</html>

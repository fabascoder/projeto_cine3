<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossas Localidades</title>
    <link rel="stylesheet" href="css/local.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/principal.css">
</head>

<body>
<header>
        
        <div class="logo-pesquisa">
            <a href="index.php"><img src="imagens/Logo_Cine3-removebg-preview.png" alt="Imagem CINE3" width="200px"></a>
            <div class="div_pesquisa">
                <input type="search" id="pesquisa" placeholder="Pesquisar">
            </div>
        </div>
        <div class="menu-hamburguer">
            <input type="checkbox" id="menu-toggle" class="menu-toggle">
            <label for="menu-toggle" class="menu-icon">
                <span class="material-symbols-outlined">menu</span>
            </label>
            <nav class="menu">
                <ul>
                    <li><a href="javascript:void(0)" id="openModal"><div>
                                    <span id="icon_ingresso" class="material-symbols-outlined">
                                        confirmation_number
                                    </span>
                                </div>
                                Ingressos
                            </a></li>
                    <li><a href="produtos.php"><div>
                            <span id="icon_produto" class="material-symbols-outlined">
                                shopping_bag
                            </span>
                        </div> 
                        Produtos
                    </a></li>
                    <li class="li-1"><a href="local.php"><div>
                            <span id="icon_local" class="material-symbols-outlined">
                                pin_drop
                            </span>
                        </div>
                        Local
                    </a></li>
                    <li><a href="login.php"><div>
                            <span id="icon_profile" class="material-symbols-outlined">
                                account_circle
                            </span>
                        </div>
                        Login
                </ul>
            </nav>
        </div>

        <nav id="navegacao">


                

                <!-- Modal HTML -->
                <dialog id="modal-ingressos" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h2 class="ingressos">Ingressos</h2>
                        <div>
                            <p class="p1">Padrão Inteira</p>
                            <p class="v1">Válido de quinta-feira, sexta-feira, sábado e domingo.</p>
                            <p class="t1">R$18,00</p>
                        </div>
                        <hr>
                        <div>
                            <p class="p1">Meia Promocional</p>
                            <p class="v1">Válido de segunda-feira, terça-feira e quarta-feira OU com Comprovante
                                Escolar.</p>
                            <p class="t1">R$9,00</p>
                        </div>
                    </div>
                </dialog>



        </nav>
    </header>
    <div class="titulo">
        <h1>Nossas Localidades</h1>
    </div>
    <main>

        <img src="imagens/Localizaçao_Cine3.png" alt="" id="img_princiapal">
        <div class="localizacao">
            <div class="decidir-local">
                <img src="imagens/local.png" alt="" width="30px">
                <select name="tamanho-camisa" id="tamanho-camisa">
                    <option value="P">São Paulo</option>
                    <option value="M">São Paulo</option>
                    <option value="G">São Paulo</option>
                </select>
            </div>
            <p>CEP: <a href="">XXXXX-XXX</a></p>
            <br>
                <div class="decidir-local">
                    <img src="imagens/local.png" alt="" width="30px">
                    <a href="https://www.google.com/maps/dir//R.+Tito,+54+-+Vila+Romana,+São+Paulo+-+SP,+05051-000/@-23.5280642,-46.7741618,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x94cef8775663b04f:0x923835e9005f8309!2m2!1d-46.69176!2d-23.5280856?entry=ttu&g_ep=EgoyMDI0MTAyMC4xIKXMDSoASAFQAw%3D%3D" target="_blank" rel="external">Shopping Metrô Itaquera</a>
                </div>
            </form>
            <div id="resposta"></div>
            <script>
            const div = document.getElementById('resposta');
            const formulario = document.getElementById('formulario');
            formulario.addEventListener('input', (evento) => {
                let value = document.getElementById('cep').value;
                if (value.length == 8) {
                    evento.preventDefault();
                    let dados = new FormData(formulario);
                    console.log(dados);
                    fetch('acao.php', {
                            method: 'POST',
                            body: dados
                        })
                        .then((resposta) => {
                            if (resposta.ok) {
                                return resposta.text()
                            }
                        })
                        .then((dados) => {
                            div.innerHTML = dados;
                        });
                }
            });
            </script>
            <br>
            <div class="decidir-local">
                <img src="imagens/local.png" alt="" width="30px">
                <a href="">Shopping Metrô Itaquera</a>
            </div>
            <p>Ligue: XXXXX-XXXX</p>
        </div>
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
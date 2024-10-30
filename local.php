<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossas Localidades</title>
    <link rel="stylesheet" href="css/local.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>
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
            <a href="pricipal.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
        </nav>
        <a href="index.php"><img src="imagens/seta.png" alt="" width="40px" id="seta"></a>
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
            <?php
            $cep = $_POST['cep']??'';
            $url = "https://viacep.com.br/ws/$cep/json/";
            $json = file_get_contents($url);
            $dados = json_decode($json, true);
            
            ?>
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

</body>

</html>
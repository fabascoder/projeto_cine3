<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossas Localidades</title>
    <link rel="stylesheet" href="css/local.css">
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
            <form method="post" id="formulario">
                <div>
                    <label>CEP:</label>
                    <input type="text" name="cep" id="cep">
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

</body>

</html>
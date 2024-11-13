<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
    <link rel="stylesheet" href="css/pagamento.css">
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
            <a href="index.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
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
            <div class="etapas-compra4">
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
            <?php 
            $pipoca_p = $_POST['pipoca-pequena']?? 0;
            $pipoca_m = $_POST['pipoca-media']?? 0;
            $pipoca_g = $_POST['pipoca-grande']?? 0;
            $qtd_p = intval($_POST['qtd_pipoca_p'])?? 0;
            $qtd_m = intval($_POST['qtd_pipoca_m'])?? 0;
            $qtd_g = intval($_POST['qtd_pipoca_g'])?? 0;

            $refri_p = $_POST['refri_pequeno']?? 0;
            $refri_m = $_POST['refri_medio']?? 0;
            $refri_g = $_POST['refri_grande']?? 0;
            $qtd_refri_p = intval($_POST['qtd_refri_p'])?? 0;
            $qtd_refri_m = intval($_POST['qtd_refri_m'])?? 0;
            $qtd_refri_g = intval($_POST['qtd_refri_g'])?? 0;
            $total_produtos= 0;
            
            if($pipoca_p) {
                $total_produtos +- $qtd_p * 37,00;
            }
            if($pipoca_m){
                $total_produtos +- $qtd_m * 37,00;
            }
            if($pipoca_g){
                $total_produtos +- $qtd_g * 37,00;
            }
            if($refri_p)
            

            $descricao = "Sessão ".$_SESSION['dia']. " as ".$_SESSION['hora']."
            assentos: $assentos";

            $itens = [
                "id"        => 01,
                "title"     => "Sessão ".$_SESSION['dia']." as ".$_SESSION
                ['hora'],
                "description" = $descricao,
                "quantity"  => 1,
                "currency_id" => "BRL",
                "unit_price" => $total_produtos;
            ]


            $data = [
                "items" => [$itens],
                "external_reference" => $compra_id,
                "transaction_amount" => $total,
                "payer" => [
                    "name" => $_SESSION['nome'],
                    "surname" => $_SESSION['nome'],
                    "email" => $_SESSION['email'],
                    "identification" => [
                        "type" => "CPF",
                        "number" =>  $_SESSION['cpf']
                    ],
                    "date_created" => $data_atual->format('Y-m-d\TH:i:s\P') //"2024-04-01T00:00:00Z"
                ],
                "back_urls" => [
                    "success" => "http://localhost/PROJETOS_24/back/retorno.php?msg=successo",
                    "failure" => "http://localhost/PROJETOS_24/back/retorno.php?msg=failure",
                    "pending" => "http://localhost/PROJETOS_24/back/retorno.php?msg=pending"
                ],
                "auto_return" => "approved"
            ];
        
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Authorization: Bearer ' . $access_token
            ]);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            $response = curl_exec($ch);
            curl_close($ch);
        
            $dados = json_decode($response, true);
        
            if (isset($dados['sandbox_init_point'])) {
                header("Location: " . $dados['sandbox_init_point']);
                exit;
            } else {
                echo "Erro ao processar pagamento";
            }
        
            ?>
        </div>
        <!-- <div class="botao">
            <a class="btn" href="pagamento_confirmacao.php">CONTINUAR ></a>
        </div> -->
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
    <script src="header.js"></script>
</body>
</html>
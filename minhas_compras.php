<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Conta</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/minhas_compras.css">
    <link rel="shortcut icon" type="imagex/png" href="icones/Icone_Cine3.ico">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  
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
                    <li><a href="local.php"><div>
                            <span id="icon_local" class="material-symbols-outlined">
                                pin_drop
                            </span>
                        </div>
                        Local
                    </a></li>
                    <li><a href="perfil.php"><div>
                            <span id="icon_profile" class="material-symbols-outlined">
                                account_circle
                            </span>
                        </div>
                        Perfil
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
    <main>
        <div class="barra-lateral">
            <p>Olá [Nome], Esse <br>é o seu Perfil</p>
            <p>email@exemplo.com</p>
            <ul>
                <li>
                    <a href="conta.php">Minha Conta</a>
                </li>
                <li class="li-1">
                    <a href="minhas_compras.php">Minhas Compras</a>
                </li>
                
                <li>
                    <a href="minha_senha.php">Minha Senha</a>
                </li>
            </ul>
        </div>
        <div class="barra-principal">
            <h1>Meus Ingressos</h1>
            <div class="caixa-ingressos">
                <div class="caixa-imagem">
                    <img src="imagens/Homem_aranha.jpeg" alt="">
                </div>
                <div class="informarcoes">
                    <p>Homem-Aranha: De Volta ao Lar</p>
                    <p style="color: #7c7c7c;"><svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.278 13.183c.231-.234.413-.382.749-.746.67-.725.276-.255 1.63-1.698 1.354-1.443 1.709-2.375 1.709-3.653 0-2.51-1.856-4.836-4.354-4.836s-4.39 2.326-4.39 4.836c0 1.236.557 2.251 1.727 3.618 1.17 1.368.897.991 1.613 1.733.329.341.419.425.65.654.048.048.347.286.387.325.045-.044.225-.178.28-.233ZM2.582 6.872c0-3.06 2.37-5.539 5.506-5.539s5.327 2.48 5.327 5.539c0 1.575-.674 3.208-1.955 4.456-.295.321-.96 1.08-1.68 1.813-.384.392-.722.732-.973.979-.137.135-.247.241-.328.316a2.877 2.877 0 0 1-.113.1c-.143.118-.182.126-.34.13-.25.006-.236-.01-1.667-1.452-.766-.77-1.438-1.474-1.684-1.768-1.277-1.409-2.093-3.05-2.093-4.574ZM7.988 9.75c-1.393 0-2.656-1.276-2.656-2.744 0-1.467 1.263-2.59 2.656-2.59 1.394 0 2.677 1.123 2.677 2.59 0 1.468-1.283 2.744-2.677 2.744Zm.01-1c.902 0 1.667-.77 1.667-1.72 0-.949-.765-1.614-1.667-1.614s-1.666.643-1.666 1.592c0 .95.763 1.742 1.666 1.742Z" fill="#666"></path></svg> Cine 3 - Sala 01</p>
                    <p style="color: #7c7c7c;"><svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 14.333A6.333 6.333 0 1 1 8 1.666a6.333 6.333 0 0 1 0 12.667ZM7.5 12.5v.806a5.293 5.293 0 0 1-4.74-4.931h.74a.5.5 0 0 0 0-1H2.79A5.294 5.294 0 0 1 7.5 2.777V3.5a.5.5 0 0 0 1 0v-.73a5.294 5.294 0 0 1 4.791 4.605H12.5a.5.5 0 1 0 0 1h.822A5.293 5.293 0 0 1 8.5 13.314V12.5a.5.5 0 0 0-1 0Zm3.185-1.812a.5.5 0 0 0 .003-.707L8.52 7.794v-2.61a.5.5 0 1 0-1 0v3.022l2.458 2.48a.5.5 0 0 0 .707.002Z" fill="#666"></path></svg> 21:30</p>
                    <p style="color: #7c7c7c;"><svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.5 2.5a.5.5 0 0 1 1 0v.167h5V2.5a.5.5 0 0 1 1 0v.167h1.25c.69 0 1.25.56 1.25 1.25v8.833c0 .69-.56 1.25-1.25 1.25h-9.5C2.56 14 2 13.44 2 12.75V3.917c0-.69.56-1.25 1.25-1.25H4.5V2.5Zm6 1.167V4.5a.5.5 0 0 0 1 0v-.833h1.25a.25.25 0 0 1 .25.25V6.25H3V3.917a.25.25 0 0 1 .25-.25H4.5V4.5a.5.5 0 0 0 1 0v-.833h5ZM13 6.75H3v6c0 .138.112.25.25.25h9.5a.25.25 0 0 0 .25-.25v-6ZM5.667 8.917a.667.667 0 1 1-1.333 0 .667.667 0 0 1 1.333 0ZM5 12a.667.667 0 1 0 0-1.333A.667.667 0 0 0 5 12Zm3.667-3.083a.667.667 0 1 1-1.333 0 .667.667 0 0 1 1.333 0ZM8 12a.667.667 0 1 0 0-1.333A.667.667 0 0 0 8 12Zm3.667-3.083a.667.667 0 1 1-1.333 0 .667.667 0 0 1 1.333 0ZM11 12a.667.667 0 1 0 0-1.333A.667.667 0 0 0 11 12Z" fill="#666"></path></svg> 14/12/2024</p>
                </div>
                <div class="cancelar">
                    <button>Cancelar Pedido</button>
                </div>
            </div>
            <div class="caixa-ingressos"></div>
            <div class="caixa-ingressos"></div>
        </div>
    </main>
    
</body>
</html>
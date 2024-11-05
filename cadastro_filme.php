<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Filme</title>
    <link rel="stylesheet" href="css/cadastro_filme.css">
</head>
<body>
<header>
        <?php
        include_once "conexao.php";
        $msg = "";
        if (isset($_GET['msg']) && $_GET['msg'] == "OK" ) {
            $msg = "Cadastro efetuado com sucesso!";
        } else {
            $msg = "Erro: não foi cadastrado";
        };
        ?>
    </header>
    <h1>CADASTRE O FILME</h1>
    <form action="cadastrar_filme.php" method="post" class="formulario_filme" enctype="multipart/form-data">
        <div class="campo">
            <label for="nome">Nome do Filme</label><br>
            <input type="text" name="nome" id="nome" class="form_input">
        </div>
        <div class="campo">
            <label for="descricao">Sinópse</label><br>
            <input type="text" name="descricao" id="descricao" class="form_input">
        </div>
        <div class="campo">
            <label for="genero">Gênero</label><br>
            <input type="text" name="genero" id="genero" class="form_input">
        </div>
        <div class="campo">
            <label for="duracao">Duração</label><br>
            <input type="time" name="duracao" id="duracao" class="form_input">
        </div>
        <div class="campo">
            <label for="direcao">Direção</label><br>
            <input type="text" name="direcao" id="direcao" class="form_input">
        </div>
        <div class="campo">
            <label for="distribuicao">Distribuição</label><br>
            <input type="text" name="distribuicao" id="distribuicao" class="form_input">
        </div>
        <div class="campo">
            <label for="elenco">Elenco</label><br>
            <input type="text" name="elenco" id="elenco" class="form_input">
        </div>
        <div class="campo">
            <label for="horario">Horário</label><br>
            <input type="time" name="horario" id="horario" class="form_input">
        </div>
        <div class="campo">
            <label for="calssificacao">Idade</label><br>
            <input type="text" name="classificacao" id="classificacao" class="form_input">
        </div>
        <div class="campo">
            <label for="valor">Valor do Ingresso</label><br>
            <input type="number" name="valor" id="valor" class="form_input">
        </div>
        <div class="campo">
            <div class="status">
                <label for="status_filme">Status do Filme</label><br>
                <input type="radio" name="status_filme" id="s0" value="0" class="form_input"> Disponível
                <input type="radio" name="status_filme" id="s1" value="1" class="form_input"> Indisponível
            </div>
        </div>
        <div class="campo">
            <label for="ano_lancamento">Ano de Lançamento</label><br>
            <input type="data" name="ano_lancamento" id="ano_lancamento" class="ano_lancamento">
        </div>
        <div class="campo">
            <label for="imagem">Capa do Filme</label><br>
            <input type="file" name="foto" id="imagem" class="imagem">
        </div>
        <div>
            <button type="submite">CADASTRAR FILME</button>
        </div>
        <div class="msg">
            <?php 
             echo $msg;
             ?>
        </div>
    </form>
</body>
</html>
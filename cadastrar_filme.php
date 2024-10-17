<?php
include_once "conexao.php";
$nome_filme = $_POST['nome'];
$descricao = $_POST['descricao'];
$idade = $_POST['classificacao'];
$valor = $_POST['valor'];
$status = $_POST['status_filme'];
$ano_lancamento = $_POST['ano_lancamento'];

$foto = $_FILES['foto']['name'];
$tipo = $_FILES['foto']['type'];
$tamanho = $_FILES['foto']['size'];
$temp = $_FILES['foto']['tmp_name'];
 
$separar = explode('/', $tipo);
$subtituir = str_replace(" ", "_", $nome_filme);
$subtituir = str_replace("/", "", $subtituir);
$novo_nome = $subtituir . '.' . $separar[1];
// echo "Original ".$tipo."<br>";
// echo'Primeira parte: '.$separar[0].' Segunda parte: '.$separar[1];
// echo "Nome original: $foto <br>";
// echo "Novo nome: $nome <br>";
// echo "Novo nome com extensão:". $nome.".".$separar[1]."";
 
if (move_uploaded_file($temp, 'imagens/' . $novo_nome)) {
   

    $new_filme = [
        'nome' => $nome_filme,
            'descricao' =>  $descricao,
        'classificacao' => $idade,
        'valor' => $valor,
        'status_filme' => $status,
        'ano_lancamento' => $ano_lancamento,
        'imagem' => $novo_nome
    ];

    $insert = $conexao->prepare('INSERT INTO filme (nome, descricao, classificacao, valor, status_filme, ano_lancamento, imagem) VALUES (:nome, :descricao, :classificacao, :valor, :status_filme, :ano_lancamento, :imagem )');
    if ($insert->execute($new_filme)) {
        echo "CADASTRADO!";
    } else {
        echo "NÃO CADASTRADO!";
    }
}
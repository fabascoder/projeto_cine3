<?php
include_once "conexao.php";
$id_filme = $_POST['id_filme'];
$data = $_POST['data_filme'];
$horario = $_POST['horario_filme'];
$local = $_POST['local_filme'];
 

   

    $new_filme = [
        'id_filme' => $id_filme,
        'data_filme' =>  $data,
        'horario_filme' =>  $horario,
        'local_filme' =>  $local,
    ];

    $insert = $conexao->prepare('INSERT INTO `sessao_filme` (`id_filme`, `data_filme`, `horario_filme`, `local_filme`) VALUES (:id_filme, :data_filme, :horario_filme, :local_filme)');
    if ($insert->execute($new_filme)) {
        echo "CADASTRADO!";
    } else {
        echo "NÃO CADASTRADO!";
    }
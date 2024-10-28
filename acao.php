<?php
    $cep = $_POST['cep']??'';
    //local onde estou buscando os dados, retorna um arquivo json
    $url = "https://viacep.com.br/ws/$cep/json/";
    //pegar o conteúdo de um arquivo
    $json = file_get_contents($url);
    //conveter os dados json em um array associativo php
    $dados = json_decode($json, true);
    echo $dados['logradouro'].' - '. $dados['bairro'].' - '.$dados['localidade'].' - '.$dados['uf'];    
    ?>
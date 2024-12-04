<?php 
include_once "conexao.php";
session_start();
$_SESSION['nome'] = "";
$_SESSION['email'] = "";
$email = $_POST['email'];
$senha = $_POST['password'];
$select = $conexao->prepare('SELECT * FROM dados_cadastro WHERE email = :email');
$select->bindParam('email', $email);
$select->execute();
$dados = $select->fetch();
// print_r($dados);
if(isset($_POST['cookie'])) {
    setcookie('email', $email, time() + 3600);
}

if($dados) {
    if($dados['senha'] == $senha) {
        $_SESSION['nome'] = $dados['nome'];
        $_SESSION['email'] = $dados['email'];
        // header('location: ./');
        header('location: index.php');
    } else {
       header('location: login.php?erro=Login ou senha inválidos!');
    }
} else {
    header('location: login.php?erro=Login ou senha inválidos!');
}
<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
include_once "conexao.php";
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$cep = $_POST['cep'];

// $foto = $_FILES['foto']['name'];
// $tipo = $_FILES['foto']['type'];
// $tamanho = $_FILES['foto']['size'];
// $temp = $_FILES['foto']['tmp_name'];
 
// $separar = explode('/', $tipo);
// $subtituir = str_replace(" ", "_", $nome_usuario);
// $subtituir = str_replace("/", "", $subtituir);
// $novo_nome = $subtituir . '.' . $separar[1];
// echo "Original ".$tipo."<br>";
// echo'Primeira parte: '.$separar[0].' Segunda parte: '.$separar[1];
// echo "Nome original: $foto <br>";
// echo "Novo nome: $nome <br>";
// echo "Novo nome com extensão:". $nome.".".$separar[1]."";
 

   

    $new_usuario = [
        'nome' => $nome,
        'email' =>  $email,
        'senha' =>  $senha,
        'cpf' =>  $cpf,
        'cep' =>  $cep
    ];

    $insert = $conexao->prepare('INSERT INTO dados_cadastro (nome, email, senha, cpf, cep) VALUES (:nome, :email, :senha, :cpf, :cep)');
    if ($insert->execute($new_usuario)) {
        header('location: finalizacao_login.php');
        require 'vendor/autoload.php';
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = SMTP::DEBUG_OFF;                     
            $mail->isSMTP();                                           
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'fabricialvez@gmail.com';                     //SMTP username
            $mail->Password   = 'vgwf soij qfju uguk';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;             //Enable implicit TLS encryption
            $mail->Port       = 587;//465                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            $mail->setFrom('fabricialvez@gmail.com', 'CINE3');
            $mail->addAddress($email, $nome);     //Add a recipient               //Name is optional
            $mail->addReplyTo('fabricialvez@gmail.com', 'Fabricio');
            $mail->CharSet = 'UTF-8';
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Cadastro CINE3';
            // $mail->Body    = 'Testando Biblioteca <b>PHPMail</b><br>Funcionou';
            $mail->msgHTML(file_get_contents('conteudo.php'));
            $mail->AltBody = 'Email Marketing Meu Site';
            if($mail->send()){
                echo '';
            } else {
                echo 'Digite um emial válido!';
            }
            
        } catch (Exception $e) {
            echo "Mensagem não enviada. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "NÃO CADASTRADO!";
    }
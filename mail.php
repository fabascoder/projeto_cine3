

<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'fabricialvez@gmail.com';                     //SMTP username
    $mail->Password   = 'vgwf soij qfju uguk';                               //SMTP password
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;             //Enable implicit TLS encryption
    $mail->Port       = 587;//465                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('fabricialvez@gmail.com', 'CINE3');
    $mail->addAddress('arturos.queiroz@gmail.com', 'Artur');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('fabricialvez@gmail.com', 'Fabricio');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('img.png', 'new.jpg');    //Optional name

    //Content
    $mail->Charset = 'UTF-8';
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Email Marketing Meu Site';
    $mail->Body    = 'Testando Biblioteca <b>PHPMail</b><br>Funcionou';
    $mail->msgHTML(file_get_contents('mail.html'));
    $mail->AltBody = 'Email Marketing Meu Site';

    if($mail->send()){
        echo 'Email enviado com sucesso!';
    }
    
} catch (Exception $e) {
    echo "Mensagem não enviada. Mailer Error: {$mail->ErrorInfo}";
}


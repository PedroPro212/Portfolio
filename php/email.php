<?php

    // require '../lib/mailer/vendor/autoload.php';
    
    // use PHPMailer\PHPMailer\PHPMailer;

    // $mail = new PHPMailer();
    // $mail->isHTML();
    // $mail->Host = 'smtp.gmail.com';
    // $mail->SMTPAuth = true;
    // $mail->SMTPSecure = 'tls';
    // $mail->Username = 'negociosaqui212004@gmail.com';
    // $mail->Password = 'Pe212004ho$';
    // $mail->Port = 578;

    // $mail->setFrom('pedrogamer212004@gmail.com', 'Contato');

    // $mail->addAddress('pedrogamer212004@gmail.com', 'Pedross');

    // $mail->isHTML(true);

    // $mail->Subject = "Teste";
    // $mail->Body = nl2br("Teste teste");

    // if(!$mail->send()){
    //     echo 'Não foi possível enviar a mensagem.';
    //     echo 'Error: ' . $mail->ErrorInfo;
    // } else{
    //     echo "Deu bom";
    // }

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require '../lib/mailer/vendor/autoload.php';

    if(isset($_POST['btnEnviar'])){
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'programacaodiaria212@gmail.com';             //SMTP username
            $mail->Password   = 'Pe212004ho$';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            $mail->setFrom('pedro@programacaodiaria.com.br', 'Pedro');
            $mail->addAddress('pedro@programacaodiaria.com.br', 'Pedro');     //Add a recipient
            $mail->addReplyTo('pedro@programacaodiaria.com.br', 'Information');

            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Mensagem via php';

            $body = "Mensagem enviada atraves do php, segue informações abaixo:</br>
                Nome: " . $_POST['txtNome'] . "<br>
                Email: " . $_POST['txtEmail'] . "<br>
                Mensagem: " . $_POST['txtMensagem'] . "<br>";

            $mail->Body    = $body;

            $mail->send();
            echo 'Email enviado com sucesso';
            //header("Location: ../pages/orcamento.php");
            exit;
        } catch (Exception $e) {
            echo "Erro ao enviar o email: {$mail->ErrorInfo}";
        }
    }else{
        echo "Erro ao enviar email, acesso não foi via formulário";
    }

?>
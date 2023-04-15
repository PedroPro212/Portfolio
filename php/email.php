<?php

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require '../script/phpMailer/vendor/autoload.php';

    if(isset($_POST['enviar'])){
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = '0000888202@senaimgaluno.com.br';             //SMTP username
            $mail->Password   = 'Pe212004ho';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('0000888202@senaimgaluno.com.br', 'Pedro');
            $mail->addAddress('0000888202@senaimgaluno.com.br', 'Pedro');     //Add a recipient
            //$mail->addAddress('ellen@example.com');               //Name is optional
            $mail->addReplyTo('0000888202@senaimgaluno.com.br', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Mensagem via php';

            $body = "Mensagem enviada atraves do php, segue informações abaixo:</br>
                Nome: " . $_POST['name'] . "<br>
                Telefone: " . $_POST['tel'] . "<br>
                Email: " . $_POST['email'] . "<br>
                Mensagem: " . $_POST['message'] . "<br>";

            $mail->Body    = $body;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            
            header("Location: ../pages/orcamento.php");
            exit;
        } catch (Exception $e) {
            echo "Erro ao enviar o email: {$mail->ErrorInfo}";
        }
    }else{
        echo "Erro ao enviar email, acesso não foi via formulário";
    }
?>
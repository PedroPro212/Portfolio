<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require '../script/phpMailer/vendor/autoload.php';

    if(isset($_POST['enviar'])){
        $mail = new PHPMailer(true);

        try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
            $mail->isSMTP();                                            
            $mail->Host       = 'smtp.gmail.com';                     
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = '0000888202@senaimgaluno.com.br';             
            $mail->Password   = 'Pe212004ho';                               
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
            $mail->Port       = 465;                                    

            //Recipients
            $mail->setFrom('0000888202@senaimgaluno.com.br', 'Pedro');
            $mail->addAddress('0000888202@senaimgaluno.com.br', 'Pedro');     
            //$mail->addAddress('ellen@example.com');               
            $mail->addReplyTo('0000888202@senaimgaluno.com.br', 'Information');

            //Content
            $mail->isHTML(true);                                  
            $mail->Subject = 'Mensagem via php';

            $body = "Mensagem enviada atraves do php, segue informações abaixo:</br>
                Nome: " . $_POST['name'] . "<br>
                Telefone: " . $_POST['tel'] . "<br>
                Email: " . $_POST['email'] . "<br>
                Mensagem: " . $_POST['message'] . "<br>";

            $mail->Body    = $body;

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
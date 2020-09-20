<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
function sendEmailMessage($recipient){

    $mail = new PHPMailer(true);
    try {
        
        
        $mail->SMTPDebug = 0;                      
        $mail->isSMTP(); 
        $mail->Mailer = "smtp";                                           
        $mail->Host       = 'smtp.gmail.com';                    
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'victor98456.storage@gmail.com';                     
        $mail->Password   = 'Ortiz98@!';                               
        $mail->SMTPSecure = 'tls';    
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom('noreply@cecytemorelos.com.mx', );
        $mail->addAddress($recipient['email'], $recipient['sender']);


        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
        );
        // Content
        $mail->isHTML(true);
        $mail->Subject = $recipient['subject'];
        $mail->Body    = $recipient['message'];
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent to '.$recipient['email'].' ---> SUCCESS';
        echo '<br>';
    } catch (Exception $e) {
        echo 'Message has been sent to '.$recipient['email'].' ---> ERROR';
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
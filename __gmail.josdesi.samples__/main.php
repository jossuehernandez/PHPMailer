<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../src/Exception.php';
require '../src/PHPMailer.php';
require '../src/SMTP.php';
require 'recipients.cecytemorelos.php';
require 'message.php';
require 'main.smtp.php';


 
foreach($recipients as $item=>$recipient){    
    $recipient['sender']='Cecytemorelos';
    $recipient['subject']='Cuenta de acceso';
    $recipient['message']= getPersonalizedMessage($recipient);
    sendEmailMessage($recipient);
}

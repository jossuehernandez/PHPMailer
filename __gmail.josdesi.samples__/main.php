<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../src/Exception.php';
require '../src/PHPMailer.php';
require '../src/SMTP.php';
require 'recipients.php';
require 'message.php';
require 'gmail.smtp.php';


 
foreach($recipients as $item=>$recipient){    
    $recipient['subject']='Cuentas de acceso';
    $recipient['message']= getPersonalizedMessage($recipient);
    sendEmailMessage($recipient);
}

<?php
function getPersonalizedMessage($recipient){
    $message = "
<br/>
Estimado {firstname} {lastname}<br/>
Buenas tardes <br/>

Te proporcionamos tus datos de acceso: <br/>
    <b>usuario:</b> {user} <br/>
    <b>contraseña:</b> {password} <br/>
 <br/>
Saludos
    ";
    $message = str_replace("{firstname}", $recipient['firstname'], $message);
    $message = str_replace("{lastname}", $recipient['lastname'], $message);
    $message = str_replace("{user}", $recipient['user'], $message);
    $message = str_replace("{password}", $recipient['password'], $message);
    $message = str_replace("{email}", $recipient['email'], $message);
    return $message;
}
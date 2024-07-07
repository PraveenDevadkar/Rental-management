<?php

if(isset($_POST["sent"]))
{
    $to= "praveendevadkar@gmail.com" ;
    $subject= "Test mail";
    $message = "Hello! This is a simple email message. " ;
    $from = "panudevadkar@gmail.cpm" ;
    $headers = "From : $from" ;
    mail($to , $subject, $message, $headers);
    echo "Mail Sent. " ;
}


?>
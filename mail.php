<?php

$to = "recipient@example.com";
$sub = "Generic Mail";
$msg = "Hello Geek! This is a generic email.";
$headers = 'From: sender@example.com' . "\r\n" .'CC: another@example.com';
if(mail($to,$sub,$msg,$headers))
    echo "Your Mail is sent successfully.";
else
    echo "Your Mail is not sent. Try Again.";
?>

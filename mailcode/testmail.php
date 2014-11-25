<?php
    include_once "class.apimailer.php";
//    DebugBreak();
    $from ="santanu.cs@gmail.com";
    $to = "santanu.d@gsl.in";
    $toname = "Santanu Dutta";
    $subject = "This is Test";
    $message = "This is the test message.This is the test message.This is the test message.";
    $attachment = "";
    
     $APImailer = new APImailer();
     
     
     $APImailer->sendgridmail($attachment, $from, $to, $toname, $subject, $message)    
    
    
    
    
?>
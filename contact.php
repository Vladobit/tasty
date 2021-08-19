<?php
    $name = $_POST['name'];
    $email = $_POST['mob'];
    $message = $_POST['atxtare'];

    $email_from = 'Site';
    $email_subject = 'New Message From Contact';
    $email_body = "Name: $name.\n".
                  "Email: $email.\n".
                  "Message: $message.\n";

    $to ="vladobit@yahoo.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";
  
    mail($to,$email_subject,$email_body,$headers);
  
    header("location: success.html");
?>
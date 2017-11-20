<?php
  $emailTo = "ken.alvarez@hotmail.com";
  $subject = "Get In Touch Request From CV Site";
  $name = trim(stripslashes($_POST['name'])); 
  $email = trim(stripslashes($_POST['email'])); 
  $message = trim(stripslashes($_POST['message']));  
  
  // prepare email body text
  $body = "";
  $body .= "Name: ";
  $body .= $name;
  $body .= "\n";
  $body .= "E-mail: ";
  $body .= $email;
  $body .= "\n";
  $body .= "Message: ";
  $body .= $message;
  $body .= "\n";
  mail($emailTo, $subject, $body);

?>
<?php
  $name = $_POST['f-name'];
  $visitor_email = $_POST['f-email'];
  $message = $_POST['message'];

  $email_from = 'phlandao@gmail.com';
  $email_subject = "New Portfolio Web Form Submission";
  $email_body = "User Name: $name.\n". "User Email: $visitor_email.\n". "User Message: $message.\n";
  $to = "ldao@millikin.edu";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";
  mail($to,$email_subject,$email_body,$headers);

  header("Location: index.html");

 ?>

<?php
$name = $_POST['G ID'];
$visitor_email = $_POST['M ID'];
$subject = $_POST['P'];
$message = $_POST['N'];

$email_from = 'ffrewards.com';

$email_subject = 'New From Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
          "User Message: $message.\n";

          $to = 'anshmahajan105@gmail.com'

          $headers = "From: $email_from\r\n";
          $headers .= "Replay-To: $visitor_email \r\n";


          mail($to,$email_subject,$email_body,$headers);



header("Location: contact.html");
?>
<?php

if($_POST["message"]) {
    $recipient="kristoffer-arbejde@outlook.dk";
    $subject="Form to email message";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
  echo "Thank you! Your email has been sent, you will be redirected shortly.";
$url = $_SERVER['HTTP_REFERER']; // right back to the referrer page from where you came.
echo '<meta http-equiv="refresh" content="3;URL=' . $url . '">';
}
<?php

if($_POST["message"]) {
    $recipient="kristoffer-arbejde@outlook.dk";
    $subject="Form to email message";
    $sender=$_POST["txtName"];
    $senderEmail=$_POST["txtEmail"];
    $senderPhone=$_POST["txtPhone"];
    $message=$_POST["txtMsg"];

    $mailBody="Name: $sender\nEmail: $senderEmail\nPhone: $senderPhone\n\n$message ";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
  echo "Thank you! Your email has been sent, you will be redirected shortly.";
$url = $_SERVER['HTTP_REFERER']; // right back to the referrer page from where you came.
echo '<meta http-equiv="refresh" content="3;URL=' . $url . '">';
}
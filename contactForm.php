<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "trentsinden@hotmail.com";
    $headers = "From: " . $mailFrom;
    $txt = "You have recieved an email from " . $name . ".\n\n" . $message;


    mail($mailTo, $subject, $txt, $headers);
    header("Locaction: index.php?mailsend");
}

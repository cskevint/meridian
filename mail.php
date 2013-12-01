<?php

session_start();

$to = 'cskevint@gmail.com';
$subject = 'Contact Us';
$body = $_REQUEST['message'];
$from_header = "From: ".$_REQUEST['name']." <".$_REQUEST['email'].">\r\n";

if(mail($to, $subject, $body, $from_header)) {
    $_SESSION['notice'] = "Successfully sent your note.";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

?>
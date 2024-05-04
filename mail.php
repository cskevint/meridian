<?php

require_once ("includes/utility.php");

session_start();

$from_name = $_REQUEST['name'];
$from_email = $_REQUEST['email'];
$message = nl2br($_REQUEST['message']);
$subject = 'Contact Us - from '.$from_name;

$messageBody = <<<EOD
<p>New Contact Us form submission!</p>
<p><b>Name</b>: $from_name</p>
<p><b>Email</b>: $from_email</p>
<p><b>Message</b>:</p>
<p>$message</p>
EOD;

if($_REQUEST['antispam'] == 'check' && sendMail($from_email, $from_name, $subject, $messageBody)) {
    $_SESSION['notice'] = "Successfully sent your note.";
} else {
    $_SESSION['notice'] = "Error sending your note. Please try again.";
}
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
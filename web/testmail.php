<?php
$to      = 'lognoulj@gmail.com';
$subject = 'Information from guestgame.com';
$message = 'Bonjour à tous !';
$headers = 'From: admin@guestgame.com' . "\r\n" .
    'Reply-To: admin@guestgame.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$ok = @mail($to, $subject, $message, $headers, $returnpath);
    
	echo ($ok)?"ok":"nok";

?>

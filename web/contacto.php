<?php
	$to      = 'rodrigo.zaupa@zetahosting.net';
	$to2      = 'rami_fenili@hotmail.com';
	$subject = 'hostingo contacto';
	$message = 'nombre: '.$_POST['nombre'].' - email: '.$_POST['email'].' - mensaje: '.$_POST['mensaje'];
	$headers = 'From: '.$_POST['email'] . "\r\n" .
	    'Reply-To: '.$_POST['email'] . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();
	mail($to, $subject, $message, $headers);
	mail($to2, $subject, $message, $headers);
	
	$fopen=fopen('mails.txt', 'a+');
	fwrite($fopen, $_POST['email']."\n");
	fclose($fopen);
?>
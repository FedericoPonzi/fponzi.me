<?php
/** Config: **/
if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['message'])){
	die('<div class="alert alert-warning" role="alert"> Please fill all the form\'s inputs.</div>');
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = "[fponzi.me] Nuovo contatto tramite form";
$to = 'federico.ponzi92@gmail.com';

$message = 'Ciao, qualcuno ha usato il form di contatti su fponzi.me per inviare questa email.
Nome : '.$name.'
Email : '.$email.'

Messaggio : '.$message;

$headers = "From: ".$name." <".$email.">\r\n"
."Reply-To: ".$email."\r\n";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
	$mail = mail($to, $subject, $message, $headers);
	if($mail){
		echo '<div class="alert alert-success" role="alert"> <strong>Great!</strong> Message received. You\'ll hear from me soon :)</div>';
	}else{
		echo '<div class="alert alert-danger" role="alert"><strong>Something went wrong.</strong> Retry, or use another way to contact me. Thanks</div>';
	}
}else{
	echo '<div class="alert alert-warning" role="alert">  <strong>Email not valid:</strong> Inserisci una email valida.</div>';
}
?>

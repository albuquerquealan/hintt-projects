<?php
// Replace this with com  own email address
$siteOwnersEmail = '';
if($_POST) {
   $name = trim(stripslashes($_POST['name']));
   $email = trim(stripslashes($_POST['email']));
   $subject = trim(stripslashes($_POST['subject']));
   $contact_message = trim(stripslashes($_POST['message']));
   // Check Name
	if (strlen($name) < 2) {
		$error['name'] = "Por favor entre com seu nome.";
	}
	// Check Email
	if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
		$error['email'] = "Por favor entre com um e-mail válido.";
	}
	// Check Message
	if (strlen($contact_message) < 15) {
		$error['message'] = "Por favor entre com sua message. Ela deverá ter mais de 15 caracteres.";
	}
   // Subject
	if ($subject == '') { $subject = "myForm"; }
   // Set Message
   $message .= "<b> Enviado por: </b>  " . $name . "<br />";
	$message .= "<b>E-mail:</b> " . $email . "<br />";
   $message .= "<b>Mensagem:</b> <br /><br />";
   $message .= $contact_message;
   $message .= "<br /> ----- <br /> <b>Esse e-mail foi enviado pelo seu formulário de contato no seu site.</b> <br />";
   // Set From: header
   $from =  $name . " <" . $email . ">";
   // Email Headers
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $email . "\r\n";
 	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
   if (!$error) {
      ini_set("sendmail_from", $siteOwnersEmail); // for windows server
      $mail = mail($siteOwnersEmail, $subject, $message, $headers);
		if ($mail) { echo "e-mail enviado com sucesso ! "; }
      else { echo "Algo deu errado. Tende novamente."; }
	} # end if - no validation error
	else {
		$response = (isset($error['name'])) ? $error['name'] . "<br /> \n" : null;
		$response .= (isset($error['email'])) ? $error['email'] . "<br /> \n" : null;
		$response .= (isset($error['message'])) ? $error['message'] . "<br />" : null;
		echo $response;
	} # end if - there was a validation error
}
?>
<?php
require('swift/lib/swift_required.php');

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
	->setUsername('ti@safari.to')
	->setPassword('s4f4r1t1');

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance($_POST['assunto'])
	->setFrom(array('contact@safari.to' => 'Contact Safari.to'))
	->setTo(array("contact@safari.to"))
	->setBody(
				"<b>Nome:</b> ". $_POST['nome']."<br/>".
				"<b>Email:</b>".$_POST['email']."<br/>".
				"<b>Mensagem:</b>".$_POST['mensagem']."<br/>"
				
			 , 'text/html');


if ($mailer->send($message)){
	return true;
}
else{
	return false;
}
?>
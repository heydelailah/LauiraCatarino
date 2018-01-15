<?php
//$_REQUEST



$nome="goldxresidencial";
$email="goldxresidencial@gmail.com";
$assunto="goldxresidencial";
$mensage=$_REQUEST["feedback"];
$to="koklaink@gmail.com";
$sb="$assunto";
$msm="<strong>nome:</strong>$nome";
//$header="MIME-Version: 1.0\n";
$headers="Content-type: text/html;charset=utf-8\n";
//$headers="from: $email \n";
mail($to,$sb,$msm,$headers);
//header("location:index.php?msm=enviado");
echo "Sucesso...,enviado para $email";
//mail("konklaink@gmail.com","goldxresidencial","goldxresidencial");
/*  
require("../PHPmailer/class.phpmailer.php");
define('GUSER', 'alexsysouz@gmail.com');	// <-- Insira aqui o seu GMail
define('GPWD', 'alexsysouzalexsysouz');		// <-- Insira aqui a senha do seu GMail


function smtpmailer($para, $de, $de_nome, $assunto, $corpo) { 
	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP();		// Ativar SMTP
	$mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
	$mail->SMTPAuth = true;		// Autenticação ativada
	$mail->SMTPSecure = 'ssl';	// SSL REQUERIDO pelo GMail
	$mail->Host = 'smtp.gmail.com';	// SMTP utilizado
	$mail->Port = 587;  		// A porta 587 deverá estar aberta em seu servidor
	$mail->Username = GUSER;
	$mail->Password = GPWD;
	$mail->SetFrom($de, $de_nome);
	$mail->Subject = $assunto;
	$mail->Body = $corpo;
	$mail->AddAddress($para);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
		$error = 'Mensagem enviada!';
		return true;
	}
}
*/

?>
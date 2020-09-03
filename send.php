<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$to = "info@webstore.do"; // Nuestro correo de contacto

// recogeremos los datos del formulario
$nombre = $_POST['validarNombre'];
$email = $_POST['validarEmail'];
$asunto = "Solicitud de Cliente";
$telefono = $_POST['validarTelefono'];
$mensaje = nl2br($_POST['validationMensaje']);

if($nombre == "" || $email == "" || $telefono == "" || $asunto == "" || $mensaje == ""):
	echo '<div class="alert alert-danger">Todos los campos son requeridos para el envio</div>';
else:

	$mail->From = $email;
	$mail->addAddress($to);
	$mail->Subject = $asunto;
	$mail->isHtml(true);
	$mail->Body = '<strong>'.$nombre.'</strong> le ha contactado desde su web, y le ha enviado el siguiente mensaje: <br><p>'.$mensaje.'</p>';

	$mail->CharSet = 'UTF-8';
	$mail->send();

endif;




?>

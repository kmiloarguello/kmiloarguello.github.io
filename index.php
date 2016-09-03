<?php 

$errores = '';
$enviado = '';

if (isset($_POST['submit'])) {
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];

	if (!empty($nombre)) {
		$nombre = trim($nombre);
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
	} else {
		$errores .= 'Please enter a name :( <br />';
	}

	if (!empty($correo)) {
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

		if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
			$errores .= 'Please enter a valid email :( <br />';
		}
	} else {
		$errores .= 'Please enter a email :( <br />';
	}

	if(!empty($mensaje)){
		$mensaje = htmlspecialchars($mensaje);
		$mensaje = trim($mensaje);
		$mensaje = stripslashes($mensaje);
	} else {
		$errores .= 'Please enter a message :( <br />';
	}

	if(!$errores){
		$enviar_a = 'contact@camiloarguello.co';
		$asunto = 'Sent from CAMILOARGUELLO.CO';
		$mensaje_preparado = "From: $nombre \n";
		$mensaje_preparado .= "Email: $correo \n";
		$mensaje_preparado .= "Message: " . $mensaje;

		mail($enviar_a, $asunto, $mensaje_preparado);
		$enviado = 'true';
	}

}

require 'index.view.php';

?>
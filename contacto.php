<?php
// Guardar los datos recibidos en variables:
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$mensaje = $_POST['mensaje'];
// Definir el correo de destino:
$dest = "proyectos@acuspro.cl";
$ccemail = "consultoracustico@gmail.com";

// Estas son cabeceras que se usan para evitar que el correo llegue a SPAM:
$headers = "From: $nombre <$email>\r\n";  
$headers .= "Cc: <$ccemail>\n";
$headers .= "X-Mailer: PHP5\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

// Aqui definimos el asunto y armamos el cuerpo del mensaje
$asunto = "Contacto Web Acuspro";
$cuerpo = "Nombre: ".$nombre."<br>";
$cuerpo .= "Email: ".$email."<br>";
$cuerpo .= "Dirección: ".$direccion."<br>";
$cuerpo .= "Telefono: ".$telefono."<br>";
$cuerpo .= "Mensaje: ".$mensaje;

// Esta es una pequena validación, que solo envie el correo si todas las variables tiene algo de contenido:
//if($nombre != '' && $email != '' && $telefono != '' && $mensaje != ''){
	mail($dest,$asunto,$cuerpo,$headers); //ENVIAR!
//}


?>
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
	<script>
		window.location.href='exito.html';
	</script>
</body>
</html>
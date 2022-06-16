<?php
if ( strlen($_POST['name']) >= 1 && 
strlen($_POST['email']) >= 1 && 
strlen($_POST['message']) >= 1 && 
strlen($_POST['phone']) >= 1) 
{

	$nombre = $_POST['name'];
	$correo = $_POST['email'];
	$telefono = $_POST['phone'];
	$descripcion = $_POST['message'];

	$header = 'From: info@buenasraices.com.ar'."\n";

	$mensaje = "Este mensaje fue enviado por " . $nombre . ",\n";
	$mensaje .= "Su e-mail es: " . $correo . " \n";
	$mensaje .= "Su telefono: " . $telefono . " \n";
	$mensaje .= "Descripcion: " . $descripcion . " \n";
	$mensaje .= "Enviado el " . date('d/m/Y', time());

	$para = 'infobuenasraices@gmail.com';
	$asunto = 'Mensaje de mi sitio web buenasraicesformosa.com.ar';

	$res = @mail($para, $asunto, $mensaje, $header);

	if ($res){
		echo "<script> alert('Gracias por tu contacto! en breves nos estaremos comunicando.');
	            window.location='index.html' </script>";
	} else {echo "<script> alert('Ups ocurrio un error, Por favor revisa tus datos y vuelva a intentarlo.');
	    window.location='index.html' </script>";}
}
else {echo "<script> alert('Ups ocurrio un error, Por favor revisa tus datos y vuelva a intentarlo.');
	    window.location='index.html' </script>";}

?>
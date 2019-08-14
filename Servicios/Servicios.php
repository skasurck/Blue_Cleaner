<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['Email'];
$telefono = $_POST['Telefono'];
$para = "contacto@bluecleaner.com.mx";
$asunto =" Mensaje desde la pagina de Servicios";


$mensaje = "Este mensaje fue enviado por " . $nombre ."\n Apellido:" .$apellido . ",\r\n";
$mensaje .= "Asunto: " . $asunto . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . ",\r\n";
$mensaje .= "Su Telefono es: " . $telefono .",\r\n";
$mensaje .= "Enviado el : " .date('d/m/Y', time());


 
mail($para, $asunto, $mensaje);
header("Location:../index.html")
?>
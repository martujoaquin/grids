<?php

$nombre = $_post['nombre'];
$mail = $_POST['email'];
$mensaje = $_POST['textarea'];

$para = 'martujoaquin02@gmail.com';
$asunto = 'Este mail fue enviado desde la web';

mail($para, $asunto, utf8_decode($nombre,$mail, $mensaje));

header('Location:exito.html');

?>
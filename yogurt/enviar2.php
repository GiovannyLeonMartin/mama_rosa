<?php


$dlitro = $_POST['dlitro'];
$dmedio = $_POST['dmedio'];

$flitro = $_POST['flitro'];
$fmedio = $_POST['fmedio'];

$glitro = $_POST['glitro'];
$gmedio = $_POST['gmedio'];

$nlitro = $_POST['nlitro'];
$nmedio = $_POST['nmedio'];

$plitro = $_POST['plitro'];
$pmedio = $_POST['pmedio'];

$nombre = $_POST['nombre'];

$mail = $_POST['correo'];

$dire = $_POST['dire'];

$hora = $_POST['hora'];

$fecha = $_POST['fecha'];

$ref = $_POST['referencias'];


$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Direccion: " . $_POST['dire'] . " \r\n";
$mensaje .= "hora de entrega: " . $_POST['hora'] . " \r\n";
$mensaje .= "feha de entrega: " . $_POST['fecha'] . " \r\n";
$mensaje .= "Referencias: " . $_POST['referencias'] . " \r\n";
$mensaje .= "---------Pedido---------------------------";
$mensaje .= "Durazno litro: " . $_POST['dlitro'] . " \r\n";
$mensaje .= "Durazno medio litro: " . $_POST['dmedio'] . " \r\n";
$mensaje .= "Fresa litro: " . $_POST['flitro'] . " \r\n";
$mensaje .= "Fresa medio litro: " . $_POST['fmedio'] . " \r\n";
$mensaje .= "Guayaba litro: " . $_POST['glitro'] . " \r\n";
$mensaje .= "Guayaba medio litro: " . $_POST['gmedio'] . " \r\n";
$mensaje .= "Nuez litro: " . $_POST['nitro'] . " \r\n";
$mensaje .= "Nuez medio litro: " . $_POST['nmedio'] . " \r\n";
$mensaje .= "Fresa litro: " . $_POST['flitro'] . " \r\n";
$mensaje .= "Fresa medio litro: " . $_POST['fmedio'] . " \r\n";

$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'boxor100@gmail.com';
$asunto = 'Pedidos';

mail("yogurmamarosa@gmail.com", $asunto, utf8_decode($mensaje), $header);

header("Location:index.php");
?>

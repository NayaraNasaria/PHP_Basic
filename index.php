<?php
include_once('./vendor/autoload.php');

//link para o QRCode
$url= 'https://nayaranasaria.vercel.app/';

echo "<h1 style='padding: 15px; color:#1B021A ; font-family: Arial, Helvetica, sans-serif; font-size: 20px;'>QRCode do Portfólio de Nay Nasaria<h1>";

//Gerar QRCode: instanciar a classe QRCode e enviar dados para o render gerá-lo

$qrcode = (new \chillerlan\QRCode\QRCode()) ->render($url);

//imprimir QRCODE
echo "<img src='$qrcode'>";

?>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$header = 'From: ' . $email . " \r\n";


$messageC =$message . "\nAtentamente" . $name;
;

$para = 'ernestoalonso.aparicio@gmail.com';
$asunto = 'Portafolio mensaje Correo';

mail($para, $asunto, utf8_decode($message), $header);


echo "<script>alert('correo enviado')</script>";
echo "<script> setTimeout(\"Location.href='index.html'\",1000)</script>";
?>
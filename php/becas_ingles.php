<?php


if($_POST['nombre']){
	$nombre=$_POST['nombre'];
}else{
	$nombre="";
}
if($_POST['aPaterno']){
	$aPaterno=$_POST['aPaterno'];
}else{
	$aPaterno="";
}
if($_POST['aMaterno']){
	$aMaterno=$_POST['aMaterno'];
}else{
	$aMaterno="";
}
if($_POST['pais']){
	$pais=$_POST['pais'];
}else{
	$pais="";
}

if($_POST['ciudad']){
	$ciudad=$_POST['ciudad'];
}else{
	$ciudad="";

}if($_POST['direccion']){
	$direccion=$_POST['direccion'];
}else{
	$direccion="";

}if($_POST['email']){
	$email=$_POST['email'];
}else{
	$email="";
}if($_POST['actividad']){
	$actividad=$_POST['actividad'];
}else{
	$actividad="";
}if($_POST['carrera']){
	$carrera=$_POST['carrera'];
}else{
	$carrera="";	
}if($_POST['universidad']){
	$universidad=$_POST['universidad'];
}else{
	$universidad="";
}if($_POST['pueblo_originario']){
	$pueblo_originario=$_POST['pueblo_originario'];
}else{
	$pueblo_originario="";
}if($_POST['ieee']){
	$ieee=$_POST['ieee'];
}else{
	$ieee="";

$nombreCompleto=$nombre." ".$aPaterno." ".$aMaterno;



$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Name:" . $nombreCompleto . ",\r\n";
$mensaje .="Country: " . $pais . " \r\n";
$mensaje .="City: " . $ciudad . " \r\n";
$mensaje .="Email: " . $email . " \r\n";
$mensaje .="Address: " . $direccion . " \r\n";
$mensaje .="Activity: " . $actividad . " \r\n";
$mensaje .="Carrer: " . $carrera . " \r\n";
$mensaje .="University or Instituete where study/studied: " . $universidad . " \r\n";
$mensaje .="Native People:" . $pueblo_originario . "\r\n";
$mensaje .="IEEE Membership Number" . $ieee . " \r\n";
$para= 'evic@ufrontera.cl';
$asunto= 'Registration EVIC';


mail($para, $asunto, utf8_decode($mensaje), $header);

$header2 = 'From: ' . $para . " \r\n";
$header2 .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header2 .= "Mime-Version: 1.0 \r\n";
$header2 .= "Content-Type: text/plain";

$mensaje2 = "Dear (student, sr): \r\n";
$mensaje2 .="This email is to confirm your registration in the summer school in computational intelligence , version 2020. This event will take place on December 10 and 11 from 10:45 a.m. (GMT -3) and it will be completely virtual via Zoom. To access EVIC 2020 use the following information: \r\n";
$mensaje2 .="Meeeting ID : 946 8647 7759 \r\n";
$mensaje2 .="Access code:  619681 \r\n";
$mensaje2 .="https://zoom.us/j/94686477759?pwd=bVF1VTB1b05TVVhTaUJLQzhuYlovZz09 \r\n";
$mensaje2 .="very grateful for your interest in participating in this event, greets you \r\n";
$mensaje2 .="Team EVIC2020 \r\n";



mail($email, $asunto, utf8_decode($mensaje2), $header2);

header("Location:/index_ingles.html#inicio");
?>

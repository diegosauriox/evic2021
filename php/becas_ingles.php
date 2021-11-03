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
}

if($_POST['direccion']){
	$direccion=$_POST['direccion'];
}else{
	$direccion="";

}

if($_POST['email']){
	$email=$_POST['email'];
}else{
	$email="";
}

if($_POST['actividad']){
	$actividad=$_POST['actividad'];
}else{
	$actividad="";
}

if($_POST['carrera']){
	$carrera=$_POST['carrera'];
}else{
	$carrera="";	
}

if($_POST['universidad']){
	$universidad=$_POST['universidad'];
}else{
	$universidad="";
}

if($_POST['pueblo_originario']){
	$pueblo_originario=$_POST['pueblo_originario'];
}else{
	$pueblo_originario="";
}

if($_POST['ieee']){
	$ieee=$_POST['ieee'];
}else{
	$ieee="";
}
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
$mensaje2 .="This email is to confirm your registration in the summer school in computational intelligence , version 2021 (www.evic.cl). This event will take place on November 04 and 05 and it will be completely virtual via Zoom.  \r\n";
$mensaje2 .="To access EVIC 2021 use the following information: \r\n";
$mensaje2 .="Thursday 04 y friday 05 morning: \r\n";
$mensaje2 .="https://zoom.us/j/95092778156?pwd=OFlxVlAzaDh3N3M0UkRPeWw1NkhRQT09 \r\n";
$mensaje2 .="Thursday 04 y friday 05 evening (after calendary lunch): \r\n";
$mensaje2 .="https://zoom.us/j/94465718007?pwd=OTZZSlNGVHo4TjdNaTdrTW1ydm9qdz09\r\n";
$mensaje2 .="Meeeting ID: 944 6571 8007 \r\n";
$mensaje2 .="Access code:  evic_2021 \r\n";
$mensaje2 .="The sessions of thursday and friday morging are alltogether with the Latin American Conference on Computational Intelligence (LA - CCI). for more details about this congress enter to https://fbln.me/lacci/ \r\n";
$mensaje2 .="very grateful for your interest in participating in this event, greets you \r\n";
$mensaje2 .="Team EVIC2021 \r\n";



mail($email, $asunto, utf8_decode($mensaje2), $header2);


?>

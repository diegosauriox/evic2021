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

if($_POST['region']){
	$region=$_POST['region'];
}else{
	$region="";
}

if($_POST['ciudad']){
	$ciudad=$_POST['ciudad'];
}else{
	$ciudad="";
}

if($_POST['comuna']){
	$comuna=$_POST['comuna'];
}else{
	$comuna="";
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

$mensaje = "Nombre:" . $nombreCompleto . ",\r\n";
$mensaje .="País: " . $pais . " \r\n";
$mensaje .="Región: " . $region . " \r\n";
$mensaje .="Ciudad: " . $ciudad . " \r\n";
$mensaje .="Comuna: " . $comuna . " \r\n";
$mensaje .="Dirección: " . $direccion . " \r\n";
$mensaje .="Email: " . $email . " \r\n";
$mensaje .="Actividad: " . $actividad . " \r\n";
$mensaje .="Carrera: " . $carrera . " \r\n";
$mensaje .="Universidad o instituto donde estudia/estudio: " . $universidad . " \r\n";
$mensaje .="Pertenece a un Pueblo Originario?:" . $pueblo_originario . "\r\n";
$mensaje .="Número de Miembro de la IEEE" . $ieee . " \r\n";
$para= 'evic@ufrontera.cl';
$asunto= 'Inscripción EVIC';


mail($para, $asunto, utf8_decode($mensaje), $header);

$header2 = 'From: ' . $para . " \r\n";
$header2 .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header2 .= "Mime-Version: 1.0 \r\n";
$header2 .= "Content-Type: text/plain";

$mensaje2 = "Estimado (estudiante/profesional): \r\n";
$mensaje2 .="Este correo es para confirmar su inscripción en la escuela de verano de inteligencia computacional EVIC, versión 2021 (www.evic.cl). Este evento se realizará los días 04 y 05 de noviembre y será completamente virtual vía Zoom. \r\n";
$mensaje2 .="Los datos para acceder al EVIC 2021 son los siguientes: \r\n";
$mensaje2 .="Jueves 04 y viernes 05 en la mañana: \r\n";
$mensaje2 .="https://zoom.us/j/95092778156?pwd=OFlxVlAzaDh3N3M0UkRPeWw1NkhRQT09 \r\n";
$mensaje2 .="Jueves 04 y viernes 05 en la tarde (después de almuerzo del calendario): \r\n";
$mensaje2 .="https://zoom.us/j/94465718007?pwd=OTZZSlNGVHo4TjdNaTdrTW1ydm9qdz09\r\n";
$mensaje2 .="ID de la reunión: 944 6571 8007 \r\n";
$mensaje2 .="Código de acceso  evic_2021 \r\n";
$mensaje2 .="Los sesiones del jueves y viernes en la mañana son en conjunto con la conferencia latinoamericana de inteligencia computacional (LA - CCI). para ,mas detalle de este congreso ver https://fbln.me/lacci/.  \r\n";
$mensaje2 .="Muy agradecido por su interés en participar en este evento, les saluda \r\n";
$mensaje2 .="Equipo EVIC 2021 \r\n";



mail($email, $asunto, utf8_decode($mensaje2), $header2);
?>
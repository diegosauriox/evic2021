<?php
$nombre=$_POST['nombre'];
$pais=$_POST['pais'];
$ciudad=$_POST['ciudad'];
$email=$_POST['email'];
$profesional=$_POST['profesional'];
$estudiante=$_POST['estudiante'];
$carrera=$_POST['carrera'];
$universidad=$_POST['universidad'];
$programa=$_POST['programa'];
$pueblo_originario=$_POST['pueblo_originario'];
$ieee=$_POST['ieee'];





$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Nombre:" . $nombre . ",\r\n";
$mensaje .="País: " . $pais . " \r\n";
$mensaje .="Ciudad: " . $ciudad . " \r\n";
$mensaje .="Email: " . $email . " \r\n";
$mensaje .="Profesional: " . $profesional . " \r\n";
$mensaje .="Estudiante: " . $estudiante . " \r\n";
$mensaje .="Carrera: " . $carrera . " \r\n";
$mensaje .="Universidad donde estudia/estudio: " . $universidad . " \r\n";
$mensaje .="Programa de Pregrado o PostGrado : " . $programa . " \r\n";
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
$mensaje2 .="Este correo es para confirmar su inscripción en la escuela de verano de inteligencia computacional EVIC, versión 2020. Este evento se realizará los días 10 y 11 de diciembre a partir de las 10:45 hrs. (GMT -3) y será completamente virtual vía Zoom. Los datos para acceder a EVIC2020 son los siguientes: \r\n";
$mensaje2 .="ID de la reunión: 946 8647 7759 \r\n";
$mensaje2 .="Código de acceso  619681 \r\n";
$mensaje2 .="https://zoom.us/j/94686477759?pwd=bVF1VTB1b05TVVhTaUJLQzhuYlovZz09 \r\n";
$mensaje2 .="Muy agradecido por su interés en participar en este evento, les saluda \r\n";
$mensaje2 .="Equipo EVIC 2020 \r\n";



mail($email, $asunto, utf8_decode($mensaje2), $header2);

header("Location:/index.html#inicio");
?>

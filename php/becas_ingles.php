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

$mensaje = "Name:" . $nombre . ",\r\n";
$mensaje .="Country: " . $pais . " \r\n";
$mensaje .="City: " . $ciudad . " \r\n";
$mensaje .="Email: " . $email . " \r\n";
$mensaje .="Profesional: " . $profesional . " \r\n";
$mensaje .="Student: " . $estudiante . " \r\n";
$mensaje .="Carrer: " . $carrera . " \r\n";
$mensaje .="University where study/studied: " . $universidad . " \r\n";
$mensaje .="Undergraduate or Graduate Program : " . $programa . " \r\n";
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

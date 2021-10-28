<?php

//mysql credencial
$host='localhost';
$database='evic2021';
$user='evic2021';
$pass='y&YZ!uMQ!6k0';

//post data
$nombre=$_POST['nombre'];
$aPaterno=$_POST['aPaterno'];
$aMaterno=$_POST['aMaterno'];
$pais=$_POST['pais'];
$region=$_POST['region'];
$ciudad=$_POST['ciudad'];
$comuna=$_POST['comuna'];
$direccion=$_POST['direccion'];
$email=$_POST['email'];
$actividad=$_POST['actividad'];
$carrera=$_POST['carrera'];
$universidad=$_POST['universidad'];
$pueblo_originario=$_POST['pueblo_originario'];
$ieee=$_POST['ieee'];

$nombreCompleto=$nombre." ".$aPaterno." ".$aMaterno;

$connection = new mysqli($host,$user,$pass,$database);
if($_POST['email']){

    $sql = "INSERT INTO inscritos (nombre, pais, region, ciudad, comuna, direccion, email, actividad, carrera, universidad, pueblo_originario, numero_ieee) 
    VALUES ('$nombreCompleto', '$pais', '$region', '$ciudad', '$comuna', '$direccion', '$email', '$actividad', '$carrera', '$universidad', '$pueblo_originario', '$ieee')";
    /* if (!mysqli_query($connection,$sql)) {
        echo("Error description: " . mysqli_error($connection));
      }else{
          echo "guardado correcto";
      } */
    
    $result = $connection->query($sql);
    if ($result) {
        // output data of each row
        
        echo 1;
        
    }else{
    echo 2;
}
     
}

?>
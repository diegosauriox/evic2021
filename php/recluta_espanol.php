<?php
$email=$_POST['email'];
$recluta=$_POST['recluta'];
$telefono=$_POST['telefono'];
$tecnicas=$_POST['tecnicas'];
$area_aplicacion=$_POST['area_aplicacion'];


//Create connection
$connection = mysqli_connect('localhost','root','','evic2021');

if($_POST['email']){
      
	$q = "UPDATE inscritos SET recluta= '$recluta' telefono ='$telefono' tecnicas ='$tecnicas' area_aplicacion = '$area_aplicacion'  WHERE email='$email";

	$query1 = mysqli_query($connection,$q);
	$query2 = mysqli_query($connection,$q);
	
	if($query){
		echo ' Data Inserted Successfully'
	    mysql_close($connection);
		}
	}

?>

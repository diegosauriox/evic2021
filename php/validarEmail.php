<?php

//mysql credencial
$host='localhost';
$database='evic2021';
$user='evic2021';
$pass='y&YZ!uMQ!6k0';

//post data
$email=$_POST['email'];

$connection = new mysqli($host,$user,$pass,$database);

if($_POST['email']){
      
	$sql = "SELECT nombre FROM inscritos WHERE email= '$email'";

	
	$result = $connection->query($sql);
    $row = mysqli_fetch_row($result);
    if($row){
        echo 1;
    }else{
        echo 2;
    }
    
	
}

?>

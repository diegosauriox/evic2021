<?php
$email=$_POST['email'];



$connection = mysqli_connect('localhost','root','','evic2021');

if($_POST['email']){
      
	$sql = "SELECT nombre FROM inscritos WHERE email= '$email'";

	
	$result = $connection->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        
          echo 1;
        
   }else{
       echo 2;
   }
    
	
}

?>

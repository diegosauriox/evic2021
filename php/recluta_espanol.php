<?php
$email=$_POST['email'];
$recluta=1;
$tipo_telefono=$_POST['tipo_telefono'];
$telefono=$_POST['telefono'];
$situacion=$_POST['situacion'];
$empresa=$_POST['empresa'];
$tipo_trabajo=$_POST['tipo_trabajo'];
$habilidades=$_POST['habilidades'];



//Create connection
$connection = mysqli_connect('localhost','root','','evic2021');

if($_POST['email']){
	 $sql = "SELECT id FROM inscritos WHERE email= '$email'";
	$result = $connection->query($sql);
	$row = mysqli_fetch_row($result);
	 
	if($row){
		$sql2 = "UPDATE inscritos SET recluta='$recluta',tipo_telefono='$tipo_telefono',telefono='$telefono',situacion='$situacion',habilidades='$habilidades' WHERE email='$email'";
		$result2 = $connection->query($sql2);
		
		foreach ($empresa as $empresita){
			foreach ($tipo_trabajo as $regimen){
	
				$sql3= "INSERT INTO inscritos_has_empresa (inscritos_id, empresa_id, tipo_trabajo_id) VALUES ('$row[0]', '$empresita', '$regimen')";
				$result3=$connection->query($sql3);
				
			}
		}
		echo 1;
	}else{
		echo 2;
	}
	
	
	
}
?>

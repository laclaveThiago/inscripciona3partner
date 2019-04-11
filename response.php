<?php
	include 'dbConfig.php';
	
	// Create database connection
	$conn = new mysqli($host, $userName, $password, $dbName);
	$conn->set_charset("utf8");
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}else{
		var_dump($_POST);
		
		$empresa = $conn->real_escape_string($_POST['input_56']);
		$nombre = $conn->real_escape_string($_POST['nombre']);
		$email = $conn->real_escape_string($_POST['email']);
		$dni = $conn->real_escape_string($_POST['dni']);
		$dnivalidez = $conn->real_escape_string($_POST['dnivalidez']);
		$fecha_nacimiento = $conn->real_escape_string($_POST['fecha_nacimiento']);
		$telefono = $conn->real_escape_string($_POST['telefono']);
		$vendranen = $conn->real_escape_string($_POST['vendranen']);
		$llegar_dia = $conn->real_escape_string($_POST['llegar_dia']);
		$teiranen = $conn->real_escape_string($_POST['teiranen']);
		$teirasdia = $conn->real_escape_string($_POST['teirasdia']);
		$sesion_estrategica = $conn->real_escape_string($_POST['sesion_estrategica']);
		$asistirasalmuerzo = $conn->real_escape_string($_POST['asistirasalmuerzo']);
		$sesion1 = $conn->real_escape_string($_POST['sesion1']);
		$sesion2 = $conn->real_escape_string($_POST['sesion2']);
		$sesion3 = $conn->real_escape_string($_POST['sesion3']);
		$sesion4 = $conn->real_escape_string($_POST['sesion4']);
		
		$sql="INSERT INTO invitados (Empresa, 
											nombre, 
											nacimiento, 
											dni, 
											dni_validez, 
											telefono, 
											email, 
											llegada_en, 
											dia_llegada, 
											hora_llegada, 
											salida_en, 
											dia_salida, 
											hora_salida, 
											sesion_estrategica, 
											almuerzo, 
											sesion_1, 
											sesion_2, 
											sesion_3, 
											sesion_4) 
		VALUES (
											'".$empresa."',
											'".$nombre."', 
											'".$fecha_nacimiento."', 
											'".$dni."',
											'".$dnivalidez."',
											'".$telefono."',
											'".$email."',
											'".$vendranen."',
											'".$llegar_dia."',
											'roberto',
											'".$teiranen."',
											'".$teirasdia."',
											'roberto',
											'".$sesion_estrategica."',
											'".$asistirasalmuerzo."',
											'".$sesion1."',
											'".$sesion2."',
											'".$sesion3."',
											'".$sesion4."'
		)";
		echo $sql;
		
		if(!$result = $conn->query($sql)){
			die('There was an error running the query [' . $conn->error . ']');
		}else{
			echo "Thank you! We will contact you soon";
		}
		
		
	}
?>
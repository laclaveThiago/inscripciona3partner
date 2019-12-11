<?php
	include 'dbConfig.php';
	
	// Create database connection
	$conn = new mysqli($host, $userName, $password, $dbName);
	$conn->set_charset("utf8");
	$usuarios_confirmados = 0;
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}else{
		$id_empresa = $conn->real_escape_string($_POST['input_56']);
		$consulta = 'SELECT * FROM empresas WHERE id='.$id_empresa;
		if ($resultado2 = $conn->query($consulta)) {
			while ($obj2 = $resultado2->fetch_object()) {
				$empresa = $obj2->nombre;
				$usuarios_confirmados_server = $obj2->completado;
			}
		}
		
		$empresa_text = $conn->real_escape_string($empresa);
		$asistirassesiones = 'Si';
		$nombre = $conn->real_escape_string($_POST['nombre']);
		$sesion1 = 'CRM | a3factura';
		$sesion2 = 'Reporting avanzado para a3factura';
		$sesion3 = $conn->real_escape_string($_POST['sesion3']);
		$sesion4 = $conn->real_escape_string($_POST['sesion4']);
		
		$sql="INSERT INTO sesiones (empresa, 
											asistirassesiones, 
											nombre, 
											sesion1, 
											sesion2,
											sesion3,
											sesion4) 
		VALUES (
											'".$empresa_text."',
											'".$asistirassesiones."', 
											'".$nombre."', 
											'".$sesion1."', 
											'".$sesion2."',
											'".$sesion3."', 
											'".$sesion4."'
		)";
		//echo $sql;
		
		if(!$result = $conn->query($sql)){
			die('There was an error running the query [' . $conn->error . ']');
		}else{
			$usuarios_confirmados++;
		}
		
		if(strlen($_POST['2asistirassesiones']) > 0){
			$empresa_text = $conn->real_escape_string($empresa);
			$asistirassesiones2 = 'Si';
			$nombre2 = $conn->real_escape_string($_POST['2nombre']);
			$sesion12 = 'CRM | a3factura';
			$sesion22 = 'Reporting avanzado para a3factura';
			$sesion32 = $conn->real_escape_string($_POST['2sesion3']);
			$sesion42 = $conn->real_escape_string($_POST['2sesion4']);
			
			$sql="INSERT INTO sesiones (empresa, 
												asistirassesiones, 
												nombre, 
												sesion1, 
												sesion2,
												sesion3,
												sesion4)
			VALUES (
												'".$empresa_text."',
												'".$asistirassesiones2."', 
												'".$nombre2."', 
												'".$sesion12."', 
												'".$sesion22."',
												'".$sesion32."', 
												'".$sesion42."'
			)";
			
			if(!$result = $conn->query($sql)){
				die('There was an error running the query [' . $conn->error . ']');
			}else{
				$usuarios_confirmados++;
			}
		}
		
		if(strlen($_POST['3asistirassesiones']) > 0){
			$empresa_text = $conn->real_escape_string($empresa);
			$asistirassesiones3 = 'Si';
			$nombre3 = $conn->real_escape_string($_POST['3nombre']);
			$sesion13 = 'CRM | a3factura';
			$sesion23 = 'Reporting avanzado para a3factura';
			$sesion33 = $conn->real_escape_string($_POST['3sesion3']);
			$sesion43 = $conn->real_escape_string($_POST['3sesion4']);
			
			$sql="INSERT INTO sesiones (empresa, 
												asistirassesiones, 
												nombre, 
												sesion1, 
												sesion2,
												sesion3,
												sesion4)
			VALUES (
												'".$empresa_text."',
												'".$asistirassesiones3."', 
												'".$nombre3."', 
												'".$sesion13."', 
												'".$sesion23."',
												'".$sesion33."', 
												'".$sesion43."'
			)";
			
			if(!$result = $conn->query($sql)){
				die('There was an error running the query [' . $conn->error . ']');
			}else{
				$usuarios_confirmados++;
			}
		}
		
		if(strlen($_POST['4asistirassesiones']) > 0){
			$empresa_text = $conn->real_escape_string($empresa);
			$asistirassesiones4 = 'Si';
			$nombre4 = $conn->real_escape_string($_POST['4nombre']);
			$sesion14 = 'CRM | a3factura';
			$sesion24 = 'Reporting avanzado para a3factura';
			$sesion34 = $conn->real_escape_string($_POST['4sesion3']);
			$sesion44 = $conn->real_escape_string($_POST['4sesion4']);
			
			$sql="INSERT INTO sesiones (empresa, 
												asistirassesiones, 
												nombre, 
												sesion1, 
												sesion2,
												sesion3,
												sesion4)
			VALUES (
												'".$empresa_text."',
												'".$asistirassesiones4."', 
												'".$nombre4."', 
												'".$sesion14."', 
												'".$sesion24."',
												'".$sesion34."', 
												'".$sesion44."'
			)";
			
			if(!$result = $conn->query($sql)){
				die('There was an error running the query [' . $conn->error . ']');
			}else{
				$usuarios_confirmados++;
			}
		}
		
		$total_usuarios = $usuarios_confirmados_server + $usuarios_confirmados;
		
		$sql = "UPDATE empresas SET completado = ".$total_usuarios." WHERE id=".$id_empresa;
		if(!$result = $conn->query($sql)){
			die('There was an error running the query [' . $conn->error . ']');
		}else{
			header("Location: http://eventostaa.wolterskluwer.es/jjcc/2019/typ-inscripcion");
			die();
		}
	}
?>
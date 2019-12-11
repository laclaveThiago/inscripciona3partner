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
		$asistirassesiones = $conn->real_escape_string($_POST['asistirassesiones']);
		$sesion1 = $conn->real_escape_string($_POST['sesion1']);
		$sesion2 = $conn->real_escape_string($_POST['sesion2']);
		
		$sql="INSERT INTO sesiones (empresa, 
											asistirassesiones, 
											sesion1, 
											sesion2) 
		VALUES (
											'".$empresa_text."',
											'".$asistirassesiones."', 
											'".$sesion1."', 
											'".$sesion2."'
		)";
		//echo $sql;
		
		if(!$result = $conn->query($sql)){
			die('There was an error running the query [' . $conn->error . ']');
		}else{
			$usuarios_confirmados++;
		}
		
		if(strlen($_POST['2asistirassesiones']) > 0){
			$empresa_text = $conn->real_escape_string($empresa);
			$asistirassesiones2 = $conn->real_escape_string($_POST['2asistirassesiones']);
			$sesion12 = $conn->real_escape_string($_POST['2sesion1']);
			$sesion22 = $conn->real_escape_string($_POST['2sesion2']);
			
			$sql="INSERT INTO sesiones (empresa, 
												asistirassesiones, 
												sesion1, 
												sesion2) 
			VALUES (
												'".$empresa_text."',
												'".$asistirassesiones2."', 
												'".$sesion12."', 
												'".$sesion22."'
			)";
			
			if(!$result = $conn->query($sql)){
				die('There was an error running the query [' . $conn->error . ']');
			}else{
				$usuarios_confirmados++;
			}
		}
		
		if(strlen($_POST['3asistirassesiones']) > 0){
			$empresa_text = $conn->real_escape_string($empresa);
			$asistirassesiones3 = $conn->real_escape_string($_POST['3asistirassesiones']);
			$sesion13 = $conn->real_escape_string($_POST['3sesion1']);
			$sesion23 = $conn->real_escape_string($_POST['3sesion2']);
			
			$sql="INSERT INTO sesiones (empresa, 
												asistirassesiones, 
												sesion1, 
												sesion2) 
			VALUES (
												'".$empresa_text."',
												'".$asistirassesiones3."', 
												'".$sesion13."', 
												'".$sesion23."'
			)";
			
			if(!$result = $conn->query($sql)){
				die('There was an error running the query [' . $conn->error . ']');
			}else{
				$usuarios_confirmados++;
			}
		}
		
		if(strlen($_POST['4asistirassesiones']) > 0){
			$empresa_text = $conn->real_escape_string($empresa);
			$asistirassesiones4 = $conn->real_escape_string($_POST['4asistirassesiones']);
			$sesion14 = $conn->real_escape_string($_POST['4sesion1']);
			$sesion24 = $conn->real_escape_string($_POST['4sesion2']);
			
			$sql="INSERT INTO sesiones (empresa, 
												asistirassesiones, 
												sesion1, 
												sesion2) 
			VALUES (
												'".$empresa_text."',
												'".$asistirassesiones4."', 
												'".$sesion14."', 
												'".$sesion24."'
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
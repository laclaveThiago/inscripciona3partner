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
				$usuarios_confirmados_server = $obj2->asistentes_confirmados;
			}
		}
		
		$nombre = $conn->real_escape_string($_POST['nombre']);
		$email = $conn->real_escape_string($_POST['email']);
		$dni = $conn->real_escape_string($_POST['dni']);
		$dnivalidez = $conn->real_escape_string($_POST['dnivalidez']);
		$fecha_nacimiento = $conn->real_escape_string($_POST['fecha_nacimiento']);
		$telefono = $conn->real_escape_string($_POST['telefono']);
		$vendranen = $conn->real_escape_string($_POST['vendranen']);
		$llegar_dia = $conn->real_escape_string($_POST['llegar_dia']);
		$llegar_hora = $conn->real_escape_string($_POST['llegar_hora']);
		$teiranen = $conn->real_escape_string($_POST['teiranen']);
		$teirasdia = $conn->real_escape_string($_POST['teirasdia']);
		$teiras_hora = $conn->real_escape_string($_POST['teiras_hora']);
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
											'".$llegar_hora."',
											'".$teiranen."',
											'".$teirasdia."',
											'".$teiras_hora."',
											'".$sesion_estrategica."',
											'".$asistirasalmuerzo."',
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
		
		if(strlen($_POST['2nombre']) > 0){
			
			$nombre2 = $conn->real_escape_string($_POST['2nombre']);
			$email2 = $conn->real_escape_string($_POST['2email']);
			$dni2 = $conn->real_escape_string($_POST['2dni']);
			$dnivalidez2 = $conn->real_escape_string($_POST['2dnivalidez']);
			$fecha_nacimiento2 = $conn->real_escape_string($_POST['2fecha_nacimiento']);
			$telefono2 = $conn->real_escape_string($_POST['2telefono']);
			$vendranen2 = $conn->real_escape_string($_POST['2vendranen']);
			$llegar_dia2 = $conn->real_escape_string($_POST['2llegar_dia']);
			$llegar_hora2 = $conn->real_escape_string($_POST['2llegar_hora']);
			$teiranen2 = $conn->real_escape_string($_POST['2teiranen']);
			$teirasdia2 = $conn->real_escape_string($_POST['2teirasdia']);
			$teiras_hora2 = $conn->real_escape_string($_POST['2teiras_hora']);
			$sesion_estrategica2 = $conn->real_escape_string($_POST['2sesion_estrategica']);
			$asistirasalmuerzo2 = $conn->real_escape_string($_POST['2asistirasalmuerzo']);
			$sesion1_2 = $conn->real_escape_string($_POST['2sesion1']);
			$sesion2_2 = $conn->real_escape_string($_POST['2sesion2']);
			$sesion3_2 = $conn->real_escape_string($_POST['2sesion3']);
			$sesion4_2 = $conn->real_escape_string($_POST['2sesion4']);
			
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
												'".$nombre2."', 
												'".$fecha_nacimiento2."', 
												'".$dni2."',
												'".$dnivalidez2."',
												'".$telefono2."',
												'".$email2."',
												'".$vendranen2."',
												'".$llegar_dia2."',
												'".$llegar_hora2."',
												'".$teiranen2."',
												'".$teirasdia2."',
												'".$teiras_hora2."',
												'".$sesion_estrategica2."',
												'".$asistirasalmuerzo2."',
												'".$sesion1_2."',
												'".$sesion2_2."',
												'".$sesion3_2."',
												'".$sesion4_2."'
			)";
			if(!$result = $conn->query($sql)){
				die('There was an error running the query [' . $conn->error . ']');
			}else{
				$usuarios_confirmados++;
			}
		}
		
		if(strlen($_POST['3nombre']) > 0){
			$nombre3 = $conn->real_escape_string($_POST['3nombre']);
			$email3 = $conn->real_escape_string($_POST['3email']);
			$dni3 = $conn->real_escape_string($_POST['3dni']);
			$dnivalidez3 = $conn->real_escape_string($_POST['3dnivalidez']);
			$fecha_nacimiento3 = $conn->real_escape_string($_POST['3fecha_nacimiento']);
			$telefono3 = $conn->real_escape_string($_POST['3telefono']);
			$vendranen3 = $conn->real_escape_string($_POST['3vendranen']);
			$llegar_dia3 = $conn->real_escape_string($_POST['3llegar_dia']);
			$llegar_hora3 = $conn->real_escape_string($_POST['3llegar_hora']);
			$teiranen3 = $conn->real_escape_string($_POST['3teiranen']);
			$teirasdia3 = $conn->real_escape_string($_POST['3teirasdia']);
			$teiras_hora3 = $conn->real_escape_string($_POST['3teiras_hora']);
			$sesion_estrategica3 = $conn->real_escape_string($_POST['3sesion_estrategica']);
			$asistirasalmuerzo3 = $conn->real_escape_string($_POST['3asistirasalmuerzo']);
			$sesion1_3 = $conn->real_escape_string($_POST['3sesion1']);
			$sesion2_3 = $conn->real_escape_string($_POST['3sesion2']);
			$sesion3_3 = $conn->real_escape_string($_POST['3sesion3']);
			$sesion4_3 = $conn->real_escape_string($_POST['3sesion4']);
			
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
												'".$nombre3."', 
												'".$fecha_nacimiento3."', 
												'".$dni3."',
												'".$dnivalidez3."',
												'".$telefono3."',
												'".$email3."',
												'".$vendranen3."',
												'".$llegar_dia3."',
												'".$llegar_hora3."',
												'".$teiranen3."',
												'".$teirasdia3."',
												'".$teiras_hora3."',
												'".$sesion_estrategica3."',
												'".$asistirasalmuerzo3."',
												'".$sesion1_3."',
												'".$sesion2_3."',
												'".$sesion3_3."',
												'".$sesion4_3."'
			)";
			if(!$result = $conn->query($sql)){
				die('There was an error running the query [' . $conn->error . ']');
			}else{
				$usuarios_confirmados++;
			}
		}
		
		if(strlen($_POST['4nombre']) > 0){
			$nombre4 = $conn->real_escape_string($_POST['4nombre']);
			$email4 = $conn->real_escape_string($_POST['4email']);
			$dni4 = $conn->real_escape_string($_POST['4dni']);
			$dnivalidez4 = $conn->real_escape_string($_POST['4dnivalidez']);
			$fecha_nacimiento4 = $conn->real_escape_string($_POST['4fecha_nacimiento']);
			$telefono4 = $conn->real_escape_string($_POST['4telefono']);
			$vendranen4 = $conn->real_escape_string($_POST['4vendranen']);
			$llegar_dia4 = $conn->real_escape_string($_POST['4llegar_dia']);
			$llegar_hora4 = $conn->real_escape_string($_POST['4llegar_hora']);
			$teiranen4 = $conn->real_escape_string($_POST['4teiranen']);
			$teirasdia4 = $conn->real_escape_string($_POST['4teirasdia']);
			$teiras_hora4 = $conn->real_escape_string($_POST['4teiras_hora']);
			$sesion_estrategica4 = $conn->real_escape_string($_POST['4sesion_estrategica']);
			$asistirasalmuerzo4 = $conn->real_escape_string($_POST['4asistirasalmuerzo']);
			$sesion1_4 = $conn->real_escape_string($_POST['4sesion1']);
			$sesion2_4 = $conn->real_escape_string($_POST['4sesion2']);
			$sesion3_4 = $conn->real_escape_string($_POST['4sesion3']);
			$sesion4_4 = $conn->real_escape_string($_POST['4sesion4']);
			
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
												'".$nombre4."', 
												'".$fecha_nacimiento4."', 
												'".$dni4."',
												'".$dnivalidez4."',
												'".$telefono4."',
												'".$email4."',
												'".$vendranen4."',
												'".$llegar_dia4."',
												'".$llegar_hora4."',
												'".$teiranen4."',
												'".$teirasdia4."',
												'".$teiras_hora4."',
												'".$sesion_estrategica4."',
												'".$asistirasalmuerzo4."',
												'".$sesion1_4."',
												'".$sesion2_4."',
												'".$sesion3_4."',
												'".$sesion4_4."'
			)";
			if(!$result = $conn->query($sql)){
				die('There was an error running the query [' . $conn->error . ']');
			}else{
				$usuarios_confirmados++;
			}
		}
		
		$total_usuarios = $usuarios_confirmados_server + $usuarios_confirmados;
		
		$sql = "UPDATE empresas SET asistentes_confirmados = ".$total_usuarios." WHERE id=".$id_empresa;
		if(!$result = $conn->query($sql)){
			die('There was an error running the query [' . $conn->error . ']');
		}else{
			header("Location: https://www.laclave.es/");
			die();
		}
	}
?>
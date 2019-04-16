<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	$host_name  = "localhost";
	$database   = "laclave_a3forms";
	$user_name  = "laclave_roberto";
	$password   = "Evalcal65rob";
	
	$mysqli = new mysqli($host_name, $user_name, $password ,  $database);

	$mysqli->set_charset("utf8");
	
	if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	
	if (mysqli_connect_error()) {
		die('Connect Error (' . mysqli_connect_errno() . ') '
				. mysqli_connect_error());
	}
	
	$types = array();
	
	$consulta = 'SELECT * FROM empresas WHERE asistentes_confirmados < asistentes ORDER BY nombre ASC';
				 
	if ($resultado2 = $mysqli->query($consulta)) {
		while ($obj2 = $resultado2->fetch_object()) {
			$pepina = array();
			$pepina["nombre"] = $obj2->nombre;
			$asistentes = $obj2->asistentes;
			$asistentes_confirmados = $obj2->asistentes_confirmados;
			$faltantes = $asistentes - $asistentes_confirmados;
			$pepina["asistentes"] = $faltantes;
			$types[$obj2->id] = $pepina;
		}
	}
	
	$json = json_encode($types);
	echo $json;
	
	$resultado2->close();
	
	$mysqli->close();
?>
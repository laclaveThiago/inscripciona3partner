<?php
	//include database configuration file
	include 'dbConfig.php';

	// Create database connection
	$conn = new mysqli($host, $userName, $password, $dbName);
	$conn->set_charset("utf8");
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}else{
		//get records from database
		$query = $conn->query("SELECT * FROM invitados ORDER BY id DESC");

		if($query->num_rows > 0){
			$delimiter = ",";
			$filename = "invitados_" . date('Y-m-d') . ".csv";
			
			//create a file pointer
			$f = fopen('php://memory', 'w');
			
			//set column headers
			$fields = array(
							'ID', 
							'Empresa', 
							'Nombre y Apellidos', 
							'Fecha de nacimiento', 
							'DNI', 
							'Validez DNI', 
							'Teléfono',
							'Email',
							'Llegada en',
							'Dia de llegada',
							'Hora de llegada',
							'Salida en',
							'Día de salida',
							'Hora de salida',
							'Sesion estratégica',
							'Almuerzo',
							'Sesión 1',
							'Sesión 2',
							'Sesión 3',
							'Sesión 4',
							'Fecha de creación'
					);
			fputcsv($f, $fields, $delimiter);
			
			//output each row of the data, format line as csv and write to file pointer
			while($row = $query->fetch_assoc()){
				$lineData = array(
								$row['id'], 
								$row['Empresa'], 
								$row['nombre'], 
								$row['nacimiento'], 
								$row['dni'], 
								$row['dni_validez'], 
								$row['telefono'], 
								$row['email'], 
								$row['llegada_en'], 
								$row['dia_llegada'], 
								$row['hora_llegada'], 
								$row['salida_en'], 
								$row['dia_salida'], 
								$row['hora_salida'], 
								$row['sesion_estrategica'], 
								$row['almuerzo'], 
								$row['sesion_1'], 
								$row['sesion_2'], 
								$row['sesion_3'], 
								$row['sesion_4'], 
								$row['creacion']
							);
				fputcsv($f, $lineData, $delimiter);
			}
			
			//move back to beginning of file
			fseek($f, 0);
			
			//set headers to download file rather than displayed
			header('Content-Encoding: UTF-8');
			header('Content-type: text/csv; charset=UTF-8');
			header('Content-Disposition: attachment; filename="' . $filename . '";');
			
			//output all remaining data on a file pointer
			fpassthru($f);
		}
		exit;
	}

?>
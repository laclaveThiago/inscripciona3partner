<?php
	$host = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "forms";
	
	// Create database connection
	$conn = new mysqli($host, $userName, $password, $dbName);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}else{
		echo "roberto";
		var_dump($_POST);
		/*
			$yourName = $conn->real_escape_string($_POST['your_name']);
			$yourEmail = $conn->real_escape_string($_POST['your_email']);
			$yourPhone = $conn->real_escape_string($_POST['your_phone']);
			$comments = $conn->real_escape_string($_POST['comments']);
			$sql="INSERT INTO contact_form_info (name, email, phone, comments) VALUES ('".$yourName."','".$yourEmail."', '".$yourPhone."', '".$comments."')";
		*/
	}
?>
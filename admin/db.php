<?php
	ob_start();
	session_start();
	date_default_timezone_set('Africa/Kampala');


	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "project";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	// echo "Connected successfully";

	$base_url = 'http://127.0.0.1/project2/';


?>
<?php 

	$host = "localhost";
	$root = "root";
	$paswd = "";
	$database = "api_android";
	
	$db = mysqli_connect($host,$root,$paswd,$database);

	if (!$db) {
		echo "Database Not Found";
	}

 ?>
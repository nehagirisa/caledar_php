<?php

$mysqli = "";

try {
	$servername = "localhost:3307";
	$dbname = "peoject";
	$username = "root";
	$password = "";

	$mysqli = new PDO(
		"mysql:host=$servername; dbname=calender_event",
		$username, $password
	);
	
$mysqli->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
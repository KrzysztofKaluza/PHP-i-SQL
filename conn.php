<?php

	$serv = "localhost";
	$user = "krzysiu";
	$pass = "qwerty";
	$db="mysql";

	$conn = new mysqli($serv,$user,$pass,$db);
	if($conn->connect_error){
		echo $conn->connect_error;
	}

	echo "connected to server <br/>"; 
?>

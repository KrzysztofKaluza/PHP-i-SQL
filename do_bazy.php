<?php
	include 'conn.php';
	$marka = $_POST['marka'];
	$model = $_POST['model'];
	$rok = $_POST['rok'];
	$zapyt="insert into Auta (marka,model,rok) values ('$marka','$model','$rok')";
	if($conn->connect_error){
		die($conn->connect_error);
	}
	if($conn->query($zapyt)===TRUE){
		echo "dane dodano";
	}
	else{
		echo "failed";
	}

	mysqli_close($conn);
?>

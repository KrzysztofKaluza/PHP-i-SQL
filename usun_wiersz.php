<?php

	include 'conn.php';
	$kolumna=$_POST['kolumna2'];
	$kasowanie=$_POST['kasowanie'];
	$zapyt="DELETE FROM Auta WHERE $kolumna = '$kasowanie'";
	$odp=mysqli_query($conn,$zapyt);
	if($odp){
		echo "operacja wykonana";
	}
	else{
		echo "operacja nie wykonana ".mysqli_error($conn);
	}
	mysqli_close($conn);

?>

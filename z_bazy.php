<?php

	include 'conn.php';
	$kolumna=$_POST['kolumna'];
	$wyszukiwarka=$_POST['wyszukiwarka'];
	$zapyt="select * from Auta where $kolumna = '$wyszukiwarka'";
	$odp=mysqli_query($conn,$zapyt);

	if($odp){
		while($row = mysqli_fetch_assoc($odp)){
			$row['id'];
			$row['marka'];
			$row['model'];
			$row['rok'];
			echo $row['id']."  ".$row['marka']."  ".$row['model']."  ".$row['rok']."<br/>";
		}
	}
	else{
		echo "zapytanie nie wykonało się ".mysqli_error($conn);
	}

	mysqli_close($conn);
?>

<?php
	require_once "../../db.php";
    $result = mysqli_query($conn,"select * from Secondsemester41147");
	$Seconds = array();
	while(($row = $result->fetch_assoc()) != null){
		$Seconds[] = $row;
	}
	print_r(json_encode($Seconds));
?>
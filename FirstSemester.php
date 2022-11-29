<?php
	require_once "../../db.php";
    $result = mysqli_query($conn,"select * from Firstsemester41147");
	$Firsts = array();
	while(($row = $result->fetch_assoc()) != null){
		$Firsts[] = $row;
	}
	print_r(json_encode($Firsts));
?>
<?php
	require_once "../../db.php";
	
	$result = mysqli_query($conn,"select * from Lecturer41147");
		$lecturers = array();
		while(($row = $result->fetch_assoc()) != null){
			$lecturers[] = $row;
		}
	
		print_r(json_encode($lecturers));

?>
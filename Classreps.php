<?php
	require_once "../../db.php";
    $result = mysqli_query($conn,"select * from Classrep41147");
	$classreps = array();
	while(($row = $result->fetch_assoc()) != null){
		$classreps[] = $row;
	}
	print_r(json_encode($classreps));
?>
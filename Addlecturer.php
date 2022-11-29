<?php
require_once "../../db.php";
mysqli_query($conn,"INSERT INTO Lecturer41147(Name,AcademicStatus,Phone,Email) VALUES('".$_POST['Name']."','".$_POST['AcademicStatus']."','".$_POST['Phone']."','".$_POST['Email']."')");
if($conn->errno){
	echo $conn->error;
}else{
	header("Location: Lecturers.html");
}
?>
<?php
require_once "../../db.php";
mysqli_query($conn,"INSERT INTO Classrep41147(Id,Name,Class,Phone,Email) VALUES('".$_POST['Id']."','".$_POST['Name']."','".$_POST['Class']."','".$_POST['Phone']."','".$_POST['Email']."')");
if($conn->errno){
	echo $conn->error;
}else{
	header("Location: Classreps.html");
}
?>
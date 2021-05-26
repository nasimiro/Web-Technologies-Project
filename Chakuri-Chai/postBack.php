<?php
$conn = mysqli_connect("localhost", "root", "", "careerbd_db");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
if(isset($_REQUEST["designation"]) && isset($_REQUEST["exp"])  && isset($_REQUEST["qul"]) && isset($_REQUEST["sal"]) && isset($_REQUEST["req"]) && isset($_REQUEST["email"])){
	
	$sql=" insert into posttable (Designation,Experience,Qualification,Salary,Requirements,DeleteID,Email) values('".$_REQUEST['designation']."','".$_REQUEST['exp']."','".$_REQUEST['qul']."' ,'".$_REQUEST['sal']."' ,'".$_REQUEST['req']."','1','".$_REQUEST['email']."')";
	//echo $sql;
	if(mysqli_query($conn, $sql)){
		header("Location:profileJobProvider.php");
		echo "New records updated successfully";
		//echo $sql;
	}
}
else{
	echo "Invalid parameter !";
}
?>

<?php

if(isset($_SESSION["Email"]) && isset($_SESSION["Pass"]) && isset($_SESSION["accType"])){
	//echo "Hello : ".$_SESSION["Pass"];
	$conn = mysqli_connect("localhost", "root", "","careerbd_db");
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
     }
	else{
		$email=$_SESSION["Email"];
		$pass=$_SESSION["Pass"];
		
		$sql="select * from jobtabel where Email='$email' and Pass='$pass'";
        $result = mysqli_query($conn,$sql)or die(mysqli_error());
		while($row = mysqli_fetch_assoc($result)) { 
		
          $comName=$row["CName"];
		  $emailno=$row["Email"];
		  $loc=$row["Location"];
		  $uid=$row["UserID"];
		  $cid=$row["CId"];
		  $cphn=$row["cPhnNo"];
		  $ctype=$row["cType"];
		  $cweb=$row["cWeb"];
		
		
		}
	}
}
		 
?>
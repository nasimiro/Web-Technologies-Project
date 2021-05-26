<?php

if(isset($_SESSION["Email"]) && isset($_SESSION["password"]) && isset($_SESSION["accType"])){
	//echo "Hello : ".$_SESSION["Pass"];
	$conn = mysqli_connect("localhost", "root", "","careerbd_db");
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
     }
	else{
		$email=$_SESSION["Email"];
		$pass=$_SESSION["password"];
		
		$sql="select * from parttimer where Email='$email' and password='$pass'";
        $result = mysqli_query($conn,$sql)or die(mysqli_error());
		while($row = mysqli_fetch_assoc($result)) { 
		
            $userID=$row["UserID"];
			$name=$row["UserName"];
			$DOB=$row["DateOfBirth"];
			$Phone=$row["PhoneNumber"];
			$Email=$row["Email"];
			$Address=$row["Address"];
			$city=$row["City"];
			$Gender=$row["Gender"];
			$EduDetail=$row["EducatinalDetail"];
			$Undergrade=$row["UnderGraduation"];
			$PostGrade=$row["PostGraduation"];
			$Status=$row["CurrentStatus"];
			$Skill=$row["Skills"];
			$Achiv=$row["Achivement"];
			$work=$row["WorkingExperiences"];
			$avail=$row["AvailableTime"];
		
		
		}
	}
}
		 
?>
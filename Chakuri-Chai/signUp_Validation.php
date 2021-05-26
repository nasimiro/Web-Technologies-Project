<?php

$c=0;
$x=0;
session_start();


if(strlen($_POST["pass"])==0||strlen($_POST["pass"])<6)
    {
        echo "Password is required <br>";
        $c=1;
    }
if(strlen($_POST["userEmail"])==0 || strpos($_POST["userEmail"],"@")==false || strpos($_POST["userEmail"],".")==false)
    {
        echo "Email field is not valid <br>";
        $c=1;
    }
	


$Email=$_POST["userEmail"];
$Password=$_POST["pass"];
//$AccT=$_POST["accType"];


$conn = mysqli_connect("localhost","root","","careerbd_db");

if(!$conn){
	die("Connection failed : ". mysqli_connect_error());
}
//print_r($GLOBALS);
else{
	
if(isset($_POST["pass"]) && isset($_POST["userEmail"]))
{
	$sql="SELECT * FROM parttimer where Email='$Email' and password='$Password'";
	$result = mysqli_query($conn, $sql)or die(mysqli_error());
	$rowCount = mysqli_num_rows($result);

		if($rowCount==1){
			
			$_SESSION["Email"]=$Email;
			$_SESSION["password"]=$Password;
			$_SESSION["accType"]=1;
			$_SESSION["x"]=1;
			header("Location:profileJobSeeker.php");
		}
		else
		{
			$sql="SELECT * FROM jobtabel where Email='$Email' and Pass='$Password'";
			$result = mysqli_query($conn, $sql)or die(mysqli_error());
			$rowCount = mysqli_num_rows($result);
			if($rowCount==1){
			
				$_SESSION["Email"]=$Email;
				$_SESSION["Pass"]=$Password;
				$_SESSION["accType"]=2;
				$_SESSION["x"]=1;
				header("Location:profileJobProvider.php");
			}
			else
			{
				header("Location:signin.php?id=1");
			}
		}
		//echo $_SESSION["Email"]."-".$_SESSION["Pass"]."-".$_SESSION["accType"];

	}
}
?>
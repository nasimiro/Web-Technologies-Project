<?php
$c=0;
    if(strlen($_POST["uid"])==0)
    {
        echo "User ID is required <br>";
        $c=1;
    }
	 if(strlen($_POST["unm"])==0)
    {
        echo "User ID is required <br>";
        $c=1;
    }
	if(strlen($_POST["pass"])==0||strlen($_POST["pass"])<5)
    {
        echo "Password is required <br>";
        $c=1;
    }
	
    if(strlen($_POST["cpass"])==0||strlen($_POST["cpass"])<5)
    {
        echo "Confirm password is required<br>";
        $c=1;
    }
    if(strcmp($_POST["pass"],$_POST["cpass"])!=0)
    {
        echo "Password fields are not matched<br>";
        $c=1;
    }
	

	if(strlen($_POST["email"])==0 || strpos($_POST["email"],"@")==false || strpos($_POST["email"],".")==false)
    {
        echo "Email field is not valid <br>";
        $c=1;
    }
	
	
	
    if(strlen($_POST["add"])==0)
    {
        echo "User address is required <br>";
        $c=1;
    }
    if(strlen($_POST["ct"])==0)
    {
        echo "City name is required <br>";
        $c=1;
    }
	if(!isset($_REQUEST["gn"])){
	echo "Gender is required";
	$var=0;
	echo "<br>";
}
     if(strlen($_POST["edu"])==0)
    {
        echo "Educatinal details are required <br>";
        $c=1;
    }
	
    
    if($c!=1)
    {
    echo "Form has been filled successfully<br>";
    }
?>
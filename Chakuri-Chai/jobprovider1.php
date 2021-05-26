<?php
$c=0;
    if(strlen($_POST["name"])==0)
    {
        echo "User name is required <br>";
        $c=1;
    }
	if(strlen($_POST["pass"])==0||strlen($_POST["pass"])<5)
    {
        echo "Password is required <br>";
        $c=1;
    }
	if(strlen($_POST["uid"])==0)
    {
        echo "User ID is required <br>";
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
	
	
	
    if(strlen($_POST["cname"])==0)
    {
        echo "User Company name is required <br>";
        $c=1;
    }
    if(strlen($_POST["cid"])==0)
    {
        echo "User CompanyId is required <br>";
        $c=1;
    }
     if(strlen($_POST["location"])==0)
    {
        echo "User CompanyLocation is required <br>";
        $c=1;
    }
	if(strlen($_POST["cphn"])==0 || strlen($_POST["cphn"])!=11 )
    {
        echo " Company phone Number is required <br>";
        $c=1;
    }
	
	 if(strlen($_POST["ctype"])==0)
    {
        echo "User CompanyType is required <br>";
        $c=1;
    }
	
	
	if(strlen($_POST["cweb"])==0 || strpos($_POST["cweb"],".")==false || strpos($_POST["cweb"],".")==false)
    {
        echo "Company Web  field is not valid <br>";
        $c=1;
    }
    
    if($c!=1)
    {
    echo "Form has been filled successfully<br>";
    }
?>

<?php


   $conn = mysqli_connect("localhost", "root","","careerbd_db");

    if(!$conn)  {
	die("Connection failed:" . mysqli_connect_error());
	
    }
	
	
	if($c!=1){
	

    function getDataFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","careerbd_db");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$arr=array();
	//print_r($result);
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	return $arr;
    }	
		if((isset($_REQUEST["email"])) && $_REQUEST["email"] !="" )
	{
			$sql="select Email from jobtabel where Email='".$_REQUEST["email"]."'";
			$a=getDataFromDB($sql);
			$row=sizeof($a);
			if($row<1)
			{
		     if(isset($_REQUEST["name"]) && isset($_REQUEST["uid"]) && isset($_REQUEST["pass"]) && isset($_REQUEST["email"]) && isset($_REQUEST["cname"]) && isset($_REQUEST["cid"]) && isset($_REQUEST["location"]) && isset($_REQUEST["cmail"]) && isset($_REQUEST["cphn"]) && isset($_REQUEST["ctype"]) && isset($_REQUEST["cweb"]))
	          {
	           $sql="insert into jobtabel values ('".$_REQUEST['name']."','".$_REQUEST['uid']."' ,'".$_REQUEST['pass']."' ,'".$_REQUEST['email']."' ,'".$_REQUEST['cname']."' ,'".$_REQUEST['cid']."' ,'2','".$_REQUEST['location']."' ,'".$_REQUEST['cmail']."' ,'".$_REQUEST['cphn']."'  ,'".$_REQUEST['ctype']."'  ,'".$_REQUEST['cweb']."' )";

	
	          if(mysqli_query($conn, $sql)){
		       header("Location:home.html");
		        echo "New records updated successfully";
	            }
	
	           else {
		         echo "Error";
	              }
                  } 
			         }
			       else
			       {
				     header("Location:jobProvider.html"); ;
			     }
		
	}
		
		
	}

?>
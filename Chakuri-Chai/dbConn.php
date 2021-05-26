<?php
$c=0;
    if(strlen($_POST["uid"])==0)
    {
        echo "User id is required <br>";
        $c=1;
    }
	 if(strlen($_POST["unm"])==0)
    {
        echo "User name is required <br>";
        $c=1;
    }
	if(strlen($_POST["pass"])==0||strlen($_POST["pass"])<6)
    {
        echo "Password is required <br>";
        $c=1;
    }
	
    if(strlen($_POST["cpass"])==0||strlen($_POST["cpass"])<6)
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
	
	if(strlen($_POST["phn"])<11||strlen($_POST["phn"])>11)
    {
        echo "Mobile Number is not valid<br>";
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
	if(!isset($_POST["gn"])){
	   echo "Gender is required";
	   echo "<br>";
	   $c=1;
    }
     if(strlen($_POST["edu"])==0)
    {
        echo "Educatinal details are required <br>";
        $c=1;
    }
	if(strlen($_POST["ung"])==0)
    {
        echo "Under Graduate field is required <br>";
        $c=1;
    }
	if(strlen($_POST["psg"])==0)
    {
        echo "Post Graduation field is required <br>";
        $c=1;
    }
	if(strlen($_POST["cst"])==0)
    {
        echo "Current Status field is required <br>";
        $c=1;
    }
	if(strlen($_POST["skill"])==0)
    {
        echo "Skills field is required <br>";
        $c=1;
    }
	if(strlen($_POST["achiv"])==0)
    {
        echo "Achievements field is required <br>";
        $c=1;
    }
	if(strlen($_POST["workex"])==0)
    {
        echo "Working experience field is required <br>";
        $c=1;
    }
	if(strlen($_POST["avltime"])==0)
    {
        echo "Available time field is required <br>";
        $c=1;
    }
	
    
    if($c!=1)
    {
    echo "Form has been filled successfully<br>";
    }
?>

<?php
if($c!=1)
    {

     $conn = mysqli_connect("localhost", "root","","careerbd_db");

   if(!$conn)  {
	die("Connection failed:" . mysqli_connect_errno());

    }
	// 
	function getDataFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","careerbd_db");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$arr=array();
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	return $arr;
    }

     if((isset($_REQUEST["email"])) && $_REQUEST["email"] !="" )
	  {
			$sql="select Email from parttimer where Email='".$_REQUEST["email"]."'";
			$a=getDataFromDB($sql);
			$row=sizeof($a);
			if($row<1)
			{
		     if(isset($_REQUEST["uid"]) && isset($_REQUEST["unm"]) && isset($_REQUEST["pass"]) && isset($_REQUEST["cpass"]) && isset($_REQUEST["dob"]) && isset($_REQUEST["phn"]) && isset($_REQUEST["email"]) && isset($_REQUEST["add"]) && isset($_REQUEST["ct"]) && isset($_REQUEST["gn"]) && isset($_REQUEST["edu"]) && isset($_REQUEST["ung"]) && isset($_REQUEST["psg"]) && isset($_REQUEST["cst"]) && isset($_REQUEST["skill"]) && isset($_REQUEST["achiv"]) && isset($_REQUEST["workex"]) && isset($_REQUEST["avltime"]))
	          {
	             $gender=$_REQUEST['gn'];
                  //
	             $sql="insert into parttimer (UserID,accType,UserName,password,ConfirmPassword,DateOfBirth,PhoneNumber,Email,Address,City,Gender,EducatinalDetail,UnderGraduation,PostGraduation,CurrentStatus,Skills,Achivement,WorkingExperiences,AvailableTime) values('".$_REQUEST['uid']."','1','".$_REQUEST['unm']."','".$_REQUEST['pass']."','".$_REQUEST['cpass']."','".$_REQUEST['dob']."','".$_REQUEST['phn']."','".$_REQUEST['email']."','".$_REQUEST['add']."','".$_REQUEST['ct']."','".$gender."','".$_REQUEST['edu']."','".$_REQUEST['ung']."','".$_REQUEST['psg']."','".$_REQUEST['cst']."','".$_REQUEST['skill']."','".$_REQUEST['achiv']."','".$_REQUEST['workex']."','".$_REQUEST['avltime']."')";
	
	
	
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
				     header("Location:seekerInfo.html"); ;
			        }
		
	}
}


		
?>
   

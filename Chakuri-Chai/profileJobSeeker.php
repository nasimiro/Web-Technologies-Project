<html>
<head>
<?php
	  session_start();
?>
<title>Profile (Job Seeker)</title>
<script type="text/javascript">

function empty()
{
 document.getElementById("a").readOnly = false;
 document.getElementById("e").readOnly = false;
 document.getElementById("f").readOnly = false;
 document.getElementById("g").readOnly = false;
 document.getElementById("h").readOnly = false;
 document.getElementById("i").readOnly = false;
 document.getElementById("j").readOnly = false;
 document.getElementById("k").readOnly = false;
 document.getElementById("l").readOnly = false;
 document.getElementById("m").readOnly = false;
 document.getElementById("n").readOnly = false;
 document.getElementById("o").readOnly = false;
 document.getElementById("p").readOnly = false;
}


</script>
<style>
* {
    box-sizing: border-box;
}

body {
  margin: 0;
   background-image: url("homePic5.jpg");
   background-repeat: no-repeat;
   background-size: cover;
}

.header {
    padding: 10px;
    text-align: left;
	

}
.topnav {
    overflow: hidden;
    background-color: #218E9D;
}

.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.topnav a:hover {
    background-color: #097483;
    color: black;
}

.column {
    float: left;
    width: 40%;
    padding: 15px;
	border: 3px solid black;
	
}
.column2 {
    float:left;
    width: 60%;
    padding: 15px;
	background-color:transparent ; 
	
}
/* #029494 */
.row:after {
    content: "";
    display: table;
    clear: both;
}

.post {
    height: 435px;
    width: 100%;
    padding: 15px;
	background-color:#417E7E  ;
}
/*   #C7CCCC */
.postCount {
    width: 90%;
    padding: 15px;
	background-color:#C7CCCC ; 
	
}

@media (max-width:600px) {
    .column {
        width: 100%;
    }
}
img {
    border-radius: 10px;
}

.picup {
    margin:auto;
    width: 80%;
    border-radius: 2px;
    padding: 10px;
	
}

.info {
    margin: ;
    width: 100%;
    border-radius: 5px;
    background-color:;
    padding: 20px;
	
}
input[type=text], select {
    width: 90%;
    padding: 10px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 30%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
.button {
    background-color: #417E7E   ;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	width: 100%;
}

</style>
</head>
<body>

<?php
	if(isset($_POST["sbt"])){
		
	$conn = mysqli_connect("localhost", "root", "","careerbd_db");
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
     }
	else{
		$email=$_SESSION["Email"];
		$pass=$_SESSION["password"];
	
		$sql="update parttimer set UserName='".$_POST["uname"]."',PhoneNumber='".$_POST["phone"]."',Address='".$_POST["address"]."',City='".$_POST["city"]."',DateOfBirth='".$_POST["dob"]."',EducatinalDetail='".$_POST["eduDetail"]."',UnderGraduation='".$_POST["ugraduate"]."',PostGraduation='".$_POST["pgraduate"]."',CurrentStatus='".$_POST["status"]."',Skills='".$_POST["skills"]."',Achivement='".$_POST["achievement"]."',WorkingExperiences='".$_POST["wexp"]."',AvailableTime='".$_POST["atime"]."' where Email='$email' and password='$pass'";
        $result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
		if($result)
		{
			header("Location:profileJobSeeker.php");
		}
	}
}
	?>

<p class="dashed">
<div class="header">
<Form action="" method="post" enctype="multipart/form-data" name ="fm"> 
    <img src="icon4.png" width="70px" height="60px"/>
    <span><font size="11" color="white">Chakuri-Chai</font> <font size="5" color="white">, Largest Online Job Portal in Bangladesh <br/></font></span>
    <span> <br/><hr/> </span>
	
		
<?php
//session_start();
if(isset($_POST['upload']))
{    
    $email=$_SESSION["Email"];
	$target="upload/".basename($_FILES['image']['name']);
	$db=mysqli_connect("localhost","root","","careerbd_db");
	$image=$_FILES['image']['name'];
	$sql="update parttimer set userpic='$image' where Email='$email'";
	//echo $sql;
	mysqli_query($db,$sql);
	if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
	{
		//echo"sucessful";
		
	}
	else{
		//echo "problem";
	}
		
}
?>


</div>
</p>

<div class="row">

   <div class="column">
      <div class="picup">
	  
	  <?php
	//  session_start();
$email=$_SESSION["Email"];
$db=mysqli_connect("localhost","root","","careerbd_db");
$sql="select userpic from parttimer where Email='$email'";
$val="";
$result=mysqli_query($db,$sql);
while($row=mysqli_fetch_array($result))
{

	$val=$row["userpic"];
}

if($val !="" && $val !=null)
{
	
	echo"<div name='picup'><img src='$val' width=250px height=200/></div>";
	
}




?>
        
        <input type="file" name="image">
		<input type="submit" value="Upload File" name="upload">

</div>
</p>



     <div class="info">
	 
		 <?php 
			require_once("seekerBackend.php");
		 ?>
	     <input class="button" type="button" onclick="return empty();" value="Update Info">
		 
		 <Form action="#"  method="POST" enctype="multipart/form-data" name ="fm">
	     <table  align ="center" style=  "width:100%">
      
	     <tr>
           <td><label for="uname"><b>Name : </b></label></td>
           <td><input name="uname" id="a"  value="<?php echo $name;?>" type="text"  readonly></td>
         </tr>
		 <tr>
            <td><label for="userId"><b>User Id : </b></label></td>
            <td><input name="userId" id="b" value="<?php echo $userID;?>" type="text" readonly></td>
         </tr>
		 <tr>
           <td><label for="gen"><b>Gender : </b></label></td>
           <td><input name="gender" id="c" value="<?php echo $Gender;?>" type="text" readonly></td>
         </tr>
	     <tr>
           <td><label for="umail"><b>Email : </b></label></td>
           <td><input name="umail" id="d" value="<?php echo $Email;?>" type="text" readonly></td>
         </tr>
		 <tr>
           <td><label for="phone"><b>Mobile Number : </b></label></td>
           <td><input name="phone" id="e" value="<?php echo $Phone;?>" type="text" readonly></td>
         </tr>
		  <tr>
           <td><label for="address"><b>Address : </b></label></td>
           <td><input name="address" id="f" value="<?php echo $Address;?>" type="text" readonly></td>
         </tr>
		 <tr>
           <td><label for="city"><b>City : </b></label></td>
           <td><input name="city" id="g" value="<?php echo $city;?>" type="text" readonly></td>
         </tr>
		 <tr>
           <td><label for="DOB"><b>Date of Birth : </b></label></td>
           <td><input name="dob"  id="h"  value="<?php echo $DOB;?>" type="text" readonly></td>
         </tr>
		 <tr>
           <td><label for="eduDetail"><b>Educational Detail : </b></label></td>
           <td><input name="eduDetail"  id="i" value="<?php echo $EduDetail;?>" type="text" readonly></td>
         </tr>
		 <tr>
           <td><label for="ugra"><b>Under Graduate : </b></label></td>
           <td><input name="ugraduate"  id="j" value="<?php echo $Undergrade;?>" type="text" readonly></td>
         </tr>
		 <tr>
           <td><label for="pgra"><b>Post Graduate : </b></label></td>
           <td><input name="pgraduate"  id="k" value="<?php echo $PostGrade;?>" type="text" readonly></td>
         </tr>
		 <tr>
           <td><label for="cs"><b>Current Status : </b></label></td>
           <td><input name="status" id="l" value="<?php echo $Status;?>" type="text" readonly></td>
         </tr>
		 <tr>
           <td><label for="skill"><b>Skills : </b></label></td>
           <td><input name="skills" id="m" value="<?php echo $Skill;?>" type="text" readonly></td>
         </tr>
		 <tr>
           <td><label for="ach"><b>Achievements : </b></label></td>
           <td><input name="achievement" id="n" value="<?php echo $Achiv;?>" type="text" readonly></td>
         </tr>
		 <tr>
           <td><label for="wexp"><b>Working Experience : </b></label></td>
           <td><input name="wexp" id="o" value="<?php echo $work;?>" type="text" readonly></td>
         </tr>
		 <tr>
           <td><label for="avltym"><b>Available Time : </b></label></td>
           <td><input name="atime" id="p" value="<?php echo $avail;?>" type="text" readonly></td>
         </tr>
	     <br/>
	     
         <tr>
		    <td></td>
			<td><input name="sbt" onclick="" value="Submit" type="submit"></td>
           
         </tr>
         </table>
	   </Form>
	 </div>
	
  </div>

     
  <div class="column2">
	  
	     <a href="unset.php" class="button">Logout</a>
		 
		<span><font size="6" color="black">Posts</font></span><hr/>
		<?php 
			include_once 'postSeeker.php';
		?>
		

  </div>
 </div>

</body>
</html>
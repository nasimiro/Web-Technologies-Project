<html>
<head>
<title>Profile (Job Provider)</title>


<script type="text/javascript">

function empty()
{
 document.getElementById("a").readOnly = false;
 document.getElementById("c").readOnly = false;
 document.getElementById("d").readOnly = false;
 document.getElementById("f").readOnly = false;
 document.getElementById("g").readOnly = false;
 document.getElementById("h").readOnly = false;
 
}

/*function update()
{
	$comName=document.getElementById("a").value;
	$comEmail=document.getElementById("b").value;
	$comLocation=document.getElementById("c").value;
	$Uid=document.getElementById("d").value;
	$Cid=document.getElementById("e").value;
	$Cphnno=document.getElementById("f").value;
	$Ctype=document.getElementById("g").value;
	$Cweb=document.getElementById("h").value;

}*/
 /*function unset(){
		  <?php
		  unset($_SESSION['Email']);
          unset($_SESSION['Pass']);
          unset($_SESSION["accType"]);
		  $_SESSION["x"]=0;
          //header("Location: signin.html");
		  ?>
	  } */

</script>
<style>
* {
    box-sizing: border-box;
}

body {
  margin: 0;
   background-image: url("homePic8.png");
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

.row:after {
    content: "";
    display: table;
    clear: both;
}

.post {
    height: 500px;
    width: 100%;
    padding: 15px;
	background-color:#417E7E  ;
}
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
    border-radius: 5px;
    background-color:#E2E7E6  ;
    padding: 20px;
	
}

.info {
    margin: ;
    width: 100%;
    border-radius: 5px;
    background-color:;
    padding: 20px;
	
}
input[type=text], select {
    width: 80%;
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
    border: 1px solid black;
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
    session_start();
	if(isset($_POST["sbt"])){
		
	$conn = mysqli_connect("localhost", "root", "","careerbd_db");
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
     }
	else{
		$email=$_SESSION["Email"];
		$pass=$_SESSION["Pass"];
		
		$sql="update jobtabel set UserID='".$_POST["userId"]."',CName='".$_POST["cname"]."',Location='".$_POST["loc"]."',cPhnNo='".$_POST["cPhnNo"]."',cType='".$_POST["cType"]."',cWeb='".$_POST["cWeb"]."' where Email='$email' and Pass='$pass'";
        $result = mysqli_query($conn,$sql)or die(mysqli_error());
		if($result)
		{
			header("Location:profileJobProvider.php");
		}
	}
}
	?>

<p class="dashed">
<div class="header">
    <img src="icon4.png" width="70px" height="60px"/>
    <span><font size="11" color="white">CareerBD</font> <font size="5" color="white">, Largest Online Job Portal in Bangladesh <br/></font></span>
    <span> <br/><hr/> </span>

</div>
</p>



<div class="row">

   <div class="column">
      <!-- <div class="picup">
        <img src="fileToUpload" width="250px" height="200"/><br/> 
          Select file to upload : <input type="file" name="fileToUpload">
		<input type="submit" value="Upload File" name="submit">
		
      </div> -->

     <div class="info">
	 
	 <?php

      
      require_once("providerBackend.php");  

	  ?>
	  
	  
	     <input class="button" onclick="return empty();" type="button" value="Update Info">
		 
		<Form action="#"  method="POST" enctype="multipart/form-data" name ="fm">
	     <table  align ="center" style= "width:100%">
      
	     <tr>
           <td><label for="cname"><b>Company Name : </b></label></td>
           <td><input name="cname" id="a" value="<?php echo $comName;?>" type="text" readOnly ></td>
         </tr>
	     <tr>
           <td><label for="cmail"><b>Company Email : </b></label></td>
           <td><input name="cmail" id="b" value="<?php echo $emailno;?>" type="text" readOnly></td>
         </tr>
	     <tr>
           <td><label for="cloc"><b>Location: </b></label></td>
           <td><input name="loc" id="c" value="<?php echo $loc;?>" type="text" readOnly></td>
         </tr>
	     <br/>
	     <tr>
            <td><label for="userId"><b>User Id : </b></label></td>
            <td><input name="userId" id="d" value="<?php echo $uid;?>" type="text" readOnly></td>
         </tr>
	     <tr>
            <td><label for="cId"><b>Company Id : </b></label></td>
            <td><input name="cId" id="e" value="<?php echo $cid;?>" type="text" readOnly></td>
         </tr>
		 <tr>
            <td><label for="cPhnNo"><b>Company Phone No. : </b></label></td>
            <td><input name="cPhnNo" id="f" value="<?php echo $cphn;?>" type="text" readOnly></td>
         </tr>
		 <tr>
            <td><label for="cType"><b>Company Type : </b></label></td>
            <td><input name="cType" id="g" value="<?php echo $ctype;?>" type="text" readOnly></td>
         </tr>
		 <tr>
            <td><label for="cWeb"><b>Company Website : </b></label></td>
            <td><input name="cWeb" id="h" value="<?php echo $cweb;?>" type="text" readOnly></td>
         </tr>
         <tr>
		    <td></td>
			<td><input name="sbt" value="Submit" type="submit"></td>
           
         </tr>
        </table>
	</Form>
		 
	 </div>
	
  </div>
  
  
   <div class="column2">
	     <a href="unset.php" class="button">Logout</a>

	   <div class="post">
	       <span><font size="6" color="black">Create Post</font></span><hr/>
		   <form action="postBack.php" method="post">
		 <table  align ="center" style=  "width:100%">
      
	     <tr>
           <td><label for="jobdes"><b>Designation : </b></label></td>
           <td><input name="designation"  type="text"></td>
         </tr>
	     <tr>
           <td><label for="exp"><b>Experience : </b></label></td>
           <td><input name="exp" type="text"></td>
         </tr>
	     <tr>
           <td><label for="qul"><b>Qualification : </b></label></td>
           <td><input name="qul" type="text"></td>
         </tr>
	     <br/>
	     <tr>
            <td><label for="sal"><b>Salary : </b></label></td>
            <td><input name="sal" type="text"></td>
         </tr>
	     <tr>
            <td><label for="cname"><b>Requirements : </b></label></td>
            <td><input name="req" type="text"></td>
         </tr>
		 <tr>
            <td><label for="email"><b>Email : </b></label></td>
            <td><input name="email" type="text"></td>
         </tr>
         </table>
           <span>   
            <input name="sbt" value="Post" type="submit" style="float: right;" >
	       </span>
		   </form>
	    </div>
		<br/>
		<br/>
		<hr/>
		<span><font size="6" color="black">Posts</font></span><hr/>
		<?php 
			include_once 'post2Backend.php';
		?>
</div>

</body>
</html>


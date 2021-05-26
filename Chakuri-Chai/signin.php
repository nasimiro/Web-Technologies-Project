<html>
<head>
<script type="text/javascript">
function validate(){
	
	var flag=true;
	
	a=document.getElementById("msg1");
	b=document.getElementById("msg2");
	c=document.getElementById("msg3");

	if(document.fm.userEmail.value.length==0){
		document.fm.userEmail.focus();
		a.style.color="red";
		a.innerHTML="Enter Email";
		flag=false;
	}
	if(document.fm.pass.value.length==0){
		document.fm.pass.focus();
		b.style.color="red";
		b.innerHTML="Enter password";
		flag=false;
	}
	if(document.fm.accType.value==-1){
		document.fm.accType.focus();
		c.style.color="red";
		c.innerHTML="Enter Type";
		flag=false;
	}
	
	return flag;
	
}

function abc(m)
{
//alert(m);
document.getElementById(m).innerHTML="";
}



</script>
</head>

<style>
.button {
    background-color: #417E7E ;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=password], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 50%;
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

div {
    margin: auto;
    width: 360px;
    height: 480px;
    border-radius: 5px;
    background-color:#f2f2f2;
    box-sizing: border-box;
    padding: 70px 30px;
}



body {
    background-image: url("homePic7.jpg");
	background-repeat: no-repeat;
    background-size: cover;
}
a:link {
    color: blue;
	text-decoration: none;
}
a:visited {
    color: black;
	text-decoration: none;
}
a:hover {
    color: blue;
	text-decoration: underline;
}
a:active {
    color: blue;
}


</style>
<body>
     <span> <img src="icon4.png" width="60px" height="60"/> </span>
	 <span><font size="11" color="black">Chakuri-Chai</font> <font size="5" color="Black">, Largest Online Job Portal in Bangladesh <br/></font></span>
     <span> <br/> <a href="home.html" class="button">Home</a> <br/><br/> </span>
<div >
 <form action="signUp_validation.php" method="POST" enctype="multipart/form-data" name="fm">
 
  <table  align ="center" style=  "width:100%">
    <tr>
      <td><label for="user"><b>Email : </b></label></td>
      <td><input name="userEmail" type="text" onfocus="abc('msg1')" placeholder="Email Id "></td>
	  <td><span id="msg1"></span> <br/> <td>
    </tr>
    <tr>
       <td><label for="pass"><b>Password : </b></label></td>
       <td><input name="pass" type="password" onfocus="abc('msg2')" placeholder="Password "></td>
	   <td><span id="msg2"></span> <br/></td>
    </tr>
	<?php 
		
		if(isset($_GET["id"]) && $_GET["id"]==1)
		{
			echo "Invalid UserName or Password";
		}
		
	?>
	
</table>

       
          <Input type="submit" onclick="return validate();" value="Sign-in" name="sbt"/><br/>
		  <span> <font size="3" color="Black">OR</font><br/>
		  <b><a href="http://mail.google.com" target="_blank">Sign-in with GMAIL</a></b>
      

  </form>
</div>

</body>
</html>
<?php
$conn = mysqli_connect("localhost", "root", "","careerbd_db");
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
     }
	else{
		$email=$_SESSION["Email"];
		//$pass=$_SESSION["Pass"];

		$sql="select * from posttable where DeleteID=1 and Email='$email'";
        $result = mysqli_query($conn,$sql);
		if ($result->num_rows > 0){
		while($row = mysqli_fetch_assoc($result)) { 
		 
          $designation=$row["Designation"];
		  $exp=$row["Experience"];
		  $qul=$row["Qualification"];
		  $sal=$row["Salary"];
		  $req=$row["Requirements"];
		  $email=$row["Email"];
		  $id=$row["postId"];
		  ?>
			
	    <div class="postCount">
	      <Form action="#"  method="POST" enctype="multipart/form-data" name ="fm">
		 <table  align ="center" style=  "width:100%">
      
	     <tr>
           <td><label for="jobdes"><b>Designation : </b></label></td>
           <td><input name="designation" value="<?php echo $designation;?>"type="text" readOnly></td>
         </tr>
	     <tr>
           <td><label for="exp"><b>Experience : </b></label></td>
           <td><input name="exp"  value="<?php echo $exp;?>"type="text" readOnly></td>
         </tr>
	     <tr>
           <td><label for="qul"><b>Qualification : </b></label></td>
           <td><input name="qul"  value="<?php echo $qul;?>" type="text" readOnly></td>
         </tr>
	     <br/>
	     <tr>
            <td><label for="sal"><b>Salary : </b></label></td>
            <td><input name="sal" value="<?php echo $sal;?>" type="text" readOnly></td>
         </tr>
	     <tr>
            <td><label for="cname"><b>Requirements : </b></label></td>
            <td><input name="req"  value="<?php echo $req;?>" type="text" readOnly></td>
         </tr>
		 <tr>
            <td><label for="email"><b>Email : </b></label></td>
            <td><input name="email"  value="<?php echo $email;?>" type="text" readOnly></td>
         </tr>
		 <tr>
            <td></td>
            <td><a href="postDelete.php?postID=<?php echo $id; ?>">Delete</a></td>
			<!-- <button name="dlt" id="dl" onClick="" style="float: right; cursor: pointer;" ><img width="25px" height="25px" src="delete3.png" /></button> -->
			
			<!--<button id="dlt" onClick="" style="float: right; cursor: pointer;" ><img width="25px" height="25px" src="delete3.png" /></button> </td> -->
			
         </tr>
         </table>
		 </Form>
		       
		</div>
		
		<br/><br/>
			
		  <?php
		
		}
	}
}


mysqli_close($conn);
		 
?>
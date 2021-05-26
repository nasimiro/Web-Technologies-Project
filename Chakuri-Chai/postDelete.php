<?php
$conn = mysqli_connect("localhost", "root", "","careerbd_db");
    if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
     }
	else{
		
		if(!isset($_GET["postID"])){
			header("Location:profileJobProvider.php?errorID=1");
			return;
		}

		$sqll="update posttable set DeleteID=2 where postId='".$_GET["postID"]."'";
        $resultt = mysqli_query($conn,$sqll)or die(mysqli_error());
		header("Location:profileJobProvider.php");
	}
?>
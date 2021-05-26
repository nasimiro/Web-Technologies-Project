
<?php


if((isset($_POST["idcheck"])) && $_POST["idcheck"] !="" )
    {
            require("fetch.php");
            $sql="select * from jobtabel where cType='".$_POST["idcheck"]."'";
            $a=getDataFromDB($sql);

			foreach($a as $v){
		echo "<p>Name= ".$v["CName"]." ,, Location= " .$v["Location"]." </p>";
	}

       
    }


?>

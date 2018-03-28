<?php

  include("database.php");
   session_start();
   if(isset($_POST['request'])){
    
    $bldgrp=$_POST['bldgrp'];
    $requirement=$_POST['requirement'];
   $hospital_id = $_POST['hospital_id'];
    $user_id = $_SESSION['user_id'];

      
				
	   $query = "insert into user_request(No_of_units,bldgrp, user_id, hospital_id) values('$requirement','$bldgrp', '$user_id', '$hospital_id')";
  	$query_run = mysqli_query($con,$query);
	  if($query_run)
  	{
			header( "Location: user.php");
    }
    else{
    	echo "failed";
    }

}

?>


<?php

  include("database.php");
   session_start();
   if(isset($_POST['assign'])){

    $id = $_POST['id'];
    $status = $_POST['status'];

     if($status=='0')
     {
		            $query=	"UPDATE user_request SET status='1' where id=$id and status=$status";
	   
  	            $query_run = mysqli_query($con,$query);
	              if($query_run)
  	              { 
			               header( "Location: hospital.php");
                  }
    }

    else if($status=='1'){
    	$query2=  "UPDATE user_request SET status='2' where id=$id and status=$status";
     
    $query_run2 = mysqli_query($con,$query2);
    if($query_run2)
    { 
      header( "Location: hospital.php");
    }
    }

    else if($status=='2'){
      $query3=  "UPDATE user_request SET status='3' where id=$id and status=$status";
     
    $query_run3 = mysqli_query($con,$query3);
    if($query_run3)
    { 
      header( "Location: hospital.php");
    }
    }

    

    else{
      $query4= "UPDATE user_request SET status='0' where id=$id and status=$status";
     
                $query_run4 = mysqli_query($con,$query4);
                if($query_run4)
                  { 
                     header( "Location: hospital.php");
                  }
    }

}

?>

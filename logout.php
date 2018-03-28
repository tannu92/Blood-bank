<?php

 
  session_start();
   if(isset($_SESSION['username']) || isset($_SESSION['hospitalname'])){
   	
    unset($_SESSION['username']);
    unset($_SESSION['hospitalname']);
}
header("location:index.php");
?>
  
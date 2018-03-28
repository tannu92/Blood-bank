<?php

  $url='localhost';
  $username='root';
  $password='password';

  $con = mysqli_connect('127.0.0.1', 'root', 'password');
  mysqli_select_db($con, 'bloodbank') or die(mysqli_error($con));

  if(!$con){
    die('Could not Connect My Sql:' .mysql_error());
  }
?>








<?php

  include("database.php");
   session_start();

   if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $type=$_POST['type'];
 // $email = "tannu92@outlook.com";
  // $password = "123";
  // select * from users where email='tannu92@outlook.com' and password='123';
    if($type=='user'){
    $sql = "select * from users where email='$email' and password='$password'";
    $query_run= mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($query_run))
    {
        if($row['email']==$email && $row['password']==$password){
          
          session_regenerate_id();
          $_SESSION['user_id'] = $row['user_id'];
          $_SESSION['username'] = $row['name'];
       
        
          session_write_close();

 
          header('Location: user.php');
  }
  else{
   echo "invalid user";
  
  
  
 }
}
}
else{
  $s = "select * from hospitals where email='$email' and password='$password'";
    $query= mysqli_query($con,$s);
    while($row = mysqli_fetch_assoc($query))
    {
        if($row['email']==$email && $row['password']==$password){
          
          session_regenerate_id();
          $_SESSION['hospital_id'] = $row['hospital_id'];
          $_SESSION['hospitalname'] = $row['name'];
       
        
          session_write_close();

 
          header('Location: hospital.php');
          echo "$type";
  }
  else{
   echo "invalid user";
  
  
  
 }
}

}
}

 
  
  


?>

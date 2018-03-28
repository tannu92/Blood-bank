<?php

session_start();
require_once('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blood Bank</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <style>
  @font-face {
    font-family: blood-bold;
    src: url(fonts/source-sans-pro.bold.ttf);
}

@font-face {
    font-family: blood-semibold;
    src: url(fonts/source-sans-pro.semibold.ttf);
}
@font-face {
    font-family: blood-regular;
    src: url(fonts/source-sans-pro.regular.ttf);
}
  .container {
    padding: 40px 60px;
 }



  .blood{
    border:4px solid #EC3356;
    padding: 5px 5px;
    color:#EC3356;
    border-radius: 10px;
    background-color: #fff;
    font-size: 18px;
    font-weight: 2;
  }
  .blood:hover{
    color: #EC3356;
    background-color:#fff;
    border: 4px solid #EC3356;
 
  }
  .login{
    padding: 15px 60px;

    color: #fff;
    background-color:#EC3356;
    border-radius: 10px;
    font-size: 16px;
    box-shadow: 0px 5px 15px 0px rgba(0,0,0,0.1);
    font-family:blood-regular;
  }
  .login:hover,.login:focus{
   
    color: #fff;
    background-color:#EC3356;
    border: 2px solid #EC3356;
 
  }
  
  .signup{
    padding: 15px 60px;

    color: #fff;
    background-color:#EC3356;
    border-radius: 10px;
    font-size: 16px;
    box-shadow: 0px 5px 15px 0px rgba(0,0,0,0.1);
    font-family:blood-regular;
  }
  .signup:hover,.signup:focus{
    color: #fff;
    background-color:#EC3356;
    border: 2px solid #EC3356;
  }
  .bld_availability_btn{
    padding: 15px 25px;
    margin-top: 130px;
    color: #fff;
    background-color:#EC3356;
    border-radius: 10px;
    font-size: 16px;
    box-shadow: 0px 5px 15px 0px rgba(0,0,0,0.1);
    font-family:blood-regular;

  }
  .bld_availability_btn:hover,.bld_availability_btn:focus{
    color: #fff;
    background-color:#EC3356;
    border: 2px solid #EC3356;
  }
.logo{
  width: 30px;
  height: 30px;
}
h1{
  font-family: blood-bold;
  font-size: 36px;
}
h2{
  font-family: blood-semibold;
  font-size: 26px;
}
h4{
  font-size: 18px;
  color:  #778899;
   font-family: blood-regular;
   margin-left: 27px;
}
p{
  color: #EC3356;
  font-family: blood-bold;
  font-size: 14px;

}

.login_div{
  display: none; 
    position: fixed; 
    z-index: 1; 
    right:90px;
    top: 30px;
    width: 350px; 
    height: 570px;
    overflow: auto; 
    background-color: #fff; 
    padding: 0px 0px 150px 15px;
    overflow: hidden;
    box-shadow: 0px 5px 15px 0px rgba(0,0,0,0.1);
}

  .col-sm-12
  {
    padding:10px 30px 20px 20px;
  }

.slope{
  width: 120%;
  height: 400px;
  background-color: #EC3356;
  overflow: hidden;
  transform: rotate(18deg);
  margin-top: -250px;


}
.login_heading{
  margin-top: 300px;
  color: #fff;
  transform: rotate(-18deg);
}

.modal-header{
    background-color: #EC3356;
    border-bottom-right-radius: 70%;
}

.modal-header, .modal-body {
    padding: 40px 60px;
}
.modal-title,.close
{
  color: #fff;
  font-family: blood-bold;
  font-size: 30px;
}
.dropdown-div{
  box-shadow:  box-shadow: 0px 5px 15px 0px rgba(0,0,0,0.1);
  margin: 10px 10px;
}

.dropdown-menu{
  box-shadow:  box-shadow: 0px 5px 15px 0px rgba(0,0,0,0.1);
  margin: 10px 5px;
}
.dropdown-menu li a{
  font-size: 16px;
  font-family: blood-bold;

}
.dropdown-menu li a:hover{
  color: #EC3356;
  background-color: #fff;
}


    </style>
</head>

<body>
  <div class="container">
    <div class="row">

       <div class="col-sm-10">
       <button type="button" class="btn btn-default blood "><b>Blood Bank</b></button>
       <br>
       <br>
       <h1><b>Easiest way to find blood.</b></h1>
       <br><br>

       <h2><img class="logo" src="images/dollar.jpg"><b>Largest blood banks community</b></h2>
       <h4>11000+ donors community</h4>
       <h2><img class="logo" src="images/clock.jpg"><b> ISO 9001 certified hospitals</b></h2>
       <h4>Best safety methods used</h4>
       <h2><img class="logo" src="images/images.jpg"><b>Charge a life</b></h2>
       <h4>Save lives by becoming s donor</h4>
       <br>
       <br>


       <div class="dropdown ">
            <button type="button" class="btn btn-default dropdown-toggle signup " data-toggle="dropdown"><b>SIGN UP -></b></button>
            <ul class="dropdown-menu">
                <li><a href="#myModal2" data-toggle="modal" data-backdrop="false">User</a></li>
                <li class="divider"></li>
                <li><a href="#myModal" data-toggle="modal" data-backdrop="true">Hospital</a></li>
            </ul>

      </div>

      <?php
      include "hospital_signup.php"
      ?>
  

      
      <?php
      include "user_signup.php"
      ?>
  

       <br>
       <br>
       <p>Be a hero- Donate</p>




  </div>


       <div class="col-sm-2  ">

           <div class="dropdown ">
              <button type="button" class="btn btn-default dropdown-toggle login " data-toggle="dropdown"><b>LOGIN</b></button>
              <ul class="dropdown-menu">
                 <li id="user"><a href="#" ><b>User</b></a></li>
                 <li class="divider"></li>
                 <li id="hospital"><a href="#" >Hospital</a></li>
              </ul>
            </div>
          

            <a href="available_bld.php"><button type="button" class="btn btn-default bld_availability_btn "><b>Blood Availability</b></button></a>


      </div>





    <div class="col-sm-4 login_div" id="login_container">
        <div class="row">
          <div class="col-sm-12 slope  text-center">
             <h1 class="login_heading">Login</h1>
          </div>
          </div>

        <br>
        <br>


        <div class="row">

           <div class="col-sm-12">

                <form method="POST" action="login.php">
                    <div class="form-group">
                    <input type="hidden" class="form-control" id="user_type" name="type">
                    </div>

                      <div class="form-group">
                           <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                      </div>
                      <br>

                      <div class="form-group">

                           <input type="password" class="form-control" name="password" placeholder="Password" required>
                      </div>

                      <br>
                      <br>
                      <input type="submit" name="submit" value="Login" class=" login ">
                </form>
             </div>
         </div>


</div>





<script>
var modal = document.getElementById('login_container');


// Get the button that opens the modal
var btn = document.getElementById("user");
var btn2 = document.getElementById("hospital");

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
    var type= document.getElementById('user_type').value="user";
   
    
}
btn2.onclick = function() {
    modal.style.display = "block";
    var type= document.getElementById('user_type').value="hospital";
    
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) 
    {
        modal.style.display = "none";
    }
}




</script>




</body>
</html>

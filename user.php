
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
    padding: 40px 100px;
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
  .user_name{
    padding: 15px 30px;
    color: #fff;
    background-color:#EC3356;
    border-radius: 10px;
    font-size: 16px;
    box-shadow: 0px 5px 15px 0px rgba(0,0,0,0.1);
    font-family:blood-regular;
  }
  .user_name:hover,.user_name:focus{
    color: #fff;
    background-color:#EC3356;
    border: 2px solid #EC3356;
  }

  .dropdown-menu{
    box-shadow:  box-shadow: 0px 5px 15px 0px rgba(0,0,0,0.5);
    margin: 10px -5px;
  }
  .dropdown-menu li a{
    font-size: 14px;
    font-family: blood-bold;
  }

  .dropdown-menu li a:hover{
    color: #EC3356;
    background-color: #fff;
  }
  .dropdown {
    position: relative;
    display: block;
  }

  .request_div{
  border-radius: 10px;
  overflow: scroll;
  padding: 10px 10px 10px 20px;
  width: 100%;
  height: 400px;
  box-shadow: 0px 5px 15px 0px rgba(0,0,0,0.2);
  }

 th, td {
  font-family: blood-bold;
  font-size: 16px;
  text-align: left;
  border-top: none !important; 
  border-bottom: none !important;
}

.request{
  padding: 5px 25px;
  color: #fff;
  background-color:#b3b3b3;
  border-radius: 5px;
  font-size: 14px;
  margin-right: 0px;
  font-family:blood-regular;

}
h3{
  margin-top: 150px;
  font-size: 22px;
  font-family: blood-bold;
}
.available_blood_div{
  border-radius: 10px;
  width: 100%;
  height: 300px;
   box-shadow: 0px 5px 15px 0px rgba(0,0,0,0.1);
   

}
.update{
  padding: 5px 25px 5px 10px;
    color: #000;
    background-color: #f2f2f2;
    font-size: 14px;
    font-family:blood-bold;
    margin-top: 70px;
    margin-left: 20px;
}
p{
  color: #EC3356;
  font-family: blood-bold;
  font-size: 14px;

}
.logout_btn{
  border: none;
  font-family:blood-bold;
  font-size: 14px;

}
.logout_btn:hover{
  background-color: #fff;
  color: #EC3356;
  
}

    </style>
</head>

<body>
  <div class="container">
       <div class="row">
             <div class="col-sm-10">
                  <a href="C:\xampp\htdocs\blood project\index.html"><button type="button" class="btn btn-default blood "><b>Blood Bank</b></button></a>
                  <br>
                  <br>
                  <h1><b>Request Blood</b></h1>
                  <br>
                  <div class="request_div">
                    <div class="table-responsive"> 

                    <table class="table">
    <thead>
      <tr class="first_col">
        <th>Hospital Name</th>
        <th>Selest Blood Group</th>
        <th>Requirement</th>
      </tr>
    </thead>

    <tbody>

<?php
    
      $dataRow = "";
      
      $query = "select hospital_id, name from hospitals";
      $query_run = mysqli_query($con,$query);
    
      while($row2 = mysqli_fetch_array($query_run))
      {


        $button = "<td><button type=\"submit\" class=\"btn btn-default assign \" name=\"request\" id=\"req\" >Request</button></td>";
        $dataRow = $dataRow."<tr><form action=\"requests.php\" method=\"post\">
         <input type=\"hidden\" name=\"hospital_id\" value=$row2[0]>
        



        <td>$row2[1]</td>
                <td> 
                  <div class=\"form-group\">
                     <select class=\"form-control\" name=\"bldgrp\" placeholder=\"blood grp\" required>
                        <option>A-</option>
                        <option>A+</option>
                        <option>AB-</option>
                        <option>AB+</option>
                        <option>B-</option>
                        <option>B+</option>
                        <option>O-</option>
                        <option>O+</option>
                      </select>
                  </div>
                </td>
              <td><input type=\"number\" class=\"form-control\" name=\"requirement\" placeholder=\"units\" required></td>$button</form></tr>";  
      }
      echo $dataRow;

 ?> 
      
     
    </tbody>
  </table>

  
</div>
</div>
        <br>
        <p>Be a hero- Donate</p>

</div>
        <div class="col-sm-2">
             <div class="dropdown ">
                  <button type="button"  class="btn btn-default dropdown-toggle user_name " data-toggle="dropdown"><b>
                  <?php 
                  echo $_SESSION['username'];
                  ?>
                  </b><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                     <li><a href="#">Help</a></li>
                     <li class="divider"></li>
                     <li>
                      <form action="logout.php" method="POST">
                      <button type="submit"  class="btn btn-default logout_btn" name="logout">Logout</button></form></li
                     
                    
                  </ul>
               </div>

          </div>
    </div>


</div>


<script>
var request = document.getElementById("req");



// When the user clicks on the button, open the modal
request.onclick = function() {
   alert "Requested  successfullyy";
    
   
    
}



</script>

     





</body>
</html>
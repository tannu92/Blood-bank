
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
    padding: 40px 20px;
   }
   .col-sm-4{
    padding: 5px 20px;
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
  .hospital_name{
    padding: 15px 30px;
    color: #fff;
    background-color:#EC3356;
    border-radius: 10px;
    margin-left: 100px;
    font-size: 16px;
    box-shadow: 0px 5px 15px 0px rgba(0,0,0,0.1);
    font-family:blood-regular;
  }
  .hospital_name:hover,.hospital_name:focus{
    color: #fff;
    background-color:#EC3356;
    border: 2px solid #EC3356;
  }

  .dropdown-menu{
  box-shadow:  box-shadow: 0px 5px 15px 0px rgba(0,0,0,0.5);
  margin: 10px 70px;
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
.assign{
  padding: 5px 25px;
  color: #fff;
  background-color:#b3b3b3;
  border-radius: 5px;
  font-size: 14px;
  font-family:blood-regular;

}
h3{
  margin-top: 150px;
  font-size: 22px;
  font-family: blood-bold;
}
.available_blood_div{
  border-radius: 10px;
  padding: 20px 20px;
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
  margin-top: -20px;
  margin-left: 10px;
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
             <div class="col-sm-8">
                  <a href="C:\xampp\htdocs\blood project\index.html"><button type="button" class="btn btn-default blood "><b>Blood Bank</b></button></a>
                  <br>
                  <br>
                  <h1><b>Requests</b></h1>
                  <br>
                  <div class="request_div">
                    <div class="table-responsive">
                      
    <table class="table">
    <thead>
      <tr class="first_col">
        <th>Name</th>
        <th>Blood group</th>
        <th>Requirement</th>
      </tr>
    </thead>
    <tbody>
      
<?php
    
      $dataRow = "";
      $hospital_id = $_SESSION['hospital_id'];
      $query = "select user_request.*,users.name from user_request inner join users on users.user_id = user_request.user_id where user_request.hospital_id=$hospital_id";
      $query_run = mysqli_query($con,$query);

      while($row2 = mysqli_fetch_array($query_run))
    {

          $status_value = $row2[4];
          $button_text = "Assign";

          if($status_value == 1){
            $button_text = "Accepted";
          }
          else if($status_value == 2){
            $button_text = "Rejected";
          }
          else if($status_value == 3){
            $button_text = "Delivered";

          }

          $button = "<td><button type=\"submit\" name=\"assign\" class=\"btn btn-default assign\">$button_text</button></td>";
         $dataRow = $dataRow."<tr><form action=\"assign.php\" method=\"post\"><td>$row2[6]</td>
         <input type=\"hidden\" name=\"id\" value=$row2[5]>
          <input type=\"hidden\" name=\"status\" value=$row2[4]>
                    <td>$row2[3]</td><td>$row2[2]</td>$button</form></tr>";


                    


                    
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

      <div class="col-sm-4">
           <div class="dropdown ">
               <button type="button"  class="btn btn-default dropdown-toggle hospital_name " data-toggle="dropdown"><b>
              <?php 
              
              echo $_SESSION['hospitalname'];
            
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


     <h3>Availability</h3>

      <div class="available_blood_div ">

            <table class="table ">
              <thead>
      <tr class="first_col">
        
        <th>Blood Group</th>
        <th>Quantity</th>
        <th>Till date</th>
      </tr>
    </thead>

<tbody>


<?php
    
      $data = "";
       $hospital_id =$_SESSION['hospital_id'];
     
      $q = "select * from available_blood where hospital_id=$hospital_id"; 
     
       
      $sql = mysqli_query($con,$q);
    
      while($row = mysqli_fetch_array($sql))
      {


        
        $data = $data."<tr>
         <input type=\"hidden\" name=\"hospital_id\" value=$row[3]>
        
                <td> $row[1] </td>
                  
                
                <td> $row[2] </td>

                <td> $row[4] </td>
                  
                

               
              </tr>";
      }
      echo $data;

 ?> 
  </tbody>
</table>
 <a href="addblood.php"><button type="button" class="btn btn-default update">UPDATE -></button></a>
      
   


               
     
   </div>
      
 </div>
</div>
</div>





</body>
</html>

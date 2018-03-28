<?php
session_start();

  include("database.php");
   
   if(isset($_POST['update_button'])){
    
    
    $bldgrp=$_POST['bldgrp'];
    $requirement=$_POST['requirement'];
    $date=$_POST['date'];
  $hospital_id = $_SESSION['hospital_id'];
   
      
				
	   $query = "insert into available_blood(quantity,bldgrp, hospital_id,date) values('$requirement','$bldgrp', '$hospital_id','$date')";
  	$query_run = mysqli_query($con,$query);
	  if($query_run)
  	{
			header( "Location: hospital.php");
    }
    else{
    	echo "failed";
    }

}

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

p{
  color: #EC3356;
  font-family: blood-bold;
  font-size: 14px;

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
                  <h1><b>Add Blood</b></h1>
                  <br>
                  <div class="request_div">
                    <div class="table-responsive">
                      
    <table class="table">
    
<thead>
      <tr class="first_col">
        
        <th>Blood Group</th>
        <th>Quantity</th>
        <th>Till date</th>
      </tr>
    </thead>

    <tbody>
      <form action="addblood.php" method="POST">

<tr>
  
                <td> 
                  <div class="form-group">
                     <select class="form-control" name="bldgrp" required>
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

              <td><input type="number" class="form-control" name="requirement" placeholder="units" required></td>
              <td><input type="date" class="form-control" name="date" required></td>
              <td><button type="submit" name="update_button" class="btn btn-default" >Update</button></td>

              </tr></form>
      
      
      
     
    </tbody>

      
  </table>








                    
   


</div>
</div>
        <br>
        <p>Be a hero- Donate</p>  

</div>

      
   </div>
      
 </div>
</div>
</div>





</body>
</html>

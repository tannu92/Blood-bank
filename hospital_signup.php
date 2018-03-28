<!-- Modal -->

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
         <div class="modal-content">

             <div class="modal-header text-center">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">HOSPITAL SIGNUP</h4>
             </div>

        <div class="modal-body">
             <form action="hospital_signup.php" method="POST">
             
               <div class="form-group">

                   <input type="text" class="form-control" name="name" placeholder="Hospital name" required>
                </div>

                <div class="form-group">

                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="form-group">

                   <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>

                <div class="form-group">

                  <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" required>
                </div>


                <div class="form-group">

                  <input type="number" class="form-control"  placeholder="Mobile No" required>

                </div>


                <div class="form-group">

                    <textarea class="form-control"  name="address" placeholder="address" rows="2" required></textarea>

                </div>

                <div class="form-group">

                    <input type="text" class="form-control" name="city" placeholder="city"required>
                </div>

         </div>

         <div class="modal-footer">
                <button type="submit" name="hosp_submit" class="btn btn-primary">Submit</buuton>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>

    </div>
  </div>


  <?php

      require_once('database.php');
       session_start();
  

      if(isset($_POST['hosp_submit']))
      {
        $Hospitalname=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        $address=$_POST['address'];
        
        
        if($password==$cpassword)
        {
          $query = "select * from hospitals where name='$Hospitalname'";
          
          $query_run = mysqli_query($con,$query);
        //echo mysql_num_rows($query_run);

          if($query_run)
          {
             if(mysqli_num_rows($query_run)>0)
             {
              echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
             }
             else
              {
              $query = "insert into hospitals(name,email,password,address) values('$Hospitalname','$email','$password','$address')";
              $query_run = mysqli_query($con,$query);

                if($query_run)
                {
                  echo '<script type="text/javascript">alert("Registered successfully.. Login to continue")</script>';

                  $_SESSION['hospitalname'] = $Hospitalname;
                  $_SESSION['password'] = $password;
                  $_SESSION['email'] = $email;
                  header( "Location: hospital.php");

                

                }
                else
                {
                  echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
                }
              }
          }

          else
          {
            echo '<script type="text/javascript">alert("DB error")</script>';
          }
        }
          else
        {
          echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
        }
        
      }

      
    ?>



 <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">USER SIGNUP</h4>
        </div>

        <div class="modal-body">
           <form action="action.php" method="POST">
            


               <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Full Name" required>
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

                 <select class="form-control" name="gender" required>
                      <option>Male</option>
                      <option>Female</option>
                 </select>
                </div>


                <div class="form-group">
                     <select class="form-control" name="bldgrp" placeholder="blood grp" required>
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

               <div class="form-group">

                    <input type="date" class="form-control" name="dob" required>
               </div>

               <div class="form-group">

                    <input type="number" class="form-control"  placeholder="weight" required>
               </div>

              <div class="form-group">

                    <textarea class="form-control" name="address" placeholder="address" rows="2" required></textarea>

              </div>

              <div class="form-group">

                   <input type="text" class="form-control" placeholder="city"required>
              </div>

      </div>

      <div class="modal-footer">
           <button type="submit" name="submit" class="btn btn-primary">Submit</button>
           
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           </form>
      </div>
      </div>
      

    </div>
  </div>


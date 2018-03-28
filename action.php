
<?php

	session_start();
	require_once('database.php');
	//phpinfo();

			if(isset($_POST['submit']))
			{
				@$username=$_POST['name'];
				@$email=$_POST['email'];
				@$password=$_POST['password'];
				@$cpassword=$_POST['cpassword'];
				@$gender=$_POST['gender'];
				@$bloodgrp=$_POST['bloodgrp'];
				@$dob=$_POST['dob'];
				
				
				if($password==$cpassword)
				{
					$query = "select * from users where name='$username'";
					
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
							$query = "insert into users(name,email,password,gender,bloodgrp,date_of_birth) values('$username','$email','$password','$gender','$bloodgrp','$dob')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								
								$_SESSION['username'] = $username;
								$_SESSION['password'] = $password;
								$_SESSION['email'] = $email;

								header( "Location: user.php");
								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
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








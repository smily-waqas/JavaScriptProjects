<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
		<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="bootsrap/css/bootsrap.min.css">
	<script src="bootsrap/js/bootstrap.min"></script>


	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https:ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto+Slab">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		body{
			background-image: url(18.jpg);
			background-size: cover;
			
			
		}
		#form{
		background-color: 	#8cff66;
		min-height: 600px;
		padding: 5px 40px 40px 40px;
		opacity: 0.80;
		margin-top: 8%;

		}
		.registration{
			font-size: 40px;
			font-family: Times New Roman;
			font-weight: 700px;
			border-bottom-style: ridge;

		}
		.text{
			height: 43px;
			padding: 
		}
		label{
			font-size: 18px;

		}
		.btn-primary{
			border-radius: 0px;
			padding: 10px;
			width: 48%; 
		}
		.btn-danger{
			border-radius: 0px;
			padding: 10px;
			width: 48%;
		}
	</style>
</head>
<body>
		<div class="container">
				<div class="row">
						<div class="col-md-6 col-md-offset-3"  id="form">
						<center>
							<b class="registration">Sign Up</b>
						</center>
						<form  method="post">
							<div class="form-group">
								<label>Username :</label>
								<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
									<input type="text" name="user_name" class="form-control text" placeholder=" Enter Username">
								</div>
							</div>
							<div class="form-group">
								<label>Email :</label>
								<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
									<input type="email" name="email" class="form-control text" placeholder=" Enter Email">
								</div>
							</div>
							<div class="form-group">
								<label>Password :</label>
								<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
									<input type="password" name="password" class="form-control text" placeholder=" Enter Password">
								</div>
							</div>
							<div class="form-group">
								<label>Confirm Password :</label>
								<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
									<input type="password" name="conpswrd" class="form-control text" placeholder=" Enter Password again">
								</div>
							</div>
							<div class="form-group">
								<label>Mobile Number :</label>
								<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
									<input type="text" name="mobile_no" class="form-control text" placeholder=" Enter Mobile Number">
								</div>
							</div> 
							<div class="form-group">
								
							<div class="form-group">
								<input type="submit" name="submit" class="btn btn-primary" value="Submit">
								<input type="reset" class="btn btn-danger" value="Reset">
								
							</div>
						</form>
						<div class="col-md-12" style="color: black">
							<?php
include("../../connection.php");
session_start();
if (isset($_POST['submit']))
{
$name= $_POST['user_name'];
$eml= $_POST['email'];
$pswrd= $_POST['password'];
$conpswrd= $_POST['conpswrd'];
$mbl= $_POST['mobile_no'];
if ($pswrd == $conpswrd) {
$qy= "INSERT INTO signup(user_name,email,password,mobile_no) VALUES('$name','$eml','$pswrd', '$mbl')";
	   $run = mysqli_query($conn, $qy);
	if ($run=TRUE) {
		echo "Data Inserted";
		header("location: ../login.php");
	} 
	else
	{  
	   echo "Some thing wrong";
	}
}
else{
	echo "password Does not match";
}	
}
?>
						</div>
						</div>
			</div>
			
		</div>
</body>
</html>
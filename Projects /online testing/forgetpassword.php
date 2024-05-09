<?php
include("connection.php");
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>forget password</title>
	  <meta charset="utf-8">
	  <link rel="stylesheet" type="text/css" href="login.css">
	  <link rel="stylesheet" type="text/css" href="boostrap/css/boostrap.min.css">
	  <script src="boostrap/js/boostrap.min"></script>

	  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https:ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto+Slab">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
    body{
    	background-image: url(img/forgt/19.jpeg);
    	background-size: cover;
    }
	#form{
		background-color:rgb(133,94,66);
		min-height: 400px;
		padding: 5px 20px 20px 20px;
		
		margin-top:37px;
		border-color: black;
	}
	.forgetpassword{
		font-size: 40px;
		font-family: Times New Roman;
		font-weight: 700px;
		color: gold;
		border-color: black;
	margin-top: 10px;
	}
	.text{
		height: 43px;
		padding: 
	}
     label{
     	font-size: 18px;
     	color: white;
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
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-md-offset-4" id="form">
				<center>
					<b class="forgetpassword">Forget Password</b>
				</center>
				<form method="POST">
					<font></font>
					<div class="form-group">
						<label>Username :</label>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
							<input type="text" name="user_name" class="form-control text" placeholder="Enter Username">
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
							<input type="Password" name="password" class="form-control text" placeholder="Enter Password">
						</div>
					</div>
					<div class="form-group">
						<label>Confirm password :</label>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-lock "></span></span>
							<input type="password" name="conpswrd" class="form-control text" placeholder="Enter password again ">
						</div>
					</div>
					
					<div class="form-group">

						<div class="form-group">
							<input type="submit"  name="submit" class="btn btn-primary"  value="Submit">
							<input type="reset" class="btn btn-danger" value="Reset">
							
						</div>
					</div>
					<div class="form-group">
							<div class="form-group">
							<button type="button" class="btn btn-success btn-block" > <a href="login/login.php" style="color: white;"> Login </a></button>
						</div>
						</div>
							
				</form>
				<div class="col-md-12" style="color: black">
							<?php

if (isset($_POST['submit']))
{
$name= $_POST["user_name"];
$eml= $_POST["email"];
$pswrd= $_POST["password"];
$conpswrd= $_POST["conpswrd"];
if ($pswrd == $conpswrd) {
$qy= "UPDATE signup  SET password = '$pswrd' WHERE user_name = '$name' && email = '$eml'";
	   $result= mysqli_query($conn,$qy);
     $num=mysqli_num_rows($result);
	echo "Password Changed Sucessfully:";
}
else {
	echo "Password does not Match";
}

}	

?>
						</div>

			</div>
		</div>
	</body>
</html>
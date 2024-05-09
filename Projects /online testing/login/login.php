<?php
include("../connection.php");
ob_start();
?>
<html>
<head>
<title>LogIn </title>
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
<link href="css/bootstrap.css" rel="stylesheet"/>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<style type="text/css">
body{background:url('image/b.jpg') no-repeat;
	overflow-y:scroll;
	width: 100%;
	}
#log{
 
 padding:60px 40px;
 margin-top:80px;
 -webkit-box-shadow: -5px 2px 62px 8px rgba(0,0,0,0.75);
-moz-box-shadow: -5px 2px 62px 8px rgba(0,0,0,0.75);
box-shadow: -5px 2px 62px 8px rgba(0,0,0,0.75);
}
img{ width:150px;
	margin:auto;
}
h1{
color:white;
text-align:center;
font-weight:bolder;
margin-top:-20px;
}
label{font-size:20px; color:white;}
button{

-webkit-box-shadow: -5px 2px 62px 8px rgba(0,0,0,0.75);
-moz-box-shadow: -5px 2px 62px 8px rgba(0,0,0,0.75);
box-shadow: -5px 2px 62px 8px rgba(0,0,0,0.75);
}
</style>

</head>
<body>
<div class="container-fluid bg">
	<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-12"></div>
		<div class="col-md-4 col-sm-4 col-xs-12">
			<form id="log" action="" method="post">
			<h1> Login Here</h1>
			<img class="img img-responsive img-circle" src="image/login.gif"><br>
				<div class="form-group">
					<div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
							<select class="form-control" name="admin" style="size: 30px;"> 
								<span class="input-group-addon">
								<option value="admin" >Admin</option>
								<option value="signup" >Student</option>
						</select></div>	
					
				</div>
				<div class="form-group">
					<label>Usernmae</label>
					<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
					<input type="text" name="user_name" class="form-control" placeholder="Enter username">
					</div>
				</div>
				<div class="form-group">
					<label>Password</label>
					<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
					<input type="password" name="password" class="form-control" placeholder="Password">
				</div>
			</div>
				<div class="checkbox">
					<label><input type="checkbox"> Remember me</label>
				</div>
				<button type="submit" name="login" class="btn btn-success btn-block ">Login</button><br>
				<a href="../forgetpassword.php" style="color: white">Forget Your password?</a><br>
						<a href="Sign up/signup.php" style="color: white" >Sign Up?</a>
			</form>
			 <div class="col-md-12" style="color: black">
                           <?php

if (isset($_POST["login"]))
{
$name= $_POST["user_name"];
$pswrd= $_POST["password"];
$students = $_POST["admin"];
	if ($students == "signup")
			{
	$qy= "SELECT * From signup where user_name ='$name' AND password ='$pswrd'";
$run= mysqli_query($conn,$qy);
	if (mysqli_num_rows($run)==1)
			{
				echo "Sucessfully Login";
				header("location:stdlog.php");
			} 
			else
			{
				echo "Password does not Match";
			}
			}
			 $admn = $_POST["admin"];
			 if ($admn == "admin")
 		{
			$qy= "SELECT * From admin where adminname ='$name' AND password ='$pswrd'";
			$run= mysqli_query($conn,$qy);
			if (mysqli_num_rows($run) ==1 )
			{
				echo "Sucessfully Login";
				header("location:dashboard.php");

			} 
			else
			{
				echo "Password does not Match";
			}
		}
	}
?>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12"></div>
	</div>
</div>
</body>
</html>
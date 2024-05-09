<?php
include("../connection.php");
error_reporting(0);
 $_GET['uid'];
 $_GET['un'];
 $_GET['eml'];
 $_GET['pswrd'];
 $_GET['mobile'];


?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Data </title>
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
    	background-image: url(16.jpeg);
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
				<form action="" method="GET">
					<font></font>
					<div class="form-group">
						<label>User_ID :</label>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" name="user_id" value=" <?php echo $_GET['uid'];?>" class="form-control text"/>
						</div>
					</div>
					<div class="form-group">
						<label>Username :</label>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" name="user_name" value="<?php echo $_GET['un'];
							?>" class="form-control text"/>
						</div>
					</div>
					<div class="form-group">
						<label>Email :</label>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
							<input type="email" name="email" value="<?php echo $_GET['eml'];?>" class="form-control text"/>
						</div>
					</div>
					<div class="form-group">
						<label>Password :</label>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
							<input type="text" name="password" value="<?php
							echo $_GET['pswrd'];
							?>" class="form-control text" />
						</div>
					</div>
					<div class="form-group">
						<label>Mobile Number :</label>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-phone "></span></span>
							<input type="text" name="mobile_no" value="<?php echo $_GET['mobile'];?>" class="form-control text"/>
						</div>
					</div>
					
					<div class="form-group">

						<div class="form-group">
							<input type="submit"  name="submit" class="btn btn-primary"  value="Update"/>
							
							
						</div>
					</div>	
				</form>
				<?php  
if ($_GET['submit']) {
	$id = $_GET['user_id'];
	$nam= $_GET['user_name'];
	$emil= $_GET['email'];
	$pswd= $_GET['password'];
	$mbl= $_GET['mobile_no'];
	$query = " UPDATE SIGNUP SET user_name='$nam', email='$emil' , password='$pswd' , mobile_no='$mbl' WHERE USER_ID='$id '  ";
	$run = mysqli_query( $conn, $query);
	if ($run)
	 {
		echo " Record Updated Sucessfully. <a href='students.php'> Check Update List </a>";
	}
	else 
	{
		echo " Record Not Updated   <a href='students.php'> Chek Updated list </a>";
	}
}
else
{
	echo "Click on Update Button to save changes:";
}
				?>
				</div>

			</div>
		</div>
	</body>
</html>
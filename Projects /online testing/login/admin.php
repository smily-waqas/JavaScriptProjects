<!DOCTYPE html>
<html>
<head>
	<title> Admin Panel</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="bootsrap/css/bootsrap.min.css">
	<script src="bootsrap/js/bootstrap.min"></script>

<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
<link href="css/bootstrap.css" rel="stylesheet"/>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
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
		.navbar-custom{
	 background-color: 	 #cc6600;
	  color: #FFF;
	  border-radius: 0px;
	  padding: 10px;

}
.navbar-custom .navbar-nav>li>a
{
	color: #fff;
	font-size: 19px;
	margin-left: 13px;
}
.navbar-custom .navbar-nav>.active>a
{
	color: #fff;
	background-color: #82c434;

}
.navbar-custom .navbar-nav>li>a:hover
{
	background-color: #82c434;

}
.navbar-custom .navbar-brand
{
	color: #fff;
	font-size: 28px;
	margin-left: 15px;
}
.navbar-custom .navbar-brand:hover
{
	color: #fff;
	font-size: 28px;
}
		#form{
		background-color: 	rgb(140,255,102,0.80);
		min-height: 600px;
		padding: 5px 40px 40px 40px;
		margin-top: 4%;
		margin-bottom: 2%;

		}
		.quiz{
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

	<!...Navigation Bar...>
	<nav class="navbar navbar-custom navbar-nav navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#robust">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="" class="navbar-brand" style="margin-bottom: 20px;" ><img src="14.jpg"></a>
					</div>
					</div>	
					<div class="col-md-8"> 
						<div class="collapse navbar-collapse" id="robust">
							<ul class="nav navbar-nav">
								<li class="active"> <a href="index.php">Home</a></li>
								<li> <a href="aboutus.php">About Us</a></li>
								<li> <a href="login.php">Examination</a></li>
								<li> <a href="contactus.php">Contact Us</a></li>
								<li> <a href="login.php"> Log In </a></li>
								<li> <a href="download.php">Downloads</a></li>
							</ul>
						</div>
			</div>
		</div>
		</div>
	</nav>
	<br><br><br><br>

		<div class="container">
				<div class="row">
						<div class="col-md-6 col-md-offset-3"  id="form">
						<center>
							 <b class="quiz">Enter Your Quiz</b>
						</center>
						<form action="admin_quiz.php" method="POST">
							<div class="form-group">
								<label>Question :</label>
								<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
									<input type="text" name="quest" class="form-control text" placeholder=" Enter Question">
								</div>
							</div>
							<div class="form-group">
								<label>Option 1 :</label>
								<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
									<input type="text" name="op1" class="form-control text" placeholder=" Enter Option 1">
								</div>
							</div>
							<div class="form-group">
								<label>Option 2 :</label>
								<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
									<input type="text" name="op2" class="form-control text" placeholder=" Enter Option 2">
								</div>
							</div>
							<div class="form-group">
								<label>Option 3 :</label>
								<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
									<input type="text" name="op3" class="form-control text" placeholder=" Enter Option 3">
								</div>
							</div>
							<div class="form-group">
								<label>Option 4 :</label>
								<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
									<input type="text" name="op4" class="form-control text" placeholder=" Enter Option 4">
								</div>
							</div> 
							<div class="form-group">
								<label>Answer :</label>
								<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
									<input type="text" name="answer" class="form-control text" placeholder=" Enter Answer">
								</div>
							</div> 
							<div class="form-group">
								<select class="form-control" id="sell" name="cat">
								<option value="0"> Choose Category</option>
								<option value="1"> PPSC</option>
								<option value="2"> CSS</option>
								<option value="3"> NTS </option>
								<option value="4"> GAT </option>
								<option value="5"> Php</option>
								<option value="6"> General Knowledge</option>
								<option value="7"> Math</option>
								<option value="8"> Computer</option>
								<option value="9"> Urdu</option>
								<option value="10"> Physics</option>
								<option value="11"> Chemistry</option>
								<option value="12"> Biology</option>
								</select>
							</div>			
							<div class="form-group">
								<input type="submit" class="btn btn-primary" value="Submit">
								<input type="reset" class="btn btn-danger" value="Reset">
								
							</div>
						</form>
						</div>
			</div>
			
		</div>

</body>
</html>
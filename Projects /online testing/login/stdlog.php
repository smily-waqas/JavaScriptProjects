<?php
include("../connection.php");
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Home</title>
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
</head>
<body>

<div class="container">
  <h2> WRS Online Testing System </h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Profile</a></li>
    <li style="float: right;"> <button type="button" class="btn btn-primary" ><a style="color: white;" href="login.php"> Log Out</a></button> </li>
    <li><a data-toggle="tab" href="#menu3" >Menu 3</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
     
     <div class="col-sm-4"></div>
     <div class="col-sm-4">
     <div id="select" class="tab-pane fade">

  
</div>
  <div class="col-sm-4"></div>
  <div>
     	<form>
  <select class="form-control" id="" name="category">
               <option value="">Select Test</option>
                <option value="Computer">Computer</option>
                <option value="G K">General Knowledge</option>
                <option value="Math">Math</option>
                <option value="Biology">Biology</option>
              
  </select>
  <br> <center><button type="button" name="submit" class="btn btn-primary" data-toggle="tab" href="quizselect.php">   Submit Quiz </button></center><br>
   </form>
    <?php

if (isset($_POST["submit"]))
{
$catg = $_POST["category"];
	if ($catg == "Computer")
			{
				
				header("location:quizselect.php");
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
	
?>
   </div>
</div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Showing Profile</h3>
      <center> <button type="button" class="btn btn-primary" data-toggle="tab" > <a href="login.php"></a>Log Out</button></center><br>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Logout</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p style="color: ">Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

    </div>
  </div>
</div>

</body>

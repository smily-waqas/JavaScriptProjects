<?php
include("quizcon.php");
session_start();
if(!isset($_SESSION['username']))
{
header('location:login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
<link href="css/bootstrap.css" rel="stylesheet"/>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">

	<br><h1 class="text-center text-primary">WRS Online Quiz</h1><br>
		<h2 class="text-center text-success" > Welcome <?php echo $_SESSION['username']; ?> </h2> <br>
		<div class="col-md-2"></div>
		<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 m-auto d-block">
		<div class="card">

			<h3 class="text-center card-header">  Welcome <?php echo $_SESSION['username']; ?>, You Have select only one out of 4 Best of Luck :) </h3>
			
		</div> <br>
		<form action="check.php" method="post">
		<?php
		for ($i=1; $i < 11; $i++) { 
		
				$q = "select * from questions where qid= $i ";
				$query= mysqli_query($conn, $q);

		while ($rows= mysqli_fetch_array($query)) {
		?>

		<div class="card">
			<h4 class="card-header"> <?php echo $rows['question'];    ?></h4>
	<?php
				$q = "select * from answers where a_id= $i ";
				$query= mysqli_query($conn,$q);
				while ($rows= mysqli_fetch_array($query)) {
				?>
				<div class="card-body">
					<input type="radio" name="quizcheck[<?php echo  $rows['a_id']   ?>] " value="<?php echo $rows['aid'];  ?>">
					<?php echo $rows['ans'];?>
		</div>


		<?php
}
}
}
		?>

		<input type="submit" name="submit" value="Submit" class="btn btn-success m-auto d-block">
		</form>
		</div>
		<div class="col-md-2"></div>
		</div><br>
		<div class="m-auto d-block">
		<a href="logout.php" class="btn btn-primary"> Log Out</a>
		</div><br>
		<div>
			<h5 class="text-center">2018@WRS</h5>
		</div>
		</div>
</body>
</html> 
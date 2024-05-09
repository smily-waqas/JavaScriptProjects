<?php
include("../connection.php");
session_start();
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

	<br><h1 class="text-center text-primary">WRS Online Testing System</h1><br>
		<h2 class="text-center text-success" > Welcome   </h2> <br>
		<div class="col-md-2"></div>
		<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 m-auto d-block">
		<div class="card">

			<h3 class="text-center card-header"></h3>
			
		</div> <br>
		<form action="check.php" method="post"
		<?php
		 
		
				$q = "select question  from quesion  ";
				$query= mysqli_query($conn, $q);
		$rows= mysqli_fetch_array($query);		?>
		<div class="card">
			<h4 class="card-header"> <?php echo $rows['question'];?></h4>
			<?php
				$q = "SELECT op1,op2,op3,op4 FROM quesion ";
				$query= mysqli_query($conn,$q);
			$rows= mysqli_fetch_array($query);
				?>
				<div class="card-body">
					<input type="radio"  value="1">
					<?php echo $rows['op1'];?>
		</div>
		<div class="card-body">
					<input type="radio"  value="2">
					<?php echo $rows['op2'];?>
		</div>
		<div class="card-body">
					<input type="radio"  value="3">
					<?php echo $rows['op3'];?>
		</div>
		<div class="card-body">
					<input type="radio"  value="4">
					<?php echo $rows['op4'];?> 
		</div>
		<?php	
?>
<center>		<input type="submit" name="submit" value="Submit" class="btn btn-success m-auto d-block"></center>
		</form>
		</div>
		<div class="col-md-2"></div>
		</div><br>
		<div class="m-auto d-block">
	
		</div><br>
		
		</div>
</body>
</html> 
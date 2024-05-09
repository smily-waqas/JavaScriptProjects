<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="quizdb";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	echo " ok";
}
else
{
die("connection failed because".mysqli_connect_error());
}




?>
<?php
include("connection.php");
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
	}
	if ($run=TRUE) {
		echo "Data Inseted"
	} 
	else
	{
	   echo "Some thing wrong";
	}
else {
   
}
}
?>
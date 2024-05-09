<?php
include("../connection.php");
error_reporting(0);
 $id= $_GET['uid'];
 $query = " DELETE FROM SIGNUP WHERE USER_ID='$id' ";
 $run = mysqli_query($conn , $query );
 if ($run) {
 	echo " <script> alert('Record Deleted') </script> ";
 	?>
 	<meta http-equiv="Refresh" content="0; URL=http://localhost/online%20testing/login/students.php">
 	<?php
 } 

 else
 {
 	echo " <font color='red'>Record deletion Failed";
 }


?>
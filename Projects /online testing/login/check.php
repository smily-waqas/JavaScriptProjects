<?php
include("quizcon.php");
if(!isset($_SESSION['username']))
{

}
if (isset($_POST['submit'])) {
	if (!empty($_POST['quizcheck'])) {
		$count= count($_POST['quizcheck']);
		echo "Out of 10 , You Have Selected ".$count." Options";
		$result= 0;
		$i=1;
		$selected = $_POST['quizcheck'];
		print_r($selected);
		$q = "select * from questions";
		$query= mysqli_query($conn,$q);
		while ($rows=  mysqli_fetch_array($query)) {
			print_r($rows['a_id']);
			$checked= $rows['a_id'] == $selected[$i];
			if ($checked) {
				$result++;
		
			}
			$i++;
		}
		echo "<br> Your Total Marks are".$result;
	}
}

		 
		?>
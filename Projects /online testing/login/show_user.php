<style>
	table{
 		border-collapse: collapse;
		color: #588c73;
		font-size: 20px;
		text-align: left;
		border: 2px solid black;
		margin-top: 50px;

	}
 th
 {
 	background-color:#588c73;
 	color: white;
 	border: 1px solid black;
 	padding: 10px;
 }
	tr:nth-child(even)
		{
		background-color: #f2f2f2;
		border: 1px solid black;	
		}
		button
		{
			align-items: center;
			color: white;
			background-color: #588c73;
			border-radius: 5px;
			font-size: 20px; 
		}
		a
		{
			color: white;
		}		
</style>
<?php
include("../connection.php");
error_reporting(0);
$query = "SELECT * FROM signup";
$data = mysqli_query($conn , $query);
$total = mysqli_num_rows($data);

if($total !=0 )
{

	?>
		<center>
		<table class="table-bordered">
			<tr>
				<th><u>User ID</th>
				<th> User Name</th>
				<th>Email</th>
				<th>Password</th>
				<th> Mobile Number</th>
				<th colspan="2">Operations</th>
				
			</tr>
		

	<?php
	while ( $result = mysqli_fetch_assoc ($data))
	 {
		echo "<tr>
					<td>".$result["user_id"]." </td>
					<td>".$result["user_name"]."</td>
					<td>".$result["email"]."</td>
					<td>".$result["password"]."</td>
					<td> ".$result["mobile_no"]."</td>
					<td> <button type='button' class='btn btn-primary' > <a href='update.php'> Edit</a></button></td>
					<td> <button type='button' class='btn btn-primary' > <a href='update.php'> Delete</a></button></td>
			</tr>";
	}
}
	else
	{
		echo "No Record Found";
	}
?>
	</table>
	</center>
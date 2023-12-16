<?php
	include('cn_connection.php');
	$username = $_POST['user'];
	$password = $_POST['pass'];
	$sql = "select * from login where username = '$username' and password = '$password'";
	$result = mysqli_query($con,$sql);
	$count = mysqli_num_rows($result);
	
	if($count == 1)
	{
		echo "<h1><center>Login successful</center></h1>";
	}
	else
	{
		echo "<h1><center>Invalid credentials.</center></h1>";

	}
?>
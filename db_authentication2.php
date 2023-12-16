<?php
	$a	= $_POST['voterid'];
	$b  = $_POST['votername'];
	$c	= $_POST['dob'];
	$d	= $_POST['cnumber'];
	$e	= $_POST['email'];
	$f	= $_POST['pw'];
	$g = isset($_POST['cn']) ? $_POST['cn'] : '';

	$host = "localhost";  
	$user = "root";  
	$password = '';  
	$db_name = "balloting";  
	$con = mysqli_connect($host, $user, $password, $db_name); 

	$sql = "insert into voter(voterid,name,dob,phone_number,mail,cname,password) values('$a','$b','$c', $d,'$e','$g','$f')";

	if(mysqli_query($con,$sql))
		header('location:DigitalBalloting_login.php');
	else
		echo "Connection failed".mysqli_error($con);
?>
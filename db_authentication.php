<?php      

	include('db_connection.php');
	if($_POST['login'])
	{
		$id = $_POST['voterid'];  
		$pass = $_POST['password'];

		
        $sql = "select * from voter where voterid = '$id' and password = '$pass'";
		$host = "localhost";  
		$user = "root";  
		$password = '';  
		$db_name = "balloting";  
		$con = mysqli_connect($host, $user, $password, $db_name);
        $result = mysqli_query($con, $sql);
		$r = mysqli_fetch_array($result);
		
        $count = mysqli_num_rows($result);  
          
        if($count == 1)
		{ 
			session_start();
			$_SESSION['id'] = $id;
            header('location:db_home.php'); 
        }  
        else
		{  
            echo "<h1> Login failed. Invalid aadhar ID or password.</h1>";  
        }     
	}
	else if($_POST['registration'])
	{
		header('location:db_register_copy.php');
	}
	
?>  

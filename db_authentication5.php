<?php      
	if($_POST['login'])
	{
		$id = $_POST['id'];  
		$pass = $_POST['password'];        
        if($id == "jayasree" and $pass == "sreechandran")
		{ 
            header('location:db_report.php'); 
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

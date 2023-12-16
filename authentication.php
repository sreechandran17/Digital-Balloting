<?php      
      
	include('connection.php');
	
	if($_POST['login'])
	{
		$id = $_POST['userid'];  
		$pass = $_POST['password'];  
        $sql = "select * from registration where userid = '$id' and password = '$pass'";  
        $result = mysqli_query($con, $sql);   
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header('location:inventory_home.php'); 
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
	}
	
	if($_POST['registration'])
	{
		header('location:inventory_register.php');
	}
?>  

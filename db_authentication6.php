<?php
				$a=$_POST['a'];
				$b=$_POST['b'];
				$c=$_POST['c'];
				$d=$_POST['d'];
				$e=$_POST['e'];
				$host = "localhost";  
				$user = "root";  
				$password = '';  
				$db_name = "balloting";  
				$con = mysqli_connect($host, $user, $password, $db_name);
			
				$sql = "select * from candidate where voterid= '$id'";
				$sql = "update voter set name='$b',dob='$c',mail='$d',cname='$e' where voterid=$a";
				if(!mysqli_query($con,$sql))
				{
					echo "Not Updated Successfully".mysqli_error($con);
				}
				else
				{
					header('location:db_voting.php');
				}
?>
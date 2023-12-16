<?php
				$id=$_GET['id'];
				$host = "localhost";  
				$user = "root";  
				$password = '';  
				$db_name = "balloting";  
				$con = mysqli_connect($host, $user, $password, $db_name);
			
				$sql = "select * from candidate where voterid= '$id'";
				$result = mysqli_query($con,$sql);
				$row = mysqli_fetch_array($result);
				if($row)
				{
					$count = $row[6];
					$count = $count + 1;
					$sql = "update candidate set vote_count=$count where voterid = '$id'";
					if(mysqli_query($con,$sql))
					{
						header('location:db_votingNew.php');
					}
					else
					{
						echo "Not Updated Successfully".mysqli_error($con);
					}
				}
?>
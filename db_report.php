<html>  
<head>  
	
	<style>
	
	body {
		 background-image: url('db5.jpg');
		 background-repeat: no-repeat;
		 background-attachment: fixed;  
		 background-size: 1750px 750px;
	}
	#frm{  
		border: solid gray 1px; 		
		width:75%;  
		border-radius: 0.5px;  
		margin: 40px auto;  
		background: #f8f8f8;  
		padding: 25px; 
		box-shadow: 5px 10px #989898;
		margin-left: 15%
	} 
	ul {
	  list-style-type: none;
	  margin: 0;
	  padding: 0;
	  overflow: hidden;
	  background-color: #333;
	}

	li {
	  float: left;
	  border-right:1px solid #bbb;
	}

	li:last-child {
	  border-right: none;
	}

	li a {
	  display: block;
	  color: white;
	  text-align: center;
	  padding: 14px 16px;
	  text-decoration: none;
	}

	li a:hover:not(.active) {
	  background-color: #111;
	}

	.active {
	  background-color: #04AA6D;
	}
	</style>
</head>  
<body>  
    <div  style="background-color:#2c5e91;padding:15px;height: 85px;width:1600px;position:fixed;">
		<span style="font-size: 45px;color:white;vertical-align:middle;margin-left: 41%;">Digital Balloting</span></img>
		<span style="font-size: 20px;color:white;margin-right: 100px;margin-left: 39%;"><i>Vote the change you want to see in the world!</i></span>
	</div>
	
	<br><br><br><br><br>
	
	<center>
	<div id="frm">
	<?php
		$host = "localhost";  
		$user = "root";  
		$password = '';  
		$db_name = "balloting";  
		$con = mysqli_connect($host, $user, $password, $db_name);
		$sql = "select distinct cname from candidate";
		session_start();
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
		$constituency = array();
		$i = 0;
		while($row)
		{
			$constituency[$i] = $row[0];
			$row = mysqli_fetch_array($result);
			$i += 1;
		}
		$j = 0;
		
		echo "<table style ='
			 border: collapse;
			 margin: 25px 0;
			 font-size: 1.2em;
			 font-family: sans-serif;
			 min-width: 250px;
			 box-shadow: 0 0 20px rgba(0, 0, 0, 0.16);
			 cellspacing: 20px;' cellspacing=15 cellpadding=9 width=100%	>
			 <tr style='background-color:LightBlue;text-align:center;font-weight: bold;'><td>Constituency Name</td><td>Vote status</td></tr>";
		while($j < $i)
		{
			$cn = $constituency[$j];
			$j += 1;
			$_SESSION['cn'] = $cn;
		    echo "<tr style='text-align:center;'><td>$cn</td><td>";
			include 'db_report_bar.php';
			echo "</td></tr>";
		}
	?>
	</center>
	</div>
</body>     
</html>
<html>  
<head>  
    <title>PHP login system</title>  
	<style>
	
	body {
		 background-image: url('db5.jpg');
		 background-repeat: no-repeat;
		 background-attachment: fixed;  
		 background-size: 1750px 750px;
	}
	
	#frm{  
		border: solid gray 1px; 		
		width:60%;  
		border-radius: 0.5px;  
		margin: 40px auto;  
		background: #f8f8f8;  
		padding: 25px; 
		box-shadow: 5px 10px #989898;
		margin-left: 33%
	} 

	#table1{  
		width:28%;  
		height:10%;
		background: #f8f8f8;  
		box-shadow: 4px 10px #989898;
	}  
	
	#btn{  
		color: #fff;  
		background: #337ab7;  
		padding: 7px;  
		margin-left: 10%; 
	}  
	#btn2{  
		color: #fff;  
		background: #337ab7;  
		padding: 7px;  
		margin-left: 10%;	
	}
	ul {
		list-style-type: none;
		margin: 0px;
		padding: 0;
		width: 20%;
		background-color: #c0c0c0;
		position: fixed;
		height: 100%;
		overflow: auto;
	}
	li a {
	    display: block;
		color: white;
		padding: 8px 10px;
		text-decoration: none;
	}
	</style>
</head>  
<body>  
	<?php
		session_start();
		$id = $_SESSION['id'];
		$_SESSION['id'] = $id;
	?>
    <div  style="background-color:#2c5e91;padding:15px;height: 85px;">
	<span class="header">
		<span style="font-size: 45px;color:white;vertical-align:middle;margin-left: 50%;">Digital Balloting</span></img>
		<span style="font-size: 20px;color:white;margin-right: 100px;margin-left: 47%;"><i>Vote the change you want to see in the world!</i></span>
	</span>
	</div>
	<ul>
		  <li style="font-size:1.8vw;"><a class="active" href="db_home.php"><b> Home</b></a></li><hr>
		  <li style="font-size:1.8vw;"><a href="db_voting.php"><b>Profile page</b></li><hr>
		  <li style="font-size:1.8vw;"><a href="db_votingNew.php"><b> voting</b><img src="apieegif.gif" /></a></li><hr>
	</ul>
	<?php
		$sql = "select * from voter where voterid = '$id'";
		$host = "localhost";  
		$user = "root";  
		$password = '';  
		$db_name = "balloting";  
		  
		$con = mysqli_connect($host, $user, $password, $db_name);
		$rs = mysqli_query($con, $sql);
		if(!$rs ) 
		{
			  die('Selection failure: ' . mysql_error());
		}
		$row = mysqli_fetch_array($rs);
	?>
	<br>
	<div id="frm">
		<center><?php include 'db_votingNew2.php';?></center>		
	</table>
	</form>
	</div>
</body>     
</html>

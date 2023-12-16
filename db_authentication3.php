<?php
	$a	= $_POST['voterid'];
	$b  = $_POST['cname'];
	$c	= $_POST['dob'];
	$d	= $_POST['cnumber'];
	$e	= $_POST['email'];
	$f	= $_POST['pw'];
	$filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
    $folder = "image/".$filename;
	$g = isset($_POST['cn']) ? $_POST['cn'] : '';
	$h = isset($_POST['pn']) ? $_POST['pn'] : '';


	$host = "localhost";  
	$user = "root";  
	$password = '';  
	$db_name = "balloting";  
	$con = mysqli_connect($host, $user, $password, $db_name); 

	$sql = "insert into candidate(voterid,candidate_name,pname,cname,phone_number,mail,password,dob,image) values($a,'$b','$h','$g',$d,'$e','$f','$c','$filename')";
	echo $a." ".$b." ".$h." ".$g." ".$d." ".$e." ".$f." ".$c." ".$filename;
	if(mysqli_query($con,$sql))
	{
		if (move_uploaded_file($tempname, $folder))  
		{
            $msg = "Image uploaded successfully";
        }
		else
		{
            $msg = "Failed to upload image";
        }
		/**$sql = "select * from db_candidate where voterid = '9999999999'";
		$rs = mysqli_query($con, $sql);
		if(!$rs ) 
		{
			  die('Selection failure: ');
		}
		$row = mysqli_fetch_array($rs);
		while($row)
		{
			echo $row[9];
			echo "<img src='$row[9]'></img>";
			$row = mysqli_fetch_array($rs);
		}**/
		header('location:DigitalBalloting_login.php');
	}
	else
		echo "Connection failed".mysqli_error($con);
?>
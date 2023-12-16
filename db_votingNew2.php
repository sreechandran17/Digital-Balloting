<style>
a {text-decoration: none;}
</style>
<?php  
//session_start();
$id = $_SESSION['id'];
$conn = mysqli_connect('localhost','root','','balloting');  
if(!$conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  
$sql = "select cname from voter where voterid = '$id'";
$rs = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($rs);

$sql = "select * from candidate where cname = '$row[0]'";
$rs = mysqli_query($conn, $sql);

if(!$rs ) 
{
      die('Selection failure: ' . mysql_error());
}

$row = mysqli_fetch_array($rs);
echo "<table style ='
			 border: collapse;
			 margin: 25px 0;
			 font-size: 1.2em;
			 font-family: sans-serif;
			 min-width: 500px;
			 box-shadow: 0 0 20px rgba(0, 0, 0, 0.16);
			 cellspacing: 20px;' cellspacing=15 cellpadding=10 width=100%	>
			 <tr style='background-color:LightBlue;text-align:center;font-weight: bold;'><td>Candidate</td><td>Name</td><td>Voter ID</td><td>Constituency</td><td colspan=1>Action</td></tr>";
while($row)
{
    echo "<tr style=text-align:center;'><td><img src='$row[9]' width='120' height='120'></img></td><td>  $row[1]  </td><td>  $row[2] </td><td>  $row[3] </td><td><a href=db_authentication4.php?id=$row[0]><span style='font-size:70px;color:green;text-decoration: none;'>&#10004;</span></a></td></tr> ";
    $row = mysqli_fetch_array($rs);
}
mysqli_close($conn);
?>  
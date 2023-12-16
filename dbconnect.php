<?php  
  
//********connection establishment*********
$conn = mysqli_connect('localhost','root','');  
if(!$conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  
echo 'Connected successfully';  

/*
//********database creation********
$sql = 'CREATE Database mydb';  
if(mysqli_query($conn,$sql))
{  
  echo "<br><br>Database mydb created successfully.";  
}
else
{  
echo "<br>Sorry, database creation failed ".mysqli_error($conn);  
} 
*/

//********Database selection********
mysqli_select_db($conn,'mydb');

/*
//********table creation********
$sql = "create table empdetails(
		id INT AUTO_INCREMENT,
		name VARCHAR(20) NOT NULL,  
		salary INT NOT NULL,
		address VARCHAR(20) DEFAULT 'MADURAI',
		primary key (id))"; 
 
if(mysqli_query($conn, $sql))
{  
 echo "<br>Table empmaster created successfully";  
}
else
{  
echo "<br>Could not create table: ". mysqli_error($conn);  
} 
*/

/*
//********Record insertion ********

$sql = "INSERT INTO empdetails(name, salary, address) VALUES ('Manoj', 76000, 'Madurai')";
if (mysqli_query($conn, $sql)) 
{
      echo "<BR><br>New record created successfully";
} 
else 
{
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
*/


//******** Record Insertion by the data given by the user *******
//$file=addslashes(file_get_contents($_FILES['image']['tmp_name']));
$na = $_POST['ename'];
$sal = $_POST['sal'];
$addr = $_POST['address'];

$sql = "INSERT INTO empdetails(name, salary, address) VALUES ('$na', $sal, '$addr')";
if (mysqli_query($conn, $sql)) 
{
      echo "<BR><br>New record inserted successfully";
} 
else 
{
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


/*
$sql = "update empdetails set name = 'Promod' where name = 'santhosh'";
if(mysqli_query($conn,$sql))
	echo "<br><br>Updated successfully";
else
	echo "Notupdated successfully";
*/
//********Record selection********

$sql = "select * from empdetails";
$rs = mysqli_query($conn, $sql);

if(!$rs ) 
{
      die('Selection failure: ' . mysql_error());
}

$row = mysqli_fetch_array($rs);
echo "<table align = center valign=center><tr style=color:Blue><td>ID</td><td>Name</td><td>Salary</td><td>Address</td></tr>";
while($row)
{
    echo "<tr><td>$row[0]  </td><td>  $row[1]  </td><td>  $row[2] </td><td>  $row[3] </td></tr> ";
    $row = mysqli_fetch_array($rs);
}



//Closing the connection
mysqli_close($conn);  
?>  
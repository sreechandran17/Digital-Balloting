<?php 
$id1= $_POST["name"];
$id2= $_POST["mail"];
$id3= $_POST["userid"];
$id4= $_POST["password"];
/* First method to create an associate array. */
$user = array("userid"=>$id3, "password"=>$id4,"name"=>$id1, "mail"=>$id2, ); 
$myfile = fopen("testfile.txt", "a");
fwrite($myfile, var_export($user, true));
?> 

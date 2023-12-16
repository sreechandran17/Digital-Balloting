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
		width:30%;  
		border-radius: 0.5px;  
		margin: 40px auto;  
		background: #f8f8f8;  
		padding: 20px; 
		box-shadow: 5px 10px #989898;
		margin-left: 25%
	} 
	.button {
	  background-color: #337ab7;
	  border: none;
	  color: white;
	  padding: 15px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 16px;
	  margin: 4px 1px;
	  cursor: pointer;
	}
	.button4 {border-radius: 12px;}
	#table1{  
		width:28%;  
		height:10%;
		background: #f8f8f8;  
		box-shadow: 4px 10px #989898;
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
    <div  style="background-color:#2c5e91;padding:15px;height: 85px;">
	<span class="header">
		<span style="font-size: 45px;color:white;vertical-align:middle"><center>Digital Balloting</center></span></img>
		<span style="font-size: 20px;color:white;margin-right: 100px;"><center><i>Vote the change you want to see in the world!</i></center></span>
	</span>
	</div>
	<ul>
		  <li><a  href="DigitalBalloting_login.php">Home</a></li>
		  <li><a  href="db_candidate_registration.php">Candidate registration</a></li>
		  <li><a class="active" href="db_register_copy.php">Voter registration</a></li>
		  <li style="float:right"><a href="db_admin.php">Admin login</a></li>
<	</ul>
	<br><table align=center id = "table1"><tr><td>
	<fieldset>
	<legend style="font-size:20px;"><b>Voter Registration</b></legend>
	<form name="f2" action = "db_authentication2.php" onsubmit="return validation()" method = "POST" >
	<table>
		<tr style="line-height:3;">
			<td><b style="font-size:1.2vw;font-family:georgia;">Voter ID</b></td>
			<td><input type="text" id="voterid" name="voterid" placeholder="your ID here" pattern="[0-9]{10}" title="Voter ID should contain 10 integers only" style="width:200px;height:30px;font-family:georgia;border-radius: 15px;"></td>
		</tr>
		<tr style="line-height:3">
			<td><b style="font-size:1.2vw;font-family:georgia;">Voter Name</b></td>
			<td><input type="text" id="votername" name="votername" placeholder="your Name here" style="width:200px;height:30px;font-family:georgia;border-radius: 15px;"></td>
		</tr>
		<tr style="line-height:3">
			<td><b style="font-size:1.2vw;font-family:georgia;">Date Of Birth</b></td>
			<td><input type="date" id="dob" name="dob" placeholder="your DOB here" style="width:200px;height:30px;font-family:georgia;border-radius: 15px;"></td>
		</tr>
		<tr style="line-height:3">
			<td><b style="font-size:1.2vw;font-family:georgia;">Phone Number</b></td>
			<td><input type="number" id="cnumber" name="cnumber" placeholder="xxxxxxxxxx" pattern="[0-9]{10}" title="Should contain 10 integers only" style="width:200px;height:30px;font-family:georgia;border-radius: 15px;"></td>
		</tr>
		<tr style="line-height:3">
			<td><b style="font-size:1.2vw;font-family:georgia;">Email ID</b></td>
			<td><input type="text" id="email" name="email" placeholder="your Email ID here" style="width:200px;height:30px;font-family:georgia;border-radius: 15px;"></td>
		</tr>
		<tr style="line-height:3">
			<td><b style="font-size:1.2vw;font-family:georgia;border-radius: 15px;">Constituency</b></td>
			<td>
				<select id="cn1" name="cn"  style="width:200px;height:30px;border-radius: 15px;">
				<?php
					include('db_connection.php');
					$query = "select * from constituency";
					$results = mysqli_query($con,$query);
					while ($rows = mysqli_fetch_assoc($results))
					{
					?>
					<option value="<?php echo $rows['cname'];?>"><?php echo $rows['cname'];?></option>

					<?php
					} 
					?>
				</select>
			</td>
		</tr>
		<tr style="line-height:3">
			<td><b style="font-size:1.2vw;font-family:georgia;border-radius: 15px;">Password</b></td>
			<td><input type="password" name="pw" placeholder="your password here" style="width:200px;height:30px;font-family:georgia;border-radius: 15px;"></td>
		</tr>
		<tr style="line-height:3">
			<td><b style="font-size:1.2vw;font-family:georgia;border-radius: 15px;">Confirm Password</b></td>
			<td><input type="password" name="pw2" placeholder="your password here" style="width:200px;height:30px;font-family:georgia;border-radius: 15px;"></td>
		</tr>
			<td></td>
			<td><center><input type = "submit" name= "registration" onclick="validation()" class="button button4" value = "Register" ></center></td>
	</table>
	</form>
	
	</fieldset>
	</td></tr></table>

    <script>  
			
            function validation()  
            {  
                var i=document.f2.voterid.value;  
                var n=document.f2.votername.value;
				var d=document.f2.dob.value;				
				var c=document.f2.cn.value;
				var p=document.f2.pw.value;
				var p2=document.f2.pw2.value;
				var a=document.f2.email.value;	
				var b=document.f2.cnumber.value;	
                if(i.length=="" && n.length=="" && d.length=="" && p.length=="" && a.length=="" && b.length == "") {  
                    alert("All fields are empty. Can't register.");  
                    return false;  
                }  
                else  
                {  
                    if(i.length=="") {  
                        alert("Voter ID field  is empty");  
                        return false;  
                    }   
                    else if (n.length=="") {  
                    alert("Voter Name field  is empty");  
                    return false;  
                    }
					else if (d.length=="") {  
                    alert("Date Of Birth field  is empty");  
                    return false;  
                    }
					else if (c.length=="") {  
                    alert("Constituency field is empty");  
                    return false;  
                    }
					else if (p.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }
					else if (p2.length=="") {  
                    alert("Confirm Password field is empty");  
                    return false;  
                    }
					else if (a.length=="") {  
                    alert("Email field is empty");  
                    return false;  
                    }
					else if (b.length=="") {  
                    alert("Phone number field is empty");  
                    return false;  
                    }
                }   
				if(p != p2)
				{
					alert("Both the passwords are different, Try again");  
                    return false;
				}
            }  
    </script>  
</body>     
</html>

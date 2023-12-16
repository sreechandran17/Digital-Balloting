<html>  
<head>  
    <title>PHP login system</title>  
	<style>
	
	td.a1 {
		
		width: 480px;  
	}
	
	body {
		 background-image: url('db5.jpg');
		 background-repeat: no-repeat;
		 background-attachment: fixed;  
		 background-size: 1750px 750px;
	}
	
	#frm{  
		border: solid gray 1px; 		
		width:35%;  
		border-radius: 0.5px;  
		margin: 40px auto;  
		background: #909090;  
		padding: 20px; 
		box-shadow: 5px 10px #989898;
	} 

	#table1{  
		width:38%;  
		height:10%;
		background: #f8f8f8;  
		box-shadow: 4px 10px #989898;
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
<body >  
    <div  style="background-color:#2c5e91;padding:15px;height: 85px;">
	<span class="header">
		<span style="font-size: 45px;color:white;vertical-align:middle"><center>Digital Balloting</center></span></img>
		<span style="font-size: 20px;color:white;margin-right: 100px;"><center><i>Vote the change you want to see in the world!</i></center></span>
	</span>
	</div>
	
	<ul>
		  <li><a  href="DigitalBalloting_login.php">Home</a></li>
		  <li><a  class="active" href="db_candidate_registration.php">Candidate registration</a></li>
		  <li><a  href="db_register_copy.php">Voter registration</a></li>
		  <li style="float:right"><a href="db_admin.php">Admin login</a></li>
<	</ul>
	
	<br><table  style="width:100px;" align=center id = "table1"><tr><td style="width=400px;">
	<fieldset>
	<legend style="font-size:20px;"><b>Candidate Info</b></legend>
	
	<form name="f3" action = "db_authentication3.php" onsubmit="return validation()" method = "POST" enctype="multipart/form-data">
	<table class = 'a1'>
		<tr style="line-height:3">
			<td><b style="font-size:1.2vw;font-family:georgia;width=300px;">Voter ID</b></td>
			<td><input type="text" id="voterid" name="voterid" placeholder="your ID here" pattern="[0-9]{10}" title="Voter ID should contain 10 integers only" style="width:170px;height:30px;font-family:georgia;border-radius: 15px;"></td>
			<td><b style="font-size:1.2vw;font-family:georgia;width=300px;">Name</b></td>
			<td><input type="text" id="cname" name="cname" placeholder="your Name here" style="width:170px;height:30px;font-family:georgia;border-radius: 15px;"></td>
		</tr>
		<tr style="line-height:3">
			<td><b style="font-size:1.2vw;font-family:georgia;width=300px;">DOB</b></td>
			<td><input type="date" id="dob" name="dob" placeholder="your DOB here" style="width:170px;height:30px;font-family:georgia;border-radius: 15px;"></td>
		</tr>
		<tr>
			<td><b style="font-size:1.2vw;font-family:georgia;width=300px;">Phone Number</b></td>
			<td><input type="number" id="cnumber" name="cnumber" placeholder="xxxxxxxxxx" pattern="[0-9]{10}" title="Should contain 10 integers only" style="width:170px;height:30px;font-family:georgia;border-radius: 15px;"></td>
			<td><b style="font-size:1.2vw;font-family:georgia;width=300px;">Email ID</b></td>
			<td><input type="text" id="email" name="email" placeholder="your Email ID here" style="width:170px;height:30px;font-family:georgia;border-radius: 15px;"></td>
		</tr>
		<tr style="line-height:3">
			<td><b style="font-size:1.2vw;font-family:georgia;width=170px;">Constituency</b></td>
			<td>
				<select id="cn1" name="cn"  style="width:170px;height:30px;border-radius: 15px;">
				<?php
					include('db_connection.php');
					$query = "select * from constituency";
					$results = mysqli_query($con,$query);
					while ($rows = mysqli_fetch_assoc($results))
					{
					?>
					<option style="width:170px;height:30px;font-family:georgia;border-radius: 15px;" value="<?php echo $rows['cname'];?>"><?php echo $rows['cname'];?></option>

					<?php
					} 
					?>
				</select>
			</td>
			<td><b style="font-size:1.2vw;font-family:georgia;width=170px;">Party</b></td>
			<td>
				<select id="pn1" name="pn"  style="width:170px;height:30px;border-radius: 15px;">
				<?php
					include('db_connection.php');
					$query = "select * from party";
					$results = mysqli_query($con,$query);
					while ($rows = mysqli_fetch_assoc($results))
					{
					?>
					<option style="width:170px;height:30px;font-family:georgia;border-radius: 15px;" value="<?php echo $rows['pname'];?>"><?php echo $rows['pname'];?></option>

					<?php
					} 
					?>
				</select>
			</td>
		</tr>
		<tr style="line-height:3">
			<td><b style="font-size:1.2vw;font-family:georgia;width=170px;border-radius: 15px;">Password</b></td>
			<td><input type="password" id="pw" name="pw" placeholder="your password here" style="width:170px;height:30px;font-family:georgia;border-radius: 15px;"></td>
			<td><b style="font-size:1.2vw;font-family:georgia;width=400px;border-radius: 15px;">Confirm Password</b></td>
			<td><input type="password" id="pw" name="pw2" placeholder="your password here" style="width:170px;height:30px;font-family:georgia;border-radius: 15px;"></td>
		</tr>
		<tr style="line-height:3">
			<td><b style="font-size:1.2vw;font-family:georgia;width=170px;border-radius: 15px;">Image</b></td>
			<td><input type="file" name="uploadfile" value="" /></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td><center><input type = "submit" name= "registration" class="button button4" onclick="validation()" value = "Register" ></center></td>
		</tr>
	</table>
	</form>
	</fieldset>
	</td></tr></table>

    <script>  
			
            function validation()  
            {  
                var i=document.f3.voterid.value;  
                var n=document.f3.cname.value;
				var d=document.f3.dob.value;				
				var c=document.f3.cnumber.value;
				var e=document.f3.email.value;
				var p=document.f3.pw.value;
				var p2=document.f3.pw2.value;
                if(i.length=="" && n.length=="" && d.length=="" && c.length=="" && p.length=="" && p2.length=="" && e.length=="") {  
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
                    alert("Candidate Name field  is empty");  
                    return false;  
                    }
					else if (d.length=="") {  
                    alert("Date Of Birth field  is empty");  
                    return false;  
                    }
					else if (c.length=="") {  
                    alert("Phone number field is empty");  
                    return false;  
                    }
					else if (p.length=="") {  
					document.write.(p);
                    alert("Password field is empty");  
                    return false;  
                    }
					else if (p2.length=="") {  
                    alert("Confirm password field is empty");  
                    return false;  
                    }
					else if (e.length=="") {  
                    alert("Email field is empty");  
                    return false;  
                    }
                }
				if(p != p2)
				{
					alert("Passwords are not same");  
                    return false;
				}
            }  
        </script>  
</body>     
</html>

<html>  
<head>  
    <title>PHP login system</title>  
	<style>
	
	.header img {
	  float: left;
	  width: 100px;
	  height: 100px;
	}

	.header h1 {
	  position: relative;
	  top: 18px;
	  left: 10px;
	}
	
	.header h4 {
	  position: relative;
	  top: 18px;
	  left: 20px;
	}
	
	#frm{  
		border: solid gray 1px; 		
		width:30%;  
		border-radius: 0.5px;  
		margin: 40px auto;  
		background: #f8f8f8;  
		padding: 20px; 
		box-shadow: 5px 10px #989898;
	}  
	.asterisk_input::after {
		content:"*"; 
		color: #e32;
		position: absolute; 
		margin: 0px 0px 0px -20px; 
		font-size: xx-large; 
		padding: 0 5px 0 0; }
	
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
	</style>
</head>  
<body>  
    <div  style="background-color:#2c5e91;padding:15px;height: 85px;">
	<span class="header">
		<img src="logo.png" alt="digital balloting logo" style="width:100px;height:100px;vertical-align:left;">
		<span style="font-size: 45px;color:white;vertical-align:middle"><center>Digital Balloting</center></span></img>
		<span style="font-size: 20px;color:white;margin-right: 100px;"><center><i>Vote the change you want to see in the world!</i></center></span>
		<!--<h4 style="font-size: 30px;color:white;"><i>Vote the change you want to see in the world</i></h4>-->

	</span>
	</div>
	<div class="required" id = "frm">  
        <h1><center>Voter Registration</center></h1>  
        <form name="f1" action = "db_authentication.php" method = "POST" >  
            <p>  
                <b style="font-size:1.2vw;font-family:georgia;">Voter ID:</b><br>
				<center><input type="text" id="voterid" name="voterid" placeholder="your ID here" style="height:30px;font-family:georgia;"><span class="asterisk_input"></span></center><br>
            </p> 

			<p>  
                <b style="font-size:1.2vw;font-family:georgia;">Voter Name:</b><br>
				<center><input type="text" id="votername" name="votername" placeholder="your Name here" style="height:30px;font-family:georgia;"><span class="asterisk_input"></span></center><br>
            </p>  
			
			<p>  
                <b style="font-size:1.2vw;font-family:georgia;">Date Of Birth:</b><br>
				<center><input type="date" id="dob" name="dob" placeholder="your DOB here" style="height:30px;font-family:georgia;"></center><br>
            </p>  
			
			<p>  
                <b style="font-size:1.2vw;font-family:georgia;">Phone Number:</b><br>
				<center><input type="number" id="cnumber" name="cnumber" placeholder="xxxxxxxxxx" style="height:30px;font-family:georgia;"></center><br>
            </p>  
			
			<p>  
                <b style="font-size:1.2vw;font-family:georgia;">Email ID:</b><br>
				<center><input type="text" id="email" name="email" placeholder="your Email ID here" style="height:30px;font-family:georgia;"></center><br>
            </p> 
			
			<p>  
                <b style="font-size:1.2vw;font-family:georgia;">Constituency Name:</b><br>
				
					<?php
					echo "<center><select name='cname' style='width:200px' form='f1'></center>";
					echo "hiii";
					include('db_connection.php');
					$query = "select * from db_constituency";
					$results = mysqli_query($con,$query);
					while ($rows = mysqli_fetch_assoc($results))
					{
					?>
					<option value="<?php echo $rows['cname'];?>"><?php echo $rows['cname'];?></option>

					<?php
					} 
					?>
				</select></center>
			</p> 
			
            <p>  
                <b style="font-size:1.2vw;font-family:georgia;">Password:</b><br>
				<center><input type="password" id="password" name="password" placeholder="Your password here" style="height:30px;font-family:georgia;"><span class="asterisk_input"></span></center><br><br>  
            </p>  
            <p>     
                <center><input type =  "submit" name = "login" id = "btn" value = "Login" /></center>  <br><br>
				<center><input type = "submit" name= "registration" id = "btn2" value = "Create account" ></center>
            </p>  
        </form>  
    </div>   
    <script>  
			
            function validation()  
            {  
                var id=document.f1.userid.value;  
                var ps=document.f1.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("Aadhar ID and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("Aadhar is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>

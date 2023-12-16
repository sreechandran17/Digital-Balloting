<html>  
<head>  
    <title>PHP login system</title>  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	
	body {
		 background-image: url('db5.jpg');
		 background-repeat: no-repeat;
		 background-attachment: fixed;  
		 background-size: 1750px 750px;
	}
	
	#frm{  
		border: solid gray 1px; 		
		width:20%;  
		border-radius: 0.5px;  
		margin: 5px auto;  
		background: #f8f8f8;  
		padding: 27px; 
		box-shadow: 5px 10px #989898;
		margin-left: 38%
	}  
	
	#btn{  
		color: #fff;  
		background: #337ab7;  
		padding: 10px;  
		
		border-radius: 15px;
		height: 40px; width:260px;
		cursor: pointer;
	}  
	#btn2{  
		color: #fff;  
		height: 40px; width:80px;
		background: #337ab7;  
		padding: 10px;  
		margin-left: 10%;	
		cursor: pointer;
		text-align: center;
	    text-decoration: none;
	    display: inline-block;
		border-radius: 12px;
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
	
	.input-icons i {
			position: absolute;
		}
		
		.input-icons {
			width: 100%;
			margin-bottom: 10px;
		}
		
		.icon {
			padding: 10px;
			min-width: 40px;
		}
		
		.input-field {
			width: 100%;
			padding: 10px;
			text-align: center;
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
		  <li><a  href="db_register_copy.php">Voter registration</a></li>
		  <li style="float:right"><a class="active" href="db_admin.php">Admin login</a></li>
<	</ul>
	<br>
	<div id = "frm" class="input-icons">  
        <h1><center><b>Admin Login</b></center></h1>  
        <form name="f1" action = "db_authentication5.php" method = "POST" >  
            <p>  
                <!--<b style="font-size:1.2vw;font-family:georgia;">Voter ID:</b>-->
				<center><i class="fa fa-user icon"></i><input class="input-field" type="text" style="font-size: 12pt; height: 40px; width:280px;border-radius: 18px;text-align: center;" id="voterid" name="id" placeholder="Admin ID" style="height:30px;font-family:georgia;align:left;"><span class="asterisk_input"></span><br></center><br><br>
				<center><i class="fa fa-key icon"></i><input class="input-field" type="password" style="font-size: 12pt; height: 40px; width:280px;border-radius: 18px;text-align: center;" id="password" name="password" placeholder="Password" style="height:30px;font-family:georgia;"><span class="asterisk_input"></span></center><br><br></center>     
                <center><input type =  "submit" name = "login" id = "btn" onclick="validation()" value = "Login" /></center>
            </p>  
        </form>  
    </div>   
    <script>  
			
            function validation()  
            {  
                var id=document.f1.voterid.value;  
                var ps=document.f1.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("Voter ID and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("voter is empty");  
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

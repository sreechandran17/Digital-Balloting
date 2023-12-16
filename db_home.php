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
	
	ul {
		  list-style-type: none;
		  margin: 0px;
		  padding: 5;
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
		
	img {
		  vertical-align: middle;
		}

	.container {
		  position: relative;
		}

	.mySlides {
		  display: none;
		}

	.cursor {
		  cursor: pointer;
		}

	.prev,
	.next {
		  cursor: pointer;
		  position: absolute;
		  top: 40%;
		  width: auto;
		  padding: 16px;
		  margin-top: -50px;
		  color: white;
		  font-weight: bold;
		  font-size: 20px;
		  border-radius: 0 3px 3px 0;
		  user-select: none;
		  -webkit-user-select: none;
		}

		.next {
		  right: 0;
		  border-radius: 3px 0 0 3px;
		}

		.column {
		  float: left;
		  width: 16.66%;
		}

		.demo {
		  opacity: 0.6;
		}

		.demo:hover {
		  opacity: 1;
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
	<br>
	</div>
	<ul>
		  <li style="font-size:1.8vw;"><a class="db_home.php" href="#home"><b> Home</b></a></li><hr>
		  <li style="font-size:1.8vw;"><a href="db_voting.php"><b>Profile page</b></li><hr>
		  <li style="font-size:1.8vw;"><a href="db_votingNew.php"><b> voting</b><img src="apieegif.gif" /></a></li><hr>
	</ul>
	<div style="margin-left:23%;padding:1px 16px;height:1000px;">
		<h2 style="line-height:2.4;text-align:center;padding:15px;margin-right: 50px;color:white;"><center>	"The ignorance of one voter in a democracy impairs the security of all"</center></h2>
		<p style = "margin-left: 70%;color:white;"><i>- John F.Kennedy</i></p>
		<div class="container">
		<a class="prev" onclick="plusSlides(-1)">❮</a>
		<center>
		  <div class="mySlides">
			<img src="dbb1.jpg" style="width:60%;height:30%;">
		  </div>

		  <div class="mySlides">
			<img src="dbb2.jpg" style="width:60%;height:30%;">
		  </div>

		  <div class="mySlides">
			<img src="dbb3.jpg" style="width:60%;height:30%;">
		  </div>
			
		  <div class="mySlides">
			<img src="dbb4.jpg" style="width:60%;height:30%;">
		  </div>

		  <div class="mySlides">
			<img src="dbb5.jpg" style="width:60%;height:30%;">
		  </div>
			
		  <div class="mySlides">
			<img src="dbb6.jpg" style="width:60%;height:30%;">
		  </div>
		 <a class="next" onclick="plusSlides(1)">❯</a>
		 <br>
		  <div class="row">
			<div class="column">
			  <img class="demo cursor" src="dbb1.jpg" style="width:100%" onclick="currentSlide(1)" >
			</div>
			<div class="column">
			  <img class="demo cursor" src="dbb2.jpg" style="width:100%" onclick="currentSlide(2)" >
			</div>
			<div class="column">
			  <img class="demo cursor" src="dbb3.jpg" style="width:100%" onclick="currentSlide(3)" >
			</div>
			<div class="column">
			  <img class="demo cursor" src="dbb4.jpg" style="width:100%" onclick="currentSlide(4)" >
			</div>
			<div class="column">
			  <img class="demo cursor" src="dbb5.jpg" style="width:100%" onclick="currentSlide(5)" >
			</div>    
			<div class="column">
			  <img class="demo cursor" src="dbb6.jpg" style="width:100%" onclick="currentSlide(6)" >
			</div>
		  </div>
		  </center>
		</div>

		<script>
				var slideIndex = 1;
				showSlides(slideIndex);

				function plusSlides(n) {
				  showSlides(slideIndex += n);
				}

				function currentSlide(n) {
				  showSlides(slideIndex = n);
				}

				function showSlides(n) {
				  var i;
				  var slides = document.getElementsByClassName("mySlides");
				  if (n > slides.length) {slideIndex = 1;}
				  if (n < 1) {slideIndex = slides.length}
				  for (i = 0; i < slides.length; i++) {
					  slides[i].style.display = "none";
				  }
				  slides[slideIndex-1].style.display = "block";
				}
		</script>
	</div>
</body>     
</html>

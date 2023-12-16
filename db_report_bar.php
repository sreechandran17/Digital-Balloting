<?php
	$cn = $_SESSION['cn'];
	$con = mysqli_connect("localhost","root","","balloting");
	if(!$con)
	{
		echo " Not connected";
	}
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawStuff);
      function drawStuff() {
        var chartDiv = document.getElementById('chart_div');

        var data = google.visualization.arrayToDataTable([
          ['Candidate name', 'Count'],
         <?php
         $sql = "SELECT * FROM candidate where cname = '$cn'";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['candidate_name']."',".$result['vote_count']."],";
          }

         ?>
        ]);

        var materialOptions = {
          width: 600,
          chart: {
            title: 'Election currect result scenario',
          }
        };        

        function drawMaterialChart() {
          var materialChart = new google.charts.Bar(chartDiv);
          materialChart.draw(data, google.charts.Bar.convertOptions(materialOptions));
        }      

        drawMaterialChart();
    };
    </script>
  </head>
  <body>
    <br>
	
			<div id='chart_div' style='width: 600px; height: 350px;margin-left: 12%;'></div>
	
  </body>
</html>

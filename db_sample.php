<?php
					//echo "<select id="cname1" name="cname" style="width:200px" form="f1">";
					echo "hiii";
					include('db_connection.php');
					$query = "select * from db_constituency";
					$results = mysql_query($query);
					echo mysql_num_rows($result);
					while ($rows = mysql_fetch_assoc($results))
					{
					?>
					<option value="<?php echo $rows['cname'];?>"><?php echo $rows['cname'];?></option>

					<?php
					} 
?>
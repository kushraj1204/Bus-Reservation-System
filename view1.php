<?php include"connection.php";

$id=$_POST['J_no'];
$query=mysql_query("select * from `journey` where `J_no`='$id'");

?>
<form name="hey" method="POST" action="edit1.php">
<table cellpadding="10">
<?php
if($query)
		{
			while($row=mysql_fetch_assoc($query))
		{	
			
		echo '<tr>';
		echo '<td>Journey no</td><td>'.$row['J_no'].'<input type="hidden" name="id" value='.$row['J_no'].'></td></tr>';

		echo '<tr><td>Bus no</td><td><input type="text" name="bus_no" value='.$row['Bus_no'].'></td></tr>';

		echo '<tr><td>Date</td><td><input type="text" name="J_date" value='.$row['J_date'].'></td></tr>';

		echo '<tr><td>Time</td><td><input type="text" name="J_time" value='.$row['J_time'].'></td></tr>';
		echo '<tr><td>Shift</td><td><input type="text" name="shift" value='.$row['Shift'].'></td></tr>';

		echo '<tr><td>From</td><td><input type="text" name="from" value='.$row['from'].'></td></tr>';

		echo '<tr><td>To</td><td><input type="text" name="to" value='.$row['To'].'></td></tr>';

		echo '<tr><td>Fare</td><td><input type="text" name="fare" value='.$row['fare'].'></td></tr>';


		 
		echo '<tr><td></td><td><input type="submit" name="submit"  value="Submit"></td></tr>';
		
		}

		}
		echo '</table></form>';













?>





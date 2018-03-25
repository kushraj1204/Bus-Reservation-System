<?php include"connection.php";

$bus=$_POST['busno'];
$query=mysql_query("select * from `bus` where `Bus_no`='$bus'");

?>
<form name="hey" method="POST" action="edit3.php">
<table cellpadding="10">
<?php
if($query)
		{
			while($row=mysql_fetch_assoc($query))
		{	
			
		echo '<tr>';
		echo '<td>Bus no</td><td>'.$row['Bus_no'].'<input type="hidden" name="busno" value='.$row['Bus_no'].'></td></tr>';
		echo '<tr><td>Travels id</td><td><input type="text" name="id" value='.$row['Travels_id'].'></td></tr>';
		echo '<tr><td>No of seats</td><td><input type="text" name="seatno" value='.$row['Totalseats'].'></td></tr>';
		 
		echo '<tr><td></td><td><input type="submit" name="submit"  value="Submit"></td></tr>';
		
		}

		}
		echo '</table></form>';













?>





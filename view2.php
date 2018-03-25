<?php include"connection.php";

$id=$_POST['T_id'];
$query=mysql_query("select * from `travels` where `Travels_id`='$id'");

?>
<form name="hey" method="POST" action="edit2.php">
<table cellpadding="10">
<?php
if($query)
		{
			while($row=mysql_fetch_assoc($query))
		{	
			
		echo '<tr>';
		echo '<td>Travels id</td><td>'.$row['Travels_id'].'<input type="hidden" name="id" value='.$row['Travels_id'].'></td></tr>';

		echo '<tr><td>Name</td><td>'.$row['Name'].'<input type="hidden" name="name" value='.$row['Name'].'></td></tr>';
		echo '<tr><td>Location</td><td><input type="text" name="location" value='.$row['LOCATION'].'></td></tr>';
		echo '<tr><td>Website</td><td><input type="text" name="website" value='.$row['website'].'></td></tr>';

		echo '<tr><td>Contact no.</td><td><input type="text" name="contact" value='.$row['contact'].'></td></tr>';

		 
		echo '<tr><td></td><td><input type="submit" name="submit"  value="Submit"></td></tr>';
		
		}

		}
		echo '</table></form>';













?>





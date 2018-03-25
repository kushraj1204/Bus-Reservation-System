<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 
<?php include 'header.php' ?>
<div id="right_">
	<br/>
<?php 
$conn=mysql_connect('localhost','root','') or die(mysql_error());
$select=mysql_select_db('bus')or die(mysql_error());
if(!isset($_POST['khoj']))
{
	header("Location: index.php");

}
else
{
	$date=$_POST['date'];
$from =$_POST['bata'];
$to =$_POST['samma'];
$yatra =$_POST['yatra'];
if($yatra=="Any")
	{
		$a="NIGHT"; $b="DAY" ;
	}
else
	{
		$a=$yatra; $b=$yatra ;
	}

$query ="select * from `journey`,`bus`,`travels` where travels.Travels_id=bus.Travels_id AND 
bus.Bus_no=journey.Bus_no AND journey.from='$from' AND journey.To='$to' AND  
journey.Shift IN ('$a','$b') AND journey.J_date='$date' ";

 ?>

	<form name=book action="book.php" method="POST">
	<input type="hidden" name="from" value= "<?php echo $from;?>" >
	<input type="hidden" name="to" value= "<?php echo $to;?>" >
	<input type="hidden" name="date" value=" <?php echo $date;?>" >
	<input type="hidden" name="shift" value= "<?php echo $a;?>" >
	<input type="hidden" name="shifts" value= "<?php echo $b;?>" >
<center><table border=1 cellpadding=10 cellspacing=0>
	<br/><tr>
		<td>S.no</td>
		<td>J_no</td>
		<td>Travels Company</td>
		<td>Bus no.</td>
		<td>J_time</td>
		<td>Shift</td>
		<td>Book</td>
		
	</tr>

<?php
$i=0;
if($result=mysql_query($query))
		{	
			while($row=mysql_fetch_assoc($result))
		{	$i++; } }


		if($i!=0)
	{	$i=0;
				echo'Please choose a bus of your choice to book <br/>';
		if($result=mysql_query($query))
		{
			while($row=mysql_fetch_assoc($result))
		{	$i++;
			/*$query1='select `Travels_id` from bus where `Bus_no`=$row['Bus_no']';
			$result1=mysql_query($query1);*/
		echo '<tr>';
		echo '<td>'.$i.'</td>';
		echo '<td>'.$row['J_no'].'</td>';
		echo '<td>'.$row['Name'].'</td>';
		echo '<td>'.$row['Bus_no'].'</td>';
		//echo '<td>'.$row['J_date'].'</td>';
		echo '<td>'.$row['J_time'].'</td>';
		echo '<td>'.$row['Shift'].'</td>';  
		echo '<td> <input type="radio" name="bookit" checked value='.$row['J_no'].'></td>';
		echo '<tr>';}
echo '<br/><br/></table></center>';echo '<br/><br/><input type="Submit" name="book" value="Book" ></td>';
echo'</form>';
}
		}

		else
			{echo '<tr>';
		echo '<td colspan=7> Sorry no bus was found matching your travel schedule.</td></tr>';
		echo '<br/><br/></table></center></form>';
		header("Refresh: 02;url=index.php");}
}
?>
<br/><br/>
</div>

   <?php include 'footer.php' ?>
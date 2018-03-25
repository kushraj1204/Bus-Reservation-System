
<?php include 'header.php'; 



?>
<div id="right_">
	<?php 
	$a=$_POST['av'];
	$b=$_POST['seatno'];
	$c=$a-$b;

	if(!$_POST['naam'] OR !$_POST['thegana'] OR !$_POST['phone'] OR !$_POST['seatno'])
	{	echo"You must enter all the asked details in order to make booking.";
		header("Refresh: 02;url=index.php");}
		else
		{	if($_POST['seatno']>5 )
	{
		echo"You cannot make a request for more than 5 seats.";
		header("Refresh: 02;url=index.php");
	}
	else if
	($c<0)
	{
		echo"Sorry seats are unavailable as per your need.";
		header("Refresh: 02;url=index.php");
	}

else

	{





$J_no=$_POST['J_no']; ?>
	
<br/><br/>
<form name="askifsure" method="POST" action="makebooking.php">
	<input type="hidden" name="from" value= "<?php echo $_POST['from'];?>" >
	<input type="hidden" name="to" value= "<?php echo $_POST['to'];?>" >
	<input type="hidden" name="date" value=" <?php echo $_POST['date'];?>" >
	<input type="hidden" name="J_no" value=" <?php echo $J_no ?>" >
	<input type="hidden" name="naam" value= "<?php echo $_POST['naam'];?>" >
	<input type="hidden" name="thegana" value= "<?php echo $_POST['thegana'];?>" >
	<input type="hidden" name="phone" value=" <?php echo $_POST['phone'];?>" >
	<input type="hidden" name="seatno" value=" <?php echo $_POST['seatno']; ?>" >
		<input type="hidden" name="b" value=" <?php echo $_POST['booked']; ?>" >
	<center>
<table  border=1 cellpadding=10 cellspacing=0>		
	<?php



	echo'<tr>';
		echo'<td>';echo "Name";echo'</td>';
		echo'<td>'.$_POST['naam'].'</td>';
	echo'</tr>';
	echo'<tr>';
		echo'<td>';echo "No. of seats";echo'</td>';
		echo'<td>'.$_POST['seatno'].'</td>';
	echo'</tr>';
	echo'<tr>';
		echo'<td>';echo "Gender";echo'</td>';
		echo'<td>'.$_POST['sex'].'</td>';
	echo'</tr>';
	echo'<tr>';
		echo'<td>';echo "Address";echo'</td>';
		echo'<td>'.$_POST['thegana'].'</td>';
	echo'</tr>';
	echo'<tr>';
		echo'<td>';echo "Contact no";echo'</td>';
		echo'<td>'.$_POST['phone'].'</td>';
	echo'</tr>';
	
	

?>
</table>
<br/><br/>
Are you sure you want to make this booking?<br/><br/>
Yes<input type="radio" name="yes" checked value="1">
No<input type="radio" name="yes" value="0"><br/><br/>
<input type="submit" name="Submit" value="Submit" ><br/><br/>

</center>
</form>



</form>


</div>


<?php 
} }
include 'footer.php' ?>
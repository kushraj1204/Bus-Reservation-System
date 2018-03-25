
<?php include "connection.php";
if(!isset($_POST['book']))
{
	 include'index.php';

}
else  {   
	?>
<?php  
$ab=$_POST['bookit'];
$query ="select * from `journey` WHERE `J_no`='$ab' ";
			
		$result=mysql_query($query);

			while($row=mysql_fetch_assoc($result))
			{	$total=$row['totalseats'];
				$booked=$row['seatsbooked'];
				$av=$total-$booked;
			}


if($av==0)
{
	echo"Sorry booking is full for this bus.Please try another one or some time later for this one";
	header("Refresh: 02;url=index.php");
}
else
{
	?><br/> <br/>Please enter your details<br/><br/> <?php

echo $av;echo " seats are available" ?>
	<form name="booker" method="POST" action="askifsure.php">
		<center><table>
			<tr>
				<td>
		Name:</td> 
		<td> <input type="text" name="naam"  placeholder="Full Name"><br/><br/></td>
				</tr>
		<tr><td colspan=2><center>
								Male    <input type="radio" name="sex" value="M" checked>
								Female    <input type="radio" name="sex" value="F"><br/><br/></td></tr>
							</center>
		<tr>
			<td>Address:</td>
			<td><input type="text" name="thegana"  placeholder="Address"><br/><br/></td></tr>		
		<tr>
			<td>Contact no:</td>
			<td><input type="text" name="phone"  placeholder="Contact no."><br/><br/></td></tr


<tr>
			<td>No. of seats:</td>
			<td><input type="text" name="seatno"  placeholder="No. of seats (max 5)"><br/><br/></td></tr>
					<tr><td>&nbsp;</td><td>

	<input type="hidden" name="from" value= "<?php echo $_POST['from'];?>" >
	<input type="hidden" name="to" value= "<?php echo $_POST['to'];?>" >
	<input type="hidden" name="date" value=" <?php echo $_POST['date'];?>" >
	<input type="hidden" name="a" value=" <?php echo $_POST['a'];?>" >
	<input type="hidden" name="b" value=" <?php echo $_POST['b'];?>" >
	<input type="hidden" name="J_no" value="<?php echo $J_no ?>">
	<input type="hidden" name="av" value="<?php echo $av ?>">
	<input type="hidden" name="booked" value="<?php echo $booked ?>">

		<input type="submit" name="bookit" value="Book" ></td></tr><br/><br/>
		
	</table></center>
	 	</form>
	 	
<?php 
}} ?>
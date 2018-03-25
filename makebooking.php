<?php include 'header.php' ?>

<div id="right_">
		
<?php 
if(isset($_POST['Submit']) && ($_POST['yes']==1))
	{
		$J_no=$_POST['J_no'];
		$query1="select * from `journey` where `J_no`=$J_no";
		$result=mysql_query($query1);
		while($row=mysql_fetch_assoc($result))
			{	$Bus_no=$row['Bus_no'];$J_date=$row['J_date'];
				$from=$row['from'];$J_time=$row['J_time'];
				$To=$row['To'];$Shift=$row['Shift'];
			}
			$naam=$_POST['naam'];
			$phone=$_POST['phone'];
			$seatno=$_POST['seatno'];
			$b=$_POST['b'];
			$be=$b+$seatno;
			
			$time = time();

			

		$query2= "insert into `booking` 
		(`J_no`,`customer_name`,`contact`,`seatno`,`booking_time`,`status`,`payment`) 
		values('$J_no','$naam','$phone','$seatno','$time','1','0')";
		$result1=mysql_query($query2);

		if($result1)
			{



		$query3="update `journey`
		set `seatsbooked`='$be'
		where `J_no`='$J_no'";

		$result2=mysql_query($query3);

			
			if($result2)


			{

		 echo"Booking made.";echo'<br/>'; echo"Please let us serve you again in the future.";
		header("Refresh: 02;url=index.php");	}


	else
	{
		echo"Booking not made.";echo'<br/>'; echo"Always remember us to make bus ticket reservations.";
		header("Refresh: 02;url=index.php");

	}








	} 
		

	else
	{
		echo"Booking not made.";echo'<br/>'; echo"Always remember us to make bus ticket reservations.";
		header("Refresh: 02;url=index.php");

	}




	}

	
	else
	{
		echo"Booking not made.";echo'<br/>'; echo"Always remember us to make bus ticket reservations.";
		header("Refresh: 02;url=index.php");

	}

	

?>
</div>

<?php include 'footer.php' ?>
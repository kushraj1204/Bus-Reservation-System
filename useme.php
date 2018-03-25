<?php

/*date_default_timezone_set('Nepal/Kathmandu');
$timezone = date_default_timezone_get();
echo "The current server timezone is: " . $timezone;

 $date = date('m/d/Y h:i:s a', time());


$date = date('Y-m-d H:i:s');
echo $date;*/



/*$time = date('H:i:s');

echo $time;
echo'<br/><br/>';
$time=$time-$time;
echo $time;
?>
<script language="JavaScript">
	 	function check()
	 	{
	 		var a=document.booker.seatno.value;
	 		pat=/^[0-9]{1,3}$/;
	 		if(test.a(pat)=TRUE)
	 			{<?php header("url=makebooking.php"); ?>}
	 		else
	 			alert("Enter a proper no");
	 	} 
	 	</script>
	 	$date = date('Y-m-d H:i:s');
echo $date;


if (isset($_GET['p']) && ctype_digit($_GET['p']))
{
  // the get input contains a positive number and is safe
}



$phone = '000-0000-0000';

if(preg_match("/^[0-9]{10}$/", $phone)) {
  // $phone is valid
} 
*/

include "connection.php";
$query="SELECT * 
FROM  `bus` ,  `travels` ,  `journey` 
WHERE bus.Travels_id = travels.Travels_id
AND bus.Bus_no = journey.Bus_no";
$result=mysql_query($query);
if($result)
echo "success";
?>

if($result)
			{ 

		$query1="update `journey`
		set `seatsbooked`='$be'
		where `J_no`='$J_no'";

		$result1=mysql_query($query1);

			
			if($result1)

			{ echo"Booking made.";echo'<br/>'; echo"Please let us serve you again in the future.";
		header("Refresh: 02;url=index.php");	} 
		}
	}
<?php 
$a=time();
echo $a;

?>

<?php 
include "connection.php" ?>

<?php 
$J=$_POST['id'];
$bus=$_POST['bus_no'];
$J_date=$_POST['J_date'];
$J_time=$_POST['J_time'];
$from=$_POST['from'];
$to=$_POST['to'];
$shift=$_POST['shift'];
$fare=$_POST['fare'];


$query0="select * from `bus` where `Bus_no`='$bus'";
$result0=mysql_query($query0);
$n=mysql_num_rows($result0);
echo $n;
if($n=1)
{ 
	

$query="update `journey`
		(`Bus_no`='$bus',`J_date`='$J_date',`J_time`='$J_time',`from`='$from',`To`='$to',`Shift`='$shift',`fare`='$fare'
		where `J_no`='$J'";

$result=mysql_query($query);
if(!$result)
{echo "Details not added";}
header("Refresh: 02;url=index.php");
}
else
{
	echo"The bus no you have entered is not in in the database.Register the bus into the database first";
	header("Refresh: 02;url=index.php");
}


?>
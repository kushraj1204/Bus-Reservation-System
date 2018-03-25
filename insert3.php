<?php 
include "connection.php" ?>

<?php 

$bus=$_POST['busno'];
$id=$_POST['id'];
$seatno=$_POST['seatno'];


$query0="select * from `travels` where `Travels_id`='$id'";
$result0=mysql_query($query0);
$n=mysql_num_rows($result0);
echo $n;
if($n=1)
{ 
	

$query="insert into `bus`
		(`Bus_no`,`Travels_id`,`Totalseats`)
		values('$bus','$id','$seatno')";

$result=mysql_query($query);
if(!$result)
{echo "Details not added";}
header("Refresh: 02;url=index.php");
}
else
{
	echo"The travel agency id you have entered is not in in the database.Register the travel agency into the database first";
}


?>
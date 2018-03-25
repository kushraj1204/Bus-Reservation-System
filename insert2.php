<?php 
include "connection.php" ?>

<?php 

$name=$_POST['name'];
$location=$_POST['location'];
$website=$_POST['website'];
$contact=$_POST['contact'];


$query="insert into `travels`
		(`Name`,`LOCATION`,`website`,`contact`)
		values('$name','$location','$website','$contact')";

$result=mysql_query($query);
if(!$result)
{echo "Details not added";}
header("Refresh: 02;url=index.php");


?>
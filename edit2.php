<?php 
include "connection.php" ?>

<?php 
$id=$_POST['id'];

$name=$_POST['name'];
$location=$_POST['location'];
$website=$_POST['website'];
$contact=$_POST['contact'];


$query="UPDATE `travels`
		SET `LOCATION`=$location, `website`='$website',`contact`='$contact'
		WHERE `Travels_id`='$id'";

$result=mysql_query($query);
if(!$result)
{echo "Details not added";}
header("Refresh: 02;url=index.php");


?>
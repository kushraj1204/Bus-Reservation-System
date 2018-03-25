<?php include 'header.php' ?>
<div id="right_">
	
	
<?php 
if(!isset($_POST['book']))
{
	echo "Not an authentic access."; }

	else


{
		$from=$_POST['from'];
		$to=$_POST['to'];
		$date=$_POST['date'];


		$a=$_POST['shift'];
		$b=$_POST['shifts'];
		$J_no=$_POST['bookit'];



include 'app.php';
}

?>
</div>

<?php include 'footer.php' ?>
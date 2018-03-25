<?php include "connection.php";
include "header.php"; ?>
<div id="right_">
<?php
if(isset($_POST['submit']))
{
	if($_POST['what']=="1")
	{
		include "form1.php";

	}
     
     else if($_POST['what']=="2")

     {
          include "ask1.php";
     }

     
     else if($_POST['what']=="3")

     {
     	
          include "form2.php";
     }

     
     else if($_POST['what']=="4")

     {
     	include "ask2.php";
     }

     
     else if($_POST['what']=="5")

     {
     	include "form3.php";
     }

     
     else if($_POST['what']=="6")

     {
     	include "ask3.php";
     }

     else if($_POST['what']=="7")

     {
          include "payment.php";
     }

















}
else
{
     echo "Invalid Access";

}


?>
</div>
<?php include"footer.php" ?>
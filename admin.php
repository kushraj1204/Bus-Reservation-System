<?php 
include "connection.php"?>
<?php 
include "header.php"?>
<div id="right_">
<br/>
<h2>Welcome to the admin page.</h2>
<br/><br/>
<form name="option" method="POST" action="exec.php">
<center>
<table cellpadding="10">
<tr>
<td>
Insert Journey Details</td><td><input type="radio" name="what" value="1" checked> </td></tr>

<tr><td>Edit Journey Details</td><td><input type="radio" name="what" value="2"> </td></tr>

<tr><td>Add Travel Agency </td><td><input type="radio" name="what" value="3"> </td></tr>

<tr><td>Edit Travel Agency Details</td><td><input type="radio" name="what" value="4"> </td></tr>

<tr><td>Add Bus Details</td><td><input type="radio" name="what" value="5"> </td></tr>

<tr><td>Edit Bus Details</td><td><input type="radio" name="what" value="6"> </td></tr>

<tr><td>Confirm Booking Payment</td><td><input type="radio" name="what" value="7"> </td></tr>

<tr><td></td><td><input type="submit" name="submit" value="Submit"> </td></tr>

</table>
<br/>
</center>
</form>
<br/><br/>
</div>
<?php 
include "footer.php"?>











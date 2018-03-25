<?php include 'header.php' ?>
<?php include 'check.php' ?>


  <div id="right_">
  <form name="check" method="post" action="searchbus.php">
     <center>
       <h2> Please mention your travel specifications</h2>
     </center>
    <table cellpadding="10px" cellspacing="10px" width="">
                        <tr>
            
		<td></td> <td></td> <td></td> <td></td> <td></td>  
<td><br/>
        <select name="bata">
      <option hidden  >From</option>
      <?php
        $query=mysql_query('Select `from` from journey group by `from`');
        while($row=mysql_fetch_assoc($query))
        {
          echo "<option  >".$row['from']."</option>";
        }
      ?>
    </select> </td>
	<td></td>
     <td><br/>
      <select name="samma" >
      <option hidden> To</option>
        <?php
        $query=mysql_query('Select `to` from journey group by `to`');
        while($row=mysql_fetch_assoc($query))
        {
          echo "<option  >".$row['to']."</option>";
        }
      ?>
    </select> 
     </table>
<table cellpadding="10px" cellspacing="10px" width="">
<tr>
 <td>
<h2>Date of travel:</h2></td>
<td><input class="date" name="date" id="datepicker" type="text" value="YY/MM/DD" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'YY/MM/DD';}"></td>
</tr>
<tr><td></td>
<td><input type="radio" name="yatra" value="Any" checked="checked">
 Any
</tr>
<tr><td>Travel time:</td>
<td><input type="radio" name="yatra" value="DAY">Day
 </td></tr>
<tr><td></td>
<td><input type="radio" name="yatra" value="NIGHT">
  Night</td>
</tr>


<tr>
<td></td>
<td></td>

<td><input type="submit" name="khoj" value="Search Bus"></td>
</tr>
<tr></tr>
<table>
 </form> 
</div>

  
 
   <?php include 'footer.php' ?>

   

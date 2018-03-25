<?php include "connection.php" ?>
<form name="find" method="POST" action="hereyouare.php">
 <table>
 <tr>
 <td>Select the travels of which the id is to be found</td>
 <td>
  <select name="bata">
      <option hidden >Name</option>


      <?php 
        $query=mysql_query('Select `Name` from `travels` group by `Name`');
        if($query)
          echo "success";
        else
          echo "no success";
        while($row=mysql_fetch_assoc($query))
        {
          echo "<option>".$row['Name']."</option>";
          
        }
      ?>



    </select></td></tr>
    <tr><td></td>
 <td>   <input type="submit" name="submit" value="Submit">  </td> </tr>
 </table>
    </form>
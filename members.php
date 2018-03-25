<?php include 'header.php' ?>
  <div id="right_">
OUR TRAVEL PARTNERS:
<BR/>
<center><table border=1 cellpadding=10 cellspacing=0>
  <br/><tr>
    <td>S.no</td>
    <td>NAME</td>
    <td>LOCATION</td>

    <td>WEBSITE</td>
        <td>CONTACT</td>
    <tr>
         <?php
         $i=0;
        $query=mysql_query('Select * from travels order by `Name`');
        while($row=mysql_fetch_assoc($query))
        { $i++;
              echo '<tr>';
    echo '<td>'.$i.'</td>';
    echo '<td>'.$row['Name'].'</td>';
    echo '<td>'.$row['LOCATION'].'</td>';
        echo '<td>'.$row['website'].'</td>';
            echo '<td>'.$row['contact'].'</td>';
        }
    echo '</tr></table></center>';
        
      ?>
  </div>
 
  
 
   <?php include 'footer.php' ?>

   

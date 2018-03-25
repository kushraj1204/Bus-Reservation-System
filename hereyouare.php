  <?php
  		include "connection.php";
  		$name=$_POST['bata'];
        $query=mysql_query("Select * from `travels` where `Name`='$name'");
        while($row=mysql_fetch_assoc($query))
        {
          echo "The travels id is ".$row['Travels_id'];
        }

		header("Refresh: 03;url=admin.php");
      ?>
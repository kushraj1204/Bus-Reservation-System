<?php include 'connection.php' ?>

<?php

$query="select * from `booking`,`journey` WHERE booking.J_no=journey.J_no AND booking.status='1' AND booking.payment='0'";
$result=mysql_query($query);
while($row=mysql_fetch_assoc($result))
			{	 $a=time();
			     $J_no=$row['J_no'];
			      $customer_name=$row['customer_name'];
			       $contact=$row['contact'];
			        $seatno=$row['seatno'];
			         $booking_time=$row['booking_time'];
			         $book=$row['seatsbooked'];
			         $sad=$book-$seatno;
					
			
						if($a-$booking_time>=86400)
						{    
								 $query2="update  `booking`
								set `status`='0'
								where `J_no`='$J_no' AND `customer_name`='$customer_name'AND `contact`='$contact'AND `seatno`='$seatno' AND `booking_time`='$booking_time' AND `status` =1 ";
					$result1=mysql_query($query2);
					
				$query3="update `journey`
						set `seatsbooked`='$sad'
						where `J_no`='$J_no'";
						$result2=mysql_query($query3);
						

					
				}
			}

?>

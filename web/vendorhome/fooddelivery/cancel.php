		<?php
		include("db.php");
		
		$t_id = $_GET['id'];
		
		$db->query("UPDATE payment SET status = 'Cancelled' WHERE id = '$t_id'") or die(mysqli_error());
								
		header("location: orderlist.php");	
		
		?>
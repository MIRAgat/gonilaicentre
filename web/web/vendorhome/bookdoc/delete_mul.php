<?php 
   include 'session.php'
?>
<?php
	
	error_reporting(0);
	
	include_once 'db.php';
	
	$chk = $_POST['chk'];
	$chkcount = count($chk);
	
	if(!isset($chk))
	{
		?>
        <script>
		alert('At least one checkbox Must be Selected !!!');
		window.location.href = 'additem.php';
		</script>
        <?php
	}
	else
	{
		for($i=0; $i<$chkcount; $i++)
		{
			
			$del = $chk[$i];
			$sql=$db->query("DELETE FROM shopping_items WHERE id=".$del);
		}	
		
		if($sql)
		{
			?>
			<script>
			alert('<?php echo $chkcount; ?> Records Was Deleted !!!');
			window.location.href='additem.php';
			</script>
			<?php
		}
		else
		{
			?>
			<script>
			alert('Error while Deleting , TRY AGAIN');
			window.location.href='additem.php';
			</script>
			<?php
		}
		
	}

	
?>
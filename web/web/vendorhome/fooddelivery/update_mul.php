<?php 
   include 'session.php'
?>
<?php
include_once 'db.php';

$id = $_POST['id'];
$fn = $_POST['fn'];
$fn1 = $_POST['fn1'];
$fn2 = $_POST['fn2'];
$fn3 = $_POST['fn3'];
$fn4 = $_POST['fn4'];
$fn5 = $_POST['fn5'];

$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$db->query("UPDATE shopping_items SET item_name='$fn[$i]',item_desc='$fn1[$i]', item_id='$fn2[$i]',item_image='$fn3[$i]',item_price='$fn4[$i]', category='$fn5[$i]' WHERE id=".$id[$i]);
}
header("Location: additem.php");
?>
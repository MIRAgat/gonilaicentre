<?php 
   include 'session.php'
?>
<?php
	
	error_reporting(0);

	include_once 'db.php';

	if(isset($_POST['chk'])=="")
	{
		?>
        <script>
		alert('At least one checkbox Must be Selected !!!');
		window.location.href='additem.php';
		</script>
        <?php
	}
	$chk = $_POST['chk'];
	$chkcount = count($chk);
	
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
   <!--- sidenav start here --->
<?php
			include 'sidenav.php'
			
			?>

<!-- sidenav end here--->
    	


    <div class="main-panel">
		
		<!--topnav-->
		<?php
			include 'topnav.php'
			
			?>
		<!---topnav end here--->


        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Record</h4>
                        <p class="category"> Here is a subtitle for this table</p>

                    </div>
<div class="clearfix"></div>





<div class="row">
<div class="col-md-12">
<div class="content">
<a href="generate.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Records</a>
<div class="clearfix"></div><br/>
<form method="post" action="update_mul.php">
<table class='table table-bordered'>
<tr>
<th>Name</th>
<th>Description</th>

<th>Image</th>
<th>Price</th>
<th>Category</th>

</tr>
<?php
for($i=0; $i<$chkcount; $i++)
{
	$id = $chk[$i];			
	$res=$db->query("SELECT * FROM shopping_items WHERE id=".$id);
	while($row=$res->fetch_array())
	{
		?>
		<tr>
		<td>
    	<input type="hidden" name="id[]" value="<?php echo $row['id'];?>" />
		<input type="text" name="fn[]" value="<?php echo $row['item_name'];?>" class="form-control" />
        </td>
		<td>
   
		<input type="text" name="fn1[]" value="<?php echo $row['item_desc'];?>" class="form-control" />
        </td>
	
		<td>

		<input type="text" name="fn3[]" value="<?php echo $row['item_image'];?>" class="form-control" />
        </td>
		<td>
    	
		<input type="text" name="fn4[]" value="<?php echo $row['item_price'];?>" class="form-control" />
        </td>
		<td>
  
		<input type="text" name="fn5[]" value="<?php echo $row['category'];?>" class="form-control" />
        </td>
		
       
		</tr>
		<?php	
	}			
}
?>
<tr>
<td colspan="6">
<button type="submit" name="savemul" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> &nbsp; Update all</button>&nbsp;
<a href="additem.php" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; cancel</a>
</td>
</tr>
</table>
</form>
</div>
</div>
</div>
 </div>
            </div>
        </div>


        <?php 
include 'footer.php'
?>
    </div>
</div>


</body>

        <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
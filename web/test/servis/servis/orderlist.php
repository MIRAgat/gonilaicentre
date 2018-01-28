<?php 
   include 'session.php'
?>


<?php

//getting id from url
$loggedin_id=$row['id'];



//selecting data associated with this particular id
$sql = "SELECT * FROM users WHERE id = $loggedin_id" ;

$result=mysqli_query($db,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
?>


<?php
while($rows=mysqli_fetch_array($result)){
	$id= 	$rows['id'];
	$username= 	$rows['username'];
	$email= 	$rows['email'];
	$fullname= 	$rows['fullname'];
	$address= 	$rows['address'];
	$phone= 	$rows['phone'];
	$n_img=$rows ['profile_image'];
}
	
?>			

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>GoNilai Centre</title>

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

<?php
			include 'sidenav.php'
			
			?>

    <div class="main-panel">
		
		<!--topnav-->
		<?php
			include 'topnav.php'
			
			?>
		<!---topnav end here--->

		


        <div class="content">
		
		
				
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php  echo  $username;  ?></h4>
                                <p class="category">GoNilai Centre</p>
                            </div>
                            
							<div class='content table-responsive table-full-width'>
							<table class='table table-hover table-striped'>
<?php
								
include 'db.php';

$rows=$db->query("SELECT `id`,`name`,`email`,`phonenum`,`deliverytime`,`deliveryaddress`, `status` FROM `payment` WHERE iduser= $loggedin_id " );



                                  echo"  <thead>
								   <th>NO</th>
                                       
                                    	
                                
                                    	<th>Item/s</th>
										<th>Delivery Time</th>
										<th>Delivery Address</th>
										<th>Status</th>
										<th>Receipt</th>
										
                                    </thead>";
									echo  " <tbody>";
	 $counter = 1;								
while(list($id, $name, $email, $phonenum, $deliverytime, $deliveryaddress, $status )=$rows->fetch_row())
{									
                                 
                                       
  
  
  echo "<tr>";
  
   echo "<td>";
  echo "$counter";
  echo "</td>";
  
  echo "<input type='hidden'value='$id' />";
 
 
echo "<td>";
 echo'<a href="viewitem.php?id='.$id.'" target="_blank">View Order</a>';
  echo "</td>";
  
  echo "<td>";
  echo "<input type='hidden'value='$deliverytime' />";
  echo "$deliverytime";
  echo "</td>";
 
  echo "<td>";
  echo "<input type='hidden'value='$deliveryaddress' />";
  echo "$deliveryaddress";
  echo "</td>";

 echo "<td>";
  echo "<input type='hidden'value='$status' />";
  echo "$status";
  echo "</td>";
  
  echo "<td>";
  
  


 echo  '<a href="viewreceipt.php?id='.$id.'" target="_blank">Receipt</a>';
  	
  echo "</td>";

  
  
   $counter++;
  
  
}
echo "</tr>";
                                   echo" </tbody>";
								   
									?>
                                </table>
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
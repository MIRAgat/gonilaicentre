<?php 
   include 'session.php'
?>


<?php

//getting id from url
$loggedin_id=$row['id'];



//selecting data associated with this particular id
$sql = "SELECT * FROM serviceproviderlogin WHERE id = $loggedin_id" ;

$result=mysqli_query($db,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
?>


<?php
while($rows=mysqli_fetch_array($result)){
	$id= 	$rows['id'];
	$typeserv= 	$rows['typeserv'];
	$bussname= 	$rows['bussname'];
	$officeaddr= 	$rows['officeaddr'];
	$opentime= 	$rows['opentime'];
	$closetime= 	$rows['closetime'];
	$ic= 	$rows['ic'];
	$name= 	$rows['name'];
	$username= 	$rows['username'];
	$password= 	$rows['password'];
	$n_img= $rows ['profile_image'];
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
                                <h4 class="title"><?php  echo  $name;  ?></h4>
                                <p class="category">Created using Roboto Font Family</p>
                            </div>
                            
							<div class='content table-responsive table-full-width'>
							<table class='table table-hover table-striped'>
<?php
								
include 'db.php';

$rows=$db->query("SELECT `clinic`, `imune_t`, `dos`, `date`, `time`, `d_name`, `height`, `weight`, `head_c`, `comment` FROM `healthdata` WHERE id = $loggedin_id");



                                  echo"  <thead>
                                        <th>Clinic</th>
                                    	<th>Vaccine</th>
                                    	<th>Dose</th>
                                    	<th>Date</th>
                                    	<th>Time</th>
										<th>Height</th>
										<th>Weight</th>
										<th>Head C</th>
										<th>Comments</th>
										<th>Doc Name</th>
                                    </thead>";
									echo  " <tbody>";
									
while(list($clinic, $imune_t, $dos, $date, $time, $d_name, $height, $weight, $head_c, $comment )=$rows->fetch_row())
{									
                                 
                                       
  
  
  echo "<tr>";
  
  
  echo "<td>";
  echo "<input type='hidden'value='$clinic' />";
  echo "$clinic";
  echo "</td>";

    echo "<td>";
  echo "<input type='hidden'value='$imune_t' />";
  echo "$imune_t";
  echo "</td>";
 
  echo "<td>";
  echo "<input type='hidden'value='$dos' />";
  echo "$dos";
  echo "</td>";
  
  echo "<td>";
  echo "<input type='hidden'value='$date' />";
  echo "$date";
  echo "</td>";
 
  echo "<td>";
  echo "<input type='hidden'value='$time' />";
  echo "$time";
  echo "</td>";

  echo "<td>";
  echo "<input type='hidden' value='$height' />";
  echo "$height";
  echo "</td>";
  
   echo "<td>";
  echo "<input type='hidden' value='$height' />";
  echo "$weight";
  echo "</td>";

  echo "<td>";

  echo "$head_c";
  echo "</td>";
  
echo "<td>";

  echo "$comment";
  echo "</td>";
  
  echo "<td>";

  echo "$d_name";
  echo "</td>";
    
  
  
  
  
  
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
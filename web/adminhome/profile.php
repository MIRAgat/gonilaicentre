<?php 
   include 'session.php'
?>
<?php
include('db.php');

$loggedin_id='1'; //$session id
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
	$name= 	$rows['bname'];
	$nickname= 	$rows['nickname'];
	$dob= 	$rows['dob'];
	$pob= 	$rows['pob'];
	$gender= 	$rows['bgender'];
	$religion= 	$rows['breligion'];
	$race= 	$rows['brace'];
	$username= 	$rows['username'];
	$address= 	$rows['address'];
	$postcode= 	$rows['postcode'];
	$town= 	$rows['town'];
	$state= 	$rows['state'];
	$id= 	$rows['id'];
	
	$status= $rows ['status'];
	$n_img= $rows ['profile_image'];
}
	
?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


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
                <div class="row">
                    
                   
				   
					
                    <div class="col-md-12">
					
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
							<form role="form" action="" method="post" enctype="multipart/form-data">
                            <div class="content">
                                <div class="author">
                                     <a href="#">
									 <div class="image-upload">
    <label for="img">
          <?php	echo "<img src='user/../uploads/$n_img' class=\"avatar border-gray\" alt=\"...\">" ?>
    </label>


</div>
  
	
	 <a href="uploadpic.php" >Change Profile Picture</a>
 
										</form>
	

                                      <h4 class="title"><?php  echo  $name;  ?><br />
                                         <small><?php  echo  $nickname;  ?></small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> "<?php  echo  $status;  ?>"
                                </p>
                            </div>
							</div>
							</div>
						<style>
						hr.style2 {
	border-top: 3px double #8c8b8b;
}

						</style>
						<hr class="style2">
						<p></p>
						
							<div class="col-md-12">
					 <div class="card">
					 
                            <div class="header">
                                <h4 class="title">Profile</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="bs-example">
							
							
							
<table class="table" >
<tbody>

  <tr class="active">
    <th>
		Name</th>
    <td><?php  echo  $name;  ?></td>
  </tr>
<tr class="success">
    <th>
		Date of Birthday</th>
    <td><?php  echo  $dob;  ?></td>
  </tr>
    
  
 <tr class="info">
    <th>
		Gender</th>
    <td><?php  echo  $gender;  ?></td>
  </tr>

  <tr class="warning">
    <th>
		Religion</th>
    <td><?php  echo  $religion;  ?></td>
  </tr>
 
  <tr class="danger">
    <th>
		Name</th>
    <td><?php  echo  $race;  ?></td>
  </tr>

    
 </tbody>
      </table>
	

</div>
</div>
</div>


					


<hr class="style2">


<div class="col-md-12">
					 <div class="card">
					 
                            <div class="header">
                                <h4 class="title">Details</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="bs-example">
							
							
							
<table class="table" >
<tbody>

  <tr class="active">
    <th >
		Nickname</th>
    <td><?php  echo  $nickname;  ?></td>
  </tr>
<tr class="success">
    <th >
		Place of Birthday</th>
    <td><?php  echo  $pob;  ?></td>
  </tr>
    
  
    <tr class="info">
    <th >
		Address</th>
    <td><?php  echo  $address;  ?></td>
  </tr>

    <tr class="warning">
    <th >
		Postcode</th>
    <td><?php  echo  $postcode;  ?></td>
  </tr>
 
    <tr class="danger">
    <th >
		Town</th>
    <td><?php  echo  $town;  ?></td>
  </tr>

    
 </tbody>
      </table>
	

</div>
</div>
</div>

			
							
                            <hr class="style2">
							 
                            <div class="text-center">
							<div class="col-md-12">
							<div class="card">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>
</div>
                            </div>
                        </div>
                   
</div>
                </div>
            </div>
        

	<?php
//  close  connection;
mysqli_close($db);

?>	
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
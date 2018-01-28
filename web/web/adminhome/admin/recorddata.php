<?php 
   include 'session.php'
?>
<?php
include('db.php');
?>
<?php

//getting id from url
$id=$_GET['id'];



//selecting data associated with this particular id
$sql = "SELECT * FROM users WHERE id = $id" ;

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
 <?php
// including the database connection file
include_once("db.php");

if(isset($_POST['recorddata']))
{  
  $id = $_POST['id'];  
  $clinic = $_POST['clinic'];
  $imune_t = $_POST['imune_t'];
  $dos = $_POST['dos'];
$date = $_POST['date'];  
$time = $_POST['time'];  
$d_name = $_POST['d_name']; 
$height = $_POST['height']; 
$weight = $_POST['weight']; 
$head_c = $_POST['head_c']; 
$comments = $_POST['comment']; 




  $result = "INSERT INTO healthdata (id, clinic, imune_t, dos, date, time, d_name,height, weight, head_c, comment ) VALUES ( '".$_POST["id"]."', '".$_POST['clinic']."', '".$_POST['imune_t']."', '".$_POST['dos']."', '".$_POST['date']."', '".$_POST['time']."', '".$_POST['d_name']."', '".$_POST['height']."', '".$_POST['weight']."', '".$_POST['head_c']."', '".$_POST['comment']."')";
  
  $b=mysqli_query($db, $result);
  
if($b)
{
   echo "<script type=\"text/javascript\">".
        "alert('successfully recorded');".
        "</script>";
}
else{
echo "<script type= 'text/javascript'>alert('Data not successfully recorded.');</script>";
}
}

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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php  echo  $name;  ?></h4>
                                <p class="category">Created using Roboto Font Family</p>
                            </div>
					<div class="content">		
 <div class="row">
<div class="col-md-6">
<form role="form" action="" method="post" class="login-form">
<input name= "id"type="hidden" value= "<?php  echo  $id;  ?>" ></input>
<br>

						<label for = "clinic">Health Facility:</label>
						<select style = "width:70%;" class = "form-control" name = "clinic" required = "required">
							<option value = "">--Please select an option--</option>
							<option value = "Klinik Kesihatan Nilai">Klinik Kesihatan Nilai</option>
							<option value = "Klinik Nilai Impian">Klinik Nilai Impian</option>
						</select>
							<br>
							<label for = "imune_t">Immunization Type:</label>
						<select style = "width:70%;" class = "form-control" name = "imune_t" required = "required">
							<option value = "">--Please select an option--</option>
							
				<?php $rows=$db->query("select * from vaccines"); 
				while(list($id,$vaccines)=$rows->fetch_row())
				{
					echo"<option value = '$vaccines'>$vaccines</option>";
				}
				
				?>
											
						</select>
						<br/>
						<label for = "dos">Dose:</label>
						<select style = "width:70%;" class = "form-control" name = "dos" required = "required">
							<option value = "">--Please select an option--</option>
							<option value = "Dos 1">Dose 1</option>
							<option value = "Dos 2">Dose 2</option>
							<option value = "Dos 3">Dose 3</option>
							<option value = "Booster">Booster</option>
							<option value = "Girls Only"> Girls Only</option>
							<option value = "Sabah Only">Sabah Only</option>
						</select>
						<br>
						</div>
						<div class="col-md-6">
						 <div class="form-group">
                                                <label>Date</label>
                                                <input type="date" class="form-control" placeholder="2017-11-10"  name="date">
                                            </div>
											 <div class="form-group">
                                                <label>Time</label>
                                                <input type="time" class="form-control" placeholder="0910"   name="time">
                                            </div>
											 <div class="form-group">
                                                <label>Dr Name</label>
                                                <input type="text" class="form-control" placeholder="Dr Megat"  name="d_name">
                                            </div>
											 <div class="form-group">
                                                <label>Height (cm)</label>
                                                <input type="text" class="form-control" placeholder="120"   name="height">
                                            </div>
											 <div class="form-group">
                                                <label>Weight (kg)</label>
                                                <input type="text" class="form-control" placeholder="30" name="weight">
                                            </div>
											 <div class="form-group">
                                                <label>Height Circumference (cm)</label>
                                                <input type="text" class="form-control" placeholder="20"  name="head_c">
                                            </div>
											 <div class="form-group">
                                                <label>Comments</label>
                                                <textarea rows="5" class="form-control" placeholder="Here can be your comments"name="comment"></textarea>
                                            </div>
											<a href='viewrecord.php?id= <?php  echo  $id  ?>' class='btn btn-info' role='button'>View Records</a> 
											
											<button type="submit" name="recorddata" value="recorddata" class="btn pull-right btn-info">Record</button>
						</div>
						
						
						</form>
						
		
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
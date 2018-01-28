<?php
session_start();
	require "database-config.php";
if(isset($_POST["submitregister2"])){



$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
$sql = "INSERT INTO serviceproviderlogin (typeserv,bussname,officeaddr,opentime,closetime,ic,name,username,password)
VALUES ('".$_POST["typeserv"]."','".$_POST["bussname"]."','".$_POST["officeaddr"]."','".$_POST["opentime"]."','".$_POST["closetime"]."',
'".$_POST["ic"]."','".$_POST["name"]."','".$_POST["email"]."','".$_POST["password"]."')";
if ($dbh->query($sql)) {
header('location: loginvendor.php');
exit;

}
}


?>
<!DOCTYPE html>
<html>
<head>
<title>GoNilaiCentre</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Credit Login / Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<!-- //web font -->
</head>
<body>
<h1>GoNilai Centre</h1>
<style>
hr{color:red;}
</style>
<div id="small-dialog1">
					<div class="contact-form1">
										<div class="contact-w3-agileits">
										<h3>Register Form</h3>
										
										
										
											<form action="" method="post">
											
											<div class= "row">
											<div class="col-md-12">
											<div class="col-md-6">
			
			<div class="form-sub-w3ls">
												<select class = "form-control" name = "typeserv" required = "required">
              <option value = "">--Services Type--</option>
              <option value = "fooddelivery"> Food Delivery</option>
              <option value = "bookdoc">Health Services Booking</option>
			   <option value = "homeservice">Home Services</option>
            </select>
												</div>
											<br><h4 style="color:white"> Business Information </h4>
											<hr>
												
												<div class="form-sub-w3ls">
													<input placeholder="Business Name" name="bussname" type="text" required="">
													<div class="icon-agile">
														<i class="fa fa-info" aria-hidden="true"></i>
													</div>
												</div>
												<div class="form-sub-w3ls">
													<input placeholder="Office Address" name="officeaddr" type="text" required="">
													<div class="icon-agile">
														<i class="fa fa-building-o" aria-hidden="true"></i>
													</div>
												</div>
												
												<div class="form-sub-w3ls">
													<input placeholder="Business Open Hour" name="opentime" type="text" required="">
													<div class="icon-agile">
														<i class="fa fa-calendar-check-o" aria-hidden="true"></i>
													</div>
												</div>
												<div class="form-sub-w3ls">
													<input placeholder="Business Close Hour" name="closetime" type="text" required="">
													<div class="icon-agile">
														<i class="fa fa-building-o" aria-hidden="true"></i>
													</div>
												</div>
												<div class="form-sub-w3ls">
												
												</div>
												</div>
												<div class="col-md-6">
											<br><h4 style="color:white"> More Information </h4>
											<hr>
												<div class="form-sub-w3ls">
													<input placeholder="Full Name" name="name" type="text" required="">
													<div class="icon-agile">
														<i class="fa fa-address-book" aria-hidden="true"></i>
													</div>
												</div>
												<div class="form-sub-w3ls">
													<input placeholder="Email" name="email" class="mail" type="email" required="">
													<div class="icon-agile">
														<i class="fa fa-envelope-o" aria-hidden="true"></i>
													</div>
												</div>
										
												<div class="form-sub-w3ls">
													<input placeholder="Password" name="password" id="password" type="password" required="">
													<div class="icon-agile">
														<i class="fa fa-unlock-alt" aria-hidden="true"></i>
													</div>
												</div>
												<div class="form-sub-w3ls">
													<input placeholder="Confirm Password" id="confirm_password" type="password" required="">
													<div class="icon-agile">
														<i class="fa fa-unlock-alt" aria-hidden="true"></i>
													</div>
												</div>
											</div>
											</div>
											</div>
											</div>
											<div class="login-check">
								 			 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><p>I Accept Terms & Conditions</p></label>
											</div>
											
										<div class="submit-w3l">
											<input type="submit" name="submitregister2" value="submit">
										</div>
										
										</form>
										<p class="p-bottom-w3ls">Have an account?<a  href="index.php">  Login here</a></p>
					</div>	
				</div>
<!-- copyright -->
	<div>
		<p>  2017 GoNilai Centre . Design by <a href="https://github.com/MIRAgat" target="_blank">Mirada</a></p>
	</div>
	<!-- //copyright --> 
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- pop-up-box -->  
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box -->
<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
	<script>
	var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
</body>
</html>

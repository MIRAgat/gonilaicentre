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

<!DOCTYPE html>
<html lang="en">
<head>
<title>GoNilai Centre</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dental Pro Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/swipebox.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

</head>
	
<body>

<!-- header -->
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo">
						<h1><a class="navbar-brand" href="index.html"><span class="one">G</span>oNilaiCentre</a></h1>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-5" id="link-effect-5">
						<ul class="nav navbar-nav">
							<li>
							<a href="http://localhost/web/userhome/home.php#home">
							<p>Home</p>
							</a>
							</li>
							</ul>
							</nav>
							</div>
				<!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>
<!-- //header -->

<!-- banner -->
	
<!-- //banner -->
	
<!-- /schedule-grids -->


		<!-- /schedule-grids -->
<div class="why-choose-agile" id="about">
		<div class="container">
			<h3 class="w3l_head">Cart</h3>
			          <p class="w3ls_head_para">GoNilai Centre</p>
			<div class="why-choose-agile-grids-top">
					<style>
						
						#size { width:253px;
						height:199px;}
						
						</style>
						<div class="row">
						
						<div class="col-xs-9 agile-why-text two">
							
						
						
						
							<h4></h4>
							<p>
							Cart
						</p>
	
							
						</div>
						<div class="clearfix"> </div>
						
						
				
					
					
					
					
					
						
					
					
				
				</div>
					
				</div>
				<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	
	
<!-- //schedule-grids -->
<!--

<!-- //about-bottom -->
<!-- /property-grids -->
<

<!-- //property-grids -->
	<!-- /services -->
<!-- choose-us -->
	
<!-- //choose-us -->

<!-- //services -->
<!--team-->


<!--//team-->
<!-- work -->
	
<!-- //work -->
  <!--/news-->
<!-- news -->
	
<!-- //news -->

<!-- updates-bottom -->
	
				
<!-- //contact -->
<!-- footer -->
	<div class="footer-bottom" id="contact">
		<div class="container">
			<div class="w3agile_footer_grids">
				<div class="col-md-4 w3agile_footer_grid">
					<h3>About Us</h3>
					<p>Bridging the gap of netizen and services.</span></p>
				</div>
				
				<div class="col-md-4 w3agile_footer_grid">
					<h3>Contact Info</h3>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Nilai, <span>Negeri Sembilan</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a>beautifulmiradda@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+60 1119980771</li>
					</ul>
				</div>
				<div class="col-md-4 w3agile_footer_grid w3agile_footer_grid1">
					<h3>Navigation</h3>
					<ul>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a class="scroll" href="#home">Home</a></li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a class="scroll" href="#about">About</a></li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="services.php">
                                Services
                            </a></li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a class="scroll" href="#contact">contact</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="copy-right-social">
		<div class="container">
			<div class="copy-right">
				<p>&copy; 2017 Miradda.  All rights reserved | Design by <a href="https://codepen.io/miradda/">Miragat</a></p>
			</div>
				<div class="bottom-socila-icons">
							<ul class="top-links two">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
				</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //footer -->
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="js/jquery-2.2.3.min.js"></script> 
<!-- skills -->

						<script src="js/responsiveslides.min.js"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
							 <!-- js -->
							 
<!-- Starts-Number-Scroller-Animation-JavaScript -->
				<script src="js/waypoints.min.js"></script> 
				<script src="js/counterup.min.js"></script> 
				<script>
					jQuery(document).ready(function( $ ) {
						$('.counter').counterUp({
							delay: 20,
							time: 1000
						});
					});
				</script>

			<!-- //Starts-Number-Scroller-Animation-JavaScript -->
<!-- search-jQuery -->
			
			<script src="js/simplePlayer.js"></script>
			<script>
				$("document").ready(function() {
					$("#video").simplePlayer();
				});
			</script>
			
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
			<!--swipebox -->	
				<link rel="stylesheet" href="css/swipebox.css">
					<script src="js/jquery.swipebox.min.js"></script> 
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
					</script>
				<!--//swipebox Ends -->
<!-- //js -->
<script type="text/javascript">
						$(window).load(function() {
							$("#flexiselDemo1").flexisel({
								visibleItems: 3,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems: 1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems:2
									},
									tablet: { 
										changePoint:768,
										visibleItems: 3
									}
								}
							});
							
						});
				</script>
				<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>
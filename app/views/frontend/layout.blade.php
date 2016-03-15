<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>

	<base href="<?php echo "http://".$_SERVER["SERVER_NAME"];?>">
<title>Chiaroscuro | <?php echo $page; ?></title>
<link href="assets/frontend/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="assets/frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="assets/frontend/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/frontend/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="assets/frontend/css/galstyle.css" rel="stylesheet">
	<link id="base-style-responsive" href="assets/frontend/css/style-responsive.css" rel="stylesheet">
	
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wowphotos Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<script src="assets/frontend/js/jquery.min.js"></script>
<script src="assets/frontend/js/jquery.easydropdown.js"></script>
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close1').on('click', function(c){
		$('.message1').fadeOut('slow', function(c){
	  		$('.message1').remove();
		});
	});	  
});
</script>

</head>
<body>
<!-- header -->
<div class="header">
	<div class="container" style="margin-bottom: -10px;">
		<div class="header-right">
			<div class="hea-rig">
			<ul class="icon1 sub-icon1">
			
				<?php if($account=="null"): ?>
				<li><a href="/login">Login</a></li>
				<?php elseif($account=="!null"): ?>
				<li><a><?php echo ucwords($_SESSION["session_testing"]); ?> &nbsp;</a></li>
				<li>&nbsp;<label>|</label></li>
				<li>
					<div class="cart1">
						<a href="/cart" class="cart-in"> </a>
					</div>
				</li> 
				<li><a href="/logoutCustomer">Logout</a></li>
				<?php endif;?>
				<div class="clearfix"> </div>
				</ul>
			</div>
			<div class="head-nav">
					<span class="menu"> </span>
						<ul class="cl-effect-15">
						
						<?php if($account=="null"): ?>
							<li <?php echo ($page=="Home")?" class=\"active\"":""; ?>><a href="/">Take a Look</a></li>
							<li <?php echo ($page=="Products")?" class=\"active\"":""; ?>><a href="/paintingGallery"> Gallery</a></li>
							<li <?php echo ($page=="History")?" class=\"active\"":""; ?>><a href="/history">Our Journey</a></li>
						<?php elseif($account=="!null"): ?>
							<li <?php echo ($page=="Home")?" class=\"active\"":""; ?>><a href="/home">Take a Look</a></li>
							<li <?php echo ($page=="Products")?" class=\"active\"":""; ?>><a href="/album"> Gallery</a></li>
							<li <?php echo ($page=="History")?" class=\"active\"":""; ?>><a href="/journey">Our Journey</a></li>
						<?php endif;?>
								<div class="clearfix"> </div>
						</ul>
						<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav --> 
				</div>
				<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>

<div class="header-bottom">
	<div class="container">
		<div class="logo">
			<a href="index.html"><img src="assets/frontend/images/logo.png" class="img-responsive" alt="" width="300px" height="30px"></a>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- header -->
	@yield('content')
<!-- footer -->
<!-- footer-bottom -->
<div class="footer-bottom">
	<div class="container">
		<p>Copyrights &copy; 2015 Wowphotos All rights reserved | Template by <a href="http://w3layouts.com/">&nbsp; W3layouts</a></p>
		
		<div class="clearfix"> </div>
	</div>
</div>
<!-- footer-bottom -->
</body>
</html>
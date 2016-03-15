<html>
	<head>
		<title>
			Chiaroscuro || <?php echo $page; ?>
		</title>
		<link rel="stylesheet" href="assets/frontend/css/style.css" />
		<link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css" />
		<script src="assets/frontend/plugins/jquery/jquery-1.11.1.min.js"></script>
		<script src="assets/frontend/plugins/jquery/jquery-2.1.1.min.js"></script>
		<script src="assets/frontend/js/script.js"></script>
		<script src="assets/frontend/js/bootstrap.min.js"></script>	

	</head>
	<body style="color: #fff;">	
	
	
	<header>
		<div class="container">
			<div class="container-fluid">
				<nav class="navbar navbar-inverse row">
  					<div class="container-fluid">
    					<div class="navbar-header">
      						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        						<span class="icon-bar"></span>
        						<span class="icon-bar"></span>
        						<span class="icon-bar"></span> 
     						</button>
      						<a href="home">
      							<img src="assets/frontend/images/logo5.png" class="img-responsive">
      						</a>
    					</div>
   						<div class="collapse navbar-collapse" id="myNavbar" style="position: relative;top: 75px;">
     						<ul class="nav navbar-nav navbar-right">
        						<li class="dropdown" style="display: inline;">
          							<a class="dropdown-toggle" data-toggle="dropdown" id="flag" href="#">
          								<span class="glyphicon glyphicon-blackboard"></span> Artworks
          							</a>
         							<ul id="submenu" class="dropdown-menu">
            							<li>
            								<a href="painting">
            									<span class="glyphicon glyphicon-blackboard"></span> Painting
            								</a>
            							</li>
            							<li>
            								<a href="">
            									<span class="glyphicon glyphicon-camera"></span> Photography
            								</a>
            							</li>
            							<li>
            								<a href="#">
            									<span class="glyphicon glyphicon-tower"></span> Sculpture
            								</a>
            							</li> 
         							</ul>
        						</li>
								<li class="style">
									<a href="journey">
										<span class="glyphicon glyphicon-send"></span> Our Journey
									</a>
								</li>
								<li class="style">
									<a href="login">
										<span class="glyphicon glyphicon-user"></span>
									</a>
								</li>
								<li class="style">
									<a href="#">
										<span class="glyphicon glyphicon-search"></span>
									</a>
									
								</li>
								<li class="style">
									<button type="button" class="btn btn-default btn-md">
										<span class="glyphicon glyphicon-shopping-cart"></span> &nbsp;Cart <span class="badge"></span>
									</button>
								</li>
      						</ul>
    					</div>
  					</div>
				</nav>
			</div>
		</div>
	</header>
		
		
			@yield('content')
  		
		
		
<footer class="otherpage">
<div class="container" style="background: #222;">
<span class="foot"><small>
			<p><span class="glyphicon glyphicon-copyright-mark"></span> 2016 Chiaroscuro Online Gallery and Studio. Starmall | Bulacan, Philippines <br />Powered by: teamMode.org.ph</p></small></span>
  			<br>
			<div class="row">
   				 <div class="col-sm-3">
    				<h5>JOIN US</h5>
    				<input class="form-control input-md" id="inputlg" type="text" placeholder="Enter your E-mail Address"><br/>
    				<button type="button" class="btn btn-default btn-md" style="float: right;"><span class="glyphicon glyphicon-user"></span> Sign up</button></li>
    			</div>
    			<div class="col-sm-3">
    					<h5>USEFUL LINKS</h5>
    					<ul style="list-style: outside;">
    						<li>Return and Exchange</li>
    						<li>Term of Service</li>
    						<li>Privacy</li>
    						<li>Contact</li>
    						</ul>
      			</div>
      			<div class="col-sm-3">
    			<h5>LOCATION</h5>
    			<p>
    				Starmall<br />
    				Brgy. Palmera<br />
    				City of San Jose del Monte<br /0\>
    				Bulacan
    			</p>
      			</div>
      			<div class="col-sm-3">
    			<h5>ABOUT US</h5>
    			<p>Ecommerce Platforms is an unbiased review site that shows the good, great, bad, and ugly of online store building software. We strive to provide you with easy to read (and sometimes fun) objective reviews that will help you choose which ecommerce platform is right for you. Feel free to follow us on Twitter, comment, question, contact and ENGAGE! Hope you enjoy! </p>
      			</div>
  			</div>
  			</div>
		</footer>
	</body>
</html>
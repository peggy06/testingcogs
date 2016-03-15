<html>
	<head>
		<title>
			Chiaroscuro || <?php echo $page; ?>
		</title>
		<link rel="stylesheet" href="assets/css/style.css" />
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script>
		<script src="assets/plugins/jquery/jquery-2.1.1.min.js"></script>
		<script src="assets/js/script.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>		
	</head>
	<body style="color: #fff;">	
		<header>
				<a href="\home">
					<img class="logo" src="assets/images/logo5.png"> 
				</a>
				<nav>
						<ul id="navlist" >
							<li class="dropdown" style="display: inline;">
          						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-blackboard"></span>Artworks <span class="caret"></span></a>
         						
         						<ul class="dropdown-menu">
            						<li ><a href="\painting"><span class="glyphicon glyphicon-blackboard"></span> Painting</a></a></li>
            						<li><a href="#"><a href="#"><span class="glyphicon glyphicon-camera"></span> Photography</a></a></li>
            						<li><a href="#"><a href="#"><span class="glyphicon glyphicon-tower"></span> Sculpture</a></a></li> 
         						</ul>
        					</li>
							<li class="style"> <a href="#"><span class="glyphicon glyphicon-send"></span> Our Journey</a></li>
							<li class="style"><a href="#"><span class="glyphicon glyphicon-user"></span></a></li>
							<li class="style"><a href="#"><span class="glyphicon glyphicon-search"></span></a>&nbsp;</li>
							<li class="style"><button type="button" class="btn btn-default btn-md"><span class="glyphicon glyphicon-shopping-cart"></span> &nbsp;Cart</button></li>
				
						</ul>
			</nav>
		</header>
		
		<section>
			@yield('content')
  		</section>
  		
  		
		
		<!--<footer class="index">
		<span class="foot"><small>
			<p><span class="glyphicon glyphicon-copyright-mark"></span> 2016 Chiaroscuro Online Gallery and Studio. Starmall | Bulacan, Philippines <br />Powered by: teamMode.org.ph</p></small></span>
  			
		</footer>-->
		<footer class="otherpage">
			asas
		</footer>
	
	</body>
</html>
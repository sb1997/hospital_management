<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>

<html>
	<head>
		<title>Hospital Management</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
   		 <!-- webfonts -->
   		 <link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
   		  <!-- webfonts -->
	</head>
	<body>
		<!-- container -->
			<!-- header -->
			<section class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">WELCOME ADITYA</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="smoothScroll">HOME</a></li>
				<li><a href="#" class="smoothScroll">PATIENTS</a></li>
				<li><a href="#" class="smoothScroll">DOCTORS</a></li>
				<li><a href="#" class="smoothScroll">DEPARTMENTS</a></li>
				<button type="submit" class="btn btn-link" onclick="window.location.href='dbmslogmid.php'">Sign up</button>
				
				
			</ul>
		</div>
	</div>
</section>
			<!-- /header -->
		</div>
		<!-- /container -->
		<!-- banner -->
		<div class="benner">
				<!-- slider -->
				<!--- img-slider --->
				<div class="img-slider">
						<!----start-slider-script---->
					<script src="js/responsiveslides.min.js"></script>
					 <script>
					    // You can also use "$(window).load(function() {"
					    $(function () {
					      // Slideshow 4
					      $("#slider4").responsiveSlides({
					        auto: true,
					        pager: true,
					        nav: true,
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
					<!----//End-slider-script---->
					<!-- Slideshow 4 -->
					    <div  id="top" class="callbacks_container">
					      <ul class="rslides" id="slider4">
					        <li>
					          <img class="img-responsive" src="images/slide1.jpg" alt="">
					          <div class="slider-caption">
					          	<h1><span>Hospital Management Software</span></h1>
					         	
					          </div>
					        </li>
					        <li>
					          <img src="images/slide2.jpg" alt="">
					          <div class="slider-caption">
					          	<h1><span>Hospital Management Software</span></h1>
					         	
					          </div>
					        </li>
					        <li>
					          <img src="images/slide3.jpg" alt="">
					           <div class="slider-caption">
					          	<h1><span>Hospital Management Software</span></h1>
					         	
					          </div>
					        </li>
					      </ul>
					    </div>
					    <div class="clearfix"> </div>
					</div>
						<!-- slider -->
					</div>
		<!-- /banner -->
		<!-- top-grids -->
		<div class="top-grids text-center">
			<div class="container">
				<div class="col-md-3">
					<div class="top-grid">
						<span class="t-icon1"> </span>
						<h3>Lorem</h3>
						 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. lectus in quam elementum aliquet.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="top-grid">
						<span class="t-icon2"> </span>
						<h3>adipiscing</h3>
						 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. lectus in quam elementum aliquet.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="top-grid">
						<span class="t-icon3"> </span>
						<h3>elementum</h3>
						 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. lectus in quam elementum aliquet.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="top-grid">
						<span class="t-icon4"> </span>
						<h3>aliquet</h3>
						 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. lectus in quam elementum aliquet.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
		</div>
		<!-- top-grids -->
		<!-- mid-grids -->
		<div class="mid-grids">
			<div class="col-md-6 mid-grid-left">
				
			</div>
			<div class="col-md-6 mid-grid-right">
				<h2>About Us</h2>
				<p>Ut mollis hendrerit lectus vel dapibus. Donec eget sapien sed nibh volutpat pellentesque nec ac nunc. Integer nec vehicula ipsum. Aenean gravida erat odio, non pharetra sem malesuada ut. Fusce volutpat, ligula vitae suscipit egestas, ligula arcu condimentum augue, ac varius lectus lacus at quam. Vestibulum sed aliquam turpis. Etiam semper elit in libero aliquet, vitae fermentum nulla gravida. Praesent ut sapien id orci lobortis varius.</p>
				<p>Sed non nibh porttitor, tristique diam non, lobortis nisl. Proin et mauris ac urna posuere gravida a semper felis. Morbi congue elit eu scelerisque sagittis. Vestibulum blandit quam vitae pretium mollis. Nunc bibendum est a nibh finibus pellentesque.</p>
				<p>ac urna posuere gravida a semper felis. Morbi congue elit eu scelerisque sagittis. Vestibulum blandit quam vitae pretium mollis. Nunc bibendum est a nibh finibus pellentesque.</p>
				<a class="about-btn" href="about.html">ReadMore</a>
			</div>
			<div class="clearfix"> </div>
		</div>
		
		<!--
		<div class="bottom-grids">
				<h2>Latest-News</h2>
				<div class="bottom-grid bottom-grid1">
					<div class="container">
					<div class="col-md-3 bottom-grid-left">
						<a href="#"><img src="images/pic1.jpg" title="name" /></a>
					</div>
					<div class="col-md-9 bottom-grid-right">
						<p>ac urna posuere gravida a semper felis. Morbi congue elit eu scelerisque sagittis. Vestibulum blandit quam vitae pretium mollis. Nunc bibendum est a nibh finibus pellentesque.</p>
						<a class="news-btn" href="#">ReadMore</a>
					</div>
					<div class="clearfix"> </div>
					</div>
				</div>
				<div class="bottom-grid bottom-grid2">
					<div class="container">
					<div class="col-md-3 bottom-grid-left">
						<a href="#"><img src="images/pic2.jpg" title="name" /></a>
					</div>
					<div class="col-md-9 bottom-grid-right">
						<p>ac urna posuere gravida a semper felis. Morbi congue elit eu scelerisque sagittis. Vestibulum blandit quam vitae pretium mollis. Nunc bibendum est a nibh finibus pellentesque.</p>
						<a class="news-btn" href="#">ReadMore</a>
					</div>
					<div class="clearfix"> </div>
					</div>
				</div>
				<div class="bottom-grid bottom-grid3">
					<div class="container">
					<div class="col-md-3 bottom-grid-left">
						<a href="#"><img src="images/pic3.jpg" title="name" /></a>
					</div>
					<div class="col-md-9 bottom-grid-right">
						<p>ac urna posuere gravida a semper felis. Morbi congue elit eu scelerisque sagittis. Vestibulum blandit quam vitae pretium mollis. Nunc bibendum est a nibh finibus pellentesque.</p>
						<a class="news-btn" href="#">ReadMore</a>
					</div>
					<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
				<a class="load-news" href="#">LoadMore</a>
			</div>
		</div>
		
	-->
	<!--
		<div class="team">
						<div class="container">
							<div class="team-head text-center">
								<h3>Our team</h3>
							</div>
							
							<div class="team-grids">
								<div class="col-md-4">
									<div class="team-grid">
										<div class="team-people">
											<div class="team-people-pic">
												<img src="images/d1.jpg" title="name">
											</div>
											<div class="team-people-info">
												<h3>Established</h3>
												<p>reader will be distracted by the readable</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="team-grid">
										<div class="team-people">
											<div class="team-people-pic">
												<img src="images/d2.jpg" title="name">
											</div>
											<div class="team-people-info">
												<h3>Established</h3>
												<p>reader will be distracted by the readable</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="team-grid">
										<div class="team-people">
											<div class="team-people-pic">
												<img src="images/d3.jpg" title="name">
											</div>
											<div class="team-people-info">
												<h3>Established</h3>
												<p>reader will be distracted by the readable</p>
											</div>
										</div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
		
		<div class="team-grids-caption">
								<div class="container">
									<div class="team-grids-caption-left">
										<h4>He point of using Lorem Ipsum is that</h4>
										<p>as opposed to using Many desktop publishing packages and web page editors now use </p>
									</div>
									<div class="team-grids-caption-right">
										<a class="team-btn" href="contact.html">Contact</a>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
		-->
		<div class="footer">
			<div class="container">
				<p class="copy-right">Design by Aditya</p>
			</div>
		</div>
		<!-- /footer -->
	</body>
</html>


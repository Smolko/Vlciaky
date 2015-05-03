<!DOCTYPE html>
<?php Yii::app()->clientScript->reset(); ?>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PetCare Kennels - Responsive html template</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700,400italic,500italic,600italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!--[if IE 8]><link rel="stylesheet" type="text/css" href="css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<!-- Navigation -->
		<div class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.html"><strong>Pet</strong>Care<br />
						<span data-hover="Kennels">Kennels</span>
					</a></h1>
				</div>	
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="index.html" title="Home"><span data-hover="Home">Home</span></a>
						</li>
						<li>
							<a href="prices.html" title="Prices"><span data-hover="Prices">Prices</span></a>
						</li>
						<li>
							<a href="about.html" title="About us"><span data-hover="About us">About us</span></a>
						</li>
						<li class="dropdown">
							<a href="services.html" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Services">Services</span> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li>
									<a href="adoption.html" title="Adoption centre">Adoption centre</a>
								</li>
								<li>
									<a href="services.html" title="Dog boarding kennels">Dog boarding kennels</a>
								</li>
								<li>
									<a href="services-single.html" title="Dog walking">Dog walking</a>
								</li>
								<li>
									<a href="services.html" title="Home boarding">Home boarding</a>
								</li>
								<li>
									<a href="services.html" title="Puppy crèche">Puppy crèche</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="contact.html" title="Contact us"><span data-hover="Contact us">Contact us</span></a>
						</li>
						<li class="purchase-btn">
							<form method="get" action="index.html">
								<button type="submit" class="btn btn-default">Purchase theme</button>
							</form>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Navigation end -->
		<!-- Slider -->
		<div id="home_carousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#home_carousel" data-slide-to="0" class="active"></li>
				<li data-target="#home_carousel" data-slide-to="1"></li>
			</ol>
			
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="images/2.png" alt="" />
					<div class="carousel-caption">
						<h2>Lorem ipsum delor sit amet</h2>
					    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum.</p>
					    <form method="get" action="index.html">
					    	<button type="submit" class="btn btn-lg btn-default">Learn more</button>
					    	</form>
					</div>
				</div>
				<div class="item">
					<img src="images/3.png" alt="" />
					<div class="carousel-caption">
						<h2>Lorem ipsum delor sit amet</h2>
					    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum.</p>
					    <form method="get" action="index.html">
					    	<button type="submit" class="btn btn-lg btn-default">Learn more</button>
					    </form>
					</div>
				</div>
			</div>
			
			<!-- Controls -->
			<a class="left carousel-control" href="#home_carousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#home_carousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
		<!-- Slider end -->
		<!-- Services -->
		<div class="container">
			<div class="row">
				<div class="col-md-4 col3">
					<a href="services-single.html" title="Dog boarding kennels" class="roundal" id="kennel"></a>
					<h3>Dog boarding kennels</h3>
					<p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum. Humanitatis per seacula quarta decima et quinta decima.</p>
					<form method="get" action="services-single.html">
						<button type="submit" class="btn btn-default btn-green">Learn more</button>
					</form>
				</div>
				<div class="col-md-4 col3">
					<a href="services-single.html" title="Doggy grooming" class="roundal" id="grooming"></a>
					<h3>Doggy grooming</h3>
					<p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum. Humanitatis per seacula quarta decima et quinta decima.</p>
					<form method="get" action="services-single.html">
						<button type="submit" class="btn btn-default btn-green">Learn more</button>
					</form>
				</div>
				<div class="col-md-4 col3">
					<a href="services-single.html" title="Adoption centre" class="roundal" id="adoption"></a>
					<h3>Adoption centre</h3>
					<p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum. Humanitatis per seacula quarta decima et quinta decima.</p>
					<form method="get" action="services-single.html">
						<button type="submit" class="btn btn-default btn-green">Learn more</button>
					</form>
				</div>
				<div class="col-md-4 col3">
					<a href="services-single.html" title="Dog walking" class="roundal" id="walking"></a>
					<h3>Dog walking</h3>
					<p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum. Humanitatis per seacula quarta decima et quinta decima.</p>
					<form method="get" action="services-single.html">
						<button type="submit" class="btn btn-default btn-green">Learn more</button>
					</form>
				</div>
				<div class="col-md-4 col3">
					<a href="services-single.html" title="Care advice" class="roundal" id="advice"></a>
					<h3>Care advice</h3>
					<p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum. Humanitatis per seacula quarta decima et quinta decima.</p>
					<form method="get" action="services-single.html">
						<button type="submit" class="btn btn-default btn-green">Learn more</button>
					</form>
				</div>
				<div class="col-md-4 col3">
					<a href="services-single.html" title="Puppy play" class="roundal" id="play"></a>
					<h3>Puppy play</h3>
					<p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum. Humanitatis per seacula quarta decima et quinta decima.</p>
					<form method="get" action="services-single.html">
						<button type="submit" class="btn btn-default btn-green">Learn more</button>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 centered">
					<h3><span>Our happy doggy customers</span></h3>
					<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
				</div>
			</div>
		</div>
		<!-- Services end -->
		<!-- Carousel -->
		<div id="c-carousel">
			<div id="wrapper">
				<div id="carousel">
					<div>
						<a href="images/dog-1.png" title="Dog" data-hover="Sandy the west highland terrier" data-toggle="lightbox" class="lightbox">
							<img src="images/dog-1.png" alt="Dog" />
						</a>
					</div>
					<div>
						<a href="images/dog-2.png" title="Dog" data-hover="Marty the yorkshire terrier" data-toggle="lightbox" class="lightbox">
							<img src="images/dog-2.png" alt="Dog" />
						</a>
					</div>
					<div>
						<a href="images/dog-3.png" title="Dog" data-hover="Kyla the bull terrier" data-toggle="lightbox" class="lightbox">
							<img src="images/dog-3.png" alt="Dog" />
						</a>
					</div>
					<div>
						<a href="images/dog-1.png" title="Dog" data-hover="Marty the yorkshire terrier" data-toggle="lightbox" class="lightbox">
							<img src="images/dog-1.png" alt="Dog" />
						</a>
					</div>
					<div>
						<a href="images/dog-2.png" title="Dog" data-hover="Sandy the west highland terrier" data-toggle="lightbox" class="lightbox">
							<img src="images/dog-2.png" alt="Dog" />
						</a>
					</div>
					<div>
						<a href="images/dog-3.png" title="Dog" data-hover="Kyla the bull terrier" data-toggle="lightbox" class="lightbox">
							<img src="images/dog-3.png" alt="Dog" />
						</a>
					</div>
				</div>
				<div id="pager" class="pager"></div>
			</div>
		</div>
		<!-- Carousel end -->
		<!-- Rehome -->
		<div class="rehome">
			<div class="container">
				<div class="row">
					<div class="col-md-12 centered">
						<p><a href="#" title="Dougie" class="roundal"></a></p>
						<h4>Could you give <a href="adoption-single.html" title="Could you give Dougie a new home?">Dougie</a> a new home?</h4>
						<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
						<form method="get" action="adoption-single.html">	
							<button type="submit" class="btn btn-default btn-green">Learn more</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Rehome end -->
		<!-- Testimonials -->
		<div class="testimonials" data-stellar-background-ratio="0.6">
			<div class="container">
				<div class="row">
					<div class="col-md-12 centered">
						<!-- Slider -->
						<div id="home_testimonial" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#home_testimonial" data-slide-to="0" class="active"></li>
								<li data-target="#home_testimonial" data-slide-to="1"></li>
								<li data-target="#home_testimonial" data-slide-to="2"></li>
								<li data-target="#home_testimonial" data-slide-to="3"></li>
							</ol>
							
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
									<p>"Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum."</p>
								</div>
								<div class="item">
									<p>"Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui."</p>
								</div>
								<div class="item">
									<p>"Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum."</p>
								</div>
								<div class="item">
									<p>"Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui."</p>
								</div>
							</div>
						</div>
						<!-- Slider end -->

					</div>
				</div>
			</div>
		</div>
		<!-- Testimonials end -->
		<!-- Adoption -->
		<div class="container">
			<div class="row">
				<div class="col-md-12 centered">
					<h3><span>Find your perfect companion</span></h3>
					<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
				</div>
			</div>
			<div class="row adoption">
				<div class="col-md-4">
					<a href="adoption-single.html" title=""><img src="images/dog-4.png" alt="Saint Bernard" /></a>
					<div class="title">
						<h5>
							<span data-hover="Saint Bernard">Saint Bernard</span>
						</h5>
					</div>
				</div>
				<div class="col-md-4">
					<a href="adoption-single.html" title="Beagle"><img src="images/dog-5.png" alt="Beagle" /></a>
					<div class="title">
						<h5>
							<span data-hover="Beagle">Beagle</span>
						</h5>
					</div>
				</div>
				<div class="col-md-4">
					<a href="adoption-single.html" title="Staffordshire Bull Terrier"><img src="images/dog-6.png" alt="Staffordshire Bull Terrier" /></a>
					<div class="title">
						<h5>
							<span data-hover="Staffordshire Bull Terrier">Staffordshire Bull Terrier</span>
						</h5>
					</div>
				</div>
				<div class="col-md-4">
					<a href="adoption-single.html" title="King Charles Cavalier"><img src="images/dog-7.png" alt="King Charles Cavalier" /></a>
					<div class="title">
						<h5>
							<span data-hover="King Charles Cavalier">King Charles Cavalier</span>
						</h5>
					</div>
				</div>
				<div class="col-md-4">
					<a href="adoption-single.html" title="Dachshund"><img src="images/dog-8.png" alt="Dachshund" /></a>
					<div class="title">
						<h5>
							<span data-hover="Dachshund">Dachshund</span>
						</h5>
					</div>
				</div>
				<div class="col-md-4">
					<a href="adoption-single.html" title="French Bulldog"><img src="images/dog-9.png" alt="French Bulldog" /></a>
					<div class="title">
						<h5>
							<span data-hover="French Bulldog">French Bulldog</span>
						</h5>
					</div>
				</div>
			</div>
		</div>
		<!-- Adoption end -->
		<!-- Purchase -->
		<div class="purchase">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<p><strong>Pet</strong>Care is a totally awesome unique &amp; responsive HTML template<br />
						<span>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</span></p>
					</div>
					<div class="col-md-3 purchase-button">
						<form method="get" action="index.html">
							<button type="submit" class="btn btn-default btn-green">Purchase theme</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Purchase end -->
		<!-- Footer -->
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h6>A little about us</h6>
						<p><strong>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat.</strong></p>
						<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam.</p>
					</div>
					<div class="col-md-3 blog">
						<h6>Freshly blogged</h6>
						<p class="title"><a href="#" title="">Eodem modo typi, qui nunc nobis</a></p>
						<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
						<p><a href="#" title="">Read this post&hellip;</a></p>
					</div>
					<div class="col-md-3">
						<h6>You may need this</h6>
						<ul>
							<li><a href="#" title="">Home</a></li>
							<li><a href="#" title="">Contact us</a></li>
							<li><a href="#" title="">FAQ</a></li>
							<li><a href="#" title="">Terms &amp; conditions</a></li>
							<li><a href="#" title="">Privacy policy</a></li>
						</ul>
					</div>
					<div class="col-md-3 contact-info">
						<h6>Keep in touch</h6>
						<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
						<p class="social">
							<a href="#" class="facebook"></a> <a href="#" class="pinterest"></a> <a href="#" class="twitter"></a>
						</p>
						<p class="c-details">
							<span>Mail</span> <a href="#" title="">info@petcare.com</a><br >
							<span>Tel</span> 0203 000 444
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 copyright">
						<p>&copy; Copyright 2014. All rights reserved. <a href="#" title="PetCare wordpress theme">PetCare wordpress theme</a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer end -->
		
		<!-- Javascript plugins -->
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/carouFredSel.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/ekkoLightbox.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>
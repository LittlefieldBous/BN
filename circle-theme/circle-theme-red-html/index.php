<?php
/**
 * Use this file only if your server supports PHP!
 */
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Circle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="stylesheets/bootstrap.min.css" rel="stylesheet">
    <link href="stylesheets/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="stylesheets/main.css" rel="stylesheet">
    <link href="stylesheets/circle-hover-effect.css" rel="stylesheet">
	
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
	
    <!--[if IE 8]>  
      <link rel="stylesheet" href="stylesheets/ie8.css">  
    <![endif]-->  

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

  </head>

  <body id="top-section" data-spy="scroll" data-target=".navbar">

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div id="topnav">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#top-section"><img src="images/circle-logo.png" alt=""></a>
          <div class="nav-collapse collapse pull-right">
            <ul class="nav">
              <li><a href="#work">Work</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	
    <section id="home">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div id="myCarousel" class="carousel slide">
						<div class="carousel-inner">
						  <div class="item active">
							<div class="carousel-circle-div">
								<div class="carousel-circle">
									<div class="carousel-circle-text">
										<h1>WELCOME</h1>
										<h2>THIS IS CIRCLE</h2>
										<h3>A RESPONSIVE ONE PAGE</h3>
										<h4>PORTFOLIO TEMPLATE</h4>
									</div>
								</div>
							</div>
						  </div>
						  <div class="item">
							<div class="carousel-circle-div">
								<div class="carousel-circle">
									<div class="carousel-circle-text">
										<h1>BEAUTY</h1>
										<h2>THIS IS CIRCLE</h2>
										<h3>A RESPONSIVE ONE PAGE</h3>
										<h4>PORTFOLIO TEMPLATE</h4>
									</div>
								</div>
							</div>
						  </div>
						  <div class="item">
							<div class="carousel-circle-div">
								<div class="carousel-circle">
									<div class="carousel-circle-text">
										<h1>DESIGN</h1>
										<h2>THIS IS CIRCLE</h2>
										<h3>A RESPONSIVE ONE PAGE</h3>
										<h4>PORTFOLIO TEMPLATE</h4>
									</div>
								</div>
							</div>
						  </div>
						</div>
						<a class="right carousel-control" href="#myCarousel" data-slide="prev"></a>
					  </div>
				</div>
			</div><!-- end row -->
		</div> <!-- /container -->
    </section><!-- end home section -->
	
    <div class="clearfix"></div>
	
    <section id="work">
		<div class="container">
			<div class="row">
				<div class="span12 title">
					<h1><span class="line-left"></span>WORK<span class="line-right"></span></h1>
				</div>
			</div><!-- end row -->
			
			<div class="row">
				<div class="span12 center">
					<div id="filters" class="portfolio-navigation">
						<a href="#" data-filter="*" class="ione-col active">All</a>
						<a href="#" data-filter=".website" class="ione-col">Website</a>
						<a href="#" data-filter=".coding" class="ione-col">Coding</a>
						<a href="#" data-filter=".photography" class="ione-col ">Photography</a>
					</div>
				</div>
			</div><!-- end row -->
			
			<div id="container-folio" class="row portfolio">
					<ul class="unstyled">
					<li>
					<div class="span3 website project-item box">
						<div class="ch-item">
							<div class="ch-border">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"></div>
									<div class="ch-info-back">
										<h3>THE PROJECT NAME HERE</h3>
										<p><a href="#"><img src="images/icons/info.png" alt=""></a>
										<a href="#"><img src="images/icons/link.png" alt=""></a>
										<a href="#"><img src="images/icons/plus.png" alt=""></a></p>
									</div>	
								</div>
							</div>
							</div>
						</div>
					</div><!-- end circle item -->
					</li>
					<li>
					<div class="span3 coding project-item box">
						<div class="ch-item">
							<div class="ch-border">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-2"></div>
									<div class="ch-info-back">
										<h3>THE PROJECT NAME HERE</h3>
										<p><a href="#"><img src="images/icons/info.png" alt=""></a>
										<a href="#"><img src="images/icons/link.png" alt=""></a>
										<a href="#"><img src="images/icons/plus.png" alt=""></a></p>
									</div>
								</div>
							</div>
							</div>
						</div>
					</div><!-- end circle item -->
					</li>
					<li>
					<div class="span3 photography coding project-item box">
						<div class="ch-item">
							<div class="ch-border">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-3"></div>
									<div class="ch-info-back">
										<h3>THE PROJECT NAME HERE</h3>
										<p><a href="#"><img src="images/icons/info.png" alt=""></a>
										<a href="#"><img src="images/icons/link.png" alt=""></a>
										<a href="#"><img src="images/icons/plus.png" alt=""></a></p>
									</div>
								</div>
							</div>
							</div>
						</div>
					</div><!-- end circle item -->
					</li>
					<li>
					<div class="span3 website coding project-item box">
						<div class="ch-item ch-img-4">
							<div class="ch-border">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-4"></div>
									<div class="ch-info-back">
										<h3>THE PROJECT NAME HERE</h3>
										<p><a href="#"><img src="images/icons/info.png" alt=""></a>
										<a href="#"><img src="images/icons/link.png" alt=""></a>
										<a href="#"><img src="images/icons/plus.png" alt=""></a></p>
									</div>
								</div>
							</div>
							</div>
						</div>
					</div><!-- end circle item -->
					</li>	
					<li>
					<div class="span3 website project-item box">
						<div class="ch-item">
							<div class="ch-border">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-5"></div>
									<div class="ch-info-back">
										<h3>THE PROJECT NAME HERE</h3>
										<p><a href="#"><img src="images/icons/info.png" alt=""></a>
										<a href="#"><img src="images/icons/link.png" alt=""></a>
										<a href="#"><img src="images/icons/plus.png" alt=""></a></p>
									</div>	
								</div>
							</div>
							</div>
						</div>
					</div><!-- end circle item -->
					</li>
					<li>
					<div class="span3 coding project-item box">
						<div class="ch-item">
							<div class="ch-border">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-6"></div>
									<div class="ch-info-back">
										<h3>THE PROJECT NAME HERE</h3>
										<p><a href="#"><img src="images/icons/info.png" alt=""></a>
										<a href="#"><img src="images/icons/link.png" alt=""></a>
										<a href="#"><img src="images/icons/plus.png" alt=""></a></p>
									</div>
								</div>
							</div>
							</div>
						</div>
					</div><!-- end circle item -->
					</li>
					<li>
					<div class="span3 photography coding project-item box">
						<div class="ch-item">
							<div class="ch-border">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-7"></div>
									<div class="ch-info-back">
										<h3>THE PROJECT NAME HERE</h3>
										<p><a href="#"><img src="images/icons/info.png" alt=""></a>
										<a href="#"><img src="images/icons/link.png" alt=""></a>
										<a href="#"><img src="images/icons/plus.png" alt=""></a></p>
									</div>
								</div>
							</div>
							</div>
						</div>
					</div><!-- end circle item -->
					</li>
					<li>
					<div class="span3 website coding project-item box">
						<div class="ch-item">
							<div class="ch-border">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-8"></div>
									<div class="ch-info-back">
										<h3>THE PROJECT NAME HERE</h3>
										<p><a href="#"><img src="images/icons/info.png" alt=""></a>
										<a href="#"><img src="images/icons/link.png" alt=""></a>
										<a href="#"><img src="images/icons/plus.png" alt=""></a></p>
									</div>
								</div>
							</div>
							</div>
						</div>
					</div><!-- end circle item -->
					</li>
					</ul>					
			</div>
		</div>
    </section><!-- end work section -->
	
	<div class="blockquote blockquote-1">
		<div class="container">
			<div class="row">
				<div class="span12 text-center">
				<h2>Proin gravida nibh vel velit auctor aliquet.<br />
				Aenean sollicitudin, lorem quis bibendum auctor id elit.</h2>
				</div>
			</div>
		</div>
	</div>
	
	<section id="about">
		<div class="container">
			<div class="row">
				<div class="span12 title">
					<h1><span class="line-left"></span>ABOUT<span class="line-right"></span></h1>
				</div>
			</div><!-- end row -->
			
			<div class="row move-top">
				<div class="span4">
					<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Sed non  mauris vitae erat consequat.</p>
				</div>
				<div class="span4">
					<p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat.</p>
				</div>
				<div class="span4">
					<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
				</div>
			</div><!-- end row -->
			
			<div class="row move-top employees text-center">
				<div class="span3">
					<div class="employee"><div class="employee-wrap"><img src="images/employee-1.jpg" alt=""></div></div>
					<h3>Marie Clever</h3>
					<h4>Founder & CEO</h4>
					<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi eliequat ipsum, nec sagittis. Nam nec tellus a odio tincidunt auctor a ornare odio. Se nomauris vitae erat consequat auctor.</p>
					<div class="social">
						<a href="#" class="icon icon-tw"></a>
						<a href="#" class="icon icon-fb"></a>
					</div>
				</div>
				<div class="span3">
					<div class="employee"><div class="employee-wrap"><img src="images/employee-2.jpg" alt=""></div></div>
					<h3>John Customize</h3>
					<h4>Web Designer</h4>
					<p>Proin gravida nibh vel velit auctaliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisielit consequat ipsum. Duis sed odio sit amet nibh vulputate cursus a sit ametnim.</p>
					<div class="social">
						<a href="#" class="icon icon-tw"></a>
						<a href="#" class="icon icon-fb"></a>
					</div>
				</div>
				<div class="span3">
					<div class="employee"><div class="employee-wrap"><img src="images/employee-1.jpg" alt=""></div></div>
					<h3>Cinthya Smith</h3>
					<h4>Web Developer</h4>
					<p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed nomauris vitae erat conset auctorelit. Class aptent tacicios ad litora torquent per conubia nostra a ornare.</p>
					<div class="social">
						<a href="#" class="icon icon-tw"></a>
						<a href="#" class="icon icon-fb"></a>
					</div>
				</div>
				<div class="span3">
					<div class="employee"><div class="employee-wrap"><img src="images/employee-2.jpg" alt=""></div></div>
					<h3>Marlon Jackson</h3>
					<h4>Web Developer</h4>
					<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat. Class aptent taciti sociosu. Sed ut imperdiet nisi.</p>
					<div class="social">
						<a href="#" class="icon icon-tw"></a>
						<a href="#" class="icon icon-fb"></a>
					</div>
				</div>
			</div><!-- end row -->
		</div>
	</section><!-- end about section -->
	
	<div class="blockquote blockquote-2">
		<div class="container">
			<div class="row">
				<div class="span12 text-center">
				<h2>Proin gravida nibh vel velit auctor aliquet.<br />
				Aenean sollicitudin, lorem quis bibendum auctor id elit.</h2>
				</div>
			</div>
		</div>
	</div>
	
	<section id="services">
		<div class="container">
			<div class="row">
				<div class="span12 title">
					<h1><span class="line-left"></span>SERVICES<span class="line-right"></span></h1>
				</div>
			</div><!-- end row -->
			
			<div class="row move-top elements">
				<div class="span4">
					<h4><i class="icon icon-1"></i>Bootstrap Based</h4>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
				</div>
				<div class="span4">
					<h4><i class="icon icon-2"></i>Google Webfonts</h4>
					<p>Etiam porta sem malesuada magna mollis. Donec sed odio dui. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
				</div>
				<div class="span4">
					<h4><i class="icon icon-3"></i>HTML5 & CSS3</h4>
					<p>Etiam porta sem malesuada magna mollis. Donec sed odio dui. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
				</div>
			</div><!-- end row -->
			
			<div class="row move-top-2 elements">
				<div class="span4">
					<h4><i class="icon icon-4"></i>Completely Responsive</h4>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
				</div>
				<div class="span4">
					<h4><i class="icon icon-5"></i>Font Awesome Icons</h4>
					<p>Etiam porta sem malesuada magna mollis. Donec sed odio dui. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
				</div>
				<div class="span4">
					<h4><i class="icon icon-6"></i>Clean & Modern</h4>
					<p>Etiam porta sem malesuada magna mollis. Donec sed odio dui. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
				</div>
			</div><!-- end row -->
			
			<div class="row">
				<div class="span12 text-center plan-title">
					<h2>PLANS</h2>
				</div>
			</div><!-- end row -->
			
			<div class="row text-center pricelist">
				<div class="span3">
					<div class="price-item">
						<div class="price">
							<div class="price-circle">15,32<span>per month</span></div>
						</div>
					</div>
					<h3>BASIC</h3>
					<h5>Data Entry Process</h5>
					<p>5 users<br />
					Unlimited access<br />
					3TB of space<br />
					E-mail support</p>
					<button class="btn">Select Plan</button>
				</div>
				<div class="span3">
					<div class="price-item">
						<div class="price">
							<div class="price-circle">29,63<span>per month</span></div>
						</div>
					</div>
					<h3>COMFORT</h3>
					<h5>IT Services Process</h5>
					<p>10 users<br />
					Unlimited access<br />
					15TB of space<br />
					E-mail support</p>
					<button class="btn">Select Plan</button>
				</div>
				<div class="span3">
					<div class="price-item">
						<div class="price">
							<div class="price-circle">58,55<span>per month</span></div>
						</div>
					</div>
					<h3>ADVANCE</h3>
					<h5>Solutions Process</h5>
					<p>30 users<br />
					Unlimited access<br />
					100TB of space<br />
					E-mail support</p>
					<button class="btn">Select Plan</button>
				</div>
				<div class="span3">
					<div class="price-item">
						<div class="price">
							<div class="price-circle">99,38<span>per month</span></div>
						</div>
					</div>
					<h3>CUSTOM</h3>
					<h5>CFO Services</h5>
					<p>Unlimited users<br />
					Unlimited access<br />
					Unlimited TB of space<br />
					E-mail support</p>
					<button class="btn">Select Plan</button>
				</div>
			</div><!-- end row -->
		</div>
	</section><!-- end services section -->
	
	<div class="blockquote blockquote-3">
		<div class="container">
			<div class="row">
				<div class="span12 text-center">
				<h2>Proin gravida nibh vel velit auctor aliquet.<br />
				Aenean sollicitudin, lorem quis bibendum auctor id elit.</h2>
				</div>
			</div><!-- end row -->
		</div>
	</div>
	
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="span12 title">
					<h1><span class="line-left"></span>CONTACT<span class="line-right"></span></h1>
				</div>
			</div><!-- end row -->
			
			<div class="row move-top">
				<div class="span4">		
					<!-- Contact Form -->
					<?php require_once( "incl/send-email.php" ); ?>
				</div>
				
				<div class="span4">
					<div class="map"><div class="map-border"><iframe width="295" height="295" src="https://maps.google.si/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=17+Pre%C5%BEihova+ulica,+Bre%C5%BEice&amp;aq=0&amp;oq=Pre%C5%BEihova+ulica+17+bre&amp;sll=46.149166,14.986011&amp;sspn=3.664676,8.453979&amp;ie=UTF8&amp;hq=&amp;hnear=Pre%C5%BEihova+ulica+17,+8250+Bre%C5%BEice&amp;t=m&amp;z=14&amp;ll=45.90465,15.606683&amp;output=embed"></iframe></div></div>	
				</div>
				
				<div class="span4 info">
					<h3>CIRCLE COMPANY INFO</h3>
					<div class="info-div"><i class="tel"></i>+123 456 789</div>
					<div class="info-div"><i class="mail"></i><a href="#">info@circle.com</a></div>
					<div class="info-div"><i class="address"></i>Prezihova 17, 8250 Brezice, Slovenia</div>
					<div class="social">
						<a href="#" class="icon icon-tw-black"></a>
						<a href="#" class="icon icon-fb-black"></a>
						<a href="#" class="icon icon-tw-black"></a>
						<a href="#" class="icon icon-fb-black"></a>
					</div>
				</div>
			</div><!-- end row -->

		</div>
	</section><!-- end contact section -->
	
	<footer>
		<p>&copy; MMXIII Circle. All right reserved. Theme by <a href="http://www.frequencythemes.com/" target="_blank">Frequency Themes</a></p>
	</footer>
	
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script-carousel-ie.js" type="text/javascript"></script>
    <script src="js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
    <script src="js/jquery.localscroll-1.2.7-min.js" type="text/javascript"></script>
    <script src="js/jquery.scrollTo-1.4.2-min.js" type="text/javascript"></script>
    <script src="js/custom.js" type="text/javascript"></script>
    <script src="js/jquery.waitforimages.js" type="text/javascript"></script> 
    <script src="js/jquery.isotope.min.js" type="text/javascript"></script>

  </body>
</html>

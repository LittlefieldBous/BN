<?php
    require("config.php");
    if(empty($_SESSION['user'])) 
    {
        header("Location: logout.html");
        die("Redirecting to logout.html"); 
    }
?>
    
    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>bluenoodle.org</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--styles -->
    <link href="stylesheets/bootstrap.min.css" rel="stylesheet">
    <link href="stylesheets/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="stylesheets/main.css" rel="stylesheet">
    <link href="stylesheets/circle-hover-effect.css" rel="stylesheet">
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Unkempt' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
   
	
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
	
    <!--[if IE 8]>  
      <link rel="stylesheet" href="stylesheets/ie8.css">  
    <![endif]-->  

<!--easeljs.js for animation on top before head-->
  <script type="text/javascript" src="js/easeljs.js"></script>
 <!--tween.js-->
  <script type="text/javascript" src="js/tweenjs-0.5.0.min.js"></script>
 <!--modernizer-->
  <script src="js/modernizr.js"></script>

   
<!--audio-->
<script language="javascript" type="text/javascript">
function playSound(soundfile) {
  document.getElementById("dummy").innerHTML=
    "<embed src=\""+soundfile+"\" hidden=\"true\" autostart=\"true\" loop=\"false\" />";
}
</script><!--end of audio-->

  </head>
  
  <body id="top-section"> 
 
    <div id="topnav">
    <div class="container">
    
    <div class="nav-collapse collapse pull-right">
    		<p><a href="logout.php"><img src="images/logout.png" alt="logout button"></a></p>
    </div> <!--nav-collapse-->

        <a class="brand" href="#top-section"><img src="images/logo.png" alt="logo"></a>
         <p class="name">Hello <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>!</p>
     
		 
   	<div class="titlebn">   	 
          <h1>Blue Noodle - Play and Learn!</h1>
		  <h3> Interactive Learning Curriculum for the 21st Century Child</h3>
   	</div>
		  			
			<div class="row">
				<div class="span12 title">
				<div id="bheader">
				<!--<img src="images/ban.gif"/>-->
				<img src="images/headered.jpg" alt="banner"/>
				</div> <!--end of bheader id-->
				</div> <!--end of span12 title-->
			</div><!--end row -->

 

			<div class="fixed">
			<div id="container-folio" class="row portfolio">
			<ul class="unstyled"> <!--beginning of list of circles-->
					
					<li> <!--places each circle in a list-->
					 <div class="span3 coding project-item box">
						<div class="ch-item">
							<div class="ch-border">
							<div class="ch-info-wrap">
							<div class="ch-info">
							<div class="ch-info-front ch-img-1"></div> <!--image on front of circle-->
								<div class="ch-info-back">
								 <h3>My Portal</h3>
						<span id="dummy"></span>
						<nav><a href="myportal.html">Click to Enter</a></nav>
						<nav><a onclick="playSound('audio/dinobird.mp3');"><img src="images/listen.png" alt="sound button"></a></nav>
								   </div> <!--end of .ch-info-back-->	
								</div> 	<!--end of ch-info-->
							</div> <!--end of ch-info-wrap-->
							</div> <!--end of ch-border-->
						</div> <!--end of ch-item-->
					</div> <!--end div coding project-item box item1-00-->
				</li> <!--end of circle item1-00-->
					
					<li> <!--begin circle item2-01-->
					<div class="span3 coding project-item box">
						<div class="ch-item">
							<div class="ch-border">
							<div class="ch-info-wrap01">
								<div class="ch-info">
									<div class="ch-info-front ch-img-2"></div>
									<div class="ch-info-back">
										<h3>Trivia</h3>
										<!--TRivia..could record-->
			<nav><a href="#">Click for Answer</a></nav>
									   </div> <!--end of .ch-info-back-->	
								</div> 	<!--end of ch-info-->
							</div> <!--end of ch-info-wrap-->
							</div> <!--end of ch-border-->
						</div> <!--end of ch-item-->
					</div> <!--end div coding project-item box item1-00-->
				</li> <!--end of circle item1-00-->
					
					<li>
					<div class="span3 coding project-item box">
						<div class="ch-item">
							<div class="ch-border">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-3"></div>
									<div class="ch-info-back">
										<h3>Kids Portal</h3>
							<nav><a href="kidsportal.php">Click to Enter</a></nav>
							<nav><a onclick="playSound('audio/tada_01.mp3');"><img src="images/listen.png" alt="tada sound button"></a></nav>										   </div> <!--end of .ch-info-back-->	
								</div> 	<!--end of ch-info-->
							</div> <!--end of ch-info-wrap-->
							</div> <!--end of ch-border-->
						</div> <!--end of ch-item-->
					</div> <!--end div coding project-item box item1-00-->
				</li> <!--end of circle item1-00-->
					
					<li>
					<div class="span3 coding project-item box">
						<div class="ch-item ch-img-4">
							<div class="ch-border">
							<div class="ch-info-wrap03">
								<div class="ch-info">
									<div class="ch-info-front ch-img-4"></div>
									<div class="ch-info-back">
										<h3>Parent & Teacher Portal </h3>
								<nav><a href="parentport.php">Click to Enter</a></nav>
									   </div> <!--end of .ch-info-back-->	
								</div> 	<!--end of ch-info-->
							</div> <!--end of ch-info-wrap-->
							</div> <!--end of ch-border-->
						</div> <!--end of ch-item-->
					</div> <!--end div coding project-item box item1-00-->
				</li> <!--end of circle item1-00-->
	
					<li>
					<div class="span3 coding project-item box">
						<div class="ch-item">
							<div class="ch-border">
							<div class="ch-info-wrap04">
								<div class="ch-info">
									<div class="ch-info-front ch-img-5"></div>
									<div class="ch-info-back">
										<h3>Writing</h3>
								<nav><a href="writing.html">Click to Enter</a></nav>	
								<nav><a onclick="playSound('audio/cricket.mp3');"><img src="images/listen.png" alt="cricket sound button"></a></nav>	
								   </div> <!--end of .ch-info-back-->	
								</div> 	<!--end of ch-info-->
							</div> <!--end of ch-info-wrap-->
							</div> <!--end of ch-border-->
						</div> <!--end of ch-item-->
					</div> <!--end div coding project-item box item1-00-->
				</li> <!--end of circle item1-00-->

					<li>
					<div class="span3 coding project-item box">
						<div class="ch-item">
							<div class="ch-border">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-6"></div>
									<div class="ch-info-back">
										<h3>Reading</h3>
							<nav><a href="reading.html">Click to Enter</a></nav>	
							<nav><a onclick="playSound('audio/lion.mp3');"><img src="images/listen.png" alt="lion roar sound button"></a></nav>									
								</div> <!--end of .ch-info-back-->	
							</div> 	<!--end of ch-info-->
						</div> <!--end of ch-info-wrap-->
							</div> <!--end of ch-border-->
						</div> <!--end of ch-item-->
					</div> <!--end div coding project-item box item1-00-->
				</li> <!--end of circle item1-00-->

					<li>
					<div class="span3 coding project-item box">
						<div class="ch-item">
							<div class="ch-border">
							<div class="ch-info-wrap06">
								<div class="ch-info">
									<div class="ch-info-front ch-img-7"></div>
									<div class="ch-info-back">
										<h3>THE BLUE NOODLER</h3>
							<nav><a href="#">Click to Enter</a></nav>
							<nav><a onclick="playSound('audio/door.mp3');"><img src="images/listen.png" alt="door sound button"></a></nav>															
							   </div> <!--end of .ch-info-back-->	
								</div> 	<!--end of ch-info-->
							</div> <!--end of ch-info-wrap-->
							</div> <!--end of ch-border-->
						</div> <!--end of ch-item-->
					</div> <!--end div coding project-item box item1-00-->
				</li> <!--end of circle item1-00-->
									
					<li>
					<div class="span3 coding project-item box">
						<div class="ch-item">
							<div class="ch-border">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-8"></div>
									<div class="ch-info-back">
										<h3>Science</h3>
						<nav><a href="science.html">Click to Enter</a></nav>
						<nav><a onclick="playSound('audio/pop_01.mp3');"><img src="images/listen.png" alt="pop sound button"></a></nav>
							
								   </div> <!--end of .ch-info-back-->	
								</div> 	<!--end of ch-info-->
							</div> <!--end of ch-info-wrap-->
							</div> <!--end of ch-border-->
						</div> <!--end of ch-item-->
					</div> <!--end div coding project-item box item1-00-->
				</li> <!--end of circle item1-00-->

				<li>
					<div class="span3 coding project-item box">
						<div class="ch-item">
							<div class="ch-border">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-9"></div>
									<div class="ch-info-back">
										<h3>Math</h3>
										<nav><a href="math.html">Click to Enter</a></nav>
									   <nav><a onclick="playSound('audio/roost2.mp3');"><img src="images/listen.png" alt="rooster sound"></a></nav>
									
									  </div> <!--end of .ch-info-back-->	
								</div> 	<!--end of ch-info-->
							</div> <!--end of ch-info-wrap-->
							</div> <!--end of ch-border-->
						</div> <!--end of ch-item-->
					</div> <!--end div coding project-item box item1-00-->
				</li> <!--end of circle item1-00-->

					<li>
					<div class="span3 coding project-item box">
						<div class="ch-item">
							<div class="ch-border">
							<div class="ch-info-wrap09">
								<div class="ch-info">
									<div class="ch-info-front ch-img-10"></div>
									<div class="ch-info-back">
										<h3>ART</h3>
						<nav><a href="art.html">Click to Enter</a></nav>
						<nav><a onclick="playSound('audio/paint_01.mp3');"><img src="images/listen.png" alt="paintbrush sound"></a></nav>								
								   </div> <!--end of .ch-info-back-->	
								</div> 	<!--end of ch-info-->
							</div> <!--end of ch-info-wrap-->
							</div> <!--end of ch-border-->
						</div> <!--end of ch-item-->
					</div> <!--end div coding project-item box item1-00-->
				</li> <!--end of circle item1-00-->

					<li>
					<div class="span3 coding project-item box">
						<div class="ch-item">
						  <div class="ch-border">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-11"></div>
									<div class="ch-info-back">
										<h3>Music</h3>
					<nav><a href="music.html">Click to Enter</a></nav>
					<nav><a onclick="playSound('audio/music_01.mp3');"><img src="images/listen.png" alt="music button"></a></nav>										         				
					</div> <!--end of .ch-info-back-->	
								</div> 	<!--end of ch-info-->
							</div> <!--end of ch-info-wrap-->
							</div> <!--end of ch-border-->
						</div> <!--end of ch-item-->
					</div> <!--end div coding project-item box item1-00-->
				</li> <!--end of circle item1-00-->

				<li>
					<div class="span3 coding project-item box">
						<div class="ch-item">
							<div class="ch-border">
							<div class="ch-info-wrap11">
								<div class="ch-info">
									<div class="ch-info-front ch-img-12"></div>
									<div class="ch-info-back">
										<h3>Spelling</h3>
			<nav><a href="spelling.html">Click to Enter</a></nav>
		 	<nav><a onclick="playSound('audio/crunch_01.mp3');"><img src="images/listen.png" alt="crunch sound"></a></nav>
		 						
		 						   </div> <!--end of ch-info-back-->	
								</div> 	<!--end of ch-info-->
							</div> <!--end of ch-info-wrap-->
							</div> <!--end of ch-border-->
						</div> <!--end of ch-item-->
					</div> <!--end div coding project-item box item1-00-->
				</li> <!--end of circle item1-00-->
						
					
			</ul> <!--end of circle lists-->
										
			</div> <!--end of top nav>-->
			</div> <!--end of container-->
			</div> <!--end of fixed-->
		</div> <!--end of container folio-->
		
	<footer>
	<div class="span12 footer">
		 <div class="links">
			<p><a href="#">| About </a></p>
			<p><a href="#">| Develop for us </a></p>
			<p><a href="#">| For Schools </a></p>
			<p><a href="#">| Press & Media </a></p>
			<p><a href="#">| Terms & Conditions </a></p>
			<p><a href="#">| Privacy |</a></p>
		</div>
	
	
		
		  <p><a href="#">&copy; bluenoodle.org</a></p>	
	   </div>
	</footer>
					
					
	
    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script-carousel-ie.js" type="text/javascript"></script>
      <script src="js/custom.js" type="text/javascript"></script>
   

<!--added js files-->


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<script>window.jQuery || document.write('<script src="js/jquery-1.11.1.min.js"><\/script>')</script>
<!-- plugins -->
<!-- main -->

<!--for animation tags-->
<script type="text/javascript" src="js/Animate.js"></script>
<!--audio-->

 

  </body>
</html>

   
    
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
    <title>bluenoodle.org - kid's portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--styles -->
    <link href="stylesheets/bootstrap.min.css" rel="stylesheet">
    <link href="stylesheets/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="stylesheets/main.css" rel="stylesheet">
    <link href="stylesheets/circle-hover-effect.css" rel="stylesheet">
    <link href="stylesheets/bootstrap-lightbox.css" rel="stylesheet">
    
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

<!--code for modal-->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $('#link').click(function () {
            var src = 'http://www.youtube.com/v/FSi2fJALDyQ&amp;autoplay=1';
            $('#myModal').modal('show');
            $('#myModal iframe').attr('src', src);
        });

        $('#myModal button').click(function () {
            $('#myModal iframe').removeAttr('src');
        });
    </script>
<!--end of modal code-->

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



<!--lightbox-->
<script>
$('#myLightbox').lightbox(options)
</script>
  </head>
  
  <body id="top-section"> 
 
    <div id="topnav">
    <div class="container">
    
    <div class="nav-collapse collapse pull-right">
    		<p><a href="logout.php"><img src="images/logout.png" alt="logout button"></a></p>
    		
    </div> <!--nav-collapse-->

        <a class="brand" href="#top-section"><img src="images/logo.png" alt=""></a>
        <p class="name">Hello <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>!</p>
     

   	<div class="titlebn">   	 
          <h1>Blue Noodle - Kid's Portal!</h1>
		  <h3> Interactive Learning Curriculum for the 21st Century Child</h3>
   	</div>
		  
		
			<div class="row">
				<div class="span12 title">
				<div id="bheader">
				<!--<img src="images/ban.gif"/>-->
				<img src="images/header.jpg"/>
				</div> <!--end of bheader id-->
				</div> <!--end of span12 title-->
			</div><!--end row -->
 
 
				<!--circle subjects begin-->
			<div class="fixed">
			<div id="container-folio" class="row portfolio">
					<ul class="unstyled"> <!--beginning of list of circles-->
					
					<li> <!--places each circle in a list-->
					 <div class="span3 coding project-item box">
						<div class="ch-item">
							<div class="ch-border">
							<div class="ch-info-wrap">
							<div class="ch-info">
							<div class="ch-info-front ch-img-1"></div> <!image on front of circle-->
								<div class="ch-info-back">
								 <h3>My Portal</h3>
						<span id="dummy"></span>
						<nav><a href="myportal.html">Click to Enter</a></nav>
						<nav><a onclick="playSound('audio/dinobird.mp3');"><img src="images/listen.png" alt=""></a></nav>
								   </div> <!--end of .ch-info-back-->	
								</div> 	<!--end of ch-info-->
							</div> <!--end of ch-info-wrap-->
							</div> <!--end of ch-border-->
						</div> <!--end of ch-item-->
					</div><!-- end div coding project-item box item1-00 -->
				</li><!--end of circle item1-00-->
										
					
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
					
										
				<li> <!--begin circle item2-01-->
					<div class="span3 coding project-item box">
						<div class="ch-item">
							<div class="ch-border">
							<div class="ch-info-wrap"> <!--wrap is the square porter when image added-->                     <div class="ch-info">
									<div class="ch-info-front ch-img-k00"></div>
									<div class="ch-info-back">
										<h3>Blue Noodle Challenge</h3>
			<nav><a data-toggle="lightbox" href="#lightbox1">Learn More!</a><nav>
								   </div> <!--end of .ch-info-back-->	
								</div> 	<!--end of ch-info-->
							</div> <!--end of ch-info-wrap-->
							</div> <!--end of ch-border-->
						</div> <!--end of ch-item-->
					</div> <!-- end div coding project-item box item1-00-->
				</li> <!--end of circle item1-00-->
					
				<li>
					<div class="span3 coding project-item box">
						<div class="ch-item ch-img-4">
							<div class="ch-border">
							<div class="ch-info-wrap03">
								<div class="ch-info">
									<div class="ch-info-front ch-img-13"></div>
									<div class="ch-info-back">
										<h3>Blue Noodle Portal</h3>
											<span id="dummy"></span>
							<nav><a href="main.php">Click to Enter</a></nav>
							<nav><a onclick="playSound('audio/door.mp3');"><img src="images/listen.png" alt="door sound"></a></nav>											   </div> <!--end of .ch-info-back-->	
								</div> 	<!--end of ch-info-->
							</div> <!--end of ch-info-wrap-->
							</div> <!--end of ch-border-->
						</div> <!--end of ch-item-->
					</div><!-- end div coding project-item box item1-00 -->
				</li><!--end of circle item1-00-->
	
				    <!--kpcircle05-->
				
				    
				    <li> <!--begin circle item2-01-->
					<div class="span3 coding project-item box">
						<div class="ch-item">
							<div class="ch-border">
							<div class="ch-info-wrap03">
								<div class="ch-info">
									<div class="ch-info-front ch-img-k01"></div>
									<div class="ch-info-back">
										<h3>A Raccoon</h3>
			<nav><a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"data-theVideo="https://www.youtube.com/embed/w4cKSOpG1s0">Learn More!</a><nav>
							   </div> <!--end of .ch-info-back-->	
								</div> 	<!--end of ch-info-->
							</div> <!--end of ch-info-wrap-->
							</div> <!--end of ch-border-->
						</div> <!--end of ch-item-->
					</div><!-- end div coding project-item box item1-00 -->
				</li><!--end of circle item1-00-->
			
				   
				    <li> <!--begin circle item2-01-->
					<div class="span3 coding project-item box">
						<div class="ch-item">
							<div class="ch-border">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-k02"></div>
									<div class="ch-info-back">
										<h3>Owls</h3>
			  <nav><a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"data-theVideo="https://www.youtube.com/embed/m0XgSrdYQRY">Learn More!</a><nav>
							   </div> <!--end of .ch-info-back-->	
								</div> 	<!--end of ch-info-->
							</div> <!--end of ch-info-wrap-->
							</div> <!--end of ch-border-->
						</div> <!--end of ch-item-->
					</div> <!-- end div coding project-item box item1-00 -->
				</li> <!--end of circle item1-00-->
					
	
		 <!--kpcircle07-->
		 
		
				    <li> <!--begin circle item2-01-->
					<div class="span3 coding project-item box">
						<div class="ch-item">
							<div class="ch-border">
							<div class="ch-info-wrap03">
								<div class="ch-info">
									<div class="ch-info-front ch-img-k03"></div>
									<div class="ch-info-back">
										<h3>Bats</h3>
			<nav><a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"data-theVideo="https://www.youtube.com/embed/o6rYJMddEzg">Learn More!</a><nav>
								   </div> <!--end of .ch-info-back-->	
								</div> 	<!--end of ch-info-->
							</div> <!--end of ch-info-wrap-->
							</div> <!--end of ch-border-->
						</div> <!--end of ch-item-->
					</div><!-- end div coding project-item box item1-00 -->
				</li><!--end of circle item1-00-->
					
	
				    <li> <!--begin circle item2-01-->
					<div class="span3 coding project-item box">
						<div class="ch-item">
							<div class="ch-border">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-k04"></div>
									<div class="ch-info-back">
									<h3>Opossum</h3>
			<nav><a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"data-theVideo="https://www.youtube.com/embed/mNtlMfrhbE4">Learn More!</a><nav>
								   </div> <!--end of .ch-info-back-->	
								</div> 	<!--end of ch-info-->
							</div> <!--end of ch-info-wrap-->
							</div> <!--end of ch-border-->
						</div> <!--end of ch-item-->
					</div> <!-- end div coding project-item box item1-00 -->
				</li> <!--end of circle item1-00-->
	
	
			</ul> <!--end of circle lists-->					
			</div> <!--end of fixed-->
		</div> <!--end of container folio-->
		
		
		 </div> <!--container-->
      </div> <!--topnav-->
      	
    
 <!--modal section per lesson circle/animal-->
 <section>
 
 <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="inline:left;">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>

            <!-- Body -->
            <div class="modal-body">
                <iframe width="100%" height="350" src=""></iframe>
            </div>

            <!-- Footer -->
            <div class="modal-footer">
               
            </div>
        </div>
    </div>
</div>
 
 
 </section>
 
 
 
    
    <section> <!--defines the lightbox-->
    
    <!--lightbox1-->
    <div class="container">
    	<div class="row">
    		<div class = "span12">
				<div id="lightbox1" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
		<div class='lightbox-content'>
		<img src="images/theChallenge.jpg">
		<div class="lightbox-caption"><p>Earn More Treasure Box Points! -And Remember At Blue Noodle We Only Use Avatar Names!</p></div>
		</div>
		</div>

   </div>
  </div>
</div>  

<!--end lightbox1-->



 <!--lightbox2-->
    <div class="container">
    	<div class="row">
    		<div class = "span12">
				<div id="lightbox2" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
		<div class='lightbox-content'>
		<img src="images/theraccoon.jpg">
		<div class="lightbox-caption"><p>The Raccoon</p></div>
		</div>
		</div>

   </div>
  </div>
</div>  

<!--end lightbox2-->

 <!--lightbox3-->
    <div class="container">
    	<div class="row">
    		<div class = "span12">
				<div id="lightbox3" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
		<div class='lightbox-content'>
		<img src="images/theraccoon.jpg">
		<div class="lightbox-caption"><p>The Raccoon</p></div>
		</div>
		</div>

   </div>
  </div>
</div>  

<!--end lightbox3-->



 <!--lightbox4-->
    <div class="container">
    	<div class="row">
    		<div class = "span12">
				<div id="lightbox4" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
		<div class='lightbox-content'>
		<img src="images/theraccoon.jpg">
		<div class="lightbox-caption"><p>The Raccoon</p></div>
		</div>
		</div>

   </div>
  </div>
</div>  

<!--end lightbox4-->

 <!--lightbox4-->
    <div class="container">
    	<div class="row">
    		<div class = "span12">
				<div id="lightbox5" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
		<div class='lightbox-content'>
		<img src="images/theraccoon.jpg">
		<div class="lightbox-caption"><p>The Raccoon</p></div>
		</div>
		</div>

   </div>
  </div>
</div>  

<!--end lightbox4-->


 </section>


	
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
	
	
		 </br>
		 </br>
		  <p><a href="#">&copy; bluenoodle.org</a></p>	
	   </div>
	</footer>
					


<script>
    //FUNCTION TO GET AND AUTO PLAY YOUTUBE VIDEO FROM DATATAG
    function autoPlayYouTubeModal(){
        var trigger = $("body").find('[data-toggle="modal"]');
        trigger.click(function() {
            var theModal = $(this).data( "target" ),
                    videoSRC = $(this).attr( "data-theVideo" ),
                    videoSRCauto = videoSRC+"?autoplay=1" ;
            $(theModal+' iframe').attr('src', videoSRCauto);
            $(theModal+' button.close').click(function () {
                $(theModal+' iframe').attr('src', videoSRC);
            });
        });
    }
    //THE FUNCTION CALL:

            $(document).ready(function(){
                autoPlayYouTubeModal();
            });
</script>
					
	
    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/script-carousel-ie.js" type="text/javascript"></script>
    <script src="js/custom.js" type="text/javascript"></script>
    <script src="js/bootstrap-lightbox.js"></script>
 

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

   
    
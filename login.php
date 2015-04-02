<?php 
    require("config.php"); 
    $submitted_username = ''; 
    if(!empty($_POST)){ 
        $query = " 
            SELECT 
                id, 
                username, 
                password, 
                salt, 
                email 
            FROM users 
            WHERE 
                username = :username 
        "; 
        $query_params = array( 
            ':username' => $_POST['username'] 
        ); 
         
        try{ 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 
        $login_ok = false; 
        $row = $stmt->fetch(); 
        if($row){ 
            $check_password = hash('sha256', $_POST['password'] . $row['salt']); 
            for($round = 0; $round < 65536; $round++){
                $check_password = hash('sha256', $check_password . $row['salt']);
            } 
            if($check_password === $row['password']){
                $login_ok = true;
            } 
        } 

        if($login_ok){ 
            unset($row['salt']);     
            unset($row['password']); 
            $_SESSION['user'] = $row;  
            header("Location: index.php"); 
            die("Redirecting to: index.php"); 
        } 
        else{ 
            print("Login Failed."); 
            $submitted_username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8'); 
        } 
    } 
    
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>bluenoodle.org-login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--styles -->
    <link href="stylesheets/bootstrap.min.css" rel="stylesheet">
    <link href="stylesheets/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="stylesheets/login.css" rel="stylesheet">
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

  </head>
  
  
  <body id="top-section">
      
    <div id="topnav">
    <div class="container">
    
       <a class="brand" href="#top-section"><img src="images/logo.png" alt=""></a>
     
 <header>
     	<div class="titlebn">
          <h1>Blue Noodle - Play and Learn!</h1>
		  <h3> Interactive Learning Curriculum for the 21st Century Child</h3>
     	</div> <!end of titlebn-->
		            		 
	 </header> <!--end of header-->
 
  <section>	 
	 <div class="greencircle">
	 <div class="row">
	 <div class="col-lg-3">	
	 <h4>Our Mission:</h4>
	 <p>To give all children the</br>
	 learning advantage!</p>
	 <p>To develop literacy, numeracy skills</br>& more through fun
	 interactive games!</p>
	 <p><a href="#">Learn more visit</br>our Facebook Page!</a></p> 
	 </div>
	 </div>
	 </div>
</section>
 
  <section>
<div class="blueClogin">
   <div class="row">
		<div class="col-lg-6">	
		<h3>Blue Noodle</br>Member Login</h3>									
				<div id="formbox">
		<form action="login.php" method="post"> 
                    Username:<br /> 
                    <input type="text" name="username" value=""<?php echo $submitted_username; ?>" placeholder="Username" /> 
                    <br/>
                    Password:<br /> 
                    <input type="password" name="password" value="" placeholder="Password"/> 
                    <br/><br/> 
                    <input type="submit" class="btn btn-warning" value="LogIN"/> 
                </form>				
				</div> <!--end of form box--> 
				</div> <!--end of col-lg-6-->             
               			
 </div> <!--end of row-->
 </div> <!--end of blueClogin-->
 
 </section>
   
  
<section>	 
	 <div class="purplecircle">
	 <div class="row">
	 <div class="col-lg-3">	
	 <h3>C'mon In!</br>Get Ready to...</h3>
	 <p>Discover!</p>
	 <p>Invent</p>
	 <p>Have Fun!</p>
	 </div>
	 </div>
	 </div>
</section>
    
   </div> <!--container-->
      </div> <!--topnav-->
		
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
					
				
	
    <!--javascript
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

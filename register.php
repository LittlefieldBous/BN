<?php 
    require("config.php");
    if(!empty($_POST)) 
    { 
        // Ensure that the user fills out fields 
        if(empty($_POST['username'])) 
        { die("Please enter a username."); } 
        if(empty($_POST['password'])) 
        { die("Please enter a password."); } 
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
        { die("Invalid E-Mail Address"); } 
         
        // Check if the username is already taken
        $query = " 
            SELECT 
                1 
            FROM users 
            WHERE 
                username = :username 
        "; 
        $query_params = array( ':username' => $_POST['username'] ); 
        try { 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 
        $row = $stmt->fetch(); 
        if($row){ die("This username is already in use"); } 
        $query = " 
            SELECT 
                1 
            FROM users 
            WHERE 
                email = :email 
        "; 
        $query_params = array( 
            ':email' => $_POST['email'] 
        ); 
        try { 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage());} 
        $row = $stmt->fetch(); 
        if($row){ die("This email address is already registered"); } 
         
        // Add row to database 
        $query = " 
            INSERT INTO users ( 
                username, 
                password, 
                salt, 
                email 
            ) VALUES ( 
                :username, 
                :password, 
                :salt, 
                :email 
            ) 
        "; 
         
        // Security measures
        $salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 
        $password = hash('sha256', $_POST['password'] . $salt); 
        for($round = 0; $round < 65536; $round++){ $password = hash('sha256', $password . $salt); } 
        $query_params = array( 
            ':username' => $_POST['username'], 
            ':password' => $password, 
            ':salt' => $salt, 
            ':email' => $_POST['email'] 
        ); 
        try {  
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 
        header("Location:login.php"); 
        die("Redirecting to login.php"); 
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
  </head>
  
  
  <body id="top-section">
      
    <div id="topnav">
    <div class="container">
    
    <a class="brand" href="#top-section"><img src="images/logo.png" alt="logo"></a>
     
 <header>
     	<div class="titlebn">
          <h1>Blue Noodle - Play and Learn!</h1>
		  <h3> Interactive Learning Curriculum for the 21st Century Child</h3>
     	</div> <!--end of titlebn-->
 <br>		

	 </header> <!--end of header-->
	 
<section>	 
	 <div class="orangecircle">
	 <div class="row">
	 <div class="col-lg-3">	
	 <h4>Our Mission:</h4>
	 <p>To give all children the<br>
	 learning advantage!</p>
	 <p>To develop literacy, numeracy skills<br>& more through fun
	 interactive games!</p>
	 <p><a href="#">Learn more visit<br>our Facebook Page!</a></p> 
	 </div>
	 </div>
	 </div>
</section>

<section>
<div class="bluecircle">
   <div class="row">
		<div class="col-lg-6">	
		<div id="formbox">
		<h3>Sign Up!<br>For a FREE 30 Day Trial!</h3>		
	<form action="register.php" method="post"> 
    <input type="text" name="username" value="Enter an Imaginary Username."/><br> 
    <input type="text" name="email" value="Please Enter Parent Email"/><br> 
    <input type="password" name="password" value="" Placeholder ="Create a password"/><br>
    <p><a href="member.php">Or Become a Blue Noodle Member Today!</a></p>
    <input type="submit" class="btn btn-success" value="Sign UP!" /> 
</form>
		</div> <!--end of formbox-->

</div> <!--end of col-lg-6-->
				                       
               			
 </div> <!--end of row-->
</div> <!--end of bluecircle-->

</section> <!--end of section-->
  
  
  <section>	 
	 <div class="yellowcircle">
	 <div class="row">
	 <div class="col-lg-3">	
	 <h3>FREE<br>MEMBERSHIP<br>FOR<br>TEACHERS &<br>SCHOOLS</h3>
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
	
	
		 <br>
		 <br>
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

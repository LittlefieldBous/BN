<?php
session_start();
include_once("config2.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Membership Plans</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">

    <link href="stylesheets/bootstrap.css" rel="stylesheet">
    <link href="stylesheets/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="stylesheets/main.css" rel="stylesheet">
    <link href="stylesheets/circle-hover-effect.css" rel="stylesheet">
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Unkempt' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
   
	
 <!--modernizer-->
  <script src="js/modernizr.js"></script>
  
 <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
	
    <!--[if IE 8]>  
      <link rel="stylesheet" href="stylesheets/ie8.css">  
    <![endif]-->  
  
 

</head>

<body id = "top-section">

    <div id="topnav">
  <div class="container">
    
    <div class="nav-collapse collapse pull-right">
    		<p><a href="login.php"><img src="images/login1.png" alt="login button"></a></p>
    </div> <!--nav-collapse-->


        <a class="brand" href="#top-section"><img src="images/logo.png" alt="logo"></a>
   
			<div class="titlebn2">
          <h1>Blue Noodle - Play and Learn!</h1>
		  <h3> Interactive Learning Curriculum for the 21st Century Child</h3>
		 
		  
      </div> <!--container-->
    </div> <!--topnav-->
      	<hr>

    <?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = $mysqli->query("SELECT * FROM products ORDER BY id ASC");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
        	echo '<div class="fixed">';
			echo '<div class="product">'; 
            echo '<form method="post" action="cart_update.php">';
            echo '<div class="span3">';
			echo '<div class="product-thumb"><img src="images/'.$obj->product_img_name.'"></div>';
			echo '</div>';
			echo '<div class="fixed">';
			echo '<div class="span3">';
			echo '<div class="product-content"><h3>'.$obj->product_name.'</h3>';
            echo '<div class="product-desc">'.$obj->product_desc.'</div>';
            echo '<div class="product-info">';
			echo 'Price '.$currency.$obj->price.' | ';
            echo 'Qty <input type="text" name="product_qty" value="1" size="3"/></br>';
			echo '<button class="add_to_cart">Add To Cart</button>';
			echo '</div></div>';
			echo '</div>';
			echo '</div>';
			echo '<div class="fixed">';
			echo '<div class="span3">';
            echo '<input type="hidden" name="product_code" value="'.$obj->product_code.'" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';            	
            
        }
    
    }
    ?>
    </div>
    
<div class="shopping-cart">
<h3>Your Shopping Cart</h3>
<?php
if(isset($_SESSION["products"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["products"] as $cart_itm)
    {
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
        echo '<h4>'.$cart_itm["name"].'</h4>';
        echo '<div class="p-code">P code : '.$cart_itm["code"].'</div>';
        echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
        echo '<div class="p-price">Price :'.$currency.$cart_itm["price"].'</div>';
        echo '</li>';
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
    }
    echo '</ol>';
    echo '<span class="check-out-txt"><strong>Total : '.$currency.$total.'</strong> <a href="view_cart.php"></br>Check-out!</a></span>';
	echo '<span class="empty-cart"><a href="cart_update.php?emptycart=1&return_url='.$current_url.'"></br>Empty Cart</a></span>';
}else{
    echo 'Your Cart is empty';
}
?>
</div>
    
</div>

</body>
</html>

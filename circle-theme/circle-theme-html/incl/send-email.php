<?php

/* set the email of the recipient (your email) */
$recipient = "test@example.com";


if ( isset($_POST['submit']) ) // just send the email if the $_POST variable is set
{
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$subject = "Email From Website: " . $name; // subject of the email msg
	
	$errors = array(); // empty array of the err
	
	/*
	 * The fields
	 * 1st param: submitted data
	 * 2nd param: reuqired (TRUE) or not (FALSE)  
	 * 3rd param: the name for the error
	*/
	$fields = array(
		'name'		=> array($name, TRUE, "First and Last name"),
		'phone' 	=> array($phone, FALSE, "Phone Number"),
		'email' 	=> array($email, TRUE, "E-mail Address"),
		'message' 	=> array($message, TRUE, "Your Message"),
	);
	
	$i=0;
	foreach ($fields as $key => $field)
	{
		if ( FALSE == test_field( $field[0], $field[1] ) )
		{
			$errors[$key] = "The field '".$field[2]."' is required.";
		}
		$i++;
	}
	
	//var_dump($errors);
	
	if (empty($errors)) // if there is no errors, we can send the mail
	{
		$body = "";
		$body .= "----- Info about the sender -----\n\n";
		$body .= "Name: ".$fields['name'][0]."\n";
		$body .= "Email: ".$fields['email'][0]."\n";
		$body .= "Phone: ".$fields['phone'][0]."\n";
		$body .= "\n\n----- Message -----\n\n";
		$body .= $fields['message'][0];
		
		if( mail( $recipient, $subject, $body, "FROM: ".$fields['email'][0] ) ) // try to send the message, if not successful, print out the error
		{
			message_was_sent($fields);
		}
		else
		{
			echo "It is not possible to send the email. Check out your PHP settings!";
			print_the_form($errors, $fields);
		}
	}
	else // if there are any errors
	{
		print_the_form($errors, $fields);
	}	
}
else
{
	print_the_form();
}

function print_the_form($errors = array(), $fields = null) // izpiše formualar
{
	?>
	
						<!--  = contact form =  -->
						<form action="#contact-form" method="post" id="contact-form">
						
						<input type="text" name="name" value="<?php inpt_value('name', $fields); ?>" id="inpt-name" placeholder="NAME"/>
						<?php show_error('name', $errors); ?>
						
    					<input type="tel" name="phone" value="<?php inpt_value('phone', $fields); ?>" id="inpt-phone" placeholder="PHONE" />
						<?php error_class('phone', $errors); ?>
						
						<input type="email" name="email" value="<?php inpt_value('email', $fields); ?>" id="inpt-email" placeholder="EMAIL" />
    					<?php show_error('email', $errors); ?>
						
						<textarea name="message" placeholder="MESSAGE" id="txtarea"><?php inpt_value('message', $fields); ?></textarea>
    					<?php show_error('message', $errors); ?>
						<input type="hidden" value="1" name="submit" />
						<input type="submit" class="btn pull-right" value="Send Message">
						</form>

<!--  = /contact form =  -->

	
	<?php
}

function message_was_sent($fields) // notification that sending the mail was successful
{
	?>
	<div class="alert alert-success c-top" id="contact-form">
		Your message was sent successfully!
	</div>
	<?php
}

/**
 * Returns TRUE if field is required and OK
 */
function test_field($content, $required)
{
	if ( TRUE == $required )
	{
		if (strlen($content)<1)
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	} else 
	{
		return TRUE;
	}
}

/**
 * Add the appropirate class name to the specified input field
 */
function error_class($name, $errors) {
	if ( array_key_exists( $name, $errors ) ) {
		echo " error";
	}
}

/**
 * repopulate the data when the form is submitted and errors returned
 */
function inpt_value($name, $fields) {
	if ( null === $fields ) {
		return;
	} else {
		echo $fields[$name][0];
	}
} 

function show_error( $name, $errors ) {
	if ( array_key_exists( $name, $errors ) )
	echo '<div class="help-block"> ' . $errors[$name] . ' </div>';
}

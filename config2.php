<?php
$currency = '$'; //Currency sumbol or code
$db_username = 'root';
$db_password = 'root';
$db_name = 'bluenoodle';
$db_host = 'localhost';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);


//paypal settings
$PayPalMode 			= 'sandbox'; // sandbox or live
$PayPalApiUsername 		= 'amybousamra-facilitator_api1.live.com'; //PayPal API Username
$PayPalApiPassword 		= 'ZHA2S6BHXCKKEY4S'; //Paypal API password
$PayPalApiSignature 	= 'Axu3k0GW8kas1mUXnSXLlQSwo6zgARDUX-PQN87BzGO46OqBZgURJ9Gy'; //Paypal API Signature
$PayPalCurrencyCode 	= 'USD'; //Paypal Currency Code
$PayPalReturnURL 		= 'http://localhost:8888/process.php'; //Point to process.php page
$PayPalCancelURL 		= 'http://localhost:8888/cancel_url.html'; //Cancel URL if user clicks cancel

?>
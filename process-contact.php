<?php

	$to = "JoeBerry402@gmail.com";
        $from = $_REQUEST['email'];
	$name = $_REQUEST['name'];
	$phone = $_REQUEST['phone'];
	$address = $_REQUEST['address'];
	$service = $_REQUEST['service'];
	$message = $_REQUEST['message'];
	$headers = "From: $from";
	$subject = "New ABetterPruning.com Contact Form Submission";

	$fields = array();
	$fields{"name"} = "Name";
	$fields{"email"} = "Email";
	$fields{"phone"} = "Phone";
	$fields{"address"} = "Address";
	$fields{"service"} = "Service";
	$fields{"message"} = "Message";


	$body = "ABetterPruning.com Form Message:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

	$send = mail($to, $subject, $body, $headers);

?>

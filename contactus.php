<?php
if($_POST)
{
//require('constant.php');
    
    $user_name      = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $user_phone      = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
    $user_email     = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $user_message   = filter_var($_POST["messages"], FILTER_SANITIZE_STRING);
    
    if(empty($user_name)) {
		$empty[] = "<b>Name</b>";		
	}
	if(empty($user_email)) {
		$empty[] = "<b>Email</b>";
	}
	
		if(empty($phone)) {
		$empty[] = "<b>Phone</b>";
	}
	
	if(!empty($empty)) {
		$output = json_encode(array('type'=>'error', 'text' => implode(", ",$empty) . ' Required!'));
        die($output);
	}
	
	if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){ //email validation
	    $output = json_encode(array('type'=>'error', 'text' => '<b>'.$user_email.'</b> is an invalid Email, please correct it.'));
		die($output);
	}
	
	$toEmail = "prnka.08@gmail.com";
	$message .="First name:".$user_name."\n\n";	
	$message .="Phone No:".$phone."\n\n";	
	$message .="Email:".$user_email."\n\n";		
	$message .="Message:".$user_message."\n\n";
	$mailHeaders = "From: " . $user_name . "<" . $user_email . ">\r\n";
	if (mail($toEmail, "Contact Mail", $messages, $mailHeaders)) {
	    $output = json_encode(array('type'=>'message', 'text' => 'Hi '.$user_name .', thank you for the comments. We will get back to you shortly.'));
	    die($output);
	} else {
	    $output = json_encode(array('type'=>'error', 'text' => 'Unable to send email, please contact'.SENDER_EMAIL));
	    die($output);
	}
}
?>
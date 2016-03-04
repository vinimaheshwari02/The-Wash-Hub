<?php 
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
    if (isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
		$number = $_POST['Number'];
        $message = $_POST['message'];
        //echo $email;
        //$from = $email; 
		$headers = 'From:'. $email . "\r\n"; // Sender's Email
        $to = 'vinimaheshwari02@gmail.com'; 
        $subject = 'Message from Contact Demo ';
        
        $body = "From: $name\n E-Mail: $email\n Number:$number Message:\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($number !== 10) {
            $errHuman = 'Your number is incorrect';
        }
 if(mail ($to, $subject, $body, $headers)){
	 echo "send";
	 
 }
 else{
	 echo error_get_last()	;
 }
	}
	?>

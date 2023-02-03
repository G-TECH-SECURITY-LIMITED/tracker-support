<?php	
	if (empty($_POST['name_8033']) && strlen($_POST['name_8033']) == 0 || empty($_POST['email_8033']) && strlen($_POST['email_8033']) == 0 || empty($_POST['message_8033']) && strlen($_POST['message_8033']) == 0)
	{
		return false;
	}
	
	$name_8033 = $_POST['name_8033'];
	$email_8033 = $_POST['email_8033'];
	$message_8033 = $_POST['message_8033'];
	$optin_8033 = $_POST['optin_8033'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_8033: $name_8033 \nEmail_8033: $email_8033 \nMessage_8033: $message_8033 \nOptin_8033: $optin_8033 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\r\n";
	$headers .= "Reply-To: $email_8033";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>
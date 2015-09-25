<?php

if(isset($_POST['req-email'])) {

    $email_message = "<html><body style='padding:0; margin:0;'>";

			$email_to = "ryanf150@gmail.com"; // INFO EMAIL ADDRESS
			$email_subject = "Quote Request from Creative Energy Solutions"; // INFO EMAIL SUBJECT
			
			// INFO EMAIL CONTENT
			$email_message .= "<h1>Quote Request</h1>";
			$email_message .= "<b>Name:</b> ".$_POST['quote-name']."<br /><br />";
			$email_message .= "<b>Email:</b> ".$_POST['quote-email']."<br /><br />";
			$email_message .= "<b>Phone:</b> ".$_POST['quote-phone']."<br /><br />";

    $email_message .= "</body></html>";

	// create email headers
	$headers .= "Content-type: text/html\r\n".'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);

}
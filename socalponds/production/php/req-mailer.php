<?php

if(isset($_POST['req-email'])) {

    $email_message = "<html><body style='padding:0; margin:0;'>";

			$email_to = "dom@socalponds.com"; // INFO EMAIL ADDRESS
			$email_subject = "Maintenance Quote Request"; // INFO EMAIL SUBJECT
			
			// INFO EMAIL CONTENT
			$email_message .= "<h1>Maintenance Quote Request</h1>";
			$email_message .= "<b>Email:</b> ".$_POST['req-email']."<br /><br />";
			$email_message .= "<b>Message:</b> ".$_POST['req-content']."<br /><br />";

    $email_message .= "</body></html>";

	// create email headers
	$headers .= "Content-type: text/html\r\n".'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);

}
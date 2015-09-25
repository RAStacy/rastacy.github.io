<?php

if(isset($_POST['email'])) {

    $email_message = "<html><body style='padding:0; margin:0;'>";

	$send_message = "<html><body style='padding:0; margin:0;'>";

			$email_to = "ryanf150@gmail.com"; // INFO EMAIL ADDRESS
			$email_send = $_POST['email']; // THANK YOU EMAIL ADDRESS
			$email_subject = "Information request from Creative Energy Solutions"; // INFO EMAIL SUBJECT
			$subject_send = "Thank You for Your Interest!"; // THANK YOU EMAIL SUBJECT
			$headers .= "From: ryan@ryanstacy.net\r\n"; // REPLY EMAIL

			// INFO EMAIL CONTENT
			$email_message .= "<h1>Information Request</h1>";
			$email_message .= "<b>Name:</b> ".$_POST['name']."<br /><br />";
			$email_message .= "<b>Email:</b> ".$_POST['email']."<br /><br />";
			$email_message .= "<b>Phone:</b> ".$_POST['phone']."<br /><br />";
			$email_message .= "<b>Message:</b> ".$_POST['message']."<br /><br />";


			// THANK YOU EMAIL SUBJECT




    $email_message .= "</body></html>";

	// create email headers
	$headers .= "Content-type: text/html\r\n".'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);

}

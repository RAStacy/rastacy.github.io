<?php

if(isset($_POST['email'])) {

    $email_message = "<html><body style='padding:0; margin:0;'>";

	$send_message = "<html><body style='padding:0; margin:0;'>";

			$email_to = "ryanf150@gmail.com"; // INFO EMAIL ADDRESS
			$email_send = $_POST['email']; // THANK YOU EMAIL ADDRESS
			$email_subject = "Request from your site"; // INFO EMAIL SUBJECT
			$subject_send = "Thank You for Your Interest!"; // THANK YOU EMAIL SUBJECT
			$headers .= "From: ryan@ryanstacy.net\r\n"; // REPLY EMAIL

			// INFO EMAIL CONTENT
			$email_message .= "<h1>Information Request</h1>";
			$email_message .= "<b>Name:</b> ".$_POST['name']."<br /><br />";
			$email_message .= "<b>Email:</b> ".$_POST['email']."<br /><br />";
			$email_message .= "<b>Message:</b> ".$_POST['msg']."<br /><br />";


			// THANK YOU EMAIL SUBJECT
			$send_message .= "<table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' style='border-collapse:collapse;'>
	<tr>
		<td>
		    <table width='720' border='0' align='center' cellpadding='0' cellspacing='0' style='background-color:#ffffff; border-collapse:collapse;'>
				<tr>
					<td width='720' height='168'><a href='http://ryanstacy.net' target='_blank' style='color: #585757; font-family: Arial,Helvetica,sans-serif; font-size: 30px; font-weight: bold; text-align:center; text-decoration:none;'><img src='http://ryanstacy.net/images/mailheader.jpg' alt='ryanstacy.net' width='720' height='83' border='0' style='display:block;' /></a></td>
				</tr>
				<tr>
					<td><table width='620' border='0' align='center' cellpadding='0' cellspacing='0' style='border-collapse:collapse;'>
							<tr>
								<td><h1 style='color:#585757; font-family:Arial, Helvetica, sans-serif; font-size:30px; font-weight:bold; margin: 45px 0 20px;'>Thank you for your information request.</h1>
									<p style='color:#4c4c4c; font-family:Arial, Helvetica, sans-serif; font-size:16px; line-height:22px;'>Someone will contact you shortly to answer your question or schedule an appointment.</p>
										<a href='http://www.linkedin.com/pub/ryan-stacy/4b/172/6b2' target='_blank' style='color:#474746; text-decoration:none;'><img src='http://ryanstacy.net/icons/linkedin.png' alt='Linkedin' width='30' height='30' border='0' style='margin:0px 15px 0px 2px; vertical-align:middle' />Check out my Linkedin Profile</a><br /><br />
										<a href='https://plus.google.com/u/0/101692991715211835354/posts' target='_blank' style='color:#474746; text-decoration:none;'><img src='http://ryanstacy.net/icons/gp-logo.png' alt='Google+' width='30' height='30' border='0' style='margin:0px 15px 0px 2px; vertical-align:middle' />Follow me on Google+</a><br />
                                    <p style='color:#4c4c4c; font-family:Arial, Helvetica, sans-serif; font-size:16px; line-height:24px;'>We would also like to hear your thoughts and ideas. Feel free to email me at <a href='mailto:ryan@ryanstacy.net' style='color:#d57829; font-weight:bold; text-decoration:none;'>ryan@ryanstacy.net</a>. </p>
									<p style='color:#4c4c4c; font-family:Arial, Helvetica, sans-serif; font-size:16px; line-height:24px;'><span style='font-weight:bold'>Thank you,</span><br />
										Ryan Stacy</p>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table><br /><br /><br /><br />";







    $email_message .= "</body></html>";
	$send_message .= "</body></html>";

	// create email headers
	$headers .= "Content-type: text/html\r\n".'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);

	@mail($email_send, $subject_send, $send_message, $headers);

}

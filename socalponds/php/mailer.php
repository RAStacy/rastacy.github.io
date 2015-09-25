<?php

if(isset($_POST['email'])) {

    $email_message = "<html><body style='padding:0; margin:0;'>";

	$send_message = "<html><body style='padding:0; margin:0;'>";

			$email_to = "dom@socalponds.com"; // INFO EMAIL ADDRESS
			$email_send = $_POST['email']; // THANK YOU EMAIL ADDRESS
			$email_subject = "Information Request"; // INFO EMAIL SUBJECT
			$subject_send = "Thank You for Your Information Request!"; // THANK YOU EMAIL SUBJECT
			$headers = "From: dom@socalponds.com\r\n"; // REPLY EMAIL

			// INFO EMAIL CONTENT
			$email_message .= "<h1>Information Request</h1>";
			$email_message .= "<b>First Name:</b> ".$_POST['fname']."<br /><br />";
			$email_message .= "<b>Last Name:</b> ".$_POST['lname']."<br /><br />";
			$email_message .= "<b>Phone:</b> ".$_POST['tel']."<br /><br />";
			$email_message .= "<b>Email:</b> ".$_POST['email']."<br /><br />";
			$email_message .= "<b>Address:</b> ".$_POST['add1']."<br /><br />";
			$email_message .= "<b>Zip:</b> ".$_POST['zip']."<br /><br /><br /><br />";
			$email_message .= "<b>Message:</b> ".$_POST['emcontent']."<br /><br />";


			// THANK YOU EMAIL SUBJECT
			$send_message .= "<table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' style='border-collapse:collapse;'>
	<tr>
		<td>
		    <table width='720' border='0' align='center' cellpadding='0' cellspacing='0' style='background-color:#ffffff; border-collapse:collapse;'>
				<tr>
					<td width='720' height='168'><a href='http://socalponds.com' target='_blank' style='color: #585757; font-family: Arial,Helvetica,sans-serif; font-size: 30px; font-weight: bold; text-align:center; text-decoration:none;'><img src='http://socalponds.com/images/socalpond-inc_logo.png' alt='So-Cal Ponds Inc.' width='720' height='168' border='0' style='display:block;' /></a></td>
				</tr>
				<br>
				<tr>
					<td><table width='620' border='0' align='center' cellpadding='0' cellspacing='0' style='border-collapse:collapse;'>
							<tr>
								<td><h1 style='color:#585757; font-family:Arial, Helvetica, sans-serif; font-size:30px; font-weight:bold; margin: 45px 0 20px;'>Thank you for your information request.</h1>
									<p style='color:#4c4c4c; font-family:Arial, Helvetica, sans-serif; font-size:16px; line-height:22px;'>Someone will contact you shortly to answer your question or schedule an appointment.</p>
									<p style='color:#474746; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; line-height:40px;'><a href='https://www.facebook.com/SoCalPonds' target='_blank' style='color:#474746; text-decoration:none;'><img src='http://ryanstacy.net/socal_ponds/icons/fb-logo.png' alt='Facebook' width='30' height='30' border='0' style='margin:0px 15px 0px 2px; vertical-align:middle' />Like us on Facebook</a><br />
										<a href='http://twitter.com/#!/SoCalPonds' target='_blank' style='color:#474746; text-decoration:none;'><img src='http://ryanstacy.net/socal_ponds/icons/twitter-logo.png' alt='Twitter' width='30' height='30' border='0' style='margin:0px 15px 0px 2px; vertical-align:middle' />Follow us on Twitter</a><br />
										<a href='https://www.youtube.com/user/SoCalPonds1/videos' target='_blank' style='color:#474746; text-decoration:none;'><img src='http://ryanstacy.net/socal_ponds/icons/yt-logo.png' alt='YouTube' width='30' height='30' border='0' style='margin:0px 15px 0px 2px; vertical-align:middle' />Check out our videos on YouTube</a><br />
                                        <a href='https://plus.google.com/b/106727731342647853737/106727731342647853737/about?hl=en' target='_blank' style='color:#474746; text-decoration:none;'><img src='http://ryanstacy.net/socal_ponds/icons/gp-logo.png' alt='YouTube' width='30' height='30' border='0' style='margin:0px 15px 0px 2px; vertical-align:middle' />Follow us on Google+</a></p>
									<p style='color:#4c4c4c; font-family:Arial, Helvetica, sans-serif; font-size:16px; line-height:24px;'>We would also like to hear your thoughts and ideas. Feel free to email us at <a href='mailto:info@socalponds.com' style='color:#d57829; font-weight:bold; text-decoration:none;'>info@socalponds.com</a>. </p>
									<p style='color:#4c4c4c; font-family:Arial, Helvetica, sans-serif; font-size:16px; line-height:24px;'><span style='font-weight:bold'>Thank you,</span><br />
										SoCal Ponds</p>
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
<?php 
include('inc/header.php');

	$status = "OK"; 
	$msg="";  
	$y_name = $_GET["y_name"];
	$y_email = $_GET["y_email"];
	$referrer = $_GET["referrer"];
	$f_name = $_GET["f_name"];
	$f_email = $_GET["f_email"];
	$ref_nm = $_GET['ref_nm'];
	$ref_em = $_GET['ref_em'];
	$tnet_name = 'Thomasnet';
	$tnet_email = 'tnet@email.com';
	$email_header = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><title>Thomasnet</title></head><body style="margin:0; padding:10px 0; font-size: 16px; font-family:Helvetica, Arial, sans-serif;" bgcolor="#fff"><table width="100%" border="0"><tr><td><table width="540" border="0" align="center" cellpadding="0" style="background:#e8e8e8;"><tr><td style="padding:15px 30px"><a href="http://thomasnet.com"><img style="border:none;" src="http://do02.truenorthinc.com/thomasnet2013/email/imgs/tnet_logo.png"/></a></td></tr><tr><td style="padding:20px 30px 10px 30px">';
	$email_footer = '</td></tr><tr><td style="padding:15px 30px; font-size:11px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum urna et tortor blandit sodales. In vel massa lectus, id tempus arcu. Aliquam eu magna quam. Curabitur in enim id odio tincidunt euismod luctus quis dui. Curabitur et lacinia libero. Aenean dictum leo ac sapien eleifend vel adipiscing velit dapibus.<br><br>Copyright (C) 2013 Thomasnet. All rights reserved. <br><br><a style="color:#333; font-size:14px; font-weight:bold; text-decoration:none; margin-right:30px;" href="#">Unsubscribe</a><a style="color:#333; font-size:14px; font-weight:bold; text-decoration:none; margin-right:30px;"href="#">Forward to a friend</a></td></tr></table></td></tr></table></body></html>';

	echo '<section id="main">';

	if( $status=="OK" ) {

		echo '<h1>Thank you for registering!</h1><br>';


		/*/////////////////////////////////
		///////// Thomasnet email /////////
		/////////////////////////////////*/

		$to_tnet = $tnet_email;

		$subject_tnet = 'Someone registered at Thomasnet.com';

		$headers_tnet = "From: " . $tnet_name ."\r\n";
		$headers_tnet .= "Reply-To: " . $tnet_email ."\r\n";
		#$headers_tnet .= "CC: susan@example.com\r\n";
		$headers_tnet .= "MIME-Version: 1.0\r\n";
		$headers_tnet .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		$ref_nm_rpl = str_replace( '_', ' ',$ref_nm);

		$message_tnet  = $email_header;
		$message_tnet .= '<p>Hello Thomas,<p><p>Someone registered at Thomasnet!</p><p>';
		$message_tnet .= 'registrant name: <strong>' . $y_name . '</strong><br>';
		$message_tnet .= 'registrant email: <strong>' . $y_email . '</strong><br><br>';
		if ($ref_nm) {
			$message_tnet .= 'referrer name: ' . $ref_nm_rpl . '<br>';
		}
		if ($ref_em) {
			$message_tnet .= 'referrer email: ' . $ref_em . '<br></p>';
		}
		$message_tnet .= $email_footer;


		/*/////////////////////////////////
		///////// Thank you email /////////
		/////////////////////////////////*/

		$to_thanks = $y_email;

		$subject_thanks = 'Thank you for registering at Thomasnet.com';

		$headers_thanks = "From: " . $tnet_email ."\r\n";
		$headers_thanks .= "Reply-To:" . $tnet_email . "\r\n";
		$headers_thanks .= "MIME-Version: 1.0\r\n";
		$headers_thanks .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		$message_thanks  = $email_header;
		$message_thanks .= '<p>Hello ' . $y_name . ', </p>';
		$message_thanks .= '<p>Thank you for registering at Thomasnet. Please share with your friends.</p><a href="http://do02.truenorthinc.com/thomasnet2013/signup.php" style="padding:7px 20px; text-align:center; text-decoration:none; color:#fff; background:#F60; line-height:60px">Refer a friend</a>';
		$message_thanks .= $email_footer;


		/*/////////////////////////////////
		//////// Referral emails //////////
		/////////////////////////////////*/

		foreach( $f_name as $key => $n ) {

			$friend_email = $f_email[$key];

			$to_refer = $friend_email;

			$subject_refer = $y_name . ' recommends you register at Thomasnet';

			$headers_refer = "From: " . $y_email ."\r\n";
			$headers_refer .= "Reply-To:" . $y_email . "\r\n";
			$headers_refer .= "MIME-Version: 1.0\r\n";
			$headers_refer .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

			$y_name_rpl = str_replace( ' ', '_',$y_name);

			$message_refer  = $email_header;
			$message_refer .= '<p>Hello ' . $n . ', </p><p>' . $y_name . ' recomends that you Register at Thomas net.</p>';
			$message_refer .= '<a href="/thomasnet2013/signup.php?ref_em=' . $y_email . '&ref_nm=' . $y_name_rpl . '" style="padding:7px 20px; text-align:center; text-decoration:none; color:#fff; background:#F60; line-height:60px">Register Now</a>';
			$message_refer .=  $email_footer;

				if ( $f_email[$key] ) {
					mail($to_refer, $subject_refer, $message_refer, $headers_refer);
					echo 'To: ' . $to_refer . '<br>Subject: ' . $subject_refer . '<br>' . $headers_refer . $message_refer . '<br><br>';
				}	
		} 

		echo 'To: ' . $to_tnet . '<br>Subject: ' . $subject_tnet . '<br>' . $headers_tnet . $message_tnet . '<br><br>';
		
		echo 'To: ' . $to_thanks . '<br>Subject: ' . $subject_thanks . '<br>' . $headers_thanks . $message_thanks . '<br><br>';

		// Mail function to send the emails
		mail($to_tnet, $subject_tnet, $message_tnet, $headers_tnet);
		mail($to_thanks, $subject_thanks, $message_thanks, $headers_thanks);

	} else { //If submission status is not OK

		echo '<h1>Submission error</h1>';
		echo '<p>There was an error with your submission. Please <a href="javascript:history.go(-1)">go back</a> and try again.</p>';

	}

	echo '</section>';
	
	include('inc/footer.php'); 

?>

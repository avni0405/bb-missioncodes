<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
	try {
		//Server settings
		$mail->SMTPDebug = 2;                                       // Enable verbose debug output
		$mail->isSMTP();                                            // Set mailer to use SMTP
		$mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		$mail->Username   = 'dech.vivek@gmail.com';                     // SMTP username
		$mail->Password   = 'vivek@dechlabs';                               // SMTP password
		$mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
		$mail->Port       = 587;                                    // TCP port to connect to

		//Recipients
		$mail->setFrom('hrdigitalmarketing116@gmail.com', 'Blue Bubble WaterPark');
		$mail->addAddress('hrdigitalmarketing116@gmail.com', 'HR Digital');     // Add a recipient

		// Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'New Ticket Booking on BlueBubble Water Park';
		$mail->Body    = 'New Ticket Booking on BlueBubble Water Details : 
					<br>Email: '. $email. '<br>Message:'.$msg.'<br><br> Auto Generated Mail by Contact form at BlueBubbleWeb.';

		$mail->send();
		echo 'Message has been sent';
	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		die();
	}
	
	header("Location:booknow.php?msg=success");
?>
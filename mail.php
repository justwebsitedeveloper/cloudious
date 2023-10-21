<?php
require 'PHPMailer/PHPMailerAutoload.php';

//Capture POST data from HTML form and Sanitize them, 
$subject 		= "Message from website";
$sender_name    = filter_var($_POST["name"], FILTER_SANITIZE_STRING); //sender name
$reply_to_email = filter_var($_POST["mail"], FILTER_SANITIZE_STRING); //sender email used in "reply-to" header
$message        = filter_var($_POST["comment"], FILTER_SANITIZE_STRING); //message

$subjectmod = $subject . " - " . $sender_name ;
$messagemod  = "<p>Name - " . $sender_name . "</p>";
$messagemod  .= "<p>Email - " . $reply_to_email . "</p><br/>";
$messagemod  .= $message;


$mail = new PHPMailer;

//$mail->SMTPDebug = 2;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'a2plcpnl0602.prod.iad2.secureserver.net';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'no-reply@cloudious.com';              // SMTP username
$mail->Password = 'Shiva@123';                    // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('no-reply@cloudious.com');
$mail->addAddress('connectingminds@cloudious.com');  
// Name is optional
$mail->addReplyTo($reply_to_email);


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subjectmod;
$mail->Body    = $messagemod ;
$mail->AltBody = 'Non html body here';

if(!$mail->send()) {
	echo 'Message could not be sent.';
	echo 'Mailer Error: ' . $mail->ErrorInfo;
} 


$mail->ClearAllRecipients();
$mail->ClearAttachments();
$mail->addAddress($reply_to_email);
$mail->Subject = 'Thank you for your Interest in Cloudious';
$mail->Body = '<p>Thank you for your interest in Cloudious. Our team shall get back to you in a while. Looking forward to Connect with you soon. Have a good day.</p><br/><br/><p style="margin:0;">Regards,</p><p style="margin:0;">Cloudious LLC</p><p style="margin:0;">2833 Junction Ave, Suite 206,</p><p style="margin:0;">San Jose, CA 95134, USA</p><p style="margin:0;">Ph: +1 (408) 477 2922</p>';

if(!$mail->send()) {
	echo 'Message could not be sent.';
	echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {

?>	

<head>
	<title>Cloudious - Contact</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" >
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		body {
			background-color: #fff;
		}

		body, h1, p {
			font-family: "Helvetica Neue", "Segoe UI", Segoe, Helvetica, Arial, "Lucida Grande", sans-serif;
			font-weight: normal;
			margin: 0;
			padding: 0;
			text-align: center;
		}

		.container {
			margin-left:  auto;
			margin-right:  auto;
			margin-top: 177px;
			max-width: 1170px;
			padding-right: 15px;
			padding-left: 15px;
		}

		.row:before, .row:after {
			display: table;
			content: " ";
		}

		.col-md-6 {
			width: 50%;
		}

		.col-md-push-3 {
			margin-left: 25%;
		}

		h1 {
			font-size: 48px;
			font-weight: 300;
			margin: 0 0 20px 0;
		}

		.lead {
			font-size: 21px;
			font-weight: 200;
			margin-bottom: 20px;
		}

		p {
			margin: 0 0 10px;
		}

		a {
			color: #3282e6;
			text-decoration: none;
		}
	</style>
</head>

<body>
	<div class="container text-center" id="error">

		<div class="row">
			<div class="col-md-12">
				<div class="main-icon text-warning"><span class="uxicon uxicon-alert"></span></div>
				<h1>Thank you!</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-push-3">
				<p class="lead">We will get back to you shortly.</p>
			</div>
		</div>
	</div>
	<div>
		<p>You will be redirected back to the website in <span id="counter">5</span> <span id="counter1">seconds</span> </p>
	</div>
	<script>
		setInterval(function() {
			var div = document.querySelector("#counter");
			var count = div.textContent * 1 - 1;
			div.textContent = count;

			if (count == 1) {
				var div1 = document.querySelector("#counter1");
				div1.innerHTML = "second";
			}

			if (count <= 0) {
				var count = 0;
				window.location.href="http://www.cloudious.com";
			}
		}, 1000);
	</script>

	<?php
}
	?>

<?php

		$myfile = fopen("contact-msg.txt", "w") or die("Unable to open file!");
		
		$name = isset($_POST['fullname']) ? $_POST['fullname'] : '';
		$email = isset($_POST['email']) ? $_POST['email'] : '';
		$subject = isset($_POST['subject']) ? $_POST['subject'] : '';
		$message = isset($_POST['message']) ? $_POST['message'] : '';
		$txt = $name . "\r\n\r\n". $email . "\r\n\r\n". $subject. "\r\n\r\n" . $message;
		$msg = "New message from " . " " . $name . ':' . "\r\n\r\n" . $txt;
		
		fwrite($myfile, $msg);
		fclose($myfile);

?>

<html>	
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <title>Victor Mba CV and Resume</title>
	    <meta name="description" content="My Cv design using HTML,CSS,JavaScript,PHP">
	    <meta name="keywords" content="CV,CV template,CV design,Resume builder,">
	    <meta name="author" content="Victor Mba">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="canonical" href="https://lilvinco/github.io" />
	    <!-- Main Style CSS -->
	    <link rel="stylesheet" type="text/css" href="style.css">
	    <!-- Main JS -->
	    <script type="text/javascript" src="main.js"></script>
	</head>

	<body>
				<center><h1 style="margin-top: 400px">Your message has been sent successfully, I will get back to you shortly!</h1></center>
	</body>
</html>


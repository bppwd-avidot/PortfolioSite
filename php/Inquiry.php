<!DOCTYPE html>
<html>
	<head>
		<title>Retrieving info from a Form</title>
	</head>
	<body>
		<h1>Inquiries</h1>
		<?php
			require 'class.Inquiry.inc';
			
			$inquiry = new Inquiry($_GET['Name'], $_GET['Email'], $_GET['Subject'], $_GET['Message']);
			
			$inquiry->displayFull();
		?>
	</body>
</html>
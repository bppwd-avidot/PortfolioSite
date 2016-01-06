<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Contact</title>
		<!-- Bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		<link href="css/base.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="container">
			<!-- header and nav bar -->
			<div class="row">
				<div class="col-md-2">
					<img src="img/chibiLuxray.png" alt="My Avatar" id="avatar">
				</div>
				<div class="col-md-7">
					<h1>Anthony Vidot Game Developer</h1>
				</div>
				<div class="col-md-3">
					<nav>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="projects.html">Projects</a></li>
							<li><a href="about.html">About Me</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
			
			<!-- Contact info -->
			<form class="form-horizontal" id="contactForm" method="get" action="php/Inquiry.php">
				<div class="form-group">
					<label class="col-sm-2 control-label">Your Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" placeholder="Name" name="Name">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Your Email</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" placeholder="Email" name="Email">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Subject</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" placeholder="Subject" name="Subject">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Message</label>
					<div class="col-sm-10"">
						<textarea class="form-control" rows="5" name="Message"></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" form="contactForm" value="Submit" class="btn btn-default btn-lg">Send</button>
					</div>
				</div>
			</form>
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
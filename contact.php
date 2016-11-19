<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="ATAK Interactive">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="language" content="English">
<meta name="copyright" content="ATAK Interactive">

<title>Chefs Home Table</title>

<meta name="Googlebot" content="index, follow">
<meta name="revisit-after" content="3">
<meta name="Robots" content="INDEX, FOLLOW">
	
<meta property="og:site_name" content="">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="article">
<meta property="og:description" content="">
<meta property="og:image" content="images/logo.png">
<meta property="og:title" content="">
<meta property="og:url" content="">

<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/styles.css" rel="stylesheet" />
<link href="css/fonts.css" rel="stylesheet" />
<link href="css/animate.css" rel="stylesheet" />
<link rel="shortcut icon" href="images/fav.png" />

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="inner-menu">

<?php include('popups.php'); ?>

<?php include('header.php'); ?>

<section class="header">
	<div class="container">
		<div class="row">
			<h1 class="h2 bold gold no-margin">Help Center & Support</h1>
			<p class="info">Please check our FAQ pages for answers to commonly asked questions.</p>
		</div>
	</div>
</section>

<section class="host-reservation">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-push-4 main-content">
				<div class="contact-title">Feel Free to Contact Chefs Home Table Today!</div>
				<form class="form-horizontal contact-form" action="contact-thank-you.php">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Full Name *</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="inputEmail3">
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail4" class="col-sm-3 control-label">Email Address *</label>
						<div class="col-sm-9">
							<input type="email" class="form-control" id="inputEmail4">
						</div>
					</div>
					<div class="form-group">
						<label for="phone" class="col-sm-3 control-label">Phone #</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="phone">
						</div>
					</div>
					<div class="form-group">
						<label for="subject" class="col-sm-3 control-label">Subject</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="subject">
						</div>
					</div>
					<div class="form-group">
						<label for="phone" class="col-sm-3 control-label">Message *</label>
						<div class="col-sm-9">
							<textarea name="message" class="form-control" rows="3"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="subject" class="col-sm-3 control-label">&nbsp;</label>
						<div class="col-sm-9">
							<p class="bold mrgB30 mrgT30">* - Required Field</p>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-9">
							<button type="submit" class="black-button" style="max-width: 300px;">Sign in</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-4 col-md-pull-8 sidebar">
				<a href="help-faq.php" class="border-button mrgT10">FREQUENTLY ASKED QUESTIONS</a>
				<a href="help-safety.php" class="border-button mrgT10">safety</a>
				<a href="contact.php" class="border-button active mrgT10">contact us</a>				
				<div class="sidebar-info">
					<span class="sidebar-info-title">Chefs Home Table:</span>
					Chefs Home Table, LLC<br>
					26 9th Street<br>
					Hermosa Beach, CA 90254
					<br><br>
					<span class="sidebar-info-title">323-788-2341</span>
					<a href="mailto:info@chefshometable.com">info@chefshometable.com</a>
					<br><br>
					<b>Business Hours:</b><br>
					10 am to 12 pm / 4 pm to 6 pm
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
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
<link href="css/checkbox.css" rel="stylesheet" />
<link href="css/radio.css" rel="stylesheet" />
<link rel="shortcut icon" href="images/fav.png" />

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="inner-menu">

<?php include('popups.php'); ?>

<?php include('header.php'); ?>

<section class="gray-section borderT">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="user-details-img"><img src="images/user-details-img.jpg" alt="image" class="img-responsive" /></div>
				<div class="user-details-panel"><img src="images/i.jpg" alt="image" class="image" /> The time and the address will be notified by email.</div>
			</div>
			<div class="col-md-6">
				<div class="user-panel padA0">
					<div class="user-container">
						<img src="images/user-img.png" alt="image" class="img-responsive img-circle pull-left mrgR20" />
						<h2 class="user-name">Brandon</h2>						
						<p class="infoo">This host cooks for: ABC Restaurant</p>
					</div>
					<div class="list-status-container">
						<div class="borderB padB20">
							<img src="images/user-recipe.png" alt="image" class="img-responsive img-circle pull-left mrgR20">
							<h2 class="user-name2 mrgB20">The pasta recipes of my grandmother</h2>
						</div>
						<div class="list-status-row">
							<div class="col-md-4">Status:</div>
							<div class="col-md-8">Active</div>
						</div>
						<div class="list-status-row">
							<div class="col-md-4">Event Date:</div>
							<div class="col-md-8">08/25/2016</div>
						</div>
						<div class="list-status-row">
							<div class="col-md-4">Guests:</div>
							<div class="col-md-8">3</div>
						</div>
						<div class="list-status-row">
							<div class="col-md-4">Location:</div>
							<div class="col-md-8">Sherman Oaks, Los Angeles</div>
						</div>
					</div>
					<div class="list-status-price">
						<span class="total-price">Total: $234.00</span>
						<span class="total-info">$78.00 per person</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="how borderT">
	<div class="container">
		<div class="row">
			<div class="light-title">What Happens Now?</div>
			<div class="col-md-4">
				<div class="how-item">
					<img src="images/letter-icon.png" alt="how does icon 1" class="img-responsive">
					<div class="how-desc-small">Currently we have sent you an email with all your reservation details</div>
					<div class="how-number">1</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="how-item">
					<img src="images/bell-icon.png" alt="how does icon 1" class="img-responsive">
					<div class="how-desc-small">4 days before your reservation we will send you a reminder</div>
					<div class="how-number">2</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="how-item">
					<img src="images/how-icon-3.png" alt="how does icon 1" class="img-responsive">
					<div class="how-desc-small">You can go directly to the Chef’s house at the established hour and enjoy your meal!</div>
					<div class="how-number">3</div>
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
<script>
$(document).ready(function(){
	$('.attach').hover(function(){
		$(this).addClass('.hover');
	})
});
</script>
</body>
</html>
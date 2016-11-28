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

<link rel="stylesheet" href="css/star-rating.css" media="all" type="text/css"/>
<link rel="stylesheet" href="css/theme.css" media="all" type="text/css"/>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="inner-menu">

<?php include('popups.php'); ?>

<?php include('header.php'); ?>

<section class="sub-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12 categories">
				<a href="myacc-chef-profile.php">PROFILE</a>
				<a href="myacc-chef-listing.php">MY LISTINGS</a>
				<a href="myacc-chef-reservation.php">MY RESERVATIONS</a>
				<a href="myacc-chef-reviews.php" class="current">REVIEWS</a>
			</div>
		</div>
	</div>
</section>
<section class="chefs-listng-table">
	<div class="container">
		<div class="row mrgT30">
			<div class="col-md-8 col-md-offset-2">
				<div class="career-item">
					<div class="career-header">
						<div class="career-title">My Reviews (3)</div>
					</div>
					<div class="row career-body padB0">
						<div class="col-md-12 borderB padB20">
							<div class="review-rate">
								<div class="review-icon"><span>4.4<br><small>rating</small></span></div>
								<div class="review-author">David Anderson</div>
							</div>
							<p class="mrgB30">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel placerat arcu. Suspendisse blandit lobortis felis, vel ullamcorper sem sagittis a. Etiam cursus, mi ac porttitor maximus, nunc augue vehicula arcu, at sollicitudin ipsum tellus nec libero. Donec dui arcu, vestibulum vitae auctor nec, volutpat quis enim. Maecenas bibendum purus.
							</p>
							<p>
								<span class="bold">The pasta recipes of my grandmother</span><br>
								Sherman Oaks, Los Angeles
							</p>
						</div>
					</div>
					<div class="row career-body padB0">
						<div class="col-md-12 borderB padB20">
							<div class="review-rate">
								<div class="review-icon"><span>3.8<br><small>rating</small></span></div>
								<div class="review-author">Brenda Johnson</div>
							</div>
							<p class="mrgB30">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel placerat arcu. Suspendisse blandit lobortis felis, vel ullamcorper sem sagittis a. Etiam cursus, mi ac porttitor maximus, nunc augue vehicula arcu, at sollicitudin ipsum tellus nec libero. Donec dui arcu, vestibulum vitae auctor nec, volutpat quis enim. Maecenas bibendum purus.
							</p>
							<p>
								<span class="bold">The pasta recipes of my grandmother</span><br>
								Sherman Oaks, Los Angeles
							</p>
						</div>
					</div>
					<div class="row career-body padB0">
						<div class="col-md-12 padB20">
							<div class="review-rate">
								<div class="review-icon"><span>4.4<br><small>rating</small></span></div>
								<div class="review-author">David Anderson</div>
							</div>
							<p class="mrgB30">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel placerat arcu. Suspendisse blandit lobortis felis, vel ullamcorper sem sagittis a. Etiam cursus, mi ac porttitor maximus, nunc augue vehicula arcu, at sollicitudin ipsum tellus nec libero. Donec dui arcu, vestibulum vitae auctor nec, volutpat quis enim. Maecenas bibendum purus.
							</p>
							<p>
								<span class="bold">The pasta recipes of my grandmother</span><br>
								Sherman Oaks, Los Angeles
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/star-rating.js" type="text/javascript"></script>
<script src="js/theme.js" type="text/javascript"></script>
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
<script>
$(document).on('ready', function () {
	$('.kv-fa').rating({
		theme: 'krajee-fa',
		filledStar: '<i class="fa fa-star"></i>',
		emptyStar: '<i class="fa fa-star-o"></i>',
		showClear:false,
		showCaption:false,
		step: 1
	});
});
</script>

</body>
</html>
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
				<a href="myacc-user-profile.php">PROFILE</a>
				<a href="myacc-user-reservation.php" class="current">MY RESERVATIONS</a>
			</div>
		</div>
	</div>
</section>
<section class="host-reservation">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="table-header">
					<div class="table-type">TYPE</div>
					<div class="table-date">DATE</div>
					<div class="table-desc">DESCRIPTION</div>
					<div class="table-guests">GUESTS</div>
					<div class="table-status">STATUS</div>
					<div class="table-action">ACTION</div>
				</div>
				<div class="table-row borderB">
					<div class="table-type"><img src="images/table-type1.png" alt="image" class="image" /></div>
					<div class="table-date">08/25/2016</div>
					<div class="table-desc"><h3>The pasta recipes of my grandmother</h3><p>Sherman Oaks, Los Angeles</p></div>
					<div class="table-guests"><span>2</span></div>
					<div class="table-status gold">Active</div>
					<div class="table-action"><a href="#3" class="border-button mrgT10">details</a></div>
				</div>
				<div class="table-row borderB">
					<div class="table-type"><img src="images/table-type2.png" alt="image" class="image" /></div>
					<div class="table-date">08/25/2016</div>
					<div class="table-desc"><h3>Happiness in a Venetian Plain kitchen</h3><p>Santa Monica, Los Angeles</p></div>
					<div class="table-guests"><span>1</span></div>
					<div class="table-status gold">Active</div>
					<div class="table-action"><a href="#3" class="border-button mrgT10">details</a></div>
				</div>
				<div class="table-row borderB">
					<div class="table-type"><img src="images/table-type1.png" alt="image" class="image" /></div>
					<div class="table-date">08/25/2016</div>
					<div class="table-desc"><h3>The pasta recipes of my grandmother</h3><p>Sherman Oaks, Los Angeles</p></div>
					<div class="table-guests"><span>4</span></div>
					<div class="table-status">Ended</div>
					<div class="table-action">
						<a href="#3" class="border-button-small mrgT0">details</a>
						<a href="#3" class="border-button-small mrgT10 rate-button" onclick="$(this).parent().next().fadeIn();$('#log-overlay').fadeIn();">rate</a>
					</div>
					<div class="review-box popupp">
						<span class="close">×</span>
						<div class="popup-title gold">Submit Your Review</div>
						<form action="myacc-user-reservation.php" method="post">
							<div class="popup-body col-md-12">
								<div class="col-md-6 review-small-title">YOUR RATING:</div>
								<div class="col-md-6 text-right">
									<input type="text" class="kv-fa rating-loading" value="0" data-size="xs" title="">
								</div>
							</div>
							<div class="popup-body col-md-12">
								<div class="col-md-12">
									<textarea class="review-area" placeholder="Your Review..."></textarea>
								</div>
							</div>
							<div class="popup-body col-md-12 no-border">
								<div class="col-md-12">
									<button type="submit" class="black-button">SUBMIT</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="table-row borderB">
					<div class="table-type"><img src="images/table-type2.png" alt="image" class="image" /></div>
					<div class="table-date">08/25/2016</div>
					<div class="table-desc"><h3>Happiness in a Venetian Plain kitchen</h3><p>Santa Monica, Los Angeles</p></div>
					<div class="table-guests"><span>3</span></div>
					<div class="table-status">Ended</div>
					<div class="table-action">
						<a href="#3" class="border-button-small mrgT0">details</a>
						<a href="#3" class="border-button-small mrgT10 rate-button" onclick="$(this).parent().next().fadeIn();$('#log-overlay').fadeIn();">rate</a>
					</div>
					<div class="review-box popupp">
						<span class="close">×</span>
						<div class="popup-title gold">Submit Your Review</div>
						<form action="myacc-user-reservation.php" method="post">
							<div class="popup-body col-md-12">
								<div class="col-md-6 review-small-title">YOUR RATING:</div>
								<div class="col-md-6 text-right">
									<input type="text" class="kv-fa rating-loading" value="0" data-size="xs" title="">
								</div>
							</div>
							<div class="popup-body col-md-12">
								<div class="col-md-12">
									<textarea class="review-area" placeholder="Your Review..."></textarea>
								</div>
							</div>
							<div class="popup-body col-md-12 no-border">
								<div class="col-md-12">
									<button type="submit" class="black-button">SUBMIT</button>
								</div>
							</div>
						</form>
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
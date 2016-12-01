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
			<h1 class="h2 bold gold no-margin text-center">Checkout</h1>
		</div>
	</div>
</section>
<section class="cart-table padT30 gray-section">
	<div class="container">
		<form action="#" class="row" method="post">
			<div class="col-md-6">
				<div class="career-item white-bg payment-info">
					<div class="career-header">
						<div class="career-title">Payment Information</div>
					</div>
					<div class="row career-body padT40">
						<div class="col-md-12">
							<input type="text" class="form-control text-left checkout-field" placeholder="First Name *..." />
							<input type="text" class="form-control text-left checkout-field" placeholder="Last Name *..." />
							<input type="text" class="form-control text-left checkout-field" placeholder="Company ..." />
							<input type="text" class="form-control text-left checkout-field" placeholder="Address..." />
							<input type="text" class="form-control text-left checkout-field" placeholder="City *..." />
							<input type="text" class="form-control text-left checkout-field" placeholder="Address..." />
							<div class="row">
								<div class="col-md-6 padR5">
									<select name="state" class="text-left" style="text-indent: 5px;">
										<option>state</option>
										<option>state 1</option>
										<option>state 2</option>
										<option>state 3</option>
										<option>state 4</option>
									</select>
									<select name="country" class="text-left" style="text-indent: 5px;">
										<option>country</option>
										<option>country 2</option>
										<option>country 3</option>
										<option>country 4</option>
									</select>
								</div>	
								<div class="col-md-6 padL5">
									<input type="text" class="form-control text-left checkout-field" placeholder="Zip Code *..." />
									<input type="text" class="form-control text-left checkout-field" placeholder="Phone #..." />
								</div>	
							</div>	
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="career-item white-bg billing-info">
					<div class="career-header">
						<div class="career-title">Billing Information</div>
					</div>
					<div class="row career-body padT40">
						<div class="col-md-12">
							<select name="state" class="text-left" style="text-indent: 5px;">
								<option><img src="images/american.png" alt="image" class="img-responsive" /> American Express</option>
								<option>state 1</option>
								<option>state 2</option>
								<option>state 3</option>
								<option>state 4</option>
							</select>
							<input type="text" class="form-control text-left checkout-field" placeholder="Name on Card *..." />
							<input type="text" class="form-control text-left checkout-field" placeholder="Credit Card Number *..." />
							<input type="text" class="form-control text-left checkout-field" placeholder="Card Verification Number (CVV) ..." />
							<div class="row">
								<div class="col-md-6 padR5">
									<select name="state" class="text-left" style="text-indent: 5px;">
										<option>Expiration (Month)</option>
										<option>01</option>
										<option>02</option>
										<option>03</option>
										<option>04</option>
									</select>
									<select name="country" class="text-left" style="text-indent: 5px;">
										<option>Expiration (Year)</option>
										<option>2016</option>
										<option>2017</option>
										<option>2018</option>
										<option>2019</option>
									</select>
								</div>	
							</div>	
						</div>
					</div>
					<div class="career-body padT30 padB30 borderT" style="overflow: hidden">
						<div class="col-md-12">
							<div id="check-box" style="padding-top: 5px;"><input id="offers" type="checkbox" name="offers"><label for="offers"><span style="margin: 0 10px;"><img src="images/paypal.png" alt="image" class="img-responsive" /></span>checkout with paypal</label></div>
						</div>
					</div>
				</div>
			</div>
		</form>		
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
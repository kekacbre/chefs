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
			<h1 class="h2 bold gold no-margin text-center">Shopping Cart</h1>
		</div>
	</div>
</section>
<section class="cart-table padT30">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p class="hold-reservation">We are holding your reservation for <span class="timer">14:59</span> minutes.</p>
				<div class="table-header">
					<div class="table-type">DESCRIPTION</div>
					<div class="table-desc padL20">&nbsp;</div>
					<div class="table-status">GUESTS</div>
					<div class="table-status">PRICE PER PERSON</div>
					<div class="table-action">SUB-TOTAL</div>
					<div class="table-type">DEL</div>
				</div>
				<div class="table-row borderB">
					<div class="table-type"><img src="images/cart1.png" alt="image" class="image" /></div>
					<div class="table-desc padL20">
						<h3 class="mrgT0">The pasta recipes of my grandmother</h3>
						<p class="mrgB0">
							Sherman Oaks, Los Angeles<br>
							Type: Event<br>
							Date: 08/25/2016
						</p>
					</div>
					<div class="table-qty">
						<span class="kolicina">
							<button class="minus" onclick="decrementValue(); return false">-</button>
							<button class="plus" onclick="incrementValue(); return false">+</button>
							<input type="text" id="qtu" class="qtu text-center" value="0" />						
						</span>
						
<script type="text/javascript">
    function incrementValue(){
		var value = parseInt(document.getElementById('qtu').value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById('qtu').value = value;
    }
    function decrementValue()
    {var value = parseInt(document.getElementById('qtu').value, 10);
        value = isNaN(value) ? 0 : value;
        if(value > 0){value--};
        document.getElementById('qtu').value = value;
    }
</script>
					</div>
					<div class="table-status pricee">$78.00</div>
					<div class="table-status pricee-total">$156.00</div>
					<div class="table-action deletee">×</div>
				</div>
				<div class="table-row borderB">
					<div class="table-type"><img src="images/cart2.png" alt="image" class="image" /></div>
					<div class="table-desc padL20">
						<h3 class="mrgT0">The pasta recipes of my grandmother</h3>
						<p class="mrgB0">
							Sherman Oaks, Los Angeles<br>
							Type: Event<br>
							Date: 08/25/2016
						</p>
					</div>
					<div class="table-qty">
						<span class="kolicina">
							<button class="minus" onclick="decrementValue2(); return false">-</button>
							<button class="plus" onclick="incrementValue2(); return false">+</button>
							<input type="text" id="qtu2" class="qtu text-center" value="0" />						
						</span>
						
<script type="text/javascript">
    function incrementValue2(){
		var value = parseInt(document.getElementById('qtu2').value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById('qtu2').value = value;
    }
    function decrementValue2()
    {var value = parseInt(document.getElementById('qtu2').value, 10);
        value = isNaN(value) ? 0 : value;
        if(value > 0){value--};
        document.getElementById('qtu2').value = value;
    }
</script>
					</div>
					<div class="table-status pricee">$78.00</div>
					<div class="table-status pricee-total">$156.00</div>
					<div class="table-action deletee">×</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 mrgT30">
				<div class="col-md-12 padB20 padT20 padR0 padL0 borderA flexx">
					<div class="col-md-4 borderR flexx padA30">
						<div class="coupon">
							<p>enter coupon code and save!</p>
							<form action="#" method="post" class="form-coupon">
								<input type="text" class="coupon-input" placeholder="Coupon Code..." />
								<input type="submit" class="coupon-submit" value=""/>
							</form>
						</div>
					</div>
					<div class="col-md-4 borderR flexx padT30 padB30">
						<div class="cart-total text-center">
							<div class="big-gold-num">Total: $234.00</div>
							<div class="font15">Sub-Total: $234.00</div>
							<div class="font15">Discount: $0.00</div>
						</div>
					</div>
					<div class="col-md-4 padR30 padL60 padT30 padB30 text-center">
						<a href="#3" class="black-button mrgB10">CHECKOUT</a>
						<a href="#3" class="continue-shopping">CONTINUE SHOPPING</a>
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
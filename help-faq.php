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
				<div class="accordion-item">
					<div class="accordion-item-title">What happens once I make the reservation?</div>
					<div class="accordion-item-desc">The flavors of the Chefs Home Table (lunch and dinner) events are private. You and your guests will be the only ones present. In regards to the courses, there may be other people with you, up to the maximum number of people permitted for each lesson of the course in question.</div>
				</div>
				<div class="accordion-item">
					<div class="accordion-item-title">Will there be other guests at the event that I booked?</div>
					<div class="accordion-item-desc">The flavors of the Chefs Home Table (lunch and dinner) events are private. You and your guests will be the only ones present. In regards to the courses, there may be other people with you, up to the maximum number of people permitted for each lesson of the course in question.</div>
				</div>
				<div class="accordion-item">
					<div class="accordion-item-title">WhatCan I contact Chefs Home Table to find out the address?</div>
					<div class="accordion-item-desc">The flavors of the Chefs Home Table (lunch and dinner) events are private. You and your guests will be the only ones present. In regards to the courses, there may be other people with you, up to the maximum number of people permitted for each lesson of the course in question.</div>
				</div>
				<div class="accordion-item">
					<div class="accordion-item-title">Can I cancel or change an event?</div>
					<div class="accordion-item-desc">The flavors of the Chefs Home Table (lunch and dinner) events are private. You and your guests will be the only ones present. In regards to the courses, there may be other people with you, up to the maximum number of people permitted for each lesson of the course in question.</div>
				</div>
				<div class="accordion-item">
					<div class="accordion-item-title">What guarantees are there for the guests of your events?</div>
					<div class="accordion-item-desc">The flavors of the Chefs Home Table (lunch and dinner) events are private. You and your guests will be the only ones present. In regards to the courses, there may be other people with you, up to the maximum number of people permitted for each lesson of the course in question.</div>
				</div>
				<div class="accordion-item">
					<div class="accordion-item-title">I have a food allergy/intolerance: what should I do?</div>
					<div class="accordion-item-desc">The flavors of the Chefs Home Table (lunch and dinner) events are private. You and your guests will be the only ones present. In regards to the courses, there may be other people with you, up to the maximum number of people permitted for each lesson of the course in question.</div>
				</div>
				<div class="accordion-item">
					<div class="accordion-item-title">Are payments through the site secure?</div>
					<div class="accordion-item-desc">The flavors of the Chefs Home Table (lunch and dinner) events are private. You and your guests will be the only ones present. In regards to the courses, there may be other people with you, up to the maximum number of people permitted for each lesson of the course in question.</div>
				</div>
				<div class="accordion-item">
					<div class="accordion-item-title">At what time should I arrive for dinner or lunch?</div>
					<div class="accordion-item-desc">The flavors of the Chefs Home Table (lunch and dinner) events are private. You and your guests will be the only ones present. In regards to the courses, there may be other people with you, up to the maximum number of people permitted for each lesson of the course in question.</div>
				</div>
			</div>
			<div class="col-md-4 col-md-pull-8 sidebar">
				<a href="help-faq.php" class="border-button active mrgT10">FREQUENTLY ASKED QUESTIONS</a>
				<a href="help-safety.php" class="border-button mrgT10">safety</a>
				<a href="contact.php" class="border-button mrgT10">contact us</a>				
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
<script>
$(document).ready(function(){
	$('.accordion-item').click(function(){
		var dete = $(this).children().next();
		$('.accordion-item').not(this).removeClass('active');
		$(this).toggleClass('active');
		$('.accordion-item-desc').not(dete).slideUp();
		$(this).children().next().slideToggle();
	});	
});
</script>
</body>
</html>
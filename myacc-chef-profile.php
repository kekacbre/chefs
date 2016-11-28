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

<section class="sub-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12 categories">
				<a href="myacc-chef-profile.php" class="current">PROFILE</a>
				<a href="myacc-chef-listing.php">MY LISTINGS</a>
				<a href="myacc-chef-reservation.php">MY RESERVATIONS</a>
				<a href="myacc-chef-reviews.php">REVIEWS</a>
			</div>
		</div>
	</div>
</section>
<section class="host-reservation">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<form class="form-horizontal myaccount-form" action="myacc-user-profile.php">
					<div class="career-item">
						<div class="career-header-small">
							<div class="career-title">My Information</div>
						</div>
						<div class="popup-body-bottom">
							<div class="row padA30 padB0">
								<div class="col-md-4 text-center"><img src="images/chef.jpg" alt="image" class="image" /></div>
								<div class="col-md-4 padT30 button-hover" style="position: relative;"><input type="file" class="custom-input-hidden"/><a href="#3" class="border-button">Change photo</a></div>
								<div class="col-md-4 padT30"><a href="#3" class="border-button">Remove photo</a></div>
							</div>
						</div>
						<div class="popup-body-bottom">
							<div class="row padA30 padB0">
								<div class="col-md-12">
									<div class="col-md-4"><label for="name" class="control-label padT20">Experience</label></div>
									<div class="col-md-8 padT10"><input type="text" class="form-control" id="name" value="ABC Restaurant"></div>
								</div>
							</div>
						</div>
						<div class="row career-body">
							<div class="col-md-12">
								<div class="form-group">
									<label for="name" class="col-sm-4 control-label">First Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="name" value="Brandon">
									</div>
								</div>
								<div class="form-group">
									<label for="last_name" class="col-sm-4 control-label">Last Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="last_name" value="Johnson">
									</div>
								</div>
								<div class="form-group">
									<label for="gender" class="col-sm-4 control-label">Gender</label>
									<div class="col-sm-8">
										<div id="radio-box"><input id="male" type="radio" name="gender"><label for="male">Male</label></div>
										<div id="radio-box"><input id="female" type="radio" name="gender"><label for="female">Female</label></div>
									</div>
								</div>
								<div class="form-group">
									<label for="gender" class="col-sm-4 control-label">Date of Birth</label>
									<div class="col-sm-8">
										<div class="row">
											<div class="col-md-4">
												<select name="birth_month">
													<?php for($i=1; $i<13; $i++){?>
														<option><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></option>
													<?php } ?>
												</select>
											</div>
											<div class="col-md-4">
												<select name="birth_day">
													<?php for($i=1; $i<32; $i++){?>
														<option><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></option>
													<?php } ?>
												</select>
											</div>
											<div class="col-md-4">
												<select name="birth_year">
													<?php for($i=1930; $i<2010; $i++){?>
														<option><?php echo $i; ?></option>
													<?php } ?>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="address" class="col-sm-4 control-label">Street Address</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="address" value="Westwood Blvd #206">
									</div>
								</div>
								<div class="form-group">
									<label for="city" class="col-sm-4 control-label">City</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="city" value="Los Angeles">
									</div>
								</div>
								<div class="form-group">
									<label for="city" class="col-sm-4 control-label">State</label>
									<div class="col-sm-8">
										<select name="birth_year" class="text-left" style="text-indent: 5px;">
											<option>California</option>
											<option>California</option>
											<option>California</option>
											<option>California</option>
											<option>California</option>
											<option>California</option>
											<option>California</option>
											<option>California</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="zip" class="col-sm-4 control-label">Zip Code</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="zip" value="90016">
									</div>
								</div>
								<div class="form-group">
									<label for="phone" class="col-sm-4 control-label">Phone #</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="phone" value="818.512.5228">
									</div>
								</div>
								<div class="form-group">
									<label for="email" class="col-sm-4 control-label">&nbsp;</label>
									<div class="col-sm-8">
										<div id="check-box"><input id="offers" type="checkbox" name="offers"><label for="offers">I want to receive news and offers</label></div>
									</div>
								</div>
							</div>
						</div>
						<div class="career-header-small borderT">
							<div class="career-title">Password</div>
						</div>
						<div class="row career-body">
							<div class="col-md-12">
								<div class="form-group">
									<label for="phone" class="col-sm-4 control-label">Current password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" id="phone" value="">
									</div>
								</div>
								<div class="form-group">
									<label for="phone" class="col-sm-4 control-label">New password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" id="phone" value="">
									</div>
								</div>
								<div class="form-group">
									<label for="phone" class="col-sm-4 control-label">Repeat New password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" id="phone" value="">
									</div>
								</div>
							</div>
						</div>
						<div class="borderT padB50 padT50 text-center">
							<button type="submit" class="black-button" style="max-width: 450px; display: inline-block">update my profile</button>
						</div>
					</div>
				</form>
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
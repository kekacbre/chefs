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
<link rel="stylesheet" href="css/jquery-select7.css">

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="inner-menu new-listing">

<?php include('popups.php'); ?>

<?php include('header.php'); ?>

<section class="sub-header">
	<div class="container">
		<div class="row">
			<div class="col-md-9 categories">
				<a href="myacc-chef-profile.php" class="current">PROFILE</a>
				<a href="myacc-chef-listing.php">MY LISTINGS</a>
				<a href="myacc-chef-reviews.php">REVIEWS</a>
			</div>
			<div class="col-md-3 text-right">
				<a href="myacc-chef-newlisting.php" class="black-button padR20 padL20 right-button">ADD A NEW LISTING</a>
			</div>
		</div>
	</div>
</section>
<section class="sub-header-big">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h1 class="h2 bold gold no-margin text-left">Create a Listing</h1>
			</div>
			<div class="col-md-8 text-right scroll-menu">
				<a href="#general" class="current">GENERAL INFORMATION</a>
				<a href="#location">LOCATION</a>
				<a href="#menu">MENU</a>
				<a href="#desc">DESCRIPTION</a>
				<a href="#upload">UPLOAD MEDIA</a>
			</div>
		</div>
	</div>
</section>
<form action="#" method="post">
<section class="cart-table padB30 padT30 gray-section">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="career-item white-bg billing-info mrgB0">
					<div class="career-header" id="general">
						<div class="career-title">General Information</div>
					</div>
					<div class="row career-body padT40">
						<div class="col-md-12">
							<div class="form-group">
								<label for="name" class="col-sm-4 control-label">Type</label>
								<div class="col-sm-8">
									<select name="state" class="text-left" style="text-indent: 5px;">
										<option>Meal / Event</option>
										<option>state 1</option>
										<option>state 2</option>
										<option>state 3</option>
										<option>state 4</option>
									</select>

								</div>
							</div>	
							<div class="form-group">
								<label for="name" class="col-sm-4 control-label">Title</label>
								<div class="col-sm-8">
									<input class="form-control text-left" id="name" placeholder="The pasta recipes of my grandmother" type="text">
								</div>
							</div>
							<div class="form-group">
								<label for="name" class="col-sm-4 control-label">Persons (min/max)</label>
								<div class="col-sm-8">
									<div class="row">
										<div class="col-md-6 padR5">
											<select name="state" class="text-left" style="text-indent: 5px;">
												<option>Minimum: 1</option>
												<option>Minimum: 1</option>
												<option>Minimum: 1</option>
												<option>Minimum: 1</option>
											</select>
										</div>
										<div class="col-md-6 padL5">
											<select name="country" class="text-left" style="text-indent: 5px;">
												<option>Maximum: 8</option>
												<option>Maximum: 8</option>
												<option>Maximum: 8</option>
												<option>Maximum: 8</option>
											</select>
										</div>	
									</div>	
								</div>	
							</div>	
							<div class="form-group">
								<label for="name" class="col-sm-4 control-label">Price (per person)</label>
								<div class="col-sm-8">
									<input class="form-control text-left" id="name" placeholder="$78.00" type="text">
								</div>
							</div>
							<div class="form-group">
								<label for="name" class="col-sm-4 control-label">Time</label>
								<div class="col-sm-8">
									<div class="row">
										<div class="col-md-6 padR5">
											<select name="state" class="text-left" style="text-indent: 5px;">
												<option>HH:HH</option>
												<option>01</option>
												<option>02</option>
												<option>03</option>
												<option>04</option>
												<option>05</option>
											</select>
										</div>
										<div class="col-md-6 padL5">
											<select name="country" class="text-left" style="text-indent: 5px;">
												<option>MM:MM</option>
												<option>01</option>
												<option>02</option>
												<option>03</option>
												<option>04</option>
												<option>05</option>
											</select>
										</div>	
									</div>	
								</div>	
							</div>	
							
						</div>
					</div>
					<div class="career-header borderT" id="general">
						<div class="career-title">Location</div>
					</div>
					<div class="row career-body padT40">
						<div class="col-md-12">	
							<div class="form-group">
								<label for="name" class="col-sm-4 control-label">Street Address</label>
								<div class="col-sm-8">
									<input class="form-control text-left" id="name" placeholder="Westwood Blvd #206" type="text">
								</div>
							</div>
							<div class="form-group">
								<label for="name" class="col-sm-4 control-label">City</label>
								<div class="col-sm-8">
									<input class="form-control text-left" id="name" placeholder="Los Angeles" type="text">
								</div>
							</div>
							<div class="form-group">
								<label for="name" class="col-sm-4 control-label">State</label>
								<div class="col-sm-8">
									<input class="form-control text-left" id="name" placeholder="California" type="text">
								</div>
							</div>
							<div class="form-group">
								<label for="name" class="col-sm-4 control-label">Zip Code</label>
								<div class="col-sm-8">
									<input class="form-control text-left" id="name" placeholder="90016" type="text">
								</div>
							</div>
							<div class="form-group">
								<label for="name" class="col-sm-4 control-label">Phone #</label>
								<div class="col-sm-8">
									<input class="form-control text-left" id="name" placeholder="818.512.5228" type="text">
								</div>
							</div>
						</div>
					</div>
					<div class="career-header borderT" id="general">
						<div class="career-title">Menu</div>
					</div>
					<div class="row career-body padT40">
						<div class="col-md-12">	
							<div id="menu-items">	
								<div class="form-group">
									<label for="name" class="col-sm-4 control-label">Menu Item #1</label>
									<div class="col-sm-8">
										<input class="form-control text-left" name="menu[1]" id="name" placeholder="Anchovies marinated in olive oil, lemon and aromatic herbs." type="text">
									</div>
								</div>
								<div class="form-group">
									<label for="name" class="col-sm-4 control-label">Menu Item #2</label>
									<div class="col-sm-8">
										<input class="form-control text-left" name="menu[2]" id="name" placeholder="Pasta alla amatriciana" type="text">
									</div>
								</div>
								<div class="form-group">
									<label for="name" class="col-sm-4 control-label">Menu Item #3</label>
									<div class="col-sm-8">
										<input class="form-control text-left" name="menu[3]" id="name" placeholder="Mondeghili with creamed potatoes and a mixed salad" type="text">
									</div>
								</div>
								<div class="form-group">
									<label for="name" class="col-sm-4 control-label">Menu Item #4</label>
									<div class="col-sm-8">
										<input class="form-control text-left" name="menu[4]" id="name" placeholder="Scented apple pie with cinnamon" type="text">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="name" class="col-sm-4 control-label">&nbsp;</label>
								<div class="col-sm-8">
									<a href="javascript:;" onClick="add_menu_item()" class="add-icon">ADD ANOTHER MENU ITEM</a>

<script>
	var room = 4;
	function add_menu_item() {
	    room++;
		var $obj= $('<div class="form-group"><label for="name" class="col-sm-4 control-label">Menu Item #'+room+'</label><div class="col-sm-8"><input class="form-control text-left" name="menu['+room+']" id="name" placeholder="" type="text"></div></div>');
		$obj.appendTo($('#menu-items')).show();
	};
</script>                    
								</div>
							</div>
						</div>
					</div>
					<div class="career-header borderT" id="general">
						<div class="career-title">Description</div>
					</div>
					<div class="row career-body padT40">
						<div class="col-md-12">	
							<textarea name="special_note" class="form-control text-left padA15" placeholder="Let’s start with a fresh and delicious antipasto: Anchovies marinated in extra virgin olive oil, lemon and aromatic herbs. Then, a first course that is symbolic of traditional Roman cuisine: pasta matriciana." style="height: 180px;"></textarea>
						</div>
					</div>
					<div class="career-header borderT" id="general">
						<div class="career-title">Tips</div>
					</div>
					<div class="row career-body padT40">
						<div class="col-md-12">	
							<div id="tip-items">	
								<div class="form-group">
									<label for="name" class="col-sm-4 control-label">Tip #1</label>
									<div class="col-sm-8">
										<input class="form-control text-left" name="tip[1]" id="name" placeholder="Bring a bottle of wine" type="text">
									</div>
								</div>
								<div class="form-group">
									<label for="name" class="col-sm-4 control-label">Tip #2</label>
									<div class="col-sm-8">
										<input class="form-control text-left" name="tip[2]" id="name" placeholder="It's located outside so bring a jacket" type="text">
									</div>
								</div>

							</div>
							<div class="form-group">
								<label for="name" class="col-sm-4 control-label">&nbsp;</label>
								<div class="col-sm-8">
									<a href="javascript:;" onClick="add_tip()" class="add-icon">ADD ANOTHER TIP</a>

<script>
	var room = 2;
	function add_tip() {
	    room++;
		var $obj= $('<div class="form-group"><label for="name" class="col-sm-4 control-label">Tip #'+room+'</label><div class="col-sm-8"><input class="form-control text-left" name="tip['+room+']" id="name" placeholder="" type="text"></div></div>');
		$obj.appendTo($('#tip-items')).show();
	};
</script>                    
								</div>
							</div>
						</div>
					</div>
					<div class="career-header borderT" id="general">
						<div class="career-title">Upload Media</div>
					</div>
					<div class="row career-body padT40">
						<div class="col-md-12">	
							<div id="upload-items">	
								<div class="form-group">
									<label for="name" class="col-sm-4 control-label">Image #1</label>
									<div class="col-sm-8 file-input">
										<span></span>
										<input class="form-control text-left" name="image[1]" id="name" placeholder="pasta1.jpg" type="file">
									</div>
								</div>
								<div class="form-group">
									<label for="name" class="col-sm-4 control-label">Image #2</label>
									<div class="col-sm-8 file-input">
										<span></span>
										<input class="form-control text-left" name="image[2]" id="name" placeholder="pasta2.jpg" type="file">
									</div>
								</div>
								<div class="form-group">
									<label for="name" class="col-sm-4 control-label">Image #3</label>
									<div class="col-sm-8 file-input">
										<span></span>
										<input class="form-control text-left" name="image[3]" id="name" placeholder="pasta3.jpg" type="file">
									</div>
								</div>
								<div class="form-group">
									<label for="name" class="col-sm-4 control-label">Image #4</label>
									<div class="col-sm-8 file-input">
										<span></span>
										<input class="form-control text-left" name="image[4]" id="name" placeholder="upload..." type="file">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="name" class="col-sm-4 control-label">&nbsp;</label>
								<div class="col-sm-8">
									<a href="javascript:;" onClick="add_imagee()" class="add-icon">ADD ANOTHER IMAGE</a>

<script>
	var room = 4	;
	function add_imagee() {
	    room++;
		var $obj= $('<div class="form-group"><label for="name" class="col-sm-4 control-label">Image #'+room+'</label><div class="col-sm-8 file-input"><span></span><input class="form-control text-left" name="image['+room+']" id="name" placeholder="upload..." type="file"></div></div>');
		$obj.appendTo($('#upload-items')).show();
	};
</script>                    
								</div>
							</div>
						</div>
					</div>
					<div class="career-body padT40 borderT">
						<div class="row">	
							<div class="form-group">
								<div class="col-sm-12">
									<div class="col-md-4 uploaded-img" style="position: relative;">
										<span class="delete-img" onclick="$(this).parent().slideUp();$(this).parent().delay(500).remove();"><img src="images/delete-img.png" alt="" class="img-responsive" /></span>
										<img src="images/listing1.jpg" alt="" class="img-responsive" />
									</div>
									<div class="col-md-4 uploaded-img" style="position: relative;">
										<span class="delete-img" onclick="$(this).parent().slideUp();$(this).parent().remove();"><img src="images/delete-img.png" alt="" class="img-responsive" /></span>
										<img src="images/listing2.jpg" alt="" class="img-responsive" />
									</div>
									<div class="col-md-4 uploaded-img" style="position: relative;">
										<span class="delete-img" onclick="$(this).parent().slideUp();$(this).parent().remove();"><img src="images/delete-img.png" alt="" class="img-responsive" /></span>
										<img src="images/listing3.jpg" alt="" class="img-responsive" />
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="career-body padT40 borderT">
						<div class="row">	
							<div class="form-group">
								<div class="col-sm-12 text-center padT30 padB30">
									<button type="submit" class="black-button big" style="max-width: 500px">publish</button>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-md-4">

			</div>
		</div>		
	</div>
</section>
</form>

<?php include('footer.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/star-rating.js" type="text/javascript"></script>
<script src="js/theme.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/custom.js"></script>
<script src="js/jquery-select7.js"></script>
<script>
	$(".select7").select7();
</script>

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
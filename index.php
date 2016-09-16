<!DOCTYPE html>
<html lang="en">
		<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<title>Isabel &amp; Charles - Coming soon</title>
				<meta name="description" content="Isabel &amp; Charles is a digital agency specializing in Mobile Apps, Web Development, Project &amp; Content Management, Digital Marketing, Social Media, Music and more." />
    			<meta name="keywords" content="mobile, content, mobile app, new york city, producer, Isabel and Charles Inc, social media, agency, brooklyn, nyc">				
				<!-- Bootstrap -->
				<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
				<link href="css/style.css" rel="stylesheet" type="text/css">
				<link href="icons/css/ionicons.min.css" rel="stylesheet" type="text/css">
				<link href="icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
				<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,300italic,400italic,900italic' rel='stylesheet' type='text/css'>
				<link href='http://fonts.googleapis.com/css?family=Condiment' rel='stylesheet' type='text/css'>
				<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
				<link href="css/style.css" rel="stylesheet" type="text/css">
				<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
				<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
				<!--[if lt IE 9]>
					<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
					<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
				<![endif]-->
				<?php include_once("analyticstracking.php") ?>
		</head>
		<body>
			<div class="overlay"></div>
			<div class="fullwidthbanner oming-soon" id="home">
			<div class="banner-overlay"></div>
			<!--=== Content Part ===-->
			<div class="container cooming-soon-content valign__middle">
				<!-- Coming Soon Content -->
				<div class="row">
					<div class="col-md-12 coming-soon">
						<div class="section-title">
							<img style="margin:0 auto;" class="img-responsive" src="images/ISABEL_AND_CHARLES_LOGO.png" alt="Isabel and Charles Logo" title="Isabel and Charles Logo" />
							<!-- <h1>Isabel &amp; Charles, Inc.</h1> -->
							<h3>Web Production, Mobile App Development, Design</h3>
							<h1><span class="candiman">Coming Soon</span></h1>
							<span class="border-line"></span>
							<br>
							<p class="lead">
								Isabel &amp; Charles, Inc. was founded by web developer and mobile industry veteran <a href="http://crg.io" target="_blank">Charles Gigante</a> in 2016 to provide a wide variety of digital services at competetive prices.
								<br>
								<br>
								Reach out to Charles directly at <a href="mailto:charlie@crg.io">charlie@crg.io</a> for questions or to schedule a consultation. Thanks for visiting.
							</p>
							<!-- <p class="lead subtitle-caption">
								Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. Cras porttitor massa.
							</p> -->
						</div>
						<!-- <form>
							<div class="input-group col-md-4 col-md-offset-4">
								<input type="text" class="form-control" placeholder="Your Email">
								<span class="input-group-btn">
									<button class="btn-u" type="button">Subscribe</button>
								</span>
							</div>
						</form> -->
					</div>
				</div>


			</div><!--/container-->
			<!--=== End Content Part ===-->

			<!--=== Sticky Footer ===-->
			<div class="sticky-footer">
				<div class="col-sm-12">
						<p class="copyright-space text-center">
							2016 &copy; Isabel &amp; Charles, Inc. All Rights Reserved
						</p> 
				</div>
			</div>

			
			<!--=== End Sticky-Footer ===-->



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js" type="text/javascript"></script>

<!-- bootstrap js-->
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="js/jquery.plugin.js"></script>
<script type="text/javascript" src="js/jquery.countdown.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/page_coming_soon.js"></script>

<script type="text/javascript">
	jQuery(document).ready(function() {
		App.init();
		PageComingSoon.initPageComingSoon();
	});
</script>

<!-- Background Slider (Backstretch) -->
<script>
	$.backstretch([
		"images/1.jpg",
		"images/2.jpg",
		"images/11.jpg"
		], {
			fade: 1000,
			duration: 7000
		});
</script>

		</body>
</html>

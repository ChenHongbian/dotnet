<!doctype html>
<!--[if IE 7]>    <html class="ie7" > <![endif]-->
<!--[if IE 8]>    <html class="ie8" > <![endif]-->
<!--[if IE 9]>    <html class="ie9" > <![endif]-->
<!--[if IE 9]>    <html class="ie10" > <![endif]-->
<!--[if (gt IE 10)|!(IE)]><!--> 
<html lang="en-US"> <!--<![endif]-->
<head>
	<!-- META TAGS -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width" />

	<!-- Title -->
	<title>欢迎使用机票预定系统</title>

	<!-- Style Sheet-->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/responsive.css"> 
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="css/image.css">
	<link rel="stylesheet" type="text/css" href="css/hzw-city-picker.css">
	<link rel="shortcut icon" href="images/favicon.png">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<link rel="stylesheet" href="css/ie.css">
	<![endif]-->
</head>
<body>
	<?php
	require_once("./pagemodule/header.php");
	?>

	<?php
	require_once("./pagemodule/banner.php");
	?>

						<!-- Special Offer -->
						<div class="specialoffer-wrapper notification">
							<div class="container">

								<!-- Heading -->
								<div class="row">
									<div class="span12">
										<div class="heading">
											<h2>国内 <span>低价机票</span></h2>
										</div>
									</div>
								</div>
								<!-- Heading -->

								<div class="row offer-sec">
									<ul class="elastislide-list clearfix" id="carousel">

										<li class="span3">
											<div class="offer">
												<figure>
													<img src="http://placehold.it/270x167"  alt="Offer Image">
													<div class="overlay">
														<a href="#" class="like"></a>
													</div>
												</figure>
												<article>
													<h3>Blue beach</h3>
													<h4>thailand</h4>
													<p><a href="#" class="active"></a>
														<a href="#" class="active"></a>
														<a href="#" class="active"></a>
														<a href="#"></a>
														<a href="#"></a>
													</p>
													<span>Read 8 Reviews</span>
												</article>
												<div class="price">
													<h3>138$</h3>
													<a href="#"></a>
												</div>
											</div>
										</li>

										<li class="span3">
											<div class="offer">
												<figure>
													<img src="http://placehold.it/270x167"  alt="Offer Image">
													<div class="overlay">
														<a href="#" class="like"></a>
													</div>
												</figure>
												<article>
													<h3>Blue heaven</h3>
													<h4>Greece</h4>
													<p><a href="#" class="active"></a>
														<a href="#" class="active"></a>
														<a href="#" class="active"></a>
														<a href="#"></a>
														<a href="#"></a>
													</p>
													<span>Read 8 Reviews</span>
												</article>
												<div class="price">
													<h3>138$</h3>
													<a href="#"></a>
												</div>
											</div>
										</li>

										<li class="span3">
											<div class="offer">
												<figure>
													<img src="http://placehold.it/270x167"  alt="Offer Image">
													<div class="overlay">
														<a href="#" class="like"></a>
													</div>
												</figure>
												<article>
													<h3>Venice Canal</h3>
													<h4>italy</h4>
													<p><a href="#" class="active"></a>
														<a href="#" class="active"></a>
														<a href="#" class="active"></a>
														<a href="#"></a>
														<a href="#"></a>
													</p>
													<span>Read 8 Reviews</span>
												</article>
												<div class="price">
													<h3>138$</h3>
													<a href="#"></a>
												</div>
											</div>
										</li>

										<li class="span3">
											<div class="offer">
												<figure>
													<img src="http://placehold.it/270x167"  alt="Offer Image">
													<div class="overlay">
														<a href="#" class="like"></a>
													</div>
												</figure>
												<article>
													<h3>Monte Rosa</h3>
													<h4>italy</h4>
													<p><a href="#" class="active"></a>
														<a href="#" class="active"></a>
														<a href="#" class="active"></a>
														<a href="#"></a>
														<a href="#"></a>
													</p>
													<span>Read 8 Reviews</span>
												</article>
												<div class="price">
													<h3>138$</h3>
													<a href="#"></a>
												</div>
											</div>
										</li>
										<li class="span3">
											<div class="offer">
												<figure>
													<img src="http://placehold.it/270x167"  alt="Offer Image">
													<div class="overlay">
														<a href="#" class="like"></a>
													</div>
												</figure>
												<article>
													<h3>Monte Rosa</h3>
													<h4>italy</h4>
													<p><a href="#" class="active"></a>
														<a href="#" class="active"></a>
														<a href="#" class="active"></a>
														<a href="#"></a>
														<a href="#"></a>
													</p>
													<span>Read 8 Reviews</span>
												</article>
												<div class="price">
													<h3>138$</h3>
													<a href="#"></a>
												</div>
											</div>
										</li>

									</ul>
									<div class="crousal-btn">
										<a href="#" class="prev" style=""></a>
										<a href="#" class="next"></a>
									</div>

								</div>

							</div>

						</div>
						<!-- Special Offer -->

		<?php
		require_once("./pagemodule/footer.php");
		?>
						
		<?php
		require_once("./pagemodule/scrollup.php");
		?>

		<!-- Scripts -->
		<script src="js/jquery-1.7.1.min.js"></script>
		<script src="js/jquery.flexslider.js"></script>
		<script src="js/jquery.flexslider-min.js"></script>
		<script src="js/jquery.elastislide.js"></script>
		<script src="js/jquery.carouFredSel-6.0.4-packed.js"></script>
		<script src="js/jcarousellite_1.0.1.js"></script>
		<script src="js/jquery.cycle.all.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.isotope.min.js"></script>
		<script src="js/jquery.tinyscrollbar.min.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/jquery.scrollUp.min.js"></script>
		<!-- 用于置顶的插件 -->
  	<script src="js/city-data.js"></script>
		<script type="text/javascript" src="js/hzw-city-picker.min.js"></script>
  	<!-- 实现城市选择 -->
  	<script src="js/index.js"></script>
	</body>
</html>
<?php 
	if (session_id() == "")
  		session_start();

	include 'connectDatabase.php';
	include 'login_logout_check.php';
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Computer Center</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="OneTech shop project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">

</head>

<body>

<div class="super_container">
	<!--Header-->
	<?php 
		if ($logedIn == true) {
			include 'header.php';
		} else {
			include 'index_header.php';
		}
	?>
	
	<!-- Banner -->
	<div class="banner">
		<div class="banner_background" style="background-image:url(images/banner_background.jpg)"></div>
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="banner_product_image"><img src="images/banner_product.png" alt=""></div>
				<div class="col-lg-5 offset-lg-4 fill_height">
					<div class="banner_content">
						<h1 class="banner_text">new era of Computer</h1>
						<div class="banner_price"><span></span></div>
						<div class="banner_product_name">Arsenal Gamming</div>
						<div class="button banner_button"><a href="shop.php">Shop Now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Deals of the week -->
	<div class="deals_featured">
		<div class="container">
			<div class="row">
				<div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">

					<!-- Deals -->
					<div class="deals">
						<div class="deals_title">Deals of the Week</div>
						<div class="deals_slider_container">

							<!-- Deals Slider -->
							<div class="owl-carousel owl-theme deals_slider">

								<!-- Deals Item -->
								<div class="owl-item deals_item">
									<div class="deals_image"><img src="images/deals.png" alt=""></div>
									<div class="deals_content">
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_category"><a href="#">Headphones</a></div>
											<div class="deals_item_price_a ml-auto">$300</div>
										</div>
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_name">Beoplay H7</div>
											<div class="deals_item_price ml-auto">$225</div>
										</div>
										<div class="available">
											<div class="available_line d-flex flex-row justify-content-start">
												<div class="available_title">Available: <span>6</span></div>
												<div class="sold_title ml-auto">Already sold: <span>28</span></div>
											</div>
											<div class="available_bar"><span style="width:17%"></span></div>
										</div>
										<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
											<div class="deals_timer_title_container">
												<div class="deals_timer_title">Hurry Up</div>
												<div class="deals_timer_subtitle">Offer ends in:</div>
											</div>
											<div class="deals_timer_content ml-auto">
												<div class="deals_timer_box clearfix" data-target-time="">
													<div class="deals_timer_unit">
														<div id="deals_timer1_hr" class="deals_timer_hr"></div>
														<span>hours</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer1_min" class="deals_timer_min"></div>
														<span>mins</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer1_sec" class="deals_timer_sec"></div>
														<span>secs</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Deals Item -->
								<div class="owl-item deals_item">
									<div class="deals_image"><img src="images/deals.png" alt=""></div>
									<div class="deals_content">
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_category"><a href="#">Headphones</a></div>
											<div class="deals_item_price_a ml-auto">$300</div>
										</div>
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_name">Beoplay H7</div>
											<div class="deals_item_price ml-auto">$225</div>
										</div>
										<div class="available">
											<div class="available_line d-flex flex-row justify-content-start">
												<div class="available_title">Available: <span>6</span></div>
												<div class="sold_title ml-auto">Already sold: <span>28</span></div>
											</div>
											<div class="available_bar"><span style="width:17%"></span></div>
										</div>
										<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
											<div class="deals_timer_title_container">
												<div class="deals_timer_title">Hurry Up</div>
												<div class="deals_timer_subtitle">Offer ends in:</div>
											</div>
											<div class="deals_timer_content ml-auto">
												<div class="deals_timer_box clearfix" data-target-time="">
													<div class="deals_timer_unit">
														<div id="deals_timer2_hr" class="deals_timer_hr"></div>
														<span>hours</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer2_min" class="deals_timer_min"></div>
														<span>mins</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer2_sec" class="deals_timer_sec"></div>
														<span>secs</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Deals Item -->
								<div class="owl-item deals_item">
									<div class="deals_image"><img src="images/deals.png" alt=""></div>
									<div class="deals_content">
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_category"><a href="#">Headphones</a></div>
											<div class="deals_item_price_a ml-auto">$300</div>
										</div>
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_name">Beoplay H7</div>
											<div class="deals_item_price ml-auto">$225</div>
										</div>
										<div class="available">
											<div class="available_line d-flex flex-row justify-content-start">
												<div class="available_title">Available: <span>6</span></div>
												<div class="sold_title ml-auto">Already sold: <span>28</span></div>
											</div>
											<div class="available_bar"><span style="width:17%"></span></div>
										</div>
										<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
											<div class="deals_timer_title_container">
												<div class="deals_timer_title">Hurry Up</div>
												<div class="deals_timer_subtitle">Offer ends in:</div>
											</div>
											<div class="deals_timer_content ml-auto">
												<div class="deals_timer_box clearfix" data-target-time="">
													<div class="deals_timer_unit">
														<div id="deals_timer3_hr" class="deals_timer_hr"></div>
														<span>hours</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer3_min" class="deals_timer_min"></div>
														<span>mins</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer3_sec" class="deals_timer_sec"></div>
														<span>secs</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="deals_slider_nav_container">
							<div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
							<div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
						</div>
					</div>

					<!-- Featured -->
					<div class="featured">
						<div class="tabbed_container">
							<div class="tabs">
								<ul class="clearfix">
									<li class="active">Featured</li>
									<li>On Sale</li>
									<li>Best Rated</li>
								</ul>
								<div class="tabs_line"><span></span></div>
							</div>

							<!-- Product Panel -->
							<div class="product_panel panel active">
								<div class="featured_slider slider">

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_1.png" alt=""></div>
											<div class="product_content">
												<div class="product_price discount">$225<span>$300</span></div>
												<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount">-25%</li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_2.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$379</div>
												<div class="product_name"><div><a href="product.php">Apple iPod shuffle</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button active">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_3.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$379</div>
												<div class="product_name"><div><a href="product.php">Sony MDRZX310W</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_4.png" alt=""></div>
											<div class="product_content">
												<div class="product_price discount">$225<span>$300</span></div>
												<div class="product_name"><div><a href="product.php">LUNA Smartphone</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount">-25%</li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_5.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$225</div>
												<div class="product_name"><div><a href="product.php">Canon STM Kit...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_6.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$379</div>
												<div class="product_name"><div><a href="product.php">Samsung J330F...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_7.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$379</div>
												<div class="product_name"><div><a href="product.php">Lenovo IdeaPad</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount">-25%</li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_8.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$225</div>
												<div class="product_name"><div><a href="product.php">Digitus EDNET...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_1.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$225</div>
												<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_2.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$379</div>
												<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_3.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$379</div>
												<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_4.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$225</div>
												<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_5.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$225</div>
												<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_6.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$379</div>
												<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_7.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$379</div>
												<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_8.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$225</div>
												<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

								</div>
								<div class="featured_slider_dots_cover"></div>
							</div>

							<!-- Product Panel -->
							<div class="product_panel panel">
								<div class="featured_slider slider">

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_1.png" alt=""></div>
											<div class="product_content">
												<div class="product_price discount">$225<span>$300</span></div>
												<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount">-25%</li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_2.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$379</div>
												<div class="product_name"><div><a href="product.php">Apple iPod shuffle</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button active">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_3.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$379</div>
												<div class="product_name"><div><a href="product.php">Sony MDRZX310W</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_4.png" alt=""></div>
											<div class="product_content">
												<div class="product_price discount">$225<span>$300</span></div>
												<div class="product_name"><div><a href="product.php">LUNA Smartphone</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount">-25%</li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_5.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$225</div>
												<div class="product_name"><div><a href="product.php">Canon STM Kit...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_6.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$379</div>
												<div class="product_name"><div><a href="product.php">Samsung J330F...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_7.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$379</div>
												<div class="product_name"><div><a href="product.php">Lenovo IdeaPad</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount">-25%</li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_8.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$225</div>
												<div class="product_name"><div><a href="product.php">Digitus EDNET...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_1.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$225</div>
												<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_2.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$379</div>
												<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_3.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$379</div>
												<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_4.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$225</div>
												<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_5.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$225</div>
												<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_6.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$379</div>
												<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_7.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$379</div>
												<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_8.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$225</div>
												<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

								</div>
								<div class="featured_slider_dots_cover"></div>
							</div>

							<!-- Product Panel -->

							<div class="product_panel panel">
								<div class="featured_slider slider">

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_1.png" alt=""></div>
											<div class="product_content">
												<div class="product_price discount">$225<span>$300</span></div>
												<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount">-25%</li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_2.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$379</div>
												<div class="product_name"><div><a href="product.php">Apple iPod shuffle</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button active">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_3.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$379</div>
												<div class="product_name"><div><a href="product.php">Sony MDRZX310W</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_4.png" alt=""></div>
											<div class="product_content">
												<div class="product_price discount">$225<span>$300</span></div>
												<div class="product_name"><div><a href="product.php">LUNA Smartphone</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount">-25%</li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_5.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$225</div>
												<div class="product_name"><div><a href="product.php">Canon STM Kit...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_6.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$379</div>
												<div class="product_name"><div><a href="product.php">Samsung J330F...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_7.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$379</div>
												<div class="product_name"><div><a href="product.php">Lenovo IdeaPad</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount">-25%</li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_8.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$225</div>
												<div class="product_name"><div><a href="product.php">Digitus EDNET...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_1.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$225</div>
												<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_2.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$379</div>
												<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_3.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$379</div>
												<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_4.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$225</div>
												<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_5.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$225</div>
												<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_6.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$379</div>
												<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_7.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$379</div>
												<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_8.png" alt=""></div>
											<div class="product_content">
												<div class="product_price">$225</div>
												<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

								</div>
								<div class="featured_slider_dots_cover"></div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Banner -->
	<div class="banner_2">
		<div class="banner_2_background" style="background-image:url(images/banner_2_background.jpg)"></div>
		<div class="banner_2_container">
			<div class="banner_2_dots"></div>
			<!-- Banner 2 Slider -->

			<div class="owl-carousel owl-theme banner_2_slider">

				<!-- Banner 2 Slider Item -->
				<div class="owl-item">
					<div class="banner_2_item">
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col-lg-4 col-md-6 fill_height">
									<div class="banner_2_content">
										<div class="banner_2_category">Laptops</div>
										<div class="banner_2_title">MacBook Air 13</div>
										<div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
										<div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
										<div class="button banner_2_button"><a href="#">Explore</a></div>
									</div>

								</div>
								<div class="col-lg-8 col-md-6 fill_height">
									<div class="banner_2_image_container">
										<div class="banner_2_image"><img src="images/banner_2_product.png" alt=""></div>
									</div>
								</div>
							</div>
						</div>			
					</div>
				</div>

				<!-- Banner 2 Slider Item -->
				<div class="owl-item">
					<div class="banner_2_item">
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col-lg-4 col-md-6 fill_height">
									<div class="banner_2_content">
										<div class="banner_2_category">Laptops</div>
										<div class="banner_2_title">MacBook Air 13</div>
										<div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
										<div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
										<div class="button banner_2_button"><a href="#">Explore</a></div>
									</div>

								</div>
								<div class="col-lg-8 col-md-6 fill_height">
									<div class="banner_2_image_container">
										<div class="banner_2_image"><img src="images/banner_2_product.png" alt=""></div>
									</div>
								</div>
							</div>
						</div>			
					</div>
				</div>

				<!-- Banner 2 Slider Item -->
				<div class="owl-item">
					<div class="banner_2_item">
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col-lg-4 col-md-6 fill_height">
									<div class="banner_2_content">
										<div class="banner_2_category">Laptops</div>
										<div class="banner_2_title">MacBook Air 13</div>
										<div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
										<div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
										<div class="button banner_2_button"><a href="#">Explore</a></div>
									</div>

								</div>
								<div class="col-lg-8 col-md-6 fill_height">
									<div class="banner_2_image_container">
										<div class="banner_2_image"><img src="images/banner_2_product.png" alt=""></div>
									</div>
								</div>
							</div>
						</div>			
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Hot New Arrivals -->
	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabbed_container">
						<div class="tabs clearfix tabs-right">
							<div class="new_arrivals_title">New Arrivals</div>
							<ul class="clearfix">
								<li class="active">Featured</li>
								<li>Audio & Video</li>
								<li>Laptops & Computers</li>
							</ul>
							<div class="tabs_line"><span></span></div>
						</div>
						<div class="row">
							<div class="col-lg-9" style="z-index:1;">

								<!-- Product Panel -->
								<div class="product_panel panel active">
									<div class="arrivals_slider slider">

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_1.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.php">Astro M2 Black</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_2.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.php">Transcend T.Sonic</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button active">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_3.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.php">Xiaomi Band 2...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_4.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.php">Rapoo T8 White</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_5.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.php">Philips BT6900A</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_6.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.php">Nokia 3310(2017)...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_7.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.php">Rapoo 7100p Gray</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_8.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.php">Canon EF</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_1.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.php">Gembird SPK-103</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_2.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.php">Canon IXUS 175...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_3.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_4.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_5.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_6.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_7.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_8.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="arrivals_slider_dots_cover"></div>
								</div>

								<!-- Product Panel -->
								<div class="product_panel panel">
									<div class="arrivals_slider slider">

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_1.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_2.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button active">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_3.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_4.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_5.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_6.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_7.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_8.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_1.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_2.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_3.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_4.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_5.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_6.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_7.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_8.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="arrivals_slider_dots_cover"></div>
								</div>

								<!-- Product Panel -->
								<div class="product_panel panel">
									<div class="arrivals_slider slider">

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_1.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_2.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button active">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_3.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_4.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_5.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_6.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_7.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_8.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_1.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_2.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_3.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_4.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_5.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_6.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_7.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$379</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_8.jpg" alt=""></div>
												<div class="product_content">
													<div class="product_price">$225</div>
													<div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="arrivals_slider_dots_cover"></div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="arrivals_single clearfix">
									<div class="d-flex flex-column align-items-center justify-content-center">
										<div class="arrivals_single_image"><img src="images/new_single.png" alt=""></div>
										<div class="arrivals_single_content">
											<div class="arrivals_single_category"><a href="#">Smartphones</a></div>
											<div class="arrivals_single_name_container clearfix">
												<div class="arrivals_single_name"><a href="#">LUNA Smartphone</a></div>
												<div class="arrivals_single_price text-right">$379</div>
											</div>
											<div class="rating_r rating_r_4 arrivals_single_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<form action="#"><button class="arrivals_single_button">Add to Cart</button></form>
										</div>
										<div class="arrivals_single_fav product_fav active"><i class="fas fa-heart"></i></div>
										<ul class="arrivals_single_marks product_marks">
											<li class="arrivals_single_mark product_mark product_new">new</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Best Sellers -->
	<div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabbed_container">
						<div class="tabs clearfix tabs-right">
							<div class="new_arrivals_title">Best Sellers</div>
							<ul class="clearfix">
								<li class="active">Top</li>
								<li>Audio & Video</li>
								<li>Laptops & Computers</li>
							</ul>
							<div class="tabs_line"><span></span></div>
						</div>

						<div class="bestsellers_panel panel active">

							<!-- Best Sellers Slider -->

							<div class="bestsellers_slider slider">

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_1.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_2.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Samsung J730F...</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_3.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Nomi Black White</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_4.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Samsung Charm Gold</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_5.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Beoplay H7</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_6.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Huawei MediaPad T3</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_1.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_2.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_3.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_4.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_5.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_6.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

							</div>
						</div>

						<div class="bestsellers_panel panel">

							<!-- Best Sellers Slider -->

							<div class="bestsellers_slider slider">

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_1.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_2.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_3.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_4.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_5.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_6.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_1.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_2.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_3.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_4.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_5.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_6.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

							</div>
						</div>

						<div class="bestsellers_panel panel">

							<!-- Best Sellers Slider -->

							<div class="bestsellers_slider slider">

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_1.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_2.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_3.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_4.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_5.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_6.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_1.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_2.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_3.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_4.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_5.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="images/best_6.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.php">Xiaomi Redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<!-- Trends -->
	<div class="trends">
		<div class="trends_background" style="background-image:url(images/trends_background.jpg)"></div>
		<div class="trends_overlay"></div>
		<div class="container">
			<div class="row">

				<!-- Trends Content -->
				<div class="col-lg-3">
					<div class="trends_container">
						<h2 class="trends_title">Trends 2018</h2>
						<div class="trends_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</p></div>
						<div class="trends_slider_nav">
							<div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
							<div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
						</div>
					</div>
				</div>

				<!-- Trends Slider -->
				<div class="col-lg-9">
					<div class="trends_slider_container">

						<!-- Trends Slider -->

						<div class="owl-carousel owl-theme trends_slider">

							<!-- Trends Slider Item -->
							<div class="owl-item">
								<div class="trends_item is_new">
									<div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="images/trends_1.jpg" alt=""></div>
									<div class="trends_content">
										<div class="trends_category"><a href="#">Smartphones</a></div>
										<div class="trends_info clearfix">
											<div class="trends_name"><a href="product.php">Jump White</a></div>
											<div class="trends_price">$379</div>
										</div>
									</div>
									<ul class="trends_marks">
										<li class="trends_mark trends_discount">-25%</li>
										<li class="trends_mark trends_new">new</li>
									</ul>
									<div class="trends_fav"><i class="fas fa-heart"></i></div>
								</div>
							</div>

							<!-- Trends Slider Item -->
							<div class="owl-item">
								<div class="trends_item">
									<div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="images/trends_2.jpg" alt=""></div>
									<div class="trends_content">
										<div class="trends_category"><a href="#">Smartphones</a></div>
										<div class="trends_info clearfix">
											<div class="trends_name"><a href="product.php">Samsung Charm...</a></div>
											<div class="trends_price">$379</div>
										</div>
									</div>
									<ul class="trends_marks">
										<li class="trends_mark trends_discount">-25%</li>
										<li class="trends_mark trends_new">new</li>
									</ul>
									<div class="trends_fav"><i class="fas fa-heart"></i></div>
								</div>
							</div>

							<!-- Trends Slider Item -->
							<div class="owl-item">
								<div class="trends_item is_new">
									<div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="images/trends_3.jpg" alt=""></div>
									<div class="trends_content">
										<div class="trends_category"><a href="#">Smartphones</a></div>
										<div class="trends_info clearfix">
											<div class="trends_name"><a href="product.php">DJI Phantom 3...</a></div>
											<div class="trends_price">$379</div>
										</div>
									</div>
									<ul class="trends_marks">
										<li class="trends_mark trends_discount">-25%</li>
										<li class="trends_mark trends_new">new</li>
									</ul>
									<div class="trends_fav"><i class="fas fa-heart"></i></div>
								</div>
							</div>

							<!-- Trends Slider Item -->
							<div class="owl-item">
								<div class="trends_item is_new">
									<div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="images/trends_1.jpg" alt=""></div>
									<div class="trends_content">
										<div class="trends_category"><a href="#">Smartphones</a></div>
										<div class="trends_info clearfix">
											<div class="trends_name"><a href="product.php">Jump White</a></div>
											<div class="trends_price">$379</div>
										</div>
									</div>
									<ul class="trends_marks">
										<li class="trends_mark trends_discount">-25%</li>
										<li class="trends_mark trends_new">new</li>
									</ul>
									<div class="trends_fav"><i class="fas fa-heart"></i></div>
								</div>
							</div>

							<!-- Trends Slider Item -->
							<div class="owl-item">
								<div class="trends_item">
									<div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="images/trends_2.jpg" alt=""></div>
									<div class="trends_content">
										<div class="trends_category"><a href="#">Smartphones</a></div>
										<div class="trends_info clearfix">
											<div class="trends_name"><a href="product.php">Jump White</a></div>
											<div class="trends_price">$379</div>
										</div>
									</div>
									<ul class="trends_marks">
										<li class="trends_mark trends_discount">-25%</li>
										<li class="trends_mark trends_new">new</li>
									</ul>
									<div class="trends_fav"><i class="fas fa-heart"></i></div>
								</div>
							</div>

							<!-- Trends Slider Item -->
							<div class="owl-item">
								<div class="trends_item is_new">
									<div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="images/trends_3.jpg" alt=""></div>
									<div class="trends_content">
										<div class="trends_category"><a href="#">Smartphones</a></div>
										<div class="trends_info clearfix">
											<div class="trends_name"><a href="product.php">Jump White</a></div>
											<div class="trends_price">$379</div>
										</div>
									</div>
									<ul class="trends_marks">
										<li class="trends_mark trends_discount">-25%</li>
										<li class="trends_mark trends_new">new</li>
									</ul>
									<div class="trends_fav"><i class="fas fa-heart"></i></div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Recently Viewed -->
	<div class="viewed">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="viewed_title_container">
						<h3 class="viewed_title">Recently Viewed</h3>
						<div class="viewed_nav_container">
							<div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
							<div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
						</div>
					</div>

					<div class="viewed_slider_container">

						<!-- Recently Viewed Slider -->

						<div class="owl-carousel owl-theme viewed_slider">

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/view_1.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$225<span>$300</span></div>
										<div class="viewed_name"><a href="#">Beoplay H7</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/view_2.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$379</div>
										<div class="viewed_name"><a href="#">LUNA Smartphone</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/view_3.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$225</div>
										<div class="viewed_name"><a href="#">Samsung J730F...</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/view_4.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$379</div>
										<div class="viewed_name"><a href="#">Huawei MediaPad...</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/view_5.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$225<span>$300</span></div>
										<div class="viewed_name"><a href="#">Sony PS4 Slim</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/view_6.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$375</div>
										<div class="viewed_name"><a href="#">Speedlink...</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Brands -->
	<div class="brands">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="brands_slider_container">

						<!-- Brands Slider -->

						<div class="owl-carousel owl-theme brands_slider">

							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_1.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_2.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_3.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_4.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_5.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_6.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_7.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_8.jpg" alt=""></div></div>

						</div>

						<!-- Brands Slider Navigation -->
						<div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
						<div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
						<div class="newsletter_title_container">
							<div class="newsletter_icon"><img src="images/send.png" alt=""></div>
							<div class="newsletter_title">Sign up for Newsletter</div>
							<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
						</div>
						<div class="newsletter_content clearfix">
							<form action="#" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
								<button class="newsletter_button">Subscribe</button>
							</form>
							<div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<?php include 'footer.php'; ?>

</div>
<script>
    function logout(){
   		<?php
    		session_destroy();
    	?>;
    }
</script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/slick-1.8.0/slick.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>

</html>
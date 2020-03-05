<?php 
	echo '
		<!-- Header -->

		<header class="header">

			<!-- Top Bar -->

			<div class="top_bar">
				<div class="container">
					<div class="row">
						<div class="col d-flex flex-row">
							<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="images/phone.png" alt=""></div>+8801712345678</div>
							<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="images/mail.png" alt=""></div><a href="mailto:computerCenter@gmail.com">computerCenter@gmail.com</a></div>
							<div class="top_bar_content ml-auto">
								<div class="top_bar_user">
									<div class="user_icon"><img src="images/user.svg" alt=""></div>
									<div><a href="#profilepage">'.$user_name.'</a></div>
									<div><a onclick="logout()" href="">Log Out</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>		
			</div>

			<!-- Header Main -->

			<div class="header_main">
				<div class="container">
					<div class="row">

						<!-- Logo -->
						<div class="col-lg-2 col-sm-3 col-3 order-1">
							<div class="logo_container">
								<div class="logo"><a href="index.php">Comper Center</a></div>
							</div>
						</div>

						<!-- Search -->
						<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
							<div class="header_search">
								<div class="header_search_content">
									<div class="header_search_form_container">
										<form action="#" class="header_search_form clearfix">
											<input type="search" required="required" class="header_search_input" placeholder="Search for products...">
											<div class="custom_dropdown">
												<div class="custom_dropdown_list">
													<span class="custom_dropdown_placeholder clc">All Categories</span>
													<i class="fas fa-chevron-down"></i>
													<ul class="custom_list clc">
														<li><a class="clc" href="All Categories">All Categories</a></li>
														<li><a class="clc" href="Computers">Computers</a></li>
														<li><a class="clc" href="Laptops">Laptops</a></li>
														<li><a class="clc" href="Laptops">Hardware</a></li>
														<li><a class="clc" href="Other Accessories">Other Accessories</a></li>
													</ul>
												</div>
											</div>
											<button type="submit" class="header_search_button trans_300" value="Submit"><img src="images/search.png" alt="Search"></button>
										</form>
									</div>
								</div>
							</div>
						</div>

						<!-- Wishlist -->
						<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
							<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
								<div class="wishlist d-flex flex-row align-items-center justify-content-end">
									<div class="wishlist_icon"><img src="images/heart.png" alt=""></div>
									<div class="wishlist_content">
										<div class="wishlist_text"><a href="cart.php">Wishlist</a></div>
										<div id="wishlistCounter" class="wishlist_count"></div>
									</div>
								</div>

								<!-- Cart -->
								<div class="cart">
									<div class="cart_container d-flex flex-row align-items-center justify-content-end">
										<div class="cart_icon">
											<img src="images/cart.png" alt="offer poster">
											<div class="cart_count"><span id="cartCount"></span></div>
										</div>
										<div class="cart_content">
											<div class="cart_text"><a href="cart.php">Cart</a></div>
											<div id="cartPrice" class="cart_price"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Main Navigation -->

			<nav class="main_nav">
				<div class="container">
					<div class="row">
						<div class="col">

							<div class="main_nav_content d-flex flex-row">

								<!-- Categories Menu -->

								<div class="cat_menu_container">
									<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
										<div class="cat_burger"><span></span><span></span><span></span></div>
										<div class="cat_menu_text">categories</div>
									</div>

									<ul class="cat_menu">
										<li class="hassubs">
											<a href="#">Desktop<i class="fas fa-chevron-right ml-auto"></i></a>
											<ul>
												
												<li><a href="">Brand Pc<i class="fas fa-chevron-right"></i></a></li>
												<li><a href="">Gamming Pc<i class="fas fa-chevron-right"></i></a></li>
											</li>
											<li><a href="#">Apple IMac<i class="fas fa-chevron-right"></i></a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="">Laptop<i class="fas fa-chevron-right"></i></a>
										<ul>
											<li><a href="">hp<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="">Dell<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="">Acer<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="">Asus<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="">Lenovo<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Apple Mac Book<i class="fas fa-chevron-right"></i></a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">Hardware<i class="fas fa-chevron-right"></i></a>
										<ul>
											<li class="hassubs">
												<a href="">Casing<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</li>
											<li class="hassubs">
												<a href="">Cooler<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</li>
											<li class="hassubs">
												<a href="">Power Supply<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</li>
											<li class="hassubs">
												<a href="">Processor<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</li>
											<li class="hassubs">
												<a href="">Mother Board<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</li>
											<li class="hassubs">
												<a href="">Ram<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</li>
											<li class="hassubs">
												<a href="">Disk Drive<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li class="hassubs">
														<a href="">Hard Disk(HDD)<i class="fas fa-chevron-right"></i></a>
														<ul>
															<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
															<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
															<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
															<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
														</ul>
													</li>
													<li class="hassubs">
														<a href="">SSD<i class="fas fa-chevron-right"></i></a>
														<ul>
															<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
															<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
															<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
															<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li class="hassubs">
												<a href="">Graphics Card<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">Accessories<i class="fas fa-chevron-right"></i></a>
										<ul>
											<li class="hassubs">
												<a href="">Monitor<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</li>
											<li class="hassubs">
												<a href="">Keyboard<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</li>
											<li class="hassubs">
												<a href="">Mouse<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</li>
											<li class="hassubs">
												<a href="">Sound System<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</li>
											<li class="hassubs">
												<a href="">HeadPhone<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</li>
											<li class="hassubs">
												<a href="">Router<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</li>
											<li class="hassubs">
												<a href="">Printer<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</li>
											<li class="hassubs">
												<a href="">Pendrive<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</li>
											<li class="hassubs">
												<a href="">Laptop Bag<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</div>

							<!-- Main Nav Menu -->

							<div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="index.php">Home<i class="fas fa-chevron-down"></i></a></li>
									<li class="hassubs">
										<a href="#">Super Deals<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li>
												<a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">Featured Brands<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li>
												<a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
									<li><a href="contact.php">Contact<i class="fas fa-chevron-down"></i></a></li>
								</ul>
							</div>

							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>

		<!-- Menu -->

		<div class="page_menu">
			<div class="container">
				<div class="row">
					<div class="col">

						<div class="page_menu_content">

							<div class="page_menu_search">
								<form action="#">
									<input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
								</form>
							</div>
							<ul class="page_menu_nav">
								<li class="page_menu_item">
									<a href="#">Home<i class="fa fa-angle-down"></i></a>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
										<li class="page_menu_item has-children">
											<a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
											<ul class="page_menu_selection">
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											</ul>
										</li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item"><a href="contact.php">contact<i class="fa fa-angle-down"></i></a></li>
							</ul>
							<div class="menu_contact">
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>+88017123456789</div>
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">computerCenter@gmail.com</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic -->
		<meta charset="utf-8">
		<title>YOURStore - Responsive HTML5 Template</title>
		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="YOURStore - Responsive HTML5 Template">
		<meta name="author" content="etheme.com">
		<link rel="shortcut icon" href="favicon.ico">
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- External Plugins CSS -->
		<link rel="stylesheet" href="external/slick/slick.css">
		<link rel="stylesheet" href="external/slick/slick-theme.css">
		<link rel="stylesheet" href="external/magnific-popup/magnific-popup.css">
		<link rel="stylesheet" href="external/bootstrap-select/bootstrap-select.css">	
		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/style.css">
		<!-- Icon Fonts  -->
		<link rel="stylesheet" href="font/style.css">
		<!-- Head Libs -->
		<!-- Modernizr -->
		<script src="external/modernizr/modernizr.js"></script>
	</head>
	<body class="index">
		<div id="loader-wrapper">
			<div id="loader">
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
			</div>
		</div>
		<!-- Back to top -->
	    <div class="back-to-top"><span class="icon-keyboard_arrow_up"></span></div>
	    <!-- /Back to top -->
	    <!-- mobile menu -->
		<?php include 'h_mob.php'  ?>		<!-- HEADER section -->
		<div class="header-wrapper">
			<header id="header">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 col-md-4 col-lg-6 col-xl-7">
							<!-- logo start --> 
							<a href="index.php"><img class="logo replace-2x img-responsive" src="images/logo.png" alt=""/> </a> 
							<!-- logo end --> 
						</div>
						<div class="col-sm-8 col-md-8 col-lg-6 col-xl-5 text-right">
							<!-- slogan start -->
							
							<!-- slogan end --> 						
							<div class="settings">
								<!-- currency start -->
							
								<!-- currency end --> 
								<!-- language start -->
							
								<!-- language end --> 
							</div>
						</div>
					</div>
				</div>
				<div class="stuck-nav">
					<div class="container offset-top-5">
						<div class="row">
							<div class="pull-left col-sm-9 col-md-9 col-lg-10">
								<!-- navigation start -->
								<nav class="navbar">
									<div class="responsive-menu mainMenu">									
										<!-- Mobile menu Button-->
										<div class="col-xs-2 visible-mobile-menu-on">
											<div class="expand-nav compact-hidden">
												<a href="#off-canvas-menu" class="off-canvas-menu-toggle">
													<div class="navbar-toggle"> 
														<span class="icon-bar"></span> 
														<span class="icon-bar"></span> 
														<span class="icon-bar"></span> 
														<span class="menu-text">MENU</span> 
													</div>
												</a>
											</div>
										</div>
										<!-- //end Mobile menu Button -->
	<?php include 'h_web.php'  ?>
									</div>
								</nav>
							</div>
							<!-- navigation end -->
							<div class="pull-right col-sm-3 col-md-3 col-lg-2">
								<div class="text-right">	
									<!-- search start -->
									<div class="search link-inline">
										<a href="#" class="search__open"><span class="icon icon-search"></span></a>
										<div class="search-dropdown">
											<form action="index.php" method="post">
												<div class="input-outer">
													<input type="search"  id = "automplete-2" name="search" value="" maxlength="128" placeholder="SEARCH:">
													<button type="submit" name="subby" title="" class="icon icon-search"></button>
												</div>
												<a href="#" class="search__close"><span class="icon icon-close"></span></a>									
											</form>

										</div>
									</div>
									<!-- search end -->										
									<!-- account menu start -->
									<div class="account link-inline">
										<div class="dropdown text-right">
											<a class="dropdown-toggle" data-toggle="dropdown">
											<span class="icon icon-person "></span>
											</a>
											<ul class="dropdown-menu dropdown-menu--xs-full">
												<li><a href="login_form.html"><span class="icon icon-person"></span>My Account</a></li>
												<li><a href="wishlist.html"><span class="icon icon-favorite_border"></span>My Wishlist</a></li>
												<li><a href="compare.html"><span class="icon icon-sort"></span>Compare</a></li>
												<li><a href="checkout-step.html"><span class="icon icon-done_all"></span>Checkout</a></li>
												<li><a href="#"  data-toggle="modal" data-target="#modalLoginForm"><span class="icon icon-lock"></span>Log In</a></li>
												<li><a href="login_form.html"><span class="icon icon-person_add"></span>Create an account</a></li>
												<li class="dropdown-menu__close"><a href="#"><span class="icon icon-close"></span>close</a></li>
											</ul>
										</div>
									</div>
									<!-- account menu end -->
									<!-- shopping cart start -->
									<div class="cart link-inline">
										<div class="dropdown text-right">
											<a class="dropdown-toggle">
											<span class="icon icon-shopping_basket"></span>
											<span class="badge badge--cart">2</span>
											</a>
											<div class="dropdown-menu dropdown-menu--xs-full slide-from-top" role="menu">
												<div class="container">
													<div class="cart__top">Recently added item(s)</div>
													<a href="#" class="icon icon-close cart__close"><span>CLOSE</span></a>
													<ul>
														<li class="cart__item">
															<div class="cart__item__image pull-left"><a href="#"><img src="images/product/product-1.jpg" alt=""/></a></div>
															<div class="cart__item__control">
																<div class="cart__item__delete"><a href="#" class="icon icon-delete"><span>Delete</span></a></div>
																<div class="cart__item__edit"><a href="#" class="icon icon-edit"><span>Edit</span></a></div>
															</div>
															<div class="cart__item__info">
																<div class="cart__item__info__title">
																	<h2><a href="#">Quis nostrud exercit ation ullamco</a></h2>
																</div>
																<div class="cart__item__info__price"><span class="info-label">Price:</span><span>$84.00</span></div>
																<div class="cart__item__info__qty"><span class="info-label">Qty:</span><input type="text" class="input--ys" value='1' /></div>
																<div class="cart__item__info__details">
																	<div class='multitooltip'>
																		<a href="#">Details</a>
																		<div class="tip on-bottom">
																			<span><strong>Color:</strong> Purple</span>
																			<span><strong>Quantity:</strong> 200</span>
																			<span><strong>Image:</strong> No</span>
																			<span><strong>Paper:</strong> Type Linen</span>
																			<span><strong>Size:</strong> 4"x3.5"</span>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="cart__item">
															<div class="cart__item__image pull-left"><a href="#"><img src="images/product/product-2.jpg" alt=""/></a></div>
															<div class="cart__item__control">
																<div class="cart__item__delete"><a href="#" class="icon icon-delete"><span>Delete</span></a></div>
																<div class="cart__item__edit"><a href="#" class="icon icon-edit"><span>Edit</span></a></div>
															</div>
															<div class="cart__item__info">
																<div class="cart__item__info__title">
																	<h2 class="title-center"><a href="#">Quis nostrud exercit ation ullamco</a></h2>
																</div>
																<div class="cart__item__info__price"><span class="info-label">Price:</span><span>$84.00</span></div>
																<div class="cart__item__info__qty"><span class="info-label">Qty:</span><input type="text" class="input--ys" value='1' /></div>															
															</div>
														</li>
													</ul>
													<div class="cart__bottom">
														<div class="cart__total">Cart subtotal: <span> $65.00</span></div>
														<button class="btn btn--ys btn-checkout">Checkout <span class="icon icon--flippedX icon-reply"></span></button>
														<a href="#" class="btn btn--ys"><span class="icon icon-shopping_basket"></span> View Cart</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- shopping cart end -->			
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
		</div>
		<!-- End HEADER section -->
		<!-- breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<ol class="breadcrumb breadcrumb--ys pull-left">
					<li class="home-link"><a href="index.html" class="icon icon-home"></a></li>				
					<li class="active">About</li>
				</ol>
			</div>
		</div>
		<!-- /breadcrumbs --> 
		<!-- CONTENT section -->
		<div id="pageContent">			
			<!-- parallax-img -->
			<section class="content--parallax content--parallax-sm offset-top-0" data-image="images/custom/parallax-img-05.jpg">
				<div class="content  offset-top-0">
					<div class="container">
						<div class="parallax-text">
							<div class="block-table">
								<div class="block-table-cell text-center">
									<h6 class="font50 color-white">About us</h6>
									<div class="divider divider--xs"></div>
									<p class="font30 color-white">Lorem ipsum dolor sit amet conse ctetur adipisicing elit.</p>
									<div class="divider divider--xs"></div>
									<span class="bull-line"></span>
								</div>
							</div>							
						</div>
					</div>
				</div>
			</section>
			<!-- /parallax-img -->
			<!--  -->
			<section class="content">
				<div class="container">
					<h2 class="text-center title-under">Interesting Facts</h2>
					<p class="text-center color-dark main-font">
						<em class="font18">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
	Ut enim ad minim veniam, quis nostrud exercitation ullamco.</em>
					</p>
					<div class="divider divider--md1"></div>		
					<div class="row">
						<div class="col-md-12 col-lg-4 text-center separator-border-right separator-border-right-hidden-md">
							<a class="link-banner1" href="#">
								<div>
									<span class="font96 font-middle color-custom">5000</span>
								</div>
								<p>
									<span class="font26 font-middle color-custom">Items in Store</span>
								</p>																				
								<p class="side-offset-9">
									Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
								</p>	
								<div class="divider divider--md"></div>
							</a>						
						</div>						
						<div class="divider divider--md1 visible-md"></div>
						<div class="col-md-12 col-lg-4 text-center separator-border-right separator-border-right-hidden-md">
							<a class="link-banner1" href="#">
								<div>
									<span class="font96 font-middle color-custom">80%</span>
								</div>
								<p>
									<span class="font26 font-middle color-custom">Our Customers Come Back</span>
								</p>																				
								<p class="side-offset-9">
									Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
								</p>
								<div class="divider divider--md"></div>	
							</a>								
						</div>
						<div class="divider divider--md1 visible-md"></div>
						<div class="col-md-12 col-lg-4 text-center">
							<a class="link-banner1" href="#">
								<div>
									<span class="font96 font-middle color-custom">1 million</span>
								</div>
								<p>
									<span class="font26 font-middle color-custom">Users of the Site</span>
								</p>																				
								<p class="side-offset-9">
									Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
								</p>
								<div class="divider divider--md"></div>		
							</a>							
						</div>
					</div>

				</div>
			</section>
			<!-- / -->
			<!--  -->
			<section class="container-fluid fill-bg content">
				<div class="content-fill">
					<h2 class="text-center title-under">Our Partners</h2>
					<div class="row">
						<div class="col-lg-10 col-lg-offset-1 col-xs-12 col-xs-offset-0">
							<p class="text-center">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
		non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
							</p>
							<div class="divider divider--lg"></div>
							<div class="brand-lg-list">
								<div class="row-item">
									<a href="#"><img src="images/custom/brand-lg-01.png" class="img-responsive" alt=""></a>
									<a href="#"><img src="images/custom/brand-lg-02.png" class="img-responsive" alt=""></a>
									<a href="#"><img src="images/custom/brand-lg-03.png" class="img-responsive" alt=""></a>
									<a href="#"><img src="images/custom/brand-lg-04.png" class="img-responsive" alt=""></a>
									<a href="#"><img src="images/custom/brand-lg-05.png" class="img-responsive" alt=""></a>
								</div>
								<div class="row-item">
									<a href="#"><img src="images/custom/brand-lg-06.png" class="img-responsive" alt=""></a>
									<a href="#"><img src="images/custom/brand-lg-07.png" class="img-responsive" alt=""></a>
									<a href="#"><img src="images/custom/brand-lg-08.png" class="img-responsive" alt=""></a>
									<a href="#"><img src="images/custom/brand-lg-09.png" class="img-responsive" alt=""></a>
									<a href="#"><img src="images/custom/brand-lg-10.png" class="img-responsive" alt=""></a>
								</div>							
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- / -->
			<!--  -->
			<section class="content">
				<div class="container">
					<h2 class="text-center title-under">Easy Selection</h2>
					<p class="text-center color-custom">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</section>
			<!-- / -->
			<!-- parallax-img -->
			<section class="content--parallax content--parallax-sm offset-top-0" data-image="images/custom/parallax-img-06.jpg">
				<div class="content">
					<div class="container">
						<div class="parallax-text">
							<div class="block-table">
								<div class="block-table-cell text-center">
									<span class="icon icon-done_all color-custom font107"></span>
									<h6 class="color-white font50 title-bottom-sm1">Only Certified Products</h6>
									<p class="color-white font24 main-font">
										<em>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</em>
									</p>
								</div>
							</div>							
						</div>
					</div>
				</div>
			</section>
			<!-- /parallax-img -->
			<!--  -->
			<section class="content">
				<div class="container">
					<!-- title -->
					<div class="title-box">
						<h2 class="text-center title-under">Our Team</h2>
					</div>
					<!-- /title -->
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-6">
							<a class="link-img-hover1" href="#"><img src="images/custom/team-img-01.jpg" class="img-responsive-block" alt=""></a>							
							<div class="divider divider--md1"></div>
							<p>
								<a class="hover-effect-01" href="#">
									<span class="font22 text-uppercase color-custom">Emma</span>
									<span class="font18 color-dark">&nbsp; - &nbsp;<em class="main-font">director</em></span>
								</a>
							</p>
							<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<a class="link-img-hover1" href="#"><img src="images/custom/team-img-02.jpg" class="img-responsive-block" alt=""></a>
							<div class="divider divider--md1"></div>
							<p>
								<a class="hover-effect-01" href="#">
									<span class="font22 text-uppercase color-custom">Olivia</span>
									<span class="font18 color-dark">&nbsp; - &nbsp;<em class="main-font">marketer</em></span>
								</a>
							</p>
							<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
						</div>
						<div class="divider divider--lg visible-sm visible-xs"></div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<a class="link-img-hover1" href="#"><img src="images/custom/team-img-03.jpg" class="img-responsive-block" alt=""></a>
							<div class="divider divider--md1"></div>
							<p>
								<a class="hover-effect-01" href="#">
									<span class="font22 text-uppercase color-custom">Mason</span>
									<span class="font18 color-dark">&nbsp; - &nbsp;<em class="main-font">manager</em></span>
								</a>
							</p>
							<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<a class="link-img-hover1" href="#"><img src="images/custom/team-img-04.jpg" class="img-responsive-block" alt=""></a>
							<div class="divider divider--md1"></div>
							<p>
								<a class="hover-effect-01" href="#">
									<span class="font22 text-uppercase color-custom">Abigail</span>
									<span class="font18 color-dark">&nbsp; - &nbsp;<em class="main-font">manager</em></span>
								</a>
							</p>
							<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
						</div>
					</div>
				</div>
			</section>
			<!-- / -->
			<!-- blog slider -->
			<section class="content content-bg-1 fixed-bg">
				<div class="container">
				<h2 class="text-center text-uppercase title-under">testimonials</h2>
					<div class="row">
						<div class="slider-blog slick-arrow-bottom">
							<!-- slide-->
							<a href="blog-post-right-column.html" class="link-hover-block">
								<div class="slider-blog__item">
									<div class="row">
										<div class="col-xs-12 col-sm-2 col-sm-offset-3 box-foto">
											<img src="images/custom/slider-blog-img01.jpg" alt="">
										</div>
										<div class="col-xs-12 col-sm-5 col-xl-4 box-data">
											<h6>Eleanor  <em>&nbsp;-&nbsp;  designer</em></h6>
											<p>
												Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis, sociis natoque penatibus et magnis. Dolor sit amet, consectetuer adipiscing elit. Donec eros tellus.
											</p>
										</div>
									</div>
								</div>
							</a>
							<!-- /slide-->
							<!-- slide-->
							<a href="blog-post-right-column.html" class="link-hover-block">
								<div class="slider-blog__item">
									<div class="row">
										<div class="col-xs-12 col-sm-2 col-sm-offset-3 box-foto">
											<img src="images/custom/slider-blog-img02.jpg" alt="">
										</div>
										<div class="col-xs-12 col-sm-5 box-data">
											<h6>Piper  <em>&nbsp;-&nbsp;  designer</em></h6>
											<p>
												Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis, sociis natoque penatibus et magnis. Dolor sit amet, consectetuer adipiscing elit. Donec eros tellus.
											</p>
										</div>
									</div>
								</div>
							</a>
							<!-- /slide-->
							<!-- slide-->
							<a href="blog-post-right-column.html" class="link-hover-block">
								<div class="slider-blog__item">
									<div class="row">
										<div class="col-xs-12 col-sm-2 col-sm-offset-3 box-foto">
											<img src="images/custom/slider-blog-img03.jpg" alt="">
										</div>
										<div class="col-xs-12 col-sm-5 box-data">
											<h6>MARK   <em>&nbsp;-&nbsp;  designer</em></h6>
											<p>
												Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis, sociis natoque penatibus et magnis. Dolor sit amet, consectetuer adipiscing elit. Donec eros tellus.
											</p>
										</div>
									</div>
								</div>
							</a>
							<!-- /slide-->
						</div>
					</div>
				</div>
			</section>
			<!-- /blog slider -->		
		</div>
		<!-- End CONTENT section -->
		<!-- FOOTER section -->
		<footer>
			<!-- footer-data -->
			<div class="container inset-bottom-60">
				<div class="row" >
					<div class="col-sm-12 col-md-5 col-lg-6 border-sep-right">
						<div class="footer-logo hidden-xs">
							<!--  Logo  --> 
							<a class="logo" href="index.html"> <img class="replace-2x" src="images/logo.png"  alt="YOURStore"> </a> 
							<!-- /Logo --> 
						</div>
						<div class="box-about">
							<div class="mobile-collapse">
								<h4 class="mobile-collapse__title visible-xs">ABOUT US</h4>
								<div class="mobile-collapse__content">
									<p> No more need to look for other ecommerce themes. We provide huge number of different layouts. Yourstore comes packed with free and useful features developed to make your website creation easier. Innovative clean design, advanced functionality, UI made for humans, extensive documenta- tion and support i continue this list infinitely... </p>
								</div>
							</div>
						</div>
						<!-- subscribe-box -->
						</form>
					<div class="subscribe-box offset-top-20">
							<div class="mobile-collapse">
								<h4 class="mobile-collapse__title">NEWSLETTER SIGNUP</h4>
								<div class="mobile-collapse__content">
									<form class="form-inline" action="index.php" method="post">
										<input class="subscribe-form__input" type="text" name="subscribe">
										<button type="submit" name="subba" class="btn btn--ys btn--xl">SUBSCRIBE</button>
									</form>

								</div>
							</div>
						</div>
						<!-- /subscribe-box --> 
					</div>
					
					<?php  include 'foot.php' ?>
				</div>
			</div>
			<!-- /footer-data --> 
			<div class="divider divider-md visible-xs visible-sm visible-md"></div>
			<!-- social-icon -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="social-links social-links--large">
							<ul>
								<li><a class="icon fa fa-facebook" href="http://www.facebook.com/"></a></li>
								<li><a class="icon fa fa-twitter" href="http://www.twitter.com/"></a></li>
								<li><a class="icon fa fa-google-plus" href="http://www.google.com/"></a></li>
								<li><a class="icon fa fa-instagram" href="https://instagram.com/"></a></li>
								<li><a class="icon fa fa-youtube-square" href="https://www.youtube.com/"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /social-icon --> 
			<!-- footer-copyright -->
			<div class="container footer-copyright">
				<div class="row">
					<div class="col-lg-12"> <a href="index.html"><span>Your</span>Store</a> &copy; 2016 . All Rights Reserved. </div>
				</div>
			</div>
			<!-- /footer-copyright --> 
			<a href="#" class="btn btn--ys btn--full visible-xs" id="backToTop">Back to top <span class="icon icon-expand_less"></span></a> 
		</footer>
		<!-- END FOOTER section -->		




		<!-- jQuery 1.10.1--> 
		<script src="external/jquery/jquery-2.1.4.min.js"></script> 
		<!-- Bootstrap 3--> 
		<script src="external/bootstrap/bootstrap.min.js"></script> 
		<!-- Specific Page External Plugins --> 
		<script src="external/slick/slick.min.js"></script>
		<script src="external/bootstrap-select/bootstrap-select.min.js"></script>  
		<script src="external/countdown/jquery.plugin.min.js"></script> 
		<script src="external/countdown/jquery.countdown.min.js"></script>  		
		<script src="external/instafeed/instafeed.min.js"></script>  		
		<script src="external/magnific-popup/jquery.magnific-popup.min.js"></script>  		
		<script src="external/isotope/isotope.pkgd.min.js"></script> 
		<script src="external/imagesloaded/imagesloaded.pkgd.min.js"></script>
		<script src="external/colorbox/jquery.colorbox-min.js"></script>
		<script src="external/parallax/jquery.parallax-1.1.3.js"></script>		
		<!-- Custom --> 
		<script src="js/custom.js"></script>			
		
	</body>
</html>
<?php
// Make the page validate
ini_set('session.use_trans_sid', '0');

// Begin the session
session_start();
?>
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
		<link rel="stylesheet" href="external/nouislider/nouislider.css">
		<link rel="stylesheet" href="external/bootstrap-select/bootstrap-select.css">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/style.css">
		<!-- Icon Fonts  -->
		<link rel="stylesheet" href="font/style.css">
		<!-- Head Libs -->
		<!-- Modernizr -->
		<script src="external/modernizr/modernizr.js"></script>

	</head>
	<body>
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
			<?php include 'h_mob.php'  ?>
	    <!-- /mobile menu -->
		<!-- HEADER section -->
		<div class="header-wrapper">
			<header id="header">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 col-md-4 col-lg-6 col-xl-7">
							<!-- logo start -->
							<a href="index.html"><img class="logo replace-2x img-responsive" src="images/logo.png" alt=""/> </a>
							<!-- logo end -->
						</div>
						<div class="col-sm-8 col-md-8 col-lg-6 col-xl-5 text-right">
							<!-- slogan start -->
							
							<!-- slogan end -->
							<div class="settings">
								<!-- currency start -->
								
								<!-- currency end -->
							
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
					<li class="active">Contact</li>
				</ol>
			</div>
		</div>
		<!-- /breadcrumbs -->
		<!-- CONTENT section -->

		<div id="pageContent">
			<!-- map -->
			<div class="content-bottom">
				<div id="map"></div>
			</div>
			<!-- /map -->
			<section class="container">
				<div class="row">
					<div class="col-md-3 col-sm-12">
						<h2 class="text-uppercase title-bottom">CONTACTs</h2>
						<ul class="list-icon">
							<li>
								<span class="icon icon-home"></span>
								<strong>Address :</strong> 7563 St. Vicent Place, Glasgow
							</li>
							<li>
								<span class="icon icon-call"></span>
								<strong>Phone:</strong> +777 2345 7885
							</li>
							<li>
								<span class="fa fa-fax"></span>
								<strong>Fax:</strong> +777 2345 7886
							</li>
							<li>
								<span class="icon icon-schedule"></span>
								<strong>Hours:</strong> 7 Days a week from  10:00 am to 6:00 pm
							</li>
							<li>
								<span class="icon icon-mail"></span>
								<strong>E-mail:</strong> <a class="color" href="mailto:info@mydomain.com">info@mydomain.com</a>
							</li>
						</ul>
						<div class="divider divider--sm"></div>
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
					<div class="col-md-9  col-sm-12">
						<div class="divider divider--lg visible-xs"></div>
						<h2 class="text-uppercase title-bottom">GET IN TOUCH WITH US</h2>
						<form id="contactform" class="contact-form" method="post" novalidate="novalidate" action="#">
							<!-- input -->
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
									    <label for="inputName">Name <sup>*</sup></label>
									    <input type="text" name="name" class="form-control" id="inputName">
									  </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
									    <label for="inputEmail">Email <sup>*</sup></label>
									    <input type="text" name="email" class="form-control" id="inputEmail">
									  </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
									    <label for="inputPhone">Phone </label>
									    <input type="text" name="phone" class="form-control" id="inputPhone">
									  </div>
								</div>
							</div>
							<!-- /input -->
							<!-- textarea -->
							<div class="form-group">
							    <label for="textareaMessage">Message <sup>*</sup></label>
							    <textarea name="message"  class="form-control" rows="12"  id="textareaMessage"></textarea>
						   </div>
						   <!-- /textarea -->
						   <!-- button -->
						   <div class="pull-right note">* Required Fields</div>
						   <button class="btn btn--ys btn--xl btn-top" type="submit" id="submit">Send message</button>
						   <!-- /button -->
						</form>
					</div>
				</div>
			</section>
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
		<!-- External JS -->
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
		<script src="external/nouislider/nouislider.min.js"></script>
		<script src="external/isotope/isotope.pkgd.min.js"></script>
		<script src="external/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="external/colorbox/jquery.colorbox-min.js"></script>
		<!-- Custom -->
		<script src="js/custom.js"></script>

		<!-- Google map -->
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script src="external/google_map/google_map_init.js"></script>

		<!-- form validation and sending to mail -->
		<script src="external/form/jquery.form.js"></script>
		<script src="external/form/jquery.validate.min.js"></script>
		<script src="external/form/jquery.form-init.js"></script>
	</body>
</html>
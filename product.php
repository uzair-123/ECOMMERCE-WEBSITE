<?php 





session_start() ;


if(!isset($_SESSION['item']))
{

	$_SESSION['item'] = array() ;

}





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
									 <?php include 'h_web.php' ;  ?>
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
											<span class="badge badge--cart">
											<?php 

											include 'config.php' ;

                                         
                                                         if(isset($_GET['c']))


                                                         	
                                                         {
                                                            array_push($_SESSION['item'], ''.$_GET['c'].''); 

                                                         }
                                                        echo count($_SESSION['item'])


                                                          ?>

                                             
</span>
											</a>
											<div class="dropdown-menu dropdown-menu--xs-full slide-from-top" role="menu">
												<div class="container">
													<div class="cart__top">Recently added item(s)</div>
													<a href="#" class="icon icon-close cart__close"><span>CLOSE</span></a>
													 <form action="listing.php" method="post" >
													<?php
                                              
                                                  
       for($i=0; $i < count($_SESSION['item']) ; $i++)
        {
          $x =  $_SESSION['item'][$i] ;


          $query = "select * from products where id = '$x'" ;

                 $result = $conn->query($query) ;
                 
                 	$row = $result->fetch_assoc()  ;



               ?>




            
     	<ul>


              


														<li class="cart__item">
															<div class="cart__item__image pull-left"><a href="#"><img src="images/product/product-1.jpg" alt=""/></a></div>
															<div class="cart__item__control">
																<div class="cart__item__delete"><a href="#" class="icon icon-delete"><span>Delete</span></a></div>
															
															</div>
															<div class="cart__item__info">
																<div class="cart__item__info__title">
																	<h2><a href="#"><?php echo $row['name'] ?></a></h2>
																</div>
																<div class="cart__item__info__price"><span class="info-label">Price:</span><span><?php echo $row['sale_price'] ?></span></div>
																<div class="cart__item__info__qty">
																	<input name="qty[]" value="1" type="text" class="input--ys" />
																</div>
																<div class="cart__item__info__details">
																	<div class='multitooltip'>
																		<a href="#">Details</a>
																		<div class="tip on-bottom">
																			<span><strong>Color:</strong><?php echo $row['color'] ?></span>
																		
																			<span><strong>Image:</strong> <img style="width: 80px;height: 80px" src="ware/images/<?php echo $row['image'] ?>"></span>
																		
																			<span><strong>Size:</strong> <?php echo $row['size'] ?></span>
																		</div>
																	</div>
																</div>
															</div>
														</li>
												


                 
                 

							</ul>




               <?php


                 		# code...
               }
     

          







                ?>
											<div class="cart__bottom">
													
														<input type="submit" name="checkout" value="Checkout" class="btn btn--ys btn-checkout">

													</div>
													
													</div>
		
									</form>
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
					<li><a href="#">Women’s</a></li>
					<li class="active">Dresses</li>
				</ol>
			</div>

		</div>
		       <?php 


                          if(isset($_GET['x']))
                       {

                             
						 
                        $m = $_GET['x'] ;

                            
                       


                       $query = "select * from products where id = '$m'" ;

                       $result = $conn->query($query) ;
             

                       	$row = $result->fetch_assoc() ;

                     
                      }
                        ?>
		<!-- /breadcrumbs --> 
		<!-- CONTENT section -->
		<div id="pageContent">
			<section class="content offset-top-0">
				<div class="container">
					<div class="row product-info-outer">
						<div id="productPrevNext" class="hidden-xs hidden-sm">
							<a href="#" class="product-prev"><img src="images/product/product-2.jpg" alt="" /></a>
							<a href="#" class="product-next"><img src="images/product/product-3.jpg" alt="" /></a>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
							<div class="row">
								<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 hidden-xs">
									<div class="product-main-image">
										<div class="product-main-image__item"><img class="product-zoom" src='ware/images/<?php echo $row['image']   ?>' data-zoom-image="'ware/images/<?php echo $row['image']   ?>" alt="" /></div>
										<div class="product-main-image__zoom"></div>
									</div>
									<div class="product-images-carousel">
										<ul id="smallGallery">
											<li><a href="#" data-image="'ware/images/<?php echo $row['image']   ?>" data-zoom-image="ware/images/<?php echo $row['image']   ?>"><img src="ware/images/<?php echo $row['image']   ?>" alt="" /></a></li>
											<li><a href="#" data-image="'ware/images/<?php echo $row['image']   ?>" data-zoom-image="ware/images/<?php echo $row['image']   ?>"><img src="ware/images/<?php echo $row['image']   ?>" alt="" /></a></li>
											<li><a href="#" data-image="'ware/images/<?php echo $row['image']   ?>" data-zoom-image="ware/images/<?php echo $row['image']   ?>"><img src="ware/images/<?php echo $row['image']   ?>" alt="" /></a></li>
											<li><a href="#" data-image="'ware/images/<?php echo $row['image']   ?>" data-zoom-image="ware/images/<?php echo $row['image']   ?>"><img src="ware/images/<?php echo $row['image']   ?>" alt="" /></a></li>
											<li><a href="#" data-image="'ware/images/<?php echo $row['image']   ?>" data-zoom-image="ware/images/<?php echo $row['image']   ?>"><img src="ware/images/<?php echo $row['image']   ?>" alt="" /></a></li>
										</ul>
									</div>
									
								</div>

                       





								<div class="product-info col-sm-6 col-md-6 col-lg-6 col-xl-6">
									<div class="wrapper hidden-xs">
								
										<div class="product-info__availability pull-right">Availability:   <strong class="color">In Stock</strong></div>
									</div>
									<div class="product-info__title">
										<h2><?php  echo $row['name']  ?></h2>
									</div>
									<div class="wrapper visible-xs">
										
										<div class="product-info__availability pull-right">Availability:   <strong class="color">In Stock</strong></div>
									</div>
									<div class="visible-xs">
										<div class="clearfix"></div>
										<ul id="mobileGallery">
											<li><a href="#" data-image="'ware/images/<?php echo $row['image']   ?>" data-zoom-image="ware/images/<?php echo $row['image']   ?>"><img src="ware/images/<?php echo $row['image']   ?>" alt="" /></a></li>
											<li><a href="#" data-image="ware/images/<?php echo $row['image']   ?>" data-zoom-image="ware/images/<?php echo $row['image']   ?>"><img src="ware/images/<?php echo $row['image']   ?>" alt="" /></a></li>
											<li><a href="#" data-image="'ware/images/<?php echo $row['image']   ?>" data-zoom-image="ware/images/<?php echo $row['image']   ?>"><img src="ware/images/<?php echo $row['image']   ?>" alt="" /></a></li>
											<li><a href="#" data-image="ware/images/<?php echo $row['image']   ?>" data-zoom-image="ware/images/<?php echo $row['image']   ?>"><img src="ware/images/<?php echo $row['image']   ?>" alt="" /></a></li>
											<li><a href="#" data-image="ware/images/<?php echo $row['image']   ?>" data-zoom-image="ware/images/<?php echo $row['image']   ?>"><img src="ware/images/<?php echo $row['image']   ?>" alt="" /></a></li>
										</ul>
									</div>
									<div class="price-box product-info__price"><span class="price-box__new"><?php echo $row['sale_price']   ?></span> <span class="price-box__old"><?php echo $row['sale_price'] + 1000   ?></span></div>
									<div class="product-info__review">
										<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
									
									</div>
									
									<div class="divider divider--xs product-info__divider"></div>
									<div class="wrapper">
										<div class="pull-left"><span class="option-label">Color:</span>  <?php echo $row['color']   ?> </div>
										<div class="pull-right required">* Required Fields</div>
									</div>
								
									<div class="wrapper">
										<div class="pull-left"><span class="option-label">SIZE:</span></div>
										<div class="pull-left required">*</div>
									</div>
									<ul class="options-swatch options-swatch--size options-swatch--lg">
										<li><a href="#"><?php echo $row['size']   ?></a></li>
										
									</ul>
									<div class="divider divider--sm"></div>
									<div class="wrapper">
									
										<div class="pull-left"><div class="product__inside__info__btns"> <a href="listing.php?c=<?php echo $row['id'] ?>" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
													<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
													<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
												
												</div></div>
									</div>
								
																	
								</div>	
							</div>
		
						</div>						
						<div class="custom-product-block col-xl-4 visible-xl">
							<div class="delivery-banner" onclick="window.location.href = '#'">
								<div class="delivery-banner__icon"><span class="icon-redeem"></span></div>
								<div class="delivery-banner__text">
									<h3>SPECIAL OFFER 1+1=3</h3>
									<h5>Get a gift!</h5>
									<p>Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis.</p>
								</div>
							</div>
							<div class="delivery-banner" onclick="window.location.href = '#'">
								<div class="delivery-banner__icon"><span class="icon-card_membership"></span></div>
								<div class="delivery-banner__text">
									<h3>FREE REWARD CARD</h3>
									<h5>Worth 10$, 50$, 100$</h5>
									<p>Eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. </p>
								</div>
							</div>
							<div class="delivery-banner" onclick="window.location.href = '#'">
								<div class="delivery-banner__icon"><span class="icon-local_shipping"></span></div>
								<div class="delivery-banner__text">
									<h3>Free Shipping</h3>
									<h5>on orders over $100</h5>
									<p>Eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. </p>
								</div>
							</div>
							<div class="delivery-banner" onclick="window.location.href = '#'">
								<div class="delivery-banner__icon"><span class="icon-replay_5"></span></div>
								<div class="delivery-banner__text">
									<h3>Order Return</h3>
									<h5>Returns within 5 days</h5>
									<p>Eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. </p>
								</div>
							</div>
							<div class="divider-line"></div>
							<h4 class="text-uppercase">Related Products</h4>
							<p>Check items to add to the cart or <a href="#" class="color">select all</a></p>
							<div class="vertical-carousel vertical-carousel-2 with-checkbox offset-top-40">
								<div class="vertical-carousel__item">
									<div class="vertical-carousel__item__select pull-left">
										<div class="checkbox-group"><input type="checkbox" name="checkbox1" value="product1" id="checkBox1"><label for="checkBox1"><span class="check"></span> <span class="box"></span> &nbsp;</label></div>
									</div>
									<div class="vertical-carousel__item__image pull-left"><a href="#"><img src="images/product/product-80x100-3.jpg" alt=""></a></div>
									<div class="vertical-carousel__item__title">
										<h2><a href="#">Quis nostrud exercit ation</a></h2>
									</div>
									<div class="price-box">$26.00<span class="price-box__old">$28.00</span></div>
									<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
								</div>
								<div class="vertical-carousel__item">
									<div class="vertical-carousel__item__select pull-left">
										<div class="checkbox-group"><input type="checkbox" name="checkbox2" value="product2" id="checkBox2"><label for="checkBox2"><span class="check"></span> <span class="box"></span> &nbsp;</label></div>
									</div>
									<div class="vertical-carousel__item__image pull-left"><a href="#"><img src="images/product/product-80x100-4.jpg" alt=""></a></div>
									<div class="vertical-carousel__item__title">
										<h2><a href="#">Quis nostrud exercit ation</a></h2>
									</div>
									<div class="price-box">$26.00<span class="price-box__old">$28.00</span></div>
									<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
								</div>
								<div class="vertical-carousel__item">
									<div class="vertical-carousel__item__select pull-left">
										<div class="checkbox-group"><input type="checkbox" name="checkbox3" value="product3" id="checkBox3"><label for="checkBox3"><span class="check"></span> <span class="box"></span> &nbsp;</label></div>
									</div>
									<div class="vertical-carousel__item__image pull-left"><a href="#"><img src="images/product/product-80x100-1.jpg" alt=""></a></div>
									<div class="vertical-carousel__item__title">
										<h2><a href="#">Quis nostrud exercit ation</a></h2>
									</div>
									<div class="price-box">$26.00<span class="price-box__old">$28.00</span></div>
									<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
								</div>
								<div class="vertical-carousel__item">
									<div class="vertical-carousel__item__select pull-left">
										<div class="checkbox-group"><input type="checkbox" name="checkbox4" value="product4" id="checkBox4"><label for="checkBox4"><span class="check"></span> <span class="box"></span> &nbsp;</label></div>
									</div>
									<div class="vertical-carousel__item__image pull-left"><a href="#"><img src="images/product/product-80x100-2.jpg" alt=""></a></div>
									<div class="vertical-carousel__item__title">
										<h2><a href="#">Quis nostrud exercit ation</a></h2>
									</div>
									<div class="price-box">$26.00<span class="price-box__old">$28.00</span></div>
									<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>			

			<!-- /related products -->
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

					</div>
		

				</form>
				</div>
				<?php  include 'foot.php' ?>
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
		<!-- Modal (quickViewModal) -->		
		<div class="modal  modal--bg fade"  id="quickViewModal">
		  <div class="modal-dialog white-modal">
		    <div class="modal-content container">
		    	<div class="modal-header">
		       	 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
		     	 </div>
		    	<!--  -->
		    	<div class="product-popup">
					<div class="product-popup-content">
					<div class="container-fluid">
						<div class="row product-info-outer">
							<div class="col-xs-12 col-sm-5 col-md-6 col-lg-6">
								<div class="product-main-image">
									<div class="product-main-image__item"><img src='images/product/product-big-1.jpg' alt="" /></div>
								</div>
							</div>
							<div class="product-info col-xs-12 col-sm-7 col-md-6 col-lg-6">
								<div class="wrapper">
									<div class="product-info__sku pull-left">SKU: <strong>mtk012c</strong></div>
									<div class="product-info__availabilitu pull-right">Availability:   <strong class="color">In Stock</strong></div>
								</div>
								<div class="product-info__title">
									<h2>Lorem ipsum dolor sit ctetur</h2>
								</div>
								<div class="price-box product-info__price"><span class="price-box__new">$65.00</span> <span class="price-box__old">$84.00</span></div>
								<div class="divider divider--xs product-info__divider"></div>
								<div class="product-info__description">
									<div class="product-info__description__brand"><img src="images/custom/brand.png" alt=""> </div>
									<div class="product-info__description__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
								</div>
								<div class="divider divider--xs product-info__divider"></div>
								<div class="wrapper">
									<div class="pull-left"><span class="option-label">COLOR:</span>  Red + $10.00 *</div>
									<div class="pull-right required">* Required Fields</div>
								</div>
								<ul class="options-swatch options-swatch--color options-swatch--lg">
									<li><a href="#"><span class="swatch-label"><img src="images/colors/oldlace.png" alt=""/></span></a></li>
									<li><a href="#"><span class="swatch-label"><img src="images/colors/dark-grey.png" alt=""/></span></a></li>
									<li><a href="#"><span class="swatch-label"><img src="images/colors/grey.png" alt=""/></span></a></li>
									<li><a href="#"><span class="swatch-label"><img src="images/colors/light-grey.png" alt=""/></span></a></li>
								</ul>						
								<div class="wrapper">
									<div class="pull-left"><span class="option-label">SIZE:</span></div>
									<div class="pull-left required">*</div>
								</div>
								<ul class="options-swatch options-swatch--size options-swatch--lg">
									<li><a href="#">S</a></li>
									<li><a href="#">M</a></li>
									<li><a href="#">L</a></li>
									<li><a href="#">XL</a></li>
									<li><a href="#">2XL</a></li>
									<li><a href="#">3XL</a></li>
								</ul>
								<div class="divider divider--sm"></div>
								<div class="wrapper">
									<div class="pull-left"><span class="qty-label">QTY:</span></div>
									<div class="pull-left"><input type="text" name="quantity" class="input--ys qty-input pull-left" value="1"></div>
									<div class="pull-left"><button type="submit" class="btn btn--ys btn--xxl"><span class="icon icon-shopping_basket"></span> Add to cart</button></div>
								</div>
								<ul class="product-link">
									<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
									<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#"><span class="text">Add to compare</span></a></li>
								</ul>
							</div>
						</div>
					</div>
					</div>
				</div>
		    	<!-- / -->
		    </div>
		  </div>
		</div>
		<!-- / Modal (quickViewModal) -->
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
		<script src="external/imagesloaded/imagesloaded.pkgd.min.js"></script> 
		<script src="external/elevatezoom/jquery.elevatezoom.js"></script>
		<script src="external/colorbox/jquery.colorbox-min.js"></script> 
		<!-- Custom --> 
		<script src="js/custom.js"></script> 
		<script src="js/js-product.js"></script>		
	</body>
</html>
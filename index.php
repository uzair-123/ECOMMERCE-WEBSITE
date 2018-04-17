<?php


session_start() ;


if(!isset($_SESSION['item']))
{

	$_SESSION['item'] = array() ;


}


if(isset($_POST['subba']))
{

    include 'config.php' ;

	$subscribe = $_POST['subscribe'] ;



 $query = "insert into emails(email) values

  ('$subscribe') " ;

   $conn->query($query) ;

      	echo '<script language="javascript">';
echo 'alert("Congrats !!! Your email has been subscribed")';
echo '</script>';

       
        echo '<script type="text/javascript">
           window.location = "index.php"
      </script>' ;


}



?>









<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic -->
		<meta charset="utf-8">
		<title>YOURStore </title>
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
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="external/rs-plugin/css/settings.css" media="screen" />
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
											<span class="badge badge--cart">	<?php 

											include 'config.php' ;

                                         
                                                         if(isset($_GET['x']))


                                                         	
                                                         {
                                                            array_push($_SESSION['item'], ''.$_GET['x'].''); 

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
													
														<button class="btn btn--ys btn-checkout">Checkout <span class="icon icon--flippedX icon-reply"></span></button>
													
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
		<!-- Slider section --> 
		<div class="content offset-top-0" id="slider">
			<!--
				#################################
				- THEMEPUNCH BANNER -
				#################################
				--> 
			<!-- START REVOLUTION SLIDER 3.1 rev5 fullwidth mode -->
			<h2 class="hidden">Slider Section</h2>
			<div class="tp-banner-container">
				<div class="tp-banner">
					<ul >
							
						<!-- SLIDE -1 -->
						<li  data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
							<!-- MAIN IMAGE --> 
							<img src="images/slides/slide-1.jpg"  alt="slide1"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" > 
							<!-- LAYERS --> 
							<!-- TEXT -->
							<div class="tp-caption lfl stb" 
								data-x="205"              
								data-y="center"    
								data-voffset="60" 
								data-speed="600" 
								data-start="900" 
								data-easing="Power4.easeOut" 
								data-endeasing="Power4.easeIn" 
								style="z-index: 2;">
							
							
							</div>
						</li>
						<!-- /SLIDE -1 -->
						<!-- SLIDE 2  -->            
						<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
							<!-- MAIN IMAGE --> 
							<img src="images/slides/slide-2.jpg"  alt="slide2"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 
							<!-- LAYERS -->
							<!-- TEXT -->
							<div class="tp-caption lfr stb" 
								data-x="right"              
								data-y="center"    
								data-voffset="-5"
								data-hoffset="-205" 
								data-speed="600" 
								data-start="900" 
								data-easing="Power4.easeOut" 
								data-endeasing="Power4.easeIn" 
								style="z-index: 2;">
								
								
								
								 
							</div>	
												
						</li>
						<!-- /SLIDE 2  -->						
						<!-- SLIDE - 3 -->
						<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
										<img src="images/slides/slide-3.jpg"  alt="slide3"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
									<!-- LAYER NR. 1 -->
									<div class="tp-caption tp-fade fadeout fullscreenvideo"
										data-x="0"
										data-y="0"
										data-speed="1000"
										data-start="1100"
										data-easing="Power4.easeOut"
										data-endspeed="1500"
										data-endeasing="Power4.easeIn"
										data-autoplay="true"
										data-autoplayonlyfirsttime="false"
										data-nextslideatend="true"
										data-forceCover="1"
										data-dottedoverlay="twoxtwo"
										data-aspectratio="16:9"
										data-forcerewind="on"
										style="z-index: 2">


									</div>
									<!-- TEXT -->
								<div class="tp-caption lfb stb" 
								data-x="center"              
								data-y="center"    
								data-voffset="0"
								data-hoffset="0" 
								data-speed="600" 
								data-start="900" 
								data-easing="Power4.easeOut" 
								data-endeasing="Power4.easeIn" 
								style="z-index: 2;">
						
						
						</li>
						<!-- /SLIDE - 3 -->	
								  		
						
						
					</ul>
				</div>
			</div>
		</div>
		<!-- END REVOLUTION SLIDER --> 
		<!-- CONTENT section -->
		<div id="pageContent">
			<!-- category section -->
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="category-carousel">
						
					
							
						</div>
					</div>
				</div>
			</div>
			<!-- /category section -->
			<!-- featured products -->
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-xl-8">
							<!-- title -->
							<div class="title-box">
								<h2 class="text-center text-uppercase title-under">FEATURED PRODUCTS</h2>
							</div>
							<!-- /title -->
							<div class="product-listing carousel-products-mobile row">
 


                                 <?php 

                         if(isset($_POST['subby']))
                         {

                                $item = $_POST['search'] ;

                         	  $query = "select * from products where name = '$item'" ;

                       if($result = $conn->query($query))
                       {

                       	while ($row = $result->fetch_assoc()) {


                       		?>

                                 
								<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
									<!-- product -->
									<div class="product product--zoom">
										<div class="product__inside">
											<!-- product image -->
											<div class="product__inside__image">
												<!-- product image carousel -->
												<div class="product__inside__carousel slide" data-ride="carousel">
													<div class="carousel-inner" role="listbox">
														<div class="item active"> <a href="product.php?x=<?php echo $row['id'] ?>"><img src="ware/images/<?php  echo $row['image'] ;?>" alt=""></a> </div>
														<div class="item"> <a href="product.php?x=<?php echo $row['id'] ?>"><img src="ware/images/<?php  echo $row['image'] ;?>" alt=""></a> </div>
														<div class="item"> <a href="product.php?x=<?php echo $row['id'] ?>"><img src="ware/images/<?php  echo $row['image'] ;?>" alt=""></a> </div>
													</div>
													<!-- Controls --> 
													<a class="carousel-control next"></a> <a class="carousel-control prev"></a> 
												</div>
												<!-- /product image carousel -->  
												<!-- quick-view --> 
											
												<!-- /quick-view --> 
												<!-- countdown_box -->
												
												<!-- /countdown_box --> 
											</div>
											<!-- /product image --> 
											<!-- label news -->
											<div class="product__label product__label--right product__label--new"> <span>new</span> </div>
											<!-- /label news --> 
											<!-- label sale -->
											<div style="padding-bottom: 0px" class="product__label product__label--left product__label--sale">
												<?php  echo $row['color'] ;   ?></span> 
											</div>
											<!-- /label sale --> 
											<!-- product name -->
											<div class="product__inside__name">
												<h2><a href="product.php?x=<?php echo $row['id'] ?>"><?php  echo $row['name'] ?></a></h2>
											</div>
											<!-- /product name --> 
											<!-- product description --> 
											<!-- visible only in row-view mode -->
											<div class="product__inside__description row-mode-visible"> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </div>
											<!-- /product description --> 
											<!-- product price -->
											<div class="product__inside__price price-box"><?php  echo $row['sale_price'] ?><span class="price-box__old"><?php  echo $row['sale_price'] + 1000 ?></span></div>
											<!-- /product price --> 
											<!-- product review --> 
											<!-- visible only in row-view mode -->
											<div class="product__inside__review row-mode-visible">
												<div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
												<a href="#">1 Review(s)</a> <a href="#">Add Your Review</a> 
											</div>
											<!-- /product review --> 
											<div class="product__inside__hover">
												<!-- product info -->
												<div class="product__inside__info">
													<ul class="options-swatch options-swatch--color">
														<li><a href="#"><span class="swatch-label"><img src="images/colors/blue.png"  alt=""/></span></a></li>
														<li><a href="#"><span class="swatch-label"><img src="images/colors/yellow.png"  alt=""/></span></a></li>
														<li><a href="#"><span class="swatch-label"><img src="images/colors/red.png"  alt=""/></span></a></li>
													</ul>
													<div class="product__inside__info__btns">
													 <a href="index.php?x=<?php echo $row['id'] ?>" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
													<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
													<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
													 </div>
												
												</div>
												<!-- /product info --> 
												<!-- product rating -->
												<div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
												<!-- /product rating -->
											</div>
										</div>
									</div>
									<!-- /product --> 
								</div>
								

                       		<?php


                       	}

                       }

                         }

                          else
                          {       
                       $query = "select * from products order by id desc limit 8" ;

                       if($result = $conn->query($query))
                       {

                       	while ($row = $result->fetch_assoc()) {


                       		?>

                                 
								<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
									<!-- product -->
									<div class="product product--zoom">
										<div class="product__inside">
											<!-- product image -->
											<div class="product__inside__image">
												<!-- product image carousel -->
												<div class="product__inside__carousel slide" data-ride="carousel">
													<div class="carousel-inner" role="listbox">
														<div class="item active"> <a href="product.php?x=<?php echo $row['id'] ?>"><img src="ware/images/<?php  echo $row['image'] ;?>" alt=""></a> </div>
														<div class="item"> <a href="product.php?x=<?php echo $row['id'] ?>"><img src="ware/images/<?php  echo $row['image'] ;?>" alt=""></a> </div>
														<div class="item"> <a href="product.php?x=<?php echo $row['id'] ?>"><img src="ware/images/<?php  echo $row['image'] ;?>" alt=""></a> </div>
													</div>
													<!-- Controls --> 
													<a class="carousel-control next"></a> <a class="carousel-control prev"></a> 
												</div>
												<!-- /product image carousel -->  
												<!-- quick-view --> 
											
												<!-- /quick-view --> 
												<!-- countdown_box -->
												
												<!-- /countdown_box --> 
											</div>
											<!-- /product image --> 
											<!-- label news -->
											<div class="product__label product__label--right product__label--new"> <span>new</span> </div>
											<!-- /label news --> 
											<!-- label sale -->
											<div style="padding-bottom: 0px" class="product__label product__label--left product__label--sale">
												<?php  echo $row['color'] ;   ?></span> 
											</div>
											<!-- /label sale --> 
											<!-- product name -->
											<div class="product__inside__name">
												<h2><a href="product.php?x=<?php echo $row['id'] ?>"><?php  echo $row['name'] ?></a></h2>
											</div>
											<!-- /product name --> 
											<!-- product description --> 
											<!-- visible only in row-view mode -->
											<div class="product__inside__description row-mode-visible"> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </div>
											<!-- /product description --> 
											<!-- product price -->
											<div class="product__inside__price price-box"><?php  echo $row['sale_price'] ?><span class="price-box__old"><?php  echo $row['sale_price'] + 1000 ?></span></div>
											<!-- /product price --> 
											<!-- product review --> 
											<!-- visible only in row-view mode -->
											<div class="product__inside__review row-mode-visible">
												<div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
												<a href="#">1 Review(s)</a> <a href="#">Add Your Review</a> 
											</div>
											<!-- /product review --> 
											<div class="product__inside__hover">
												<!-- product info -->
												<div class="product__inside__info">
													<ul class="options-swatch options-swatch--color">
														<li><a href="#"><span class="swatch-label"><img src="images/colors/blue.png"  alt=""/></span></a></li>
														<li><a href="#"><span class="swatch-label"><img src="images/colors/yellow.png"  alt=""/></span></a></li>
														<li><a href="#"><span class="swatch-label"><img src="images/colors/red.png"  alt=""/></span></a></li>
													</ul>
													<div class="product__inside__info__btns">
													 <a href="index.php?x=<?php echo $row['id'] ?>" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
													<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
													<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
													 </div>
												
												</div>
												<!-- /product info --> 
												<!-- product rating -->
												<div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
												<!-- /product rating -->
											</div>
										</div>
									</div>
									<!-- /product --> 
								</div>
								

                       		<?php


                       	}

                       }

                            }


                                 ?>




							
							
							</div>
						</div>
						<!-- lookbook -->
						
						<!-- /lookbook -->
					</div>
				</div>
			</div>
			<!-- banners -->
			<div class="content fullwidth indent-col-none">
				<div class="container">
					<div class="row">
						<div class="banner-carousel">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<a href="listing.php" class="banner zoom-in">
								<span class="figure">
									<img src="images/custom/banner-01.jpg" alt=""/>
									<span class="figcaption">
										<span class="block-table">
											<span class="block-table-cell">
												<span class="banner__title size3">Hats</span>
												<span class="text">GET UP TO</span>
												<span class="text size3">20% OFF</span>
											</span>
										</span>
									</span>
								</span>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<a href="listing.php" class="banner zoom-in">
									<span class="figure">
										<img src="images/custom/banner-02.jpg" alt=""/>
										<span class="figcaption">
											<span class="block-table">
												<span class="block-table-cell">
													<span class="banner__title size3-1">15% OFF</span>
													<span class="text size1"><em>on brand-new models</em></span>
													<span class="btn btn--ys btn--xl">Shop now!</span>
												</span>
											</span>
										</span>
									</span>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<a href="listing.php" class="banner zoom-in">
									<span class="figure">
										<img src="images/custom/banner-03.jpg" alt=""/>
										<span class="figcaption">
											<span class="block-table">
												<span class="block-table-cell">
													<span class="banner__title size4">New<br> collection</span>
													<span class="text size2">OF FASHION CLOTHES</span>
													<span class="btn btn--ys btn--xl offset-top">Shop now!</span>
												</span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /banners -->
			<!-- news & sale products -->
		
			<!-- /news & sale products -->
			<!-- blog slider -->

			<!-- /blog slider -->
			<!-- recent-posts-carousel -->
		
			<!-- /recent-posts-carousel -->
			<!-- brands-carousel -->
		
			<!-- /brands-carousel -->
		
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
		

	
</form>
						<!-- subscribe
							-box -->
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
		</footer>
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
		<div id="productQuickView" class="white-popup mfp-hide">
			<h1>Modal dialog</h1>
			<p>You won't be able to dismiss this by usual means (escape or
				click button), but you can close it programatically based on
				user choices or actions.
			</p>
		</div>
		<div id="compareSlide" class="hidden-xs">
			<div class="container">
				<div class="compareSlide__top">
					Compare
				</div>
				<a class="compareSlide__close icon icon-close">
				</a>
				<div class="compared-product-row">
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="images/product/product-1.jpg" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="images/product/product-1.jpg" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="images/product/product-1.jpg" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="images/product/product-1.jpg" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="images/product/product-1.jpg" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="images/product/product-1.jpg" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
				</div>
				<div class="compareSlide__bot">
					<a href="#" class="clear-all icon icon-delete"><span>Clear All</span></a>
					<a href="#" class="btn btn--ys btn-compare"><span class="icon icon-shopping_basket"></span> Compare</a>
				</div>
			</div>
		</div>
		<!-- Button trigger modal -->
	  

		<!--================== modal ==================-->
		<!-- modalAddToCart -->
		<div class="modal  fade"  id="modalAddToCart" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog white-modal modal-sm">
		    <div class="modal-content ">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
		      </div>
		      <div class="modal-body">
		        <div class="text-center">
		        	"Mauris lacinia lectus" added to cart successfully! 
		        </div>
		      </div>
		      <div class="modal-footer text-center">		       	
		        <a href="shopping-cart-right-column.html"  class="btn btn--ys btn--full btn--lg">go to cart</a>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- /modalAddToCart -->
		<!-- modalLoginForm-->
		<div class="modal  fade"  id="modalLoginForm" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog white-modal modal-sm">
		    <div class="modal-content ">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
		        <h4 class="modal-title text-center text-uppercase">Login form</h4>
		      </div>
		      <form>
			      <div class="modal-body indent-bot-none">
			      	<div class="form-group">
			      		<div class="input-group">
						    <span class="input-group-addon">
						    	<span class="icon icon-person"></span>
						    </span>
						    <input type="text" id="LoginFormName" class="form-control" placeholder="Name:">
						</div>
			      	</div>
					<div class="form-group">
						<div class="input-group">
						    <span class="input-group-addon">@</span>
						    <input type="password" id="LoginFormPass" class="form-control" placeholder="Password:">
						</div>
					</div>			         				    				     
 	                 <div class="checkbox-group">
	                  <input type="checkbox" id="checkBox2">
	                  <label for="checkBox2"> 
	                  	<span class="check"></span>
	                  	<span class="box"></span>
	                  	Remember me
	                  </label>
	                </div>
	                <button type="button" class="btn btn--ys btn--full btn--lg">Login</button>
			        <div class="divider divider--xs"></div>
			        <button type="button" class="btn btn--ys btn--full btn--lg btn-blue"><span class="fa fa-facebook"></span> Login with Facebook</button>
			        <div class="divider divider--xs"></div>
			        <button type="button" class="btn btn--ys btn--full btn--lg btn-red"><span class="fa fa-google-plus"></span> Login with Google</button>
			        <div class="divider divider--xs"></div>
			        <ul class="list-arrow-right">
			        	<li><a href="#">Forgot your username?</a></li>
			        	<li><a href="#">Forgot your password?</a></li>
			        	<li><a href="#">Create an account</a></li>
			        </ul>
			      </div>			      
			  </form>
		    </div>
		  </div>
		</div>	
		<!-- /modalLoginForm-->

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
		<!-- Modal (newsletter) -->		
		
		<!-- / Modal (newsletter) -->
		<!--================== /modal ==================-->
		






	</body>

		<!-- jQuery 1.10.1--> 
		<script type="text/javascript" src ="jquery-ui-1.12.1/jquery-ui.min.js"></script>
		<script type="text/javascript" src ="jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="rel.js"></script>

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
		<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
		<script type="text/javascript" src="external/rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
		<script type="text/javascript" src="external/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
		<!-- Custom --> 
		<script src="js/custom.js"></script>			
		<script src="js/js-index-01.js"></script>	
 
      <script>

      
<?php


$ar = array();
include 'config.php' ;


$q = "select * from products" ;

if($res = $conn->query($q))

{

   while ($row = $res->fetch_assoc()) {

    array_push($ar,$row['name']); 


      # code...
   }

}



?>

         $(function() {
        var ar = <?php echo json_encode($ar) ?>;
            $( "#automplete-2" ).autocomplete({
               source: ar,
               autoFocus:true
            });
         });

      </script>


</html>



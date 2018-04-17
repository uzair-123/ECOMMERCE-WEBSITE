<?php 





session_start() ;


if(!isset($_SESSION['item']))
{

	$_SESSION['item'] = array() ;

}



if(isset($_POST['qty']))
{
	$f = $_POST['qty'] ;
	$_SESSION['qty'] = $f;

 echo '<script type="text/javascript">
           window.location = "checkout-step.php"
      </script>' ;

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
		<link rel="stylesheet" href="external/nouislider/nouislider.css">
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
	
		<!-- /breadcrumbs --> 
		<!-- CONTENT section -->
		<div id="pageContent">
			<div class="container">
				<!-- two columns -->
				<div class="row">
					<!-- left column -->
					<aside class="col-md-4 col-lg-3 col-xl-2" id="leftColumn">
						<a href="#" class="slide-column-close visible-sm visible-xs"><span class="icon icon-chevron_left"></span>back</a>
						<div class="filters-block visible-xs">
							<div class="filters-row__select">
								<label>Sort by: </label>
								<div class="select-wrapper">
									<select class="select--ys">
										<option>Position</option>
										<option>Price</option>
										<option>Rating</option>
									</select>
								</div>
								<a href="#" class="sort-direction icon icon-arrow_back"></a> 
							</div>
							<div class="filters-row__select">
								<label>Show: </label>
								<div class="select-wrapper">
									<select class="select--ys">
										<option>25</option>
										<option>50</option>
										<option>100</option>
									</select>
								</div>
							</div>
						
						</div>
						<!-- shopping by block -->
					
						<!-- /shopping by block --> 
						<!-- category block -->
						
						<!-- /category block --> 
						<!-- price slider block -->
						<div class="collapse-block open">
							<h4 class="collapse-block__title">PRICE</h4>
							<div class="collapse-block__content">
								<div id="priceSlider" class="price-slider"></div>
								<form action="listing.php" method="post">
									<div class="price-input">
										<label>From:</label>
										<input type="text" id="priceMin" name="pr_from" />
									</div>
									<div class="price-input-divider">-</div>
									<div class="price-input">
										<label>To:</label>
										<input type="text" id="priceMax" name="pr_to" />
									</div>


                     <input type="hidden-xs" name="id" value="<?php if(isset($_GET['id'])){ echo $_GET['id'] ;}?>">

									<div class="price-input">
										<button type="submit" name="price_submit" class="btn btn--ys btn--md">Filter</button>
									</div>


                                  

								</form>
							</div>
						</div>
						<!-- /price slider block --> 
						<!-- size block -->
					 
						<!-- /size block --> 
						<!-- color block -->
					
						<!-- /color block --> 
						<!-- brands block -->
					
						<!-- /brands block --> 
						<!-- gender block -->
					
						<!-- /gender block --> 
						<!-- sleeve lenght block -->
						
						<!-- /sleeve lenght block --> 
						<!-- occasion block -->
					
						<!-- /occasion block --> 
						<!-- compare block -->
						
						<!-- /compare block --> 
						<!-- poll block -->
					
						<!-- /poll block --> 
						<!-- featured block -->
					
						<!-- /featured block --> 
						<!-- tags block -->
						
						<!-- /tags block --> 
						<!-- custom block -->
						<div class="collapse-block">
							<h4 class="collapse-block__title">CUSTOM BLOCK</h4>
							<div class="collapse-block__content">
								<p class="light-font">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
								<ul class="marker-list">
									<li><a href="#">Lorem ipsum dolor sit amet</a></li>
									<li><a href="#">Conse ctetur adipisicing</a></li>
									<li><a href="#">Elit sed do eiusmod tempor</a></li>
								</ul>
								<p class="light-font">Amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labor.</p>
							</div>
						</div>
						<!-- /custom block --> 
					</aside>
					<!-- /left column --> 
					<!-- center column -->
					<aside class="col-md-8 col-lg-9 col-xl-10" id="centerColumn">
						<!-- title -->
						<div class="title-box">

                         
                         	     <?php




                       include 'config.php' ;


                       if(isset($_GET['id']))
                       {
                       	$x = $_GET['id'] ;
                        
                        $query = "select * from categories where id = '$x'" ;
                        $result = $conn->query($query) ;

                        $row = $result->fetch_assoc() ;

                        ?>


<h2 class="text-center text-uppercase title-under"><?php  echo $row['name'] ?></h2>
	</div>
						<!-- /title -->
						
						<div class="offset-top-20">
							<p class="light-font">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqui.</p>
						</div>
                        <?php

                       }

                           ?>

							
					
						<div class="divider"></div>
					
						</div>
						<!-- filters row -->
						<div class="filters-row">
							<div class="pull-left">
								<div class="filters-row__mode">
									<a href="#" class="btn btn--ys slide-column-open visible-xs visible-sm hidden-xl hidden-lg hidden-md">Filter</a> 
									<a class="filters-row__view active link-grid-view btn-img btn-img-view_module"><span></span></a> 
									<a class="filters-row__view link-row-view btn-img btn-img-view_list"><span></span></a> 
								</div>
								
							</div>
							<div class="pull-right">
								<div class="filters-row__items hidden-sm hidden-xs">)</div>
								<div class="filters-row__select hidden-sm hidden-xs">
									
									<a href="#" class="icon icon-arrow-down active"></a><a href="#" class="icon icon-arrow-up"></a> 
								</div>
							
							</div>
						</div>
						<!-- /filters row -->




						<div class="product-listing row">

						     <?php




                       include 'config.php' ;


                       if(isset($_GET['id']))
                       {

                             
						 
                        $m = $_GET['id'] ;

                            
                       


                       $query = "select * from products where categorie_id = '$m'" ;

                       if($result = $conn->query($query))
                       {

                       	while ($row = $result->fetch_assoc()) {

                     
                      ?>



							<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth">
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
											<div class="countdown_box">
												<div class="countdown_inner">
													<div id="countdown1"></div>
												</div>
											</div>
											<!-- /countdown_box --> 
										</div>
										<!-- /product image --> 
										<!-- label news -->
										<div class="product__label product__label--right product__label--new"> <span>new</span> </div>
										<!-- /label news --> 
										<!-- label sale -->
										<div class="product__label product__label--left product__label--sale"> 
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
												<div class="product__inside__info__btns"> <a href="listing.php?c=<?php echo $row['id'] ?>" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
													<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
													<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
																									</div>
												<ul class="product__inside__info__link hidden-sm">
													<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
													<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
												</ul>
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

                       		# code...
                       	}
                       }



                          }




                     else
                     	if(isset($_POST['price_submit']))
                       {

                             
						 
                        $id = $_POST['id'] ;
                        $to = $_POST['pr_to'] ;
                        $from = $_POST['pr_from'] ; 

                          
                        if(is_null($id))
                        {
                    

                    $query = "select * from products where sale_price between '$from' AND '$to'" ;}

                       else
                       {
                       	   $query = "select * from products where categorie_id = '$id' and sale_price between '$from' AND '$to'" ;
                       }

                       if($result = $conn->query($query))
                       {

                       	while ($row = $result->fetch_assoc()) {

                     
                      ?>



							<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth">
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
											<div class="countdown_box">
												<div class="countdown_inner">
													<div id="countdown1"></div>
												</div>
											</div>
											<!-- /countdown_box --> 
										</div>
										<!-- /product image --> 
										<!-- label news -->
										<div class="product__label product__label--right product__label--new"> <span>new</span> </div>
										<!-- /label news --> 
										<!-- label sale -->
										<div class="product__label product__label--left product__label--sale"> 
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
												<div class="product__inside__info__btns"> <a href="listing.php?c=<?php echo $row['id'] ?>" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
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

                       		# code...
                       	}
                       }



                          }




                          else
                          {

                             
						 
                    


                       $query = "select * from products order by id desc" ;

                       if($result = $conn->query($query))
                       {

                       	while ($row = $result->fetch_assoc()) {

                     
                      ?>



							<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth">
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
											<div class="countdown_box">
												<div class="countdown_inner">
													<div id="countdown1"></div>
												</div>
											</div>
											<!-- /countdown_box --> 
										</div>
										<!-- /product image --> 
										<!-- label news -->
										<div class="product__label product__label--right product__label--new"> <span>new</span> </div>
										<!-- /label news --> 
										<!-- label sale -->
										<div class="product__label product__label--left product__label--sale"> 
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
												<div class="product__inside__info__btns"> <a href="listing.php?c=<?php echo $row['id'] ?>" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
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

                       		# code...
                       	}
                       }


                          }
                      
 

                      

                   




							?>
							
											
						</div>
						<!-- filters row -->
						<div class="filters-row">
							<div class="pull-left">
								<div class="filters-row__mode">
									<a href="#" class="btn btn--ys slide-column-open visible-xs visible-sm hidden-xl hidden-lg hidden-md">Filter</a> 
									<a class="filters-row__view active link-grid-view btn-img btn-img-view_module"><span></span></a> 
									<a class="filters-row__view link-row-view btn-img btn-img-view_list"><span></span></a> 
								</div>
								<div class="filters-row__select hidden-sm hidden-xs">
									
								
									<a href="#" class="sort-direction icon icon-arrow_back"></a> 
								</div>
							</div>
							<div class="pull-right">
								<div class="filters-row__items hidden-sm hidden-xs">28 Item(s)</div>
								<div class="filters-row__select hidden-sm hidden-xs">
									<label>Show: </label>
									<div class="select-wrapper">
										<select class="select--ys show-qty">
											<option>25</option>
											<option>50</option>
											<option>100</option>
										</select>
									</div>
									<a href="#" class="icon icon-arrow-down active"></a><a href="#" class="icon icon-arrow-up"></a> 
								</div>
								<div class="filters-row__pagination">
									<ul class="pagination">
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#"><span class="icon icon-chevron_right"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /filters row --> 
					</aside>
					<!-- center column --> 
				</div>
				<!-- /two columns --> 
			</div>
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
									<div class="product-main-image__item"><img src='ware/images/1449652992-CARTIER-BALLON-WATCH-MY-CW03(4300).jpg' alt="" /></div>
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
		
	</body>
</html>
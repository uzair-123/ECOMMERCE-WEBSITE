
<?php 

include 'config.php' ;

session_start() ;


if(isset($_POST['cus']))
{
	
	
  $name = $_POST['cname'] ;
  $addr = $_POST['cadd'] ;
  $no = $_POST['cno'] ;
  $email = $_POST['cemail'] ;
  $pass = $_POST['cpass'] ;
 



   $query = "insert into customers(name,email,address,phone,password) values ('$name' ,'$email' ,  '$addr' , '$no','$pass')" ;

  
  $conn->query($query) ;



     $qu = "select * from customers order by cust_id desc" ;

    $rem = $conn->query($qu) ;
    $re = $rem->fetch_assoc() ;


    $cust_id = $re['cust_id'] ;



    


  for($j=0; $j < count($_SESSION['item']) ; $j++)
        {

           	$iid = $_SESSION['item'][$j] ;
            $qqty = $_SESSION['qty'][$j] ;

              $query = "insert into cart(cust_id,p_id,qty) values ('$cust_id' ,'$iid' ,  '$qqty')";

  
        $conn->query($query) ;
        
     

        }



    
            session_unset();

        	echo '<script language="javascript">';
echo 'alert("Order Has Been Successfully Placed")';
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
					<li><a href="#">Women’s</a></li>
					<li class="active">Dresses</li>
				</ol>
			</div>
		</div>
		<!-- /breadcrumbs --> 
		<!-- CONTENT section -->
		<div id="pageContent">
			<div class="container">				
				<!-- title -->
				<div class="title-box">
					<h1 class="text-center text-uppercase title-under">Checkout</h1>
				</div>
				<!-- /title -->
				<div class="row">
					<section class="col-md-8 col-lg-8">
						<!-- checkout-step -->
						<div class="panel-group" id="checkout">






			              <div class="panel panel-checkout" role="tablist">
			              	<!-- panel heading -->
			                <div class="panel-heading" role="tab">
			                  <h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapseFive">ORDER REVIEW</a> </h4>
			                  <div class="panel-heading__number">1</div>
			                </div>
			                <!-- /panel heading -->
			                <!-- panel body -->
			                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel">
			                  <div class="panel-body">
			                    <p class="clearfix">
			                    	
			                    </p>
			                    <div class="clearfix"></div>
			                    <div class="btn-top">
			                    	<!-- order-review-table -->
									<table class="order-review-table">
										<thead>
											<tr>
												<th>Product</th>												
												<th>Unit Price</th>
												<th>Qty</th>
												<th>Subtotal</th>												
											</tr>
										</thead>
										<tbody>


                                       <?php
                                       

                                       include 'config.php' ;

                                        $grand = 0 ;
                                       for($j=0; $j < count($_SESSION['item']);$j++)
                                       {


                                        


                                       	$id = $_SESSION['item'][$j] ;
                                       	$qty = $_SESSION['qty'][$j] ;

                                       	  $query = "select * from products where id = '$id'";


                                                     $result = $conn->query($query);
                                                
                                                    $row = $result->fetch_assoc();
                                                
                                                $grand += $row['sale_price'] * $qty ;


                                                ?>
                                           

											<tr>												
												<td>
													<h5 class="order-review-table__product-name text-left text-uppercase">
														<a href="product.html"><?php echo $row['name'] ?></a>
													</h5>
													<ul class="order-review-table__list-parameters">
														<li>
															<span>Color:</span> <?php echo $row['color'] ?>
														</li>
														<li>
															<span>Quantity:</span> <?php echo $qty ?>
														</li>
														
														
														<li>
															<span>Size:</span> <?php echo $row['size'] ?>
														</li>
														<li class="visible-xs">
															<span>Price:</span>
															<span class="price-mobile"><?php echo $row['sale_price'] ?></span>
														</li>
													
													</ul>																				
												</td>												
												<td>
													<div class="order-review-table__product-price unit-price">
														<?php echo $row['sale_price'] ?>
													</div>
												</td>
												<td>
													<span class="color"><?php echo $qty ?></span>
												</td>
												<td>
													<div class="order-review-table__product-price subtotal">
													<?php echo $row['sale_price'] * $qty ?>
													</div>
												</td>												
											</tr>														



                                                <?php


                                               
                                                }
                                                    

                                       

                                       ?>

										
										</tbody>
									</table>
									<!-- /order-review-table -->
									<!-- order-review-total -->
									<div class="row clearfix">
										<div class="pull-right col-xl-6 col-lg-9 col-md-9 col-xs-12 btn-top">
											<div class="order-review-total">
												<table class="table-total">
												
													<tfoot>
														<tr>
															<th>GRAND TOTAL:</th>
															<td><?php echo $grand; ?></td>
														</tr>
													</tfoot>
												</table>
										
											
											</div>
										</div>
									</div>
									<!-- /order-review-total -->
			                    </div>
			                  </div>
			                </div>
			                <!-- /panel body -->
			              </div>



			              <div class="panel panel-checkout" role="tablist">
			              	<!-- panel heading -->
			                <div class="panel-heading active" role="tab">
			                  <h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapseOne">CUSTOMER DETAILS</a> </h4>
			                  <div class="panel-heading__number">2</div>
			                </div>
			                <!-- /panel heading -->
			                <!-- panel body -->
			                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel">
			                  <div class="panel-body">
			                    <form action="checkout-step.php" method="post" >
			                  
			                    	<div class="form-group">
									    <label for="checkoutFormFirstName"> Name  <sup>*</sup></label>
									    <input name="cname" type="text" class="form-control" id="checkoutFormFirstName">
								    </div>
								  
								 
								    <div class="form-group">
									    <label for="checkoutFormEmailAddress">Email Address  <sup>*</sup></label>
									    <input name="cemail" type="text" class="form-control" id="checkoutFormEmailAddress">
								    </div>


                                     <div class="form-group">
									    <label for="checkoutFormEmailAddress">Password  <sup>*</sup></label>
									    <input name="cpass" type="text" class="form-control" id="checkoutFormEmailAddress">
								    </div>

								    <div class="form-group">
									    <label for="checkoutFormAddress1">Address 1  <sup>*</sup></label>
									    <input name="cadd" type="text" class="form-control" id="checkoutFormAddress1">
								    </div>
								
								  
								    
																	    <div class="form-group">
									    <label for="checkoutFormTelephone">Telephone  <sup>*</sup></label>
									    <input name="cno" type="text" class="form-control" id="checkoutFormTelephone">
								    </div>
								 
								    
								   
								  
								
								     	<p class="clearfix text-right">
													<input type="submit" name="cus"  class="btn btn--ys btn--xl" value="PLACE ORDER"><span class="icon icon--flippedX icon-reply"></span></a>
												</p>
			                    </form>
			                  </div>
			                </div>
			                <!-- /panel body -->
			              </div>

                           
			          

                     

			            			              
			            </div>
						<!-- /checkout-step -->
					</section>
					<aside class="col-md-4 col-lg-4 shopping_cart-aside">
						<!--  -->
					
					
						
					</aside>
				</div>		
				
				
				
							
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
	</body>
</html>
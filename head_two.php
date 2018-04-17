

<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oswa_inv";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    //echo "<p>Connected successfully</p>";
}


?>


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
										<ul class="nav navbar-nav">
											<li class="dl-close"><a href="#"><span class="icon icon-close"></span>close</a></li>






											<li class="dropdown dropdown-mega-menu">
												<span class="dropdown-toggle extra-arrow"></span>













                                                <?php




                                                $query = "select * from categories LIMIT 1" ;


                                                if($result = $conn->query($query))
                                                {
                                                    while ($row = $result->fetch_assoc())
                                                    {


                                                ?>




                                                <a style="margin-left: 50px" href="listing.html" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">Master Watches<span class="badge badge--menu">NEW</span></span></a>
                                                <ul class="dropdown-menu megamenu" role="menu">
                                                    <li class="dl-back"><a href="#"><span class="icon icon-chevron_left"></span>back</a></li>



                                                    <li style="margin-left: 100px">
                            <span class="name">
									<span class="expander">-</span>
									<a class="megamenu__subtitle" href="listing.html">
										<span>BOTTOMS</span>
									</a>
								</span>




                                                        <ul class="image-links-level-3 megamenu__submenu">
                                                            <li class="level3"><a href="listing.html">Trousers</a></li>
                                                            <li class="level3"><a href="listing.html">Jeans</a></li>
                                                            <li class="level3"><a href="listing.html">Skirts</a></li>
                                                            <li class="level3"><a href="listing.html">Swimwear</a></li>
                                                        </ul>

                                                    </li>



                                                    <?php


                                                    }
                                                }





                                             ?>



                                                </ul>
									</div>
								</nav>
							</div>
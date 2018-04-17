
										<ul class="nav navbar-nav">
											<li class="dl-close"><a href="#"><span class="icon icon-close"></span>close</a></li>
																		
													

													<li class="dropdown dropdown-mega-menu">	
											<span class="dropdown-toggle extra-arrow"></span>		
												<a href="index.php" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">HOME</span></a>
												<ul class="dropdown-menu megamenu" role="menu">
													<li class="dl-back"><a href="#"><span class="icon icon-chevron_left"></span>back</a></li>
												</ul>
		
							
						                       <?php


						                       include 'config.php' ;
                   
                                                $query = "select * from categories where parent_id = 0" ;


                                                if($result = $conn->query($query))
                                                {
                                                    while ($row = $result->fetch_assoc())
                                                    {

    ?>

                                     											
												<li class="dropdown dropdown-mega-menu">	
											<span class="dropdown-toggle extra-arrow"></span>		
												<a href="listing.php?id=<?php echo $row['id']  ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline"><?php  echo $row['name']  ?><span class="badge badge--menu">NEW</span></span></a>
												<ul class="dropdown-menu megamenu" role="menu">
													<li class="dl-back"><a href="#"><span class="icon icon-chevron_left"></span>back</a></li>



													 <?php

													 $x = $row['id'] ; 

													 $query1 = "select * from categories where parent_id = '$x' " ;

													 if($res = $conn->query($query1))
													 {

													 	while ($sub = $res->fetch_assoc()) 

													 	{

													 		?>
                                                        				<li class="col-sm-3">
														<a href="listing.php?id=<?php echo $sub['id']  ?>" class="megamenu__subtitle"><span><?php  echo $sub['name'] ?></span></a>
														<ul class="megamenu__submenu">


															<li class="dl-back"><a href="listing.php?id=<?php echo $sub['id']  ?>"><span class="icon icon-chevron_left"></span>back</a></li>

                                                   <?php

                                          $i = $sub['id'] ;

                                          $q = "select * from categories where parent_id = '$i'" ;

                                          if($s = $conn->query($q))
                                          {
                                          	while ($r = $s->fetch_assoc()) {



                                          ?>
                                        
                                      <li class="level3"><a href="listing.php?id=<?php echo $r['id']  ?>"><?php echo $r['name']    ?></a></li>


                                      <?php
                                          		# code...
                                          	}
                                          } 



                                      ?>
														
														</ul>
													</li>

													 		<?php
													
													 	}
													 }

													 ?>
											
									


													</ul>


                                              <?php



                                                    }
                                                }


                              


                                     

												?>
												
											
											</li>



							
									
										</ul>
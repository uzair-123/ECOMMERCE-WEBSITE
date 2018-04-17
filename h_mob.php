<div class="hidden">
			<nav id="off-canvas-menu">				
				<ul class="expander-list">				
				

	            <?php	


						                       include 'config.php' ;

                                                $query = "select * from categories where parent_id = 0" ;


                                                if($result = $conn->query($query))
                                                {
                                                    while ($row = $result->fetch_assoc())
                                                    {

                                                    	   ?>					   
		
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="listing.php?id=<?php echo $row['id']  ?>"><span class="act-underline"><?php echo $row['name']  ?><span class="badge badge--menu">NEW</span></span></a>
						</span>
						<ul class="multicolumn-level">
 
                       	 <?php

													 $x = $row['id'] ; 

													 $query1 = "select * from categories where parent_id = '$x' " ;

													 if($res = $conn->query($query1))
													 {

													 	while ($sub = $res->fetch_assoc()) 

													 	{


													 		?>
                                               	
							<li>
								<span class="name">
									<span class="expander">-</span>
									<a class="megamenu__subtitle" href="listing.php?id=<?php echo $sub['id']  ?>">										
										<span><?php echo $sub['name']  ?></span>
									</a>
								</span>
								<ul class="image-links-level-3 megamenu__submenu">		



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
					</li>


                 <?php


                                                    }
                                                }

	         
					?>



					
				</ul>
			</nav>
		</div>	
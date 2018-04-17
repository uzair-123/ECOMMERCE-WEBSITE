<?php
  $page_title = 'All Product';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(2);
  $products = join_product_table();
?>
<?php include_once('layouts/header.php'); ?>
  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
     
        </div>

        <div class="panel-body">
          <table class="table table-bordered">
            <thead>
              <tr>
               
            
              
                <th class="text-center" style="width: 10%;"> Order id </th>
                <th class="text-center" style="width: 10%;"> Customer name </th>
                <th class="text-center" style="width: 10%;"> Product name </th>
                <th class="text-center" style="width: 10%;"> UNIT PRICE </th>
                <th class="text-center" style="width: 10%;"> QUANTITY </th>
                     <th class="text-center" style="width: 10%;"> TOTAL PRICE </th>

                
              </tr>
            </thead>
            <tbody>
             

<?php

                   include 'config.php' ;

                           $query = "select * from cart order by cart_id desc" ;
                       

                       if($result = $conn->query($query))
                       {

                        while ($row = $result->fetch_assoc()) {

                          $cu = $row['cust_id'] ;
                          $pd = $row['p_id'] ;

                       $query1 = "select * from customers where cust_id = '$cu'" ;

                       $result1 = $conn->query($query1) ;
             

                        $row1 = $result1->fetch_assoc() ;


                              $query2 = "select * from products where id = '$pd'" ;

                       $result2 = $conn->query($query2) ;
             

                        $row2 = $result2->fetch_assoc() ;



                          ?>
                        
                                  <tr>
               
               <td> <?php echo remove_junk($row['cart_id']); ?></td>
                <td> <?php echo remove_junk($row1['name']); ?></td>
                <td class="text-center"> <?php echo remove_junk($row2['name']); ?></td>
                <td class="text-center"> <?php echo remove_junk($row2['sale_price']); ?></td>
                <td class="text-center"> <?php echo remove_junk($row['qty']); ?></td>
                <td class="text-center"> <?php echo $row['qty'] * $row2['sale_price']; ?></td>
  
                <td class="text-center">
             
                </td>
              </tr>
                          <?php

                          

                        }

                      }

                     
                      ?>

    
            </tbody>
          </tabel>
        </div>
      </div>
    </div>
  </div>

  <?php include_once('layouts/footer.php'); ?>

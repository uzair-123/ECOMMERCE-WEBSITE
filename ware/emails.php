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
               
            
              
                <th class="text-center" style="width: 10%;"> Email id </th>
                <th class="text-center" style="width: 10%;"> Email  </th>
             

                
              </tr>
            </thead>
            <tbody>
             

<?php

                   include 'config.php' ;

                           $query = "select * from emails order by email_id desc" ;
                       

                       if($result = $conn->query($query))
                       {

                        while ($row = $result->fetch_assoc()) {

                       


                          ?>
                        
                                  <tr>
               
               <td> <?php echo remove_junk($row['email_id']); ?></td>
                <td> <?php echo remove_junk($row['email']); ?></td>
            
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

<?php 
include 'config.php';
include 'config2.php';
$f=$_GET['from'];
$t=$_GET['to'];
?>
<html>
    <head>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </head>
        <body>
          <div class="container">
              <h4 style="color:red; text-align:center;">!!Sri Ganeshay Namah !!</h4>
              <h2 style="color:red; text-align:center;">JAGDAMBA PRINT LINE</h2><h4 style="color:red; text-align:center;">D.N Das Lane,Bengali AkharaNear Langartoli More,Patna</h4><h4 style="color:red; text-align:center;">GSTIN:10AZNPP1854H1ZD</h4>
          </div>
          <div class="container">
              <div class="row">
                  <div class="col-sm-6" >
                     
                 </div>
    <div class="col-sm-6" >
        <div style="margin-left:250px;">
         <h4>From <?php echo $f; ?> : To: <?php echo $t; ?></h4>
         </div>
    </div>
              </div>
          </div>
          <div class="container-fluid">
               <table class="table table-bordered">
    <thead>
      <tr>
        <th>Date</th>
        <th>Product</th>
        <th>Amount</th>
        <th>Payment-details</th>
      </tr>
    </thead>
    <tbody>
        <?php  
                      $sql =mysqli_query($db,"SELECT *, (SELECT exp_prod_name FROM expense_products WHERE exp_prod_id = exp.product_name ) as exp_prod_name, (SELECT exp_prod_name FROM expense_products WHERE exp_prod_id = exp.product_name2 ) as exp_prod_name2,  (SELECT exp_prod_name FROM expense_products WHERE exp_prod_id = exp.product_name3 ) as exp_prod_name3, (SELECT exp_prod_name FROM expense_products WHERE exp_prod_id = exp.product_name4 ) as exp_prod_name4 from  expenses exp
WHERE doe BETWEEN '$f' AND '$t'");
                      while($row =mysqli_fetch_array($sql))
                      {
                      ?>
      <tr>
        <td><?php echo $row['doe']; ?></td>
        <td><?php echo $row['product_name']."<br>".$row['product_name2']."<br>".$row['product_name3']."<br>".$row['product_name4']; ?></td>
        <td><?php echo $row['total_amount']; ?></td>
        <td><?php echo $row['payment_mode']; ?></td>
        
      </tr>
      <?php } ?>
    </tbody>
    <tfoot>
        <?php  
                      $sql =mysqli_query($db,"SELECT SUM(total_amount) as total, (SELECT exp_prod_name FROM expense_products WHERE exp_prod_id = exp.product_name ) as exp_prod_name, (SELECT exp_prod_name FROM expense_products WHERE exp_prod_id = exp.product_name2 ) as exp_prod_name2,  (SELECT exp_prod_name FROM expense_products WHERE exp_prod_id = exp.product_name3 ) as exp_prod_name3, (SELECT exp_prod_name FROM expense_products WHERE exp_prod_id = exp.product_name4 ) as exp_prod_name4 from  expenses exp
WHERE doe BETWEEN '$f' AND '$t'");
                      $row =mysqli_fetch_array($sql);
                      ?>
       <th></th>
        <th>Total</th>
        <th><?php echo $row['total']; ?></th>
        <th></th>
        
    </tfoot>
  </table>
          </div>
        </body>
    
</html>
<script>
  window.print();
</script>
<?php include "config.php"; ?>
<?php include "config2.php"; 
$v = $_GET['client_id'];
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
                        <h4 style="color:red;"><b>Client Statement</b></h4>
                        <?php 
                        $sql = "SELECT p.*,c.*,pm.* FROM `purchase_table`p INNER JOIN clients c ON c.client_id =p.client_id  INNER JOIN product_master pm ON pm.client_id=p.client_id WHERE datept BETWEEN '$f' AND '$t' AND c.client_id ='$v' LIMIT 1";
                        
                        $query = $dbh -> prepare($sql);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        $cnt=1;
                        if($query->rowCount() > 0)
                        {
                        foreach($results as $rows) 
                        {
                        ?>
                        
                        <h5><b><?php echo htmlentities($rows->client_name); ?></b></h5>
                        <h5><b>GSTIN:<?php echo htmlentities($rows->gst_no); ?> </b></h5>
                        <h5><b>Address: <?php echo htmlentities($rows->address); ?></b></h5>
                          <?php } }?>
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
        <th>Invoice No</th>
        <th>Date</th>
        <th>HSN</th>
        <th>Amount</th>
        <th>GST</th>
        <th>Payble Amount</th>
        <th>Payment</th>
        <th>Cheque UTR No.</th>
        <th>Date</th>
        <th>Remarks</th>
      </tr>
    </thead>
    <tbody>
        <?php 
                        $sql = "SELECT p.*,p.purchase_id AS id,c.*,pm.*  FROM `purchase_table`p INNER JOIN clients c ON c.client_id =p.client_id  INNER JOIN product_master pm ON pm.client_id=p.client_id WHERE datept BETWEEN '$f' AND '$t' AND c.client_id = '$v'";
                        
                        $query = $dbh -> prepare($sql);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        $cnt=1;
                        if($query->rowCount() > 0)
                        {
                        foreach($results as $row) 
                        { 
                        ?>
      <tr>
        <td><?php echo htmlentities($row->id); ?></td>
        <td><?php echo htmlentities($row->date); ?></td>
        <td><?php echo htmlentities($row->hsn_code); ?></td>
        <td><?php echo htmlentities($row->tsum); ?></td>
        <td><?php echo htmlentities($row->gst_total); ?></td>
        <td><?php echo htmlentities($row->payble); ?></td>
        <td><?php echo htmlentities($row->payment_method); ?></td>
        <td><?php echo htmlentities($row->utr_no); ?></td>
        <td><?php echo htmlentities($row->datept); ?></td>
         <td><?php echo htmlentities($row->remarks); ?></td>
      </tr>
      <?php } } ?>
    </tbody>
    <tfoot>
         <?php  
                      $sql =mysqli_query($db,"SELECT SUM(p.tsum) AS total_net_amount,SUM(p.gst_total) AS total_gst_amount,SUM(p.payble) AS total_payble FROM `purchase_table`p INNER JOIN clients c ON c.client_id =p.client_id  INNER JOIN product_master pm ON pm.client_id=p.client_id WHERE datept BETWEEN '$f' AND '$t' AND c.client_id = '$v'");
                      $row =mysqli_fetch_array($sql);
                      ?>
       <th></th>
        <th></th>
        <th>Total</th>
        <th><?php echo $row['total_net_amount']; ?></th>
        <th><?php echo $row['total_gst_amount']; ?></th>
        <th><?php echo $row['total_payble']; ?></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th> 
    </tfoot>
     
  </table>
 
          </div>
        </body>
    
</html>
<script>
  window.print();
</script>
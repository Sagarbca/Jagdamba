<?php 
include 'config.php';
include 'config2.php';
$v = $_GET['vendor_id'];
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
                      <?php  
                      $sql =mysqli_query($db,"SELECT * FROM `vendors` WHERE `vendor_id`='$v'");
                      $row =mysqli_fetch_array($sql);
                      ?>
                        <h4 style="color:red;"><b>Vendors Statement</b></h4>
                        <h5><b><?php echo $row['vendor_name']; ?></b></h5>
                        <h5><b>GSTIN: <?php echo $row['gst_no']; ?></b></h5>
                        <h5><b>Address: <?php echo $row['address']; ?></b></h5>
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
        <th>Invoice Date</th>
        <th>Amount</th>
        <th>GST%</th>
        <th>GST Amount</th>
        <th>Payble Amount</th>
        <th>Payment</th>
        <th>Cheque UTR No.</th>
        <th>Date</th>
        <th>Remarks</th>
      </tr>
    </thead>
    <tbody>
        <?php  
                      $sql =mysqli_query($db,"SELECT vi.*,v.* FROM `vendor_invoice` vi INNER JOIN vendors v ON v.vendor_id=vi.vendor_id WHERE v.vendor_id='$v' AND vi.invoice_date BETWEEN '$f' AND '$t'");
                      while($row =mysqli_fetch_array($sql))
                      {
                      ?>
      <tr>
        <td><?php echo $row['invoice_no']; ?></td>
        <td><?php echo $row['invoice_date']; ?></td>
        <td><?php echo $row['net_amount']; ?></td>
        <td><?php echo $row['gst']; ?></td>
        <td><?php echo $row['gst_amount']; ?></td>
        <td><?php echo $row['payble']; ?></td>
        <td><?php echo $row['payment_mode']; ?></td>
        <td><?php echo $row['checque_no'].$row['utr_no']; ?></td>
        <td><?php echo $row['v_date']; ?></td>
         <td><?php echo $row['remarks']; ?></td>
      </tr>
      <?php } ?>
    </tbody>
    <tfoot>
        <?php  
                      $sql =mysqli_query($db,"SELECT SUM(vi.net_amount) AS total_net_amount,SUM(vi.gst_amount) AS total_gst_amount,SUM(payble) AS total_payble FROM `vendor_invoice` vi INNER JOIN vendors v ON v.vendor_id=vi.vendor_id WHERE v.vendor_id='$v' AND vi.invoice_date BETWEEN '$f' AND '$t'");
                      $row =mysqli_fetch_array($sql);
                      ?>
       <th></th>
        <th>Total</th>
        <th><?php echo $row['total_net_amount']; ?></th>
        <th></th>
        <th><?php echo $row['total_gst_amount']; ?></th>
        <th> <?php echo $row['total_payble']; ?></th>
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
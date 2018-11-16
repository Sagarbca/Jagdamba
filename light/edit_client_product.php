<?php

error_reporting(1);
session_start();
//if($name = $_SESSION['name']) 
if ($_SESSION['name']=="") {
header('location:index.php');
}
$name=$_SESSION['name'];
$edit = $_GET['edit1'];
?>
<?php
include 'config2.php';
if(isset($_POST['submit'])) {
//$update_id = $_GET['edit_form'];
$totalPrice = $_POST['totalPrice'];
$discount = $_POST['discount'];
$tsum = $_POST['tsum'];
$net_amount = $_POST['net_amount'];
$payable = $_POST['payable'];
$dues = $_POST['dues'];
$payment_mode = $_POST['payment_mode'];
$deposite_account = $_POST['deposite_account'];
$utr_no = $_POST['utr_no'];




  $update_qry = mysqli_query($db,"UPDATE `purchase_table` SET `totalPrice`='$totalPrice',`discount`='$discount',`net_amount`='$net_amount',`payble`='$payble',`dues`='$dues',`payment_method`='$payment_method',`deposite_account`='$deposite_account',`utr_no`=$utr_no WHERE `purchase_id`='$edit'");
if ($update_qry) {
  
   echo "<script>alert('Updated...')</script>";
        echo "<script>window.open('view_client_product.php','_self')</script>";

}

else{
 echo "<script>alert('Not updated')</script>";
  echo "<script>window.open('edit_client_product.php?edit1=$edit&name=staff','_self')</script>";
}

}

?>


<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<!-- Mirrored from radixtouch.in/templates/admin/redstar/source/light/schedule.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Jun 2018 06:08:39 GMT -->
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta name="description" content="Responsive Admin Template" />
<meta name="author" content="RedstarHospital" />
<title>JAGDAMBA PRINT LINE</title>
<!-- google font -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
<!-- icons -->
<link href="../assets/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!--bootstrap -->

<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- Material Design Lite CSS -->
<link rel="stylesheet" href="../assets/material/material.min.css">
<link rel="stylesheet" href="css/material_style.css">
<!-- Theme Styles -->
<link href="css/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
<link href="css/plugins.min.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/responsive.css" rel="stylesheet" type="text/css" />
<link href="css/theme-color.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- favicon -->
<link rel="shortcut icon" href="img/favicon.ico" /> 




</head>
<!-- END HEAD -->
<body >
<div class="row">
<div class="col-md-12 col-sm-12">
<div class="card card-box">


<div class="card-body" id="bar-parent">
    <?php

$sql = "SELECT * from  purchase_table WHERE purchase_id ='$edit'";
$query = mysqli_query($db,$sql);
//$query->execute();
//$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if(mysqli_num_rows($query) > 0)
{
while($row = mysqli_fetch_array($query)) 
{
?>
<form action="" method="post" id="form_sample_1" class="form-horizontal">



<div class="form-group row">
<label class="control-label col-md-3">Total(₹) :
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" name="totalPrice" id="totalPrice" class="totalPrice form-control input-height" 
value="<?php echo $row['totalPrice']; ?>">
</div>
</div>


<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Discount
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input name="discount" type="text" placeholder="Discount" class="form-control input-height discount"
value="<?php echo $row['discount']; ?>" /> </div>
</div>
</div>
<input name="gst_total" type="hidden" class="gst_total"  />
<input name="tsum" type="hidden" class="tsum"  />
<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Net Amount 
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input name="net_amount" type="text" placeholder="Net Amount"
class="net_amount  form-control input-height"  value="<?php echo $row['net_amount']; ?>"/> </div>
</div>
</div>
<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Payable
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input name="payable" type="text" placeholder="Payable"
class="form-control input-height payable" value="<?php echo $row['payble']; ?>" /> </div>
</div>
</div>
<div class="form-group row">
<label class="control-label col-md-3">Dues
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input name="dues" type="text" placeholder="Dues"
class="form-control input-height dues" value="<?php echo $row['dues']; ?>"/> </div>
</div>



<div class="form-group row">
<label class="control-label col-md-3">Payment Mode
<span class="required"> * </span>
</label>
<div class="col-md-5">
<select class="form-control input-height" name="payment_mode">
<option value="">Select...</option>
<option value="cheque" <?= $row['payment_method'] == 'cheque'?'selected':'' ?>>cheque</option>
<option value="cash" <?= $row['payment_method'] == 'cash'?'selected':'' ?>>cash</option>
<option value="net_banking" <?= $row['payment_method'] == 'net_banking'?'selected':'' ?>>net_banking</option>
</select>
</div>

</div>
<div class="form-group row">
<label class="control-label col-md-3">Deposite Account No
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input name="deposite_account" type="text" placeholder="Cheque NO."
class="form-control input-height"  value="<?php echo $row['deposite_account']; ?>"/> </div>
</div>

<div class="form-group row">
<label class="control-label col-md-3">Utr No
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input name="utr_no" type="text" placeholder="utr NO."
class="form-control input-height" value="<?php echo $row['utr_no']; ?>" /> </div>
</div>
<div class="form-actions">
<div class="row">
<div class="offset-md-3 col-md-9">
<button type="submit" name="submit" class="btn btn-info" id="btnGeachrow">update</button>

</div>
</div>

</div>
</form>
<?php } } ?>
</div>
</div>
</div>
</div>

<a href="view_client.php" style="color: black; padding-left: 550px;">
    <button  ><span style="color: black;><i class="fa fa-print"></i> Back</span></button></a>
</div>

</div>


<!-- end page content -->

</div>
<!-- end page container -->
<!-- start footer -->
<div class="page-footer">
<div class="page-footer-inner"> 2018 &copy; Jagdamba Management By
<a href="https://www.succexa.in" target="_top" class="makerCss">Succexa</a>
</div>
<div class="scroll-to-top">
<i class="icon-arrow-up"></i>
</div>
</div>
<!-- end footer -->
</div>
<!-- start js include path -->

<script src="../assets/popper/popper.js" ></script>
<script src="../assets/jquery.blockui.min.js" ></script>
<script src="../assets/jquery-validation/js/jquery.validate.min.js" ></script>
<script src="../assets/jquery-validation/js/additional-methods.min.js" ></script>
<script src="../assets/jquery.slimscroll.js"></script>
<!-- bootstrap -->
<script src="../assets/bootstrap/js/bootstrap.min.js" ></script>
<script src="../assets/bootstrap-switch/js/bootstrap-switch.min.js" ></script>
<!-- Common js-->
<script src="../assets/app.js" ></script>
<script src="../assets/form-validation.js" ></script>
<script src="../assets/layout.js" ></script>
<script src="../assets/theme-color.js" ></script>
<!-- Material -->
<script src="../assets/material/material.min.js"></script>

<!-- end js include path -->
</body>


</html>


    
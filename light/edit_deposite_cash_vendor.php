
<?php $output = NULL;?>
<?php

include 'config.php';
$mysqli = NEW Mysqli('localhost','root','','jagdamba');
?>
<?php
error_reporting(1);
session_start();
//if($name = $_SESSION['name']) 
if ($_SESSION['name']=="") {
header('location:index.php');
}
$name=$_SESSION['name'];
?>
<?php 
session_start();
$name = $_SESSION['name']; 
?>
<?php
include("config.php");
?>
<html lang="en">
<!-- BEGIN HEAD -->
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
<!-- favicon -->
<link rel="shortcut icon" href="img/favicon.ico" /> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<!-- END HEAD -->
<!-- start page content -->
<body>
<div class="row">
<div class="col-md-12 col-sm-12">
<div class="card card-box">
<div class="card-head">
<header>Deposit Cash</header>
<button id = "panel-button" 
class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
data-upgraded = ",MaterialButton">
<i class = "material-icons">more_vert</i>
</button>
</div>
<div class="card-body" id="bar-parent">
<form action="<!--vendor_invoice_config.php?&name=deposite_cash-->#" method="post" id="form_sample_1" class="form-horizontal">
<?php
session_start();
$name = $_SESSION['name']; 
$vendor_id = $_GET['edit'];
$invoice_id = $_GET['edit1'];
?>
<input type="hidden" name="vendor_id"    value="<?php echo $vendor_id; ?>"  /> 
<?php 
/*$querymaxcount = "SELECT * FROM `vendor_invoice` WHERE  invoice_id = '$invoice_id'";
$insertcountmax = $mysqli->query($querymaxcount);
// to count the no of rows 
$data=mysqli_fetch_assoc($insertcountmax);
$maxpurchaseid =  $data['max_id'];*/

$sql = "SELECT * FROM vendor_invoice WHERE invoice_id = $invoice_id";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row) 
{ ?>
<?php 
if($row->total_due == '')
?> 
<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Dues Amount                                                                                            
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" name="dues"  placeholder="Dues Amount" value='<?php echo htmlentities($row->dues);?>'  class="form-control input-height"  /> </div>
</div>
</div>
<?php } }
else{
?>
<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Dues Amount                                                                                            
<span class="required">  </span>
</label>
<div class="col-md-5">
<input type="text" name="dues"  placeholder="Dues Amount"  value='<?php echo htmlentities($row->dues);?>' class="form-control input-height"  /> </div>
</div>
</div>
<?php 
}
?>
<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Paid Dues Amount.                                                                                            
<span class="required">  </span>
</label>
<div class="col-md-5">
<input type="text"  name="payble"  placeholder="Paid Dues Amount." value='<?php echo htmlentities($row->payble);?>' class="form-control input-height" required> 
</div>
</div>
</div>
<div class="form-group row">
<label class="control-label col-md-3">Payment Mode
<span class="required"> * </span>
</label>
<div class="col-md-5">
<select class="form-control input-height" name="payment_mode" value='<?php echo htmlentities($row->payment_mode);?>' >
<option >Cash</option>
<option >Cheque</option>
<option >Net Banking</option>
</select>
</div>
</div>
<div class="form-group row">
<label class="control-label col-md-3">Deposit Cheque No
<span class="required">  </span>
</label>
<div class="col-md-5">
<input name="cheque_no" type="text" placeholder="Cheque NO." value='<?php echo htmlentities($row->cheque_no);?>' class="form-control input-height"  > </div>
</div>
<div class="form-group row">
<label class="control-label col-md-3">Utr No
<span class="required">  </span>
</label>
<div class="col-md-5">
<input name="utr_no" type="text" placeholder="Utr NO." class="form-control input-height" value='<?php echo htmlentities($row->utr_no);?>'  > </div>
</div>
<div class="form-group row">
<label class="control-label col-md-3">Remarks 
<span class="required">  </span>
</label>
<div class="col-md-5">
<input name="remarks" type="text" placeholder="Remarks here ." value='<?php echo htmlentities($row->remarks);?>' class="form-control input-height"  > </div>
</div>
<div class="form-actions">
<div class="row">
<div class="offset-md-3 col-md-9">
<input type="submit" name="submit" value="submit" class="btn btn-info">
</div>
</div>
</div>
</div>
</div>
</form>
<a href="vendor_profile.php?editsz=<?php echo $vendor_id ;?>" style="color: black; padding-left: 550px;"><button  ><span style="color: black;><i class="fa fa-print"></i> Back</span></button></a>
</div>
</div>
<!-- end page content -->
<!-- end page container -->
<!-- start footer -->
<div class="page-footer">
<div class="page-footer-inner"> 2018 &copy; Jagdamba Management By
<a href="https://www.succexa.in/" target="_top" class="makerCss">succexa</a>
</div>
<div class="scroll-to-top">
<i class="icon-arrow-up"></i>
</div>
</div>
<!-- end footer -->

<!-- start js include path -->
<script src="../assets/jquery.min.js" ></script>
<script src="../assets/popper/popper.js" ></script>
<script src="../assets/jquery.blockui.min.js" ></script>
<script src="../assets/jquery-validation/js/jquery.validate.min.js" ></script>
<script src="../assets/jquery-validation/js/additional-methods.min.js" ></script>
<script src="../assets/jquery.slimscroll.js"></script>
<!-- bootstrap -->
<script src="../assets/bootstrap/js/bootstrap.min.js" ></script>
<script src="../assets/bootstrap-switch/js/bootstrap-switch.min.js" ></script>
<script src="../assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"  charset="UTF-8"></script>
<script src="../assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker-init.js"  charset="UTF-8"></script>
<!-- Common js-->
<!-- Material -->
<script src="../assets/material/material.min.js"></script>
<!-- end js include path -->
</body>
</html>

<?php
error_reporting(1);
session_start();
$mysqli = NEW Mysqli('localhost','root','','jagdamba');
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
include 'config2.php';
?>
<?php
if (isset($_GET['edit1'])) {
$staff_id = $_GET['edit1'];
}
$sql = "SELECT * FROM staffs 
WHERE staff_id = $staff_id;";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row) 
{
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
<!-- favicon -->
<link rel="shortcut icon" href="img/favicon.ico" /> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<!-- END HEAD -->
<body >
<div class="row">
<div class="col-md-12 col-sm-12">
<div class="card card-box">

<h1 style="text-align: center;"> Staff Advance Money Deposit Form </h1>
<div class="card-body" id="bar-parent">
<form action="deposit_advance_config.php" method="post" id="form_sample_1" class="form-horizontal">

<div class="form-body">
<div class="form-group row" >
<label class="control-label col-md-3">Staff Id                                                                                            
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" name="staff_id" data-required="1" placeholder="Name " readonly class="form-control input-height" value='<?php echo htmlentities($row->staff_id);?>' /> </div>
</div>

<div class="form-group row">
<label class="control-label col-md-3">staff Name                                                                                            <span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" name="staff_name" data-required="1" placeholder="Name " readonly class="form-control input-height" value='<?php echo htmlentities($row->staff_name);?>' /> </div>
</div>
</div>
<?php }} ?>
<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Last Advance                                                                                       <?php 
$pv_advance_amt = 0;
$ad_rem_result = $db->query ( " SELECT remaining_a_amt FROM advance_transaction WHERE ad_id = (SELECT MAX(ad_id) FROM `advance_transaction` WHERE staff_id = '$staff_id')" );

while ( $ad_rem = $ad_rem_result->fetch_assoc () ) {

$pv_advance_amt =  $ad_rem['remaining_a_amt'];
// echo $pv_security_amt."<br>";


}

?>    
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" name="remaining_balance" data-required="1"  placeholder="Name " class="form-control input-height" value='<?php echo $pv_advance_amt;?>' readonly /> </div>
</div>
</div>
<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Deposit Money                                                                                           
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" name="deposit_money"  placeholder="Deposit Money " class="form-control input-height"  required /> </div>
</div>
</div>
<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Remarks                                                                                            
<span class="required">  </span>
</label>
<div class="col-md-5">
<input type="text" name="advance_remarks"  placeholder="Remarks " class="form-control input-height"  /> </div>
</div>
</div>



<div class="form-actions">
<div class="row">
<div class="offset-md-3 col-md-9">
<button type="submit" name="submit1" class="btn btn-info" >Submit</button>
<a href="all_staff.php" class="btn btn-default">Cancel</a>
</div>
</div>
</div>

</form>   						                     



<!-- end page content -->

</div>
<!-- end page container -->
<!-- start footer -->
<div class="page-footer">
<div class="page-footer-inner"> 2017 &copy; Jagdamba Management By
<a href="https://www.succexa.in" target="_top" class="makerCss">Succexa</a>
</div>
<div class="scroll-to-top">
<i class="icon-arrow-up"></i>
</div>
</div>
<!-- end footer -->
</div>
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
<!--<script src="../assets/app.js" ></script>
<script src="../assets/form-validation.js" ></script>
<script src="../assets/layout.js" ></script>
<script src="../assets/theme-color.js" ></script>-->
<!-- Material -->
<script src="../assets/material/material.min.js"></script>
<!-- end js include path -->
</body>

<!-- Mirrored from radixtouch.in/templates/admin/redstar/source/light/add_doctor.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Jun 2018 06:09:19 GMT -->
</html>

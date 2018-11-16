<?php 
session_start();
$name = $_SESSION['name']; 
?>
<?php
include("config.php");
?>
<?php
if (isset($_GET['edit1'])) {
$vendor_id = $_GET['edit1'];
}
$sql = "SELECT * from  vendors WHERE vendor_id ='$vendor_id'";
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
</head>
<!-- END HEAD -->
<body >
<div class="row">
<div class="col-md-12 col-sm-12">
<div class="card card-box">
<div class="card-head">
<header style="text-align:center">Edit Vendor </header>
<button id = "panel-button" 
class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
data-upgraded = ",MaterialButton">
<i class = "material-icons">more_vert</i>
</button>
<ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
data-mdl-for = "panel-button">
<li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
<li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
<li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
</ul>
</div>

<div class="card-body" id="bar-parent">
<form action="edit_vendors_config.php" method="post"  class="form-horizontal">

<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Vendor Id                                                                                            
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" name="vendor_id"  placeholder="Name " class="form-control input-height" value='<?php echo htmlentities($row->vendor_id);?>' /> </div>
</div>
<div class="form-group row">
<label class="control-label col-md-3">Vendor Name                                                                                            
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" name="vendor_name" required pattern="[a-z,A-Z\s]{3,30}" placeholder="Name " class="form-control input-height" value='<?php echo htmlentities($row->vendor_name);?>' /> </div>
</div>
</div>

<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Mobile No.                                                                                           
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" name="mobile_no" required pattern ="[0-9]{10}" placeholder="Name " class="form-control input-height" value='<?php echo htmlentities($row->mobile_no);?>' /> </div>
</div>
</div>
<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Address                                                                                           
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" name="address" data-required="1" placeholder="Name " class="form-control input-height" value='<?php echo htmlentities($row->address);?>' /> </div>
</div>
</div>



<div class="form-group row">
<label class="control-label col-md-3">GST NO.
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" name="gst_no"  placeholder="enter gst" class="form-control input-height" value='<?php echo htmlentities($row->gst_no);?>' /> </div>
</div>
<div class="form-actions">
<div class="row">
<div class="offset-md-3 col-md-9">
<button type="submit" name="submit" class="btn btn-info">Submit</button>

</div>
</div>  
</div>

<?php } } ?>


</div>
</div>
</form>

</div>
</div>


<a href="view_vendor.php" style="color: black; padding-left: 550px; padding-bottom: 50px;"><button><span style="color: black;><i class="fa fa-print"></i> Back</span></button></a>															
<!-- end page content -->

</div>
<!-- end page container -->
<!-- start footer -->
<div class="page-footer">
<div class="page-footer-inner"> 2018 &copy; Jagdamba management By
<a href="https://succexa.in" target="_top" class="makerCss">Succexa</a>
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
<script src="../assets/app.js" ></script>
<script src="../assets/form-validation.js" ></script>
<script src="../assets/layout.js" ></script>
<script src="../assets/theme-color.js" ></script>
<!-- Material -->
<script src="../assets/material/material.min.js"></script>
<!-- end js include path -->
</body>

<!-- Mirrored from radixtouch.in/templates/admin/redstar/source/light/add_doctor.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Jun 2018 06:09:19 GMT -->
</html>

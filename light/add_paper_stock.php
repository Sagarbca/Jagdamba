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
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
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
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
<div class="page-wrapper">
<!-- start header -->
<div class="page-header navbar navbar-fixed-top">
<div class="page-header-inner ">
<!-- logo start -->
<div class="page-logo " style="padding: 0px 0px 0px 0px; background:white;">
<a href="dashboard.php">
<img src="logo1.png" style="width:70%; height:60px; margin-left:25px;"> </a>
</div>
<!-- logo end -->
<ul class="nav navbar-nav navbar-left in">
<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
</ul>

<!-- start mobile menu -->
<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
<span></span>
</a>
<!-- end mobile menu -->
<!-- start header menu -->
<div class="top-menu">
<ul class="nav navbar-nav pull-right">
<!-- start language menu -->

<!-- end language menu -->
<!-- start notification dropdown -->

<!-- end notification dropdown -->
<!-- start message dropdown -->

<!-- start manage user dropdown -->
<li class="dropdown dropdown-user">
<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
    <?php 

$sqll = "SELECT photo  from profile_pic";
$queryl = $dbh -> prepare($sqll);
$queryl->execute();
$resultss=$queryl->fetchAll(PDO::FETCH_OBJ);
$cntt=1;
if($queryl->rowCount() > 0)
{
foreach($resultss as $rows) 
{ ?>
<img alt="" class="img-circle " src="<?php echo $rows->photo;?>" />
<span class="username username-hide-on-mobile"><?php echo $name; ?></span>
<i class="fa fa-angle-down"></i>
</a>
<ul class="dropdown-menu dropdown-menu-default">
<li class="divider"> </li>
<li>
<a href="logout.php">
<i class="icon-logout"></i> Log Out </a>
</li>
<li>
<a href="changepassword.php">
<i class="icon-lock"></i> Change Password </a>
</li>
</ul>
</li>
<!-- end manage user dropdown -->
</ul>
</div>
</div>
</div>
<!-- end header -->
<!-- start page container -->
<div class="page-container">
<!-- start sidebar menu -->
<div class="sidebar-container">
<div class="sidemenu-container navbar-collapse collapse fixed-menu">
<div id="remove-scroll" class="left-sidemenu">
<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
<li class="sidebar-toggler-wrapper hide">
<div class="sidebar-toggler">
<span></span>
</div>
</li>
<li class="sidebar-user-panel">
<div class="user-panel">
<div class="pull-left image">
<img src="<?php echo $rows->photo;?>" class="img-circle user-img-circle" alt="User Image" />
</div>
<div class="pull-left info">
<p><?php echo $name; ?></p>
<a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline"> Online</span></a>
</div>
</div>
<?php } }
?>
</li>
<li class="nav-item start active open">
<a href="dashboard.php" class="nav-link nav-toggle">
<i class="material-icons">dashboard</i>
<span class="title">Dashboard</span>
<span class="selected"></span>

</a>

</li>
<li class="nav-item  ">
<a href="#" class="nav-link nav-toggle"><i class="material-icons">assignment</i>
<span class="title">Vendors</span><span class="arrow"></span></a>
<ul class="sub-menu">
<li class="nav-item  ">
<a href="add_vendor.php" class="nav-link "> <span class="title"> Add Vendor</span>
</a>
</li>
<li class="nav-item  ">
<a href="view_vendor.php" class="nav-link "> <span class="title"> All Vendor</span>
</a>
</li>
<li class="nav-item  ">
<a href="view_vendor_product.php" class="nav-link "> <span class="title"> All Vendor Products</span>
</a>
</li>


</ul>
</li>

<li class="nav-item  ">
<a href="#" class="nav-link nav-toggle"><i class="material-icons">assignment</i>
<span class="title">Clients</span><span class="arrow"></span></a>
<ul class="sub-menu">
<li class="nav-item  ">
<a href="add_client.php" class="nav-link "> <span class="title"> Add Clients</span>
</a>
</li>
<li class="nav-item  ">
<a href="view_client.php" class="nav-link "> <span class="title"> View Clients</span>
</a>
</li>
<li class="nav-item  ">
<a href="view_client_product.php" class="nav-link "> <span class="title"> All Clients Products</span>
</a>
</li>

</ul>
</li>
<li class="nav-item  ">
<a href="#" class="nav-link nav-toggle"><i class="material-icons">assignment</i>
<span class="title">Staff</span><span class="arrow"></span></a>
<ul class="sub-menu">
<li class="nav-item">
<a href="add_staff.php" class="nav-link"> <span class="title"> Add Staff</span>
</a>
</li>
<li class="nav-item">
<a href="all_staff.php" class="nav-link"> <span class="title"> All Staff</span>
</a>
</li>


</ul>
</li>

<li class="nav-item">
<a href="#" class="nav-link nav-toggle"><i class="material-icons">assignment</i>
<span class="title">Expenses</span><span class="arrow"></span></a>
<ul class="sub-menu">
<li class="nav-item">
<a href="add_expenses.php" class="nav-link "> <span class="title"> Add expenses</span>
</a>
</li>
<li class="nav-item">
<a href="all_expenses.php" class="nav-link"> <span class="title"> All expenses</span>
</a>
</li>
</ul>
</li>
<!-- here the stocks sidebar start -->
<li class="nav-item  ">
<a href="#" class="nav-link nav-toggle"><i class="material-icons">assignment</i>
<span class="title">Stock</span><span class="arrow"></span></a>
<ul class="sub-menu">
<li class="nav-item  ">
<a href="ink_stock.php" class="nav-link "> <span class="title"> Ink</span>
</a>
</li>
<li class="nav-item  ">
<a href="paper_stock.php" class="nav-link "> <span class="title"> Paper</span>
</a>
</li>
<li class="nav-item  ">
<a href="spare_parts.php" class="nav-link "> <span class="title"> Spare Parts</span>
</a>
</li>
</ul>
</li>
<!-- here the stocks sidebar end -->
</ul>
</div>
</div>
</div>
<!-- end sidebar menu --> 
<!-- start page content -->
<body>

<div class="page-content-wrapper">
<div class="page-content">
<div class="page-bar">
<div class="page-title-breadcrumb">
<div class=" pull-left">
<div class="page-title">Add Ink Stock</div>
</div>
<ol class="breadcrumb page-breadcrumb pull-right">
<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="dashboard.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
</li>
<li><a class="parent-item" href="dashboard.php">JAGDAMBA PRINT LINE</a>&nbsp;<i class="fa fa-angle-right"></i>
</li>
<li class="active">Add Ink Stock</li>
</ol>
</div>
</div>


<div class="tab-content">
<div class="tab-pane active fontawesome-demo" id="tab1">
<div class="row">
<div class="col-md-12">
<div class="card card-topline-red">
<div class="card-head">
<header></header>
<div class="tools">

</div>
</div>

</div>
</div>
</div>
</div>

</div>
<div class="row">
<div class="col-md-12 col-sm-12">
<div class="card card-box">


<div class="card-body" id="bar-parent">
<form action="add_paper_config.php" method="post"  class="form-horizontal">


<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Date                                                                                           
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" name="date"  placeholder="Date" class="form-control input-height"value='<?php echo date('d-m-Y');?>' readonly /> </div>
</div>
</div>
<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Vendor's/Client Name                                  <span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" name="name"  placeholder="Name"  class="form-control input-height" /> </div>
</div>
</div>
<div class="form-group row">
<label class="control-label col-md-3">GSM/Kg

<span class="required">  </span>
</label>
<div class="col-md-5">
<input type="text" name="kg"  placeholder="enter Kg Here"  class="form-control input-height" /> </div>
</div>
<div class="form-group row">
<label class="control-label col-md-3">RIM.

<span class="required">  </span>
</label>
<div class="col-md-5">
<input type="text" name="rim"  placeholder="enter RIM"   class="form-control input-height" /> </div>
</div>
<div class="form-group row">
<label class="control-label col-md-3">SHEET.

<span class="required">  </span>
</label>
<div class="col-md-5">
<input type="text" name="sheet"  placeholder="enter Sheet Here" class="form-control input-height" /> </div>
</div>

<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Less Stock after printing                                                                                           
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" class="form-control input-height" name="less_stock_after_printing" placeholder=" Enter Rest Stock"  />  </div>
</div>
</div>

<div class="form-group row">
<label class="control-label col-md-3"> Printing Date
</label>
<div class="col-md-5">
<div class="input-group">
<input type="text" name="printing_date"  placeholder="Printing Date" class="form-control input-height"value='<?php echo date('d-m-Y');?>' readonly /></div>
</div>
</div>


<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Less Stock after printing                             <span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" class="form-control input-height" name="less_stock_after_less" placeholder=" Enter Rest Stock"  />  </div>
</div>
</div>


<div class="row">
<div class="offset-md-3 col-md-9">
<button type="submit" name="submit" class="btn btn-info">Submit</button>

</div>
</div>

</div>
</div>
</form>
</div>
</div>
</div>
</div>

</div>
</div>

<!-- end page content -->

</div>
<!-- end page container -->
<!-- start footer -->
<div class="page-footer">
<div class="page-footer-inner"> 2018 &copy;  Jagdamba Management By
<a href="https://www.succexa.in/" target="_top" class="makerCss">succexa</a>
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
<script>


$(document).ready(function() {

$(".allow_only_int").keydown(function(e) {
// Allow: backspace, delete, tab, escape, enter and .
if ($.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||
// Allow: Ctrl+A,Ctrl+C,Ctrl+V, Command+A
((e.keyCode == 65 || e.keyCode == 86 || e.keyCode == 67) && (e.ctrlKey === true || e.metaKey === true)) ||
// Allow: home, end, left, right, down, up
(e.keyCode >= 35 && e.keyCode <= 40)) {

// let it happen, don't do anything

}
// Ensure that it is a number and stop the keypress
if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
e.preventDefault();
}
});

$(".allow_only_num").keydown(function(e) {
// Allow: backspace, delete, tab, escape, enter and both .
if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
// Allow: Ctrl+A,Ctrl+C,Ctrl+V, Command+A
((e.keyCode == 65 || e.keyCode == 86 || e.keyCode == 67) && (e.ctrlKey === true || e.metaKey === true)) ||
// Allow: home, end, left, right, down, up
(e.keyCode >= 35 && e.keyCode <= 40)) {
// let it happen, don't do anything
return;
}
// Ensure that it is a number and stop the keypress
if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
e.preventDefault();
}
});




//var gggg =  $( "input[name*='product_name1']" ).val();
//$( "input[name*='product_name1']" ).val( "has man in it!" );
// alert(gggg);




});




</script>
</body>

<!-- Mirrored from radixtouch.in/templates/admin/redstar/source/light/add_doctor.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Jun 2018 06:09:19 GMT -->
</html>

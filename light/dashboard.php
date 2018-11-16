<?php
error_reporting(1);
session_start();
//if($name = $_SESSION['name']) 
// on login screen, redirect to dashboard if already logged in
$name=$_SESSION['name'];
if(!isset($_SESSION['name'])){
    header('location:index.php');
}

?>

<?php
include 'config.php';
include 'config2.php';
?>
<?php
$email = $_SESSION['email']; 
?>
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<!-- Mirrored from radixtouch.in/templates/admin/redstar/source/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Jun 2018 06:03:13 GMT -->
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
<style>
    
.nowrap {
    white-space: nowrap;
}
.cl{
    background: #f8f9fa;
    background-image: initial;
    background-position-x: initial;
    background-position-y: initial;
    background-size: initial;
    background-repeat-x: initial;
    background-repeat-y: initial;
    background-attachment: initial;
    background-origin: initial;
    background-clip: initial;
    background-color: rgb(248, 249, 250);
}
</style>
</head>
<!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
<div class="page-wrapper">
<!-- start header -->
<div class="page-header navbar navbar-fixed-top ">
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
<img alt="" class="img-circle " src="<?php echo $rows->photo;?>"  />
<span class="username username-hide-on-mobile"><?php echo $name;  ?> </span>
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
<li>
<a href="changeprofilepic.php">
<i class="icon-lock"></i> Change Profile Picture </a>
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
<img src="<?php echo $rows->photo;?>"  class="img-circle user-img-circle" alt="User Image" />
</div>
<?php } }
?>
<div class="pull-left info">
<p> <?php echo $name; ?></p>
<a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline"> Online</span></a>
</div>
</div>
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
<div class="page-content-wrapper">
<div class="page-content">
<div class="page-bar">
<div class="page-title-breadcrumb">
<div class=" pull-left">
<div class="page-title"><a href="dashboard_pres.php">Presscart</a></div>
</div>
<div class=" pull-right">
<div class="page-title">Dashboard</div>
</div>

</div>
</div>
<!-- start widget -->
<?php 

$sql = "SELECT count(vendor_id) as 'count'  from vendors";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row) 
{ ?>
<div class="state-overview">
<div class="row">
<div class="col-xl-3 col-md-6 col-12">
<div class="info-box bg-blue">
<span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
<div class="info-box-content">
<span class="info-box-text">Vendors</span>

<span class="info-box-number"><?php echo $row->count; ?></span>
<div class="progress">
<div class="progress-bar" style="width: 45%"></div>
</div>
<span class="progress-description">

</span>
</div>
<!-- /.info-box-content -->
</div>
<?php } }
?>
<!-- /.info-box -->
</div>
<!-- /.col -->
<div class="col-xl-3 col-md-6 col-12">
<div class="info-box bg-orange">
<?php 

$sql = "SELECT count(Client_id) as 'count'  from clients";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row) 
{ ?>
<span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
<div class="info-box-content">
<span class="info-box-text">Clients</span>
<span class="info-box-number"><?php echo $row->count; ?></span>
<div class="progress">
<div class="progress-bar" style="width: 40%"></div>
</div>
<span class="progress-description">

</span>
</div>
<!-- /.info-box-content -->
</div>
<!-- /.info-box -->
</div>
<?php } }
?>
<!-- /.col -->
<div class="col-xl-3 col-md-6 col-12">
<div class="info-box bg-purple">
<?php 

$sql = "SELECT count(purchase_id) as 'count'  from purchase_table";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row) 
{ ?>
<span class="info-box-icon push-bottom"><i class="material-icons">content_cut</i></span>
<div class="info-box-content">
<span class="info-box-text">Total Sale</span>
<span class="info-box-number"><?php echo $row->count; ?> </span>
<div class="progress">
<div class="progress-bar" style="width: 85%"></div>
</div>
<span class="progress-description">

</span>
</div>
<!-- /.info-box-content -->
</div>
<!-- /.info-box -->
</div>
<?php } }
?>
<!-- /.col -->
<div class="col-xl-3 col-md-6 col-12">
<div class="info-box bg-success">
<?php 

$sql = "SELECT count(invoice_id) as 'count'  from vendor_invoice";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row) 
{ ?>
<span class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></span>
<div class="info-box-content">
<span class="info-box-text">Total Purchase</span>
<span class="info-box-number"><?php echo $row->count; ?></span><span></span>
<div class="progress">
<div class="progress-bar" style="width: 50%"></div>
</div>
<span class="progress-description">

</span>
</div>
<!-- /.info-box-content -->
</div>
<?php } }
?>
<!-- /.info-box -->
</div>
<!-- /.col -->
</div>
</div>
<!-- end widget -->
<!-- chart start -->

<!-- Chart end -->

<div class="tab-content">
<div class="tab-pane active fontawesome-demo" id="tab1">
<div class="row">
<div class="col-md-12">
<div class="card card-topline-red">
<div class="card-head">
<header>Last 7 days Client List</header>
<div class="tools">
<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
</div>
</div>
<div class="card-body ">
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-6">
<div class="btn-group">
<a href="add_client.php" id="addRow" class="btn btn-info">
Add New <i class="fa fa-plus"></i>
</a>
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-6">

</div>
</div>
<div class="table-scrollable">
<table class="table table-hover table-checkable order-column full-width" id="example4">
<thead>
<tr>
<th> Client Id</th>
<th>Client Name</th>

<th>Date</th>
<th>GST NO</th>
<th>Mobile</th>
<th>Address</th>



</tr>
</thead>
<tbody>
<?php 

$sql = "SELECT * FROM `clients` WHERE date <= CURRENT_DATE-7";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row) 
{ ?><tr>
<td class="center"><?php echo htmlentities($row->client_id);?></td>  
<td class="center"><?php echo htmlentities($row->client_name);?></td>

<td class="center nowrap"><?php echo htmlentities($row->date); ?></td>
<td class="center"><?php echo htmlentities($row->gst_no); ?></td>
<td class="center"><?php echo htmlentities($row->mobile_no); ?></td>
<td class="center"><?php echo htmlentities($row->address);?></td>


</tr>

<?php } }
?>
</tbody>
<tbody>

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
<!-- start the vendor list -->
<!-- start admited patient list -->
<div class="tab-content">
<div class="tab-pane active fontawesome-demo" id="tab1">
<div class="row">
<div class="col-md-12">
<div class="card card-topline-red">
<div class="card-head">
<header>LAST 7 DAYS vendor LIST</header>
<div class="tools">
<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
</div>
</div>
<div class="card-body ">
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-6">
<div class="btn-group">
<a href="add_vendor.php" id="addRow" class="btn btn-info">
Add New <i class="fa fa-plus"></i>
</a>
</div>
</div>

</div>
<div class="table-scrollable">
<table class="table table-hover table-checkable order-column full-width" id="example4">
<thead>
<tr>
<th class="center"> Vendor Id</th>
<th>Vendor Name</th>

<th>Date</th>
<th>GST NO</th>
<th>Mobile</th>
<th>Address</th>

</tr>
</thead>
<tbody>

<?php 

$sql = "SELECT * FROM `vendors` WHERE date <= CURRENT_DATE-7";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row) 
{ ?><tr>
<td class="center"><?php echo htmlentities($row->vendor_id);?></td>  
<td class="center"><?php echo htmlentities($row->vendor_name);?></td>

<td class="center nowrap"><?php echo htmlentities($row->date); ?></td>
<td class="center"><?php echo htmlentities($row->gst_no);?></td>
<td class="center"><?php echo htmlentities($row->mobile_no); ?></td>
<td class="center"><?php echo htmlentities($row->address);?></td>
<!--DATE_SUB(CURDATE(), INTERVAL 7 DAY)-->

</tr>

<?php } }
?>
</tbody>



</table>
</div>
</div>
</div>
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
<script src="../assets/jquery.min.js" ></script>
<script src="../assets/popper/popper.js" ></script>
<script src="../assets/jquery.blockui.min.js" ></script>
<script src="../assets/jquery.slimscroll.js"></script>
<!-- bootstrap -->
<script src="../assets/bootstrap/js/bootstrap.min.js" ></script>
<script src="../assets/bootstrap-switch/js/bootstrap-switch.min.js" ></script>
<!-- counterup -->
<script src="../assets/counterup/jquery.waypoints.min.js" ></script>
<script src="../assets/counterup/jquery.counterup.min.js" ></script>
<!-- Common js-->
<script src="../assets/app.js" ></script>
<script src="../assets/layout.js" ></script>
<script src="../assets/theme-color.js" ></script>
<!-- material -->
<script src="../assets/material/material.min.js"></script>
<!-- chart js -->
<script src="../assets/chart-js/Chart.bundle.js" ></script>
<script src="../assets/chart-js/utils.js" ></script>
<script src="../assets/chart-js/home-data.js" ></script>
<!-- end js include path -->
</body>

<!-- Mirrored from radixtouch.in/templates/admin/redstar/source/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Jun 2018 06:07:13 GMT -->
</html>
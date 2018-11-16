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
$sth1 = $dbh->prepare("SELECT exp_prod_id,exp_prod_name FROM expense_products WHERE status=1 ORDER BY exp_prod_name ASC");
$sth1->execute();
$result_exp_product = $sth1->fetchAll();
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
<span class="username username-hide-on-mobile"><?php echo $name; ?> </span>
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
<p> <?php echo $name; ?></p>
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
<div class="page-title">ADD EXPENSES</div>
</div>
<ol class="breadcrumb page-breadcrumb pull-right">
<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="dashboard.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
</li>
<li><a class="parent-item" href="dashboard.php">JAGDAMBA PRINT LINE</a>&nbsp;<i class="fa fa-angle-right"></i>
</li>
<li class="active">ADD_EXPENSES</li>
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


<div class="row">
<div class="col-md-12">
<div class="white-box">
<h3 class="pull-left"><b>All Expenses </b></h3>
<a class="pull-right btn" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add Product</a>
<div class="clearfix"></div>
<hr>

<div class="row">

<div class="col-md-12">
<div class="table-responsive m-t-40">
<table class="table table-hover">
<thead>
<tr>
<th>Date</th>
<th>Product Name</th>
<th>Rate</th>
<th>Quantity</th>
<th>Total</th>

</tr>
</thead>
<tbody>

<tr>
<form action="add_expense_config.php" method="post">
<td><input type="text" value='<?php echo date('d-m-Y');?>' name="date_of_expense1">   </td>
<td>  
<select name="product_name1" class="exp_prod_dd_list">
<option value="">--Select--</option>     
<?php
foreach($result_exp_product as $row){
echo '<option value="'.$row['exp_prod_id'].'">'.$row['exp_prod_name'].'</option>';
}
?>

</select> 
</td>
<td><input type="text" name="rate1" id="rate1" placeholder="rate" onkeyup="add()" required /></td>
<td><input type="text" name="quantity1" id="quantity1" placeholder="quantity" onkeyup="add()" onblur="findtotal()" /></td>
<td><input type="text" name="Total1" id="Total1"  placeholder="total" /></td>
<script>
function add() {
a = $('#rate1').val();
b = $('#quantity1').val(); 
var sum = (a * b);
document.getElementById("Total1").value = sum;
}
</script>

</tr>
<tr>

<td><input type="text" value='<?php echo date('d-m-Y');?>' name="date_of_expense2">   </td>
<td>
<select name="product_name2" class="exp_prod_dd_list">
<option value="">--Select--</option>     
<?php
foreach($result_exp_product as $row){
echo '<option value="'.$row['exp_prod_id'].'">'.$row['exp_prod_name'].'</option>';
}
?>

</select> 
</td>
<td><input type="text" name="rate2" id="rate2" placeholder="rate" onkeyup="add1()" /></td>
<td><input type="text" name="quantity2" id="quantity2" placeholder="quantity" onkeyup="add1()" onblur="findtotal()" /></td>
<td><input type="text" name="Total2" id="Total2" placeholder="total" /></td>

<script>
function add1() {
a = $('#rate2').val();
b = $('#quantity2').val(); 
var sum = (a * b);
document.getElementById("Total2").value = sum;
}
</script>
</tr>
<tr>

<td><input type="text" value='<?php echo date('d-m-Y');?>' name="date_of_expense3">   </td>
<td>

<select name="product_name3" class="exp_prod_dd_list">
<option value="">--Select--</option>     
<?php
foreach($result_exp_product as $row){
echo '<option value="'.$row['exp_prod_id'].'">'.$row['exp_prod_name'].'</option>';
}
?>

</select>                                                                                                                  </td>
<td><input type="text" name="rate3" id="rate3" placeholder="rate" onkeyup="add2()" /></td>
<td><input type="text" name="quantity3" id="quantity3" placeholder="quantity" onkeyup="add2()" onblur="findtotal()" /></td>
<td><input type="text" name="Total3" id="Total3" placeholder="total" /></td>

<script>
function add2() {
a = $('#rate3').val();
b = $('#quantity3').val(); 
var sum = (a * b);
document.getElementById("Total3").value = sum;
}
</script>
</tr>
<tr>

<td><input type="text" value='<?php echo date('d-m-Y');?>' name="date_of_expense4">   </td>
<td> 
<select name="product_name4" class="exp_prod_dd_list">
<option value="">--Select--</option>     
<?php
foreach($result_exp_product as $row){
echo '<option value="'.$row['exp_prod_id'].'">'.$row['exp_prod_name'].'</option>';
}
?>

</select>
</td>
<td><input type="text" name="rate4" id="rate4" placeholder="rate" onkeyup="add3()" /></td>
<td><input type="text" name="quantity4" id="quantity4" placeholder="quantity" onkeyup="add3()" onblur="findtotal()"/></td>
<td><input type="text" name="Total4" id="Total4" placeholder="total" /></td>

<script>
function add3() {
a = $('#rate4').val();
b = $('#quantity4').val(); 
var sum = (a * b);
document.getElementById("Total4").value = sum;
}

function findtotal() {
a = $ ('#Total1').val();
b = $ ('#Total2').val(); 
c = $ ('#Total3').val();
d = $ ('#Total4').val();
if(a == ''){
a = 0;                                                                                                       }
if(b == ''){
b = 0;                                                                                                       }
if(c == ''){
c = 0;                                                                                                       }
if(d == ''){
d = 0;                                                                                                       }


a1 = parseInt(a);
b1 = parseInt(b);
c1 = parseInt(c);
d1 = parseInt(d);
var sum = (a1 + b1 + c1 + d1);
document.getElementById("total_sum").value = sum;
}



</script>
</tr>


<h3 style="float: right;">Total <input type="text" name="total_no" id="total_sum"></h3> 

<button type="submit" name="submit1" class="btn btn-info" >Submit</button>
</form>
</tbody>

</table>

</div>
</div>

</div>
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
<!-- start chat sidebar -->

</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Add Expense Product</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
<!--<h4 class="modal-title">Modal Header</h4>-->
</div>
<div class="modal-body">
<div class="text-center" style="display: none;" id="txtSaved">Successfully Saved.</div>   
<div class="form-group">
<label for="email">Product Name</label>
<input type="text" class="form-control" id="expProductName" required pattern="[a-z,A-Z\s]{3,30}">
</div>
<button type="submit" class="btn btn-default" id="btnAddExpProduct">Add</button>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div>

<!-- end page container -->
<!-- start footer -->
<div class="page-footer">
<div class="page-footer-inner"> 2018 &copy;Jagdamba Management By
<a href="https://www.succexa.in" target="_top" class="makerCss">succexa</a>
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
<script type="text/javascript">
$('#btnAddExpProduct').click(function(){
var prod_name = $('#expProductName').val();
prod_name = prod_name.trim();
if(prod_name == ''){
alert('Please enter the product name');
return false;
}
$.ajax({
url: 'add_expense_config.php',
method: 'post',
data: { prod_name: prod_name },  
})
.done(function( msg ) {
$('#txtSaved').show();
if(msg > 0 && !isNaN(msg)){
$('.exp_prod_dd_list').append('<option value="'+msg+'">'+prod_name+'</option>');
$('#txtSaved').text("Successfully Inserted");
$('#expProductName').val('');
}
else{
$('#txtSaved').text(msg);
}
});

});
</script>
</body>

<!-- Mirrored from radixtouch.in/templates/admin/redstar/source/light/add_doctor.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Jun 2018 06:09:19 GMT -->
</html>
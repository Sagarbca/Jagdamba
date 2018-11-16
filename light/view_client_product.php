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
<?php
include_once 'config2.php';
 $v =$_POST['invoice'];
 $f =$_POST['From'];
 $t =$_POST['to'];
$whereCondition = " ";
if (isset($_POST['invoice']) && $_POST['invoice'] != '') {
$whereCondition .= " WHERE client_id='".$_POST['invoice']."'";
}
//if (isset($_POST['From']) && $_POST['From'] != '') {
//	$whereCondition .= " AND `date` BETWEEN '".$_POST["From"]."' AND '".$_POST["to"]."'";
//}
if (isset( $_POST['From'],$_POST['to'])) {
if ( $_POST['From'] != '' && $_POST['to'] != '' ) {
$whereCondition .= " AND `datept` BETWEEN '".$_POST["From"]."' AND '".$_POST["to"]."' ";
}

}
if(isset($_POST['print'])){
  
  $v =$_POST['invoice'];
 $f =$_POST['From'];
 $t =$_POST['to'];
 echo "<script>window.open('client_statement.php?client_id=$v&from=$f&to=$t','_self')</script>";
 
}
$qry = mysqli_query($db, "SELECT * FROM `vendors`");
for ($vendor = array (); $row_2 = $qry->fetch_assoc(); $vendor[] = $row_2);
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
<style>
    
.nowrap {
    white-space: nowrap;
}
</style>
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
<span class="username username-hide-on-mobile"> <?php echo $name; ?> </span>
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
<p> <?php echo $name; ?> </p>
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
<a href="view_vendor.php" class="nav-link "> <span class="title"> All Vendors</span>
</a>
</li>
<li class="nav-item  ">
<a href="view_vendor_product.php" class="nav-link "> <span class="title"> All Vendors Products</span>
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
<a href="view_client.php" class="nav-link "> <span class="title"> All Clients</span>
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
<div class="page-content-wrapper">
<div class="page-content">
<div class="page-bar">
<div class="page-title-breadcrumb">
<div class=" pull-left">
<div class="page-title">Client Products</div>
</div>
<ol class="breadcrumb page-breadcrumb pull-right">
<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="dashboard.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
</li>
<li><a class="parent-item" href="dashboard.php">JAGDAMBA PRINT LINE</a>&nbsp;<i class="fa fa-angle-right"></i>
</li>
<li class="active">Invoice Reports</li>
</ol>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="tabbable-line">
<!-- <ul class="nav nav-tabs">
<li class="active">
<a href="#tab1" data-toggle="tab"> List View </a>
</li>
<li>
<a href="#tab2" data-toggle="tab"> Grid View </a>
</li>
</ul> -->
<ul class="nav customtab nav-tabs" role="tablist">
<li class="nav-item"><a href="#tab1" class="nav-link active"  data-toggle="tab" >List View</a></li>

</ul>
<div class="tab-content">
<div class="tab-pane active fontawesome-demo" id="tab1">
<div class="row">
<div class="col-md-12">
<div class="card card-topline-red">
<div class="card-head">
<header></header>
<div class="tools">
<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
</div>
</div>

<div class="row">

<form action="view_client_product.php" method="post" style="">

<!-- order status-->
<div class="row">

<div class="col-xs-5" style="    padding: 0px 9px 13px 33px;">
<select class="form-control" name="invoice" id="invoice">

<option value="">All Client</option>
<?php
include_once 'config2';
$sql = mysqli_query($db,"SELECT * FROM `clients`");
while ($value = mysqli_fetch_assoc($sql)) 
{
?>

<option value="<?=$value['client_id']?>" <?= isset($_POST['invoice']) && $_POST['invoice'] == $value['client_id']?'selected':''?> ><?=$value['client_name']?></option>
<?php
} 
?>

</select>
</div>
<!--order status-->

<div class="col-xs-2">
<input type="text" name="From" id="fromDate" class="form-control" placeholder="From Date" value="<?= isset($_POST['From']) && $_POST['From'] != ''?$_POST['From']:'' ?>" />
</div>
<div class="col-xs-2">
<input type="text" name="to" id="toDate" class="form-control" placeholder="To Date" value="<?= isset($_POST['to']) && $_POST['to'] != ''?$_POST['to']:'' ?>" />
</div>


<div class="col-xs-2" style="padding:0px 0px 0px 12px;">
<button class="form-control btn btn-info"  type="submit" name="submit">Apply</button>
</div>
<div class="col-xs-2" style="padding:0px 0px 0px 12px;">
<button class="form-control btn btn-info"  type="submit" name="print">Print Statement</button>
</div>
</form>
</div>
<form action="function.php" method="post">
<button class="btn btn-info btn-action ecom-bg-csv m-l-10 pull-right"  style="margin-top: 0px; margin-right: -30%;"  name="all_client_report" >Export</button>
</form>
</div>                          
<div class="card-body ">
<div class="row">


</div>
<div class="table-scrollable">
<table class="table table-hover table-checkable order-column full-width" id="example4">
<thead>
<tr>
<th>Invoice Id</th>
<th> Invoice Date</th>
<th>Client Name</th>

<th>Total Amount</th>
<th>Discount</th>
<th>Net Amount</th>
<th>Pay</th>
<th>Dues.</th>

<th>Payment Mode</th>
<th>Cheque No</th>

<th>Delete</th>

</tr>
</thead>
<tbody>

<?php 

$sql = "SELECT * from  purchase_table".$whereCondition;;
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row) 
{ ?><tr>
<td class="center "><?php echo htmlentities($row->purchase_id);?></td> 
<td class="center nowrap"><?php $date=$row->datept; $localtime= new DateTime($date);
$localtime->add(new DateInterval('PT8H'));
$exacttime= $localtime->format('d-m-Y '); echo $exacttime; ?></td>
<?php  htmlentities($row->client_id); $client_id = $row->client_id;?>
<?php  $sqll = "SELECT * from  clients where client_id = $client_id";
//echo $sql;
$queryl = mysqli_query($db,$sqll);
//$query->execute();
while ($rows = mysqli_fetch_assoc($queryl)) 
{
     
     $client_name = $rows['client_name'];
     
     ?>
     <td class="center"><?php echo $client_name; ?></td>
<?php } ?>

<?php $tot = $row->totalPrice;
if($tot == 0){
    ?>
   <td class="center"><?php ?></td>
<td class="center"><?php  ?></td>
<td class="center"><?php ?></td> 
<?php
}
else{

?>
<td class="center"><?php echo htmlentities($row->totalPrice);?></td>
<td class="center"><?php echo htmlentities($row->discount); ?></td>
<td class="center"><?php echo htmlentities($row->net_amount);?></td><?php
}?>
<td class="center"><?php echo htmlentities($row->payble); ?></td>
<td class="center"><?php echo htmlentities($row->total_due);?></td>
<td class="center"><?php echo htmlentities($row->payment_method);?></td>
<td class="center"><?php echo htmlentities($row->deposite_account); ?></td>
<td class="center">
    <?php
if($tot == 0){
    ?>
    
<?php
}
else{
    ?>
     <div class="dropdown">
         <button type="button" class="btn btn-info btn-xs gropdown-toggle" data-toggle="dropdown">
                              Action<span class="caret"></span>
                            </button>
                             <ul class="dropdown-menu dropdown-menu-right">
                              <li>
<a href="sales_pdf.php?edit1=<?php echo $row->purchase_id ;?>&name=staff">
<i class="fa fa-file-text-o"></i>view Bill
</a>
</li>
<li>
    <a href="edit_client_product.php?edit1=<?php echo $row->purchase_id ;?>&name=staff"><i class="fa fa-edit"></i>Edit Bill</a>
    </li>
    <li>
    <a href="delete_client_product.php?del=<?php echo $row->purchase_id ;?>&name=staff"><i class="fa fa-trash"></i>Delete Bill</a>
    </li>
</ul>
</div>
<?php } ?>
</td>
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

<script src="../assets/popper/popper.js" ></script>
<script src="../assets/jquery.blockui.min.js" ></script>
<script src="../assets/jquery.slimscroll.js"></script>
<!-- bootstrap -->
<script src="../assets/bootstrap/js/bootstrap.min.js" ></script>
<script src="../assets/bootstrap-switch/js/bootstrap-switch.min.js" ></script>
<!-- data tables -->
<script src="../assets/datatables/jquery.dataTables.min.js" ></script>
<script src="../assets/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js" ></script>
<script src="../assets/table_data.js" ></script>
<!-- Common js-->
<script src="../assets/app.js" ></script>
<script src="../assets/layout.js" ></script>
<script src="../assets/theme-color.js" ></script>
<!-- Material -->
<script src="../assets/material/material.min.js"></script>
<!-- end js include path -->
</body>

<script>


function export_xls() {
// alert("hello");

//alert(id);

var to =  $('#to').val();
var from = $('#From').val();
//var vendor = $('#vendor').val();
var invoice = $('#invoice').val();

window.location.href = "UserReport_Export1.php?from=" + from + "&to="+to;

}
$( function() {
  var from = $( "#fromDate" )
      .datepicker({
        dateFormat: "dd-mm-yy",
        changeMonth: true
      })
      .on( "change", function() {
        to.datepicker( "option", "minDate", getDate( this ) );
      }),
    to = $( "#toDate" ).datepicker({
      dateFormat: "dd-mm-yy",
      changeMonth: true
    })
    .on( "change", function() {
      from.datepicker( "option", "maxDate", getDate( this ) );
    });

  function getDate( element ) {
    var date;
    var dateFormat = "yy-mm-dd";
    try {
      date = $.datepicker.parseDate( dateFormat, element.value );
    } catch( error ) {
      date = null;
    }

    return date;
  }
});
</script></html>
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
$adv = 0;
?>
<?php


if (isset($_GET['edit1'])) {
$staff_id = $_GET['edit1'];
}
$sql = "SELECT * from  staffs WHERE staff_id ='$staff_id'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row) 
{

$remainingsalary = 0; 

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
<a href="index.php" class="nav-link nav-toggle">
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
<div class="page-title">STAFF DETAIL</div>
</div>
<ol class="breadcrumb page-breadcrumb pull-right">
<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="dashboard.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
</li>
<li><a class="parent-item" href="dashboard.php">JAGDAMBA PRINT LINE</a>&nbsp;<i class="fa fa-angle-right"></i>
</li>
<li class="active">STAFF_DETAILS</li>
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
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="btn-group">
                                    <a href="add_staff.php" id="addRow" class="btn btn-info">
                                        Add New <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            
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
<div class="card-head">
    <header>Basic Information</header>
     <button id = "panel-button" 
           class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
           data-upgraded = ",MaterialButton">
           <i class = "material-icons">more_vert</i>
        </button>

</div>

<div class="card-body" id="bar-parent">
    <form action="staff_details_cofig.php" method="post" id="form_sample_1" class="form-horizontal">

        <div class="form-body">
        	 <div class="form-group row">
                <label class="control-label col-md-3">
				
                    <span class="required">  </span>
                </label>
                <div class="col-md-5">
                    <input type="hidden" name="staff_id" data-required="1" placeholder="enter name" class="form-control input-height" value='<?php echo htmlentities($row->staff_id);?>'/> </div>
            </div>
		<div class="form-group row">
                <label class="control-label col-md-3">
                Date of joinning                                                                                            
                    <span class="required"></span>
                </label>
                <div class="col-md-5">
                    <input type="text" name="date" data-required="1" placeholder="date" class="form-control input-height" value='<?php echo htmlentities($row->doj);?>' readonly/> </div>
            </div>
            </div>
           
        <div class="form-group row">
                <label class="control-label col-md-3">NAME
				
                    <span class="required">  </span>
                </label>
                <div class="col-md-5">
                    <input type="text" name="name" data-required="1" placeholder="enter name" class="form-control input-height" value='<?php echo htmlentities($row->staff_name);?>' readonly/> </div>
            </div>
            
            <div class="form-group row">
                <label class="control-label col-md-3">MOBILE NO
                </label>
                <div class="col-md-5">
                    <div class="input-group">
                        
                        <input type="text" class="form-control input-height" name="mobile_no" readonly placeholder="enter the mobile_no" value='<?php echo htmlentities($row->mobile_no);?>'> </div>
                </div>
            </div>
           
           
            
            
			
           
			
               
			 
			 
			
			
           <div class="form-group row">
                <label class="control-label col-md-3">SALARY
                    <span class="required"> * </span>
                </label>
                <div class="col-md-5">
                    <input name="salary" readonly placeholder="enter the salary here" class="form-control input-height" value='<?php echo htmlentities($row->salary);?>' />
                </div>
            </div>
			

			<hr>
			
			
			 
<h3 style="padding-left: 160px;"> 
<?php 

$securityquery = "SELECT remaining_s_amt FROM security_transaction WHERE st_id = (SELECT MAX(st_id) FROM `security_transaction` WHERE staff_id = '$staff_id')";
$queryrunning = $dbh -> prepare($securityquery);
$queryrunning->execute();
$resultssecurity=$queryrunning->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($queryrunning->rowCount() > 0)
{
foreach($resultssecurity as $rows) 
{



?>
Security Money = <?php echo htmlentities($rows->remaining_s_amt);?> <?php } }?> </h3>
            	  
<div class="form-group row">
<label class="control-label col-md-3">Security Money
<span class="required">  </span>
</label>

<div class="col-md-5">
<input name="security_money" placeholder="enter the security_money here" class="form-control input-height"  >
</div>
</div>
<div class="form-group row">
                <label class="control-label col-md-3">Remarks
                    <span class="required">  </span>
                </label>
                <div class="col-md-5">
                    <input name="sec_remarks" placeholder="enter the remarks here" class="form-control input-height"  >
                </div>
            </div>
            <hr>


       
         <h3 style="padding-left: 160px;"> 
         	 <?php 

			$advance_money = "SELECT remaining_a_amt FROM advance_transaction WHERE ad_id = (SELECT MAX(ad_id) FROM `advance_transaction` WHERE staff_id = '$staff_id')";
			$queryrunningadvance = $dbh -> prepare($advance_money);
            $queryrunningadvance->execute();
            $resultadvance=$queryrunningadvance->fetchAll(PDO::FETCH_OBJ);
            $cnt=1;
            if($queryrunningadvance->rowCount() > 0)
            {
            foreach($resultadvance as $rowss) 
            {

            $adv = $rowss->remaining_a_amt;

             ?>




         Advance Money =  <?php echo $adv;?> <?php } }?></h3>
             <div class="form-group row">
                <label class="control-label col-md-3">Advance Money
                    <span class="required">  </span>
                </label>
                <div class="col-md-5">
                    <input name="advance_money" placeholder="enter the advance here" class="form-control input-height"  >
                </div>
            </div>


            <div class="form-group row">
                <label class="control-label col-md-3">Remarks
                    <span class="required">  </span>
                </label>
                <div class="col-md-5">
                    <input name="adv_remarks" placeholder="enter the remarks here" class="form-control input-height"  >
                </div>
            </div>
<hr>

<!-- here the table start for the salary calculation -->
<div class="container-fluid">
<div class="row">
<table class="table table-hover" id="purchaseItems">
<thead >
<tr >

<th>No Of Days</th>
<th>Actual Days</th>
<th>General Salary</th>
<th></th>
<th>OT</th>
<th></th>
<th>Total Salary</th>

<th></th>
</tr>
</thead>
<tbody>
<tr >

<td><input type="text" name="no_of_days" class="no_of_days form-control" size="5" ></td>
<td><input type="text" name="actual_days"  class="actual_days form-control" size="5" required></td>
<td><input type="text" name="general_salary"  class="general_salary form-control" size="4" ></td>
<td>+</td>
        <td><input type="text" name="ot"  class="ot form-control" size="1">  </td>
<td>=</td>
<td><input type="text" name="total_salary" class="total_salary form-control" size="7"></td> 
</tr>

</tbody>
<tfoot>
<tr>
<th class="center"></th>
<td> </td>
</tr>


</tfoot>
</table>
</div>
</div>
<?php 
$sqlll = "SELECT * from  salary WHERE staff_id ='$staff_id'";
$queryy = $dbh -> prepare($sqlll);
$queryy->execute();
$results=$queryy->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($queryy->rowCount() > 0)
{
foreach($results as $rowsss) 
{



?>


<!-- Here the table ends for the salary calculation -->
<?php
$total_salary =  $rowsss->total_salary;


}}

?>
            
            <h4 style="padding-left: 160px;"> Salary = <span id ="total_salary"></span> - <?php 
                 $rem = 0;
                if($rowss->remaining_a_amt == '' || $rowss->remaining_a_amt == NULL){
                    $rem = 0;
                }
                else {
                    $rem = $rowss->remaining_a_amt;
                }

                if($rem <0){
                   echo "(".$rem.")";  
                }
                else{

            echo $rem;
        }?> = 
            	<?php 
            	
            	
            $remainingsalary = ($total_salary - $rowss->remaining_a_amt) ; 
//hshdfjsdfhjsdhfjshdfjhsdjfhjsdhfjsdhfjsdhfjsdfhjsdhfjsdhfjsdfhjsdf
            echo "<span id='next_salary'></span>";   //$remainingsalary
            ?></h4>
             <div class="form-group row">
             
                <label class="control-label col-md-3">Salary 
                    <span class="required">  </span>
                </label>
                
                <div class="col-md-5">
                    <input name="salary" placeholder="enter the salary here" class="form-control input-height"  >
                </div>
                
            </div>
			 

             <div class="form-group row">
             
                <label class="control-label col-md-3">Remarks 
                    <span class="required">  </span>
                </label>
                <div class="col-md-5">
                    <input name="salary_remarks" placeholder="enter the Remarks here" class="form-control input-height"  >
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
			 <div class="row">

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
<!-- end page container -->
<!-- start footer -->
<div class="page-footer">
<div class="page-footer-inner"> 2018 &copy; Jagdamba Management By
<a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">succexa</a>
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
<script>
    $(document).ready(function(){

    
  
  $( ".no_of_days,.actual_days,.ot" ).keyup(function() {
      var staffSalary= <?php echo htmlentities($row->salary);  ?>;
      
  var no_of_days =  $('.no_of_days').val();
  var actual_days =  $('.actual_days').val();
  var general_salary = ((staffSalary/no_of_days)* actual_days).toFixed(2);  
  $('.general_salary').val(general_salary);
  var ot =  $('.ot').val();
  if(ot==''||ot==undefined)
  {
      ot=0;
  }
  var total_salary = (parseFloat(ot)+ parseFloat(general_salary)).toFixed(2);
  $('.total_salary').val(total_salary);
  $("#total_salary").html(total_salary);
      
      
      var advAmt = <?php echo $adv; ?>;
      next_salary = total_salary-advAmt;
      $("#next_salary").html(next_salary);
      
      
  });
  
  

});
    
</script>
<?php } } ?>
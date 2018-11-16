<?php 
session_start();
 $name = $_SESSION['name']; 

?>
<?php
include("config.php");
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
                <div class="page-logo">
                    <a href="index.php">
                    <span class="logo-icon fa fa-stethoscope fa-rotate-45"></span>
                    <span class="logo-default" >JAGDAMBA </span> </a>
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
                                <img alt="" class="img-circle " src="img/dp.jpg" />
                                <span class="username username-hide-on-mobile"><?php echo $name; ?> </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="profile.php">
                                        <i class="icon-user"></i> Profile </a>
                                </li>
                                
                                
                                <li class="divider"> </li>
                                
                                <li>
                                    <a href="logout.php">
                                        <i class="icon-logout"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end manage user dropdown -->
                        <li class="dropdown dropdown-quick-sidebar-toggler">
                             <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
	                           <i class="material-icons">more_vert</i>
	                        </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->
        <!-- start color quick setting -->
        <div class="quick-setting-main">
			<button class="control-sidebar-btn btn" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></button>
			<div class="quick-setting display-none">
				<ul id="themecolors" >
				<li><p class="selector-title">Main Layouts</p></li>
				<li class="complete"><div class="theme-color layout-theme">
				<a href="#" data-theme="light"><span class="head"></span><span class="cont"></span></a>
				<a href="http://radixtouch.in/templates/admin/redstar/source/dark/index.html" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
				</div></li>	
				<li><p class="selector-title">Sidebar Color</p></li>
				<li class="complete"><div class="theme-color sidebar-theme">
				<a href="#" data-theme="white"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="blue"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="indigo"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="cyan"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="green"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="red"><span class="head"></span><span class="cont"></span></a>
				</div></li>
             	<li><p class="selector-title">Header Brand color</p></li>
             	<li class="theme-option"><div class="theme-color logo-theme">
             	<a href="#" data-theme="logo-white"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-dark"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-blue"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-indigo"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-cyan"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-green"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-red"><span class="head"></span><span class="cont"></span></a>
             	</div></li>
             	<li><p class="selector-title">Header color</p></li>
             	<li class="theme-option"><div class="theme-color header-theme">
             	<a href="#" data-theme="header-white"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-dark"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-blue"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-indigo"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-cyan"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-green"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
             	</div></li>
			</ul>
			</div>
		</div>
		<!-- end color quick setting -->
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
	                                    <img src="img/dp.jpg" class="img-circle user-img-circle" alt="User Image" />
	                                </div>
	                                <div class="pull-left info">
	                                    <p> <?php echo $name; ?></p>
	                                    <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline"> Online</span></a>
	                                </div>
	                            </div>
	                        </li>
	                        <li class="nav-item start active open">
	                            <a href="index.php" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Dashboard</span>
	                                <span class="selected"></span>
                                	<span class="arrow open"></span>
	                            </a>
	                            
	                        </li>
	                        
	                        <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle"><i class="material-icons">assignment</i>
	                            <span class="title">Vendors</span><span class="arrow"></span></a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="invoice.php" class="nav-link "> <span class="title"> Add Vendor</span>
	                                    </a>
	                                </li>
									
									 <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle"><i class="material-icons">assignment</i>
	                            <span class="title"> All Vendors</span><span class="arrow"></span></a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="invoice.php" class="nav-link "> <span class="title"> Add Products</span>
	                                    </a>
	                                </li>
									<li class="nav-item  ">
	                                    <a href="invoice.php" class="nav-link "> <span class="title"> View Profile</span>
										</a>
	                                 </li>
	                                   </ul>
	                               </li> 
										
	                                 </ul>
	                        </li>
	                       
	                        <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle"><i class="material-icons">assignment</i>
	                            <span class="title">Clients</span><span class="arrow"></span></a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="invoice.php" class="nav-link "> <span class="title"> Add Clients</span>
	                                    </a>
	                                </li>
									
									 <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle"><i class="material-icons">assignment</i>
	                            <span class="title"> All Clients</span><span class="arrow"></span></a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="invoice.php" class="nav-link "> <span class="title"> Add Products</span>
	                                    </a>
	                                </li>
									<li class="nav-item  ">
	                                    <a href="invoice.php" class="nav-link "> <span class="title"> View Profile</span>
										</a>
	                                 </li>
	                                   </ul>
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
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">JAGDAMBA PRINT LINE</a>&nbsp;<i class="fa fa-angle-right"></i>
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
					                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
						                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
						                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
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
					                                        <div class="col-md-6 col-sm-6 col-xs-6">
					                                            <div class="btn-group pull-right">
					                                                <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
					                                                    <i class="fa fa-angle-down"></i>
					                                                </a>
					                                                <ul class="dropdown-menu pull-right">
					                                                    <li>
					                                                        <a href="javascript:;">
					                                                            <i class="fa fa-print"></i> Print </a>
					                                                    </li>
					                                                    <li>
					                                                        <a href="javascript:;">
					                                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
					                                                    </li>
					                                                   
					                                                </ul>
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
				                        <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
				                           data-mdl-for = "panel-button">
				                           <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
				                        </ul>
                                </div>
								
                                <div class="card-body" id="bar-parent">
                                    <form action="staff_details_cofig.php" method="post" id="form_sample_1" class="form-horizontal">
                                        <div class="form-body">
										<div class="form-group row">
                                                <label class="control-label col-md-3">
                                                Date of joinning                                                                                            
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="date" data-required="1" placeholder="date" class="form-control input-height" value='<?php echo htmlentities($row->doj);?>' /> </div>
                                            </div>
                                            </div>
                                        <div class="form-group row">  
                                                <label class="control-label col-md-3">NAME
												
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="name" data-required="1" placeholder="enter name" class="form-control input-height" value='<?php echo htmlentities($row->staff_name);?>'/> </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">MOBILE NO
                                                </label>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        
                                                        <input type="text" class="form-control input-height" name="mobile_no" placeholder="enter the mobile_no" value='<?php echo htmlentities($row->mobile_no);?>'> </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">AADHAR NO
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="aadhar_no" data-required="1" placeholder="enter Aadhar no" class="form-control input-height" value='<?php echo htmlentities($row->aadhar_no);?>' /> </div>
                                            </div>
                                           
                                            
                                            
											
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">EMAIL
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input name="email" type="text" placeholder="enter the email" class="form-control input-height" value='<?php echo htmlentities($row->email);?>' /> </div>
                                            </div>
											
                                               
											 
											 
											
											
                                        	 <div class="form-group row">
                                                <label class="control-label col-md-3">SALARY
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input name="salary" placeholder="enter the salary here" class="form-control input-height" value='<?php echo htmlentities($row->salary);?>' />
                                                </div>
                                            </div>
											
											
											 <div class="form-group row">
                                                <label class="control-label col-md-3">ADDRESS
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input name="address" placeholder="enter the address here" class="form-control input-height" value='<?php echo htmlentities($row->address);?>' />
                                                </div>
                                            </div>
											 <div class="form-body">
										<div class="form-group row">
                                                <label class="control-label col-md-3">
                                                Date of advance                                                                                            
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="date_advance" data-required="1" placeholder="date" class="form-control input-height" value="<?php echo date('Y-m-d');?>" /> </div>
                                            </div>
                                            </div>

                                             <div class="form-group row">
                                                <label class="control-label col-md-3">ADVANCE MONEY
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input name="advance_money" placeholder="enter the advance here" class="form-control input-height"  >
                                                </div>
                                            </div>

											 
											
											<div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <button type="submit" name="submit1" class="btn btn-info" >Submit</button>
                                                    <button type="button" class="btn btn-default">Cancel</button>
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
            <?php } } ?>
			
            <!-- end page content -->
            <!-- start chat sidebar -->
            
        </div>
        <!-- end page container -->
        <!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2017 &copy; RedStar Hospital Theme By
                <a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">RT Theme maker</a>
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
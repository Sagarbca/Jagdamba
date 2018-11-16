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
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
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
<body >
<div class="row">
<div class="col-md-12 col-sm-12">
<div class="card card-box">


<div class="card-body" id="bar-parent">
<form action="vendors_product.php" method="post" id="form_sample_1" class="form-horizontal">
<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Order No.                                                                                            
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" name="order_no" data-required="1" placeholder="Order No.  " class="form-control input-height" value='<?php echo date('Y-m-d');?>' /> </div>
</div>
</div>
<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Vendor Id                                                                                            
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" name="vendor_id" data-required="1" placeholder="Name " class="form-control input-height" value='<?php echo htmlentities($row->vendor_id);?>' /> </div>
</div>
<div class="form-group row">
<label class="control-label col-md-3">Vendor Name                                                                                            
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" name="vendor_name" data-required="1" placeholder="Name " class="form-control input-height" value='<?php echo htmlentities($row->vendor_name);?>' /> </div>
</div>
</div>
<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Date                                                                                            
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" name="date" data-required="1" placeholder="Name " class="form-control input-height" value='<?php echo date('Y-m-d');?>' /> </div>
</div>
</div>
<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Mobile No.                                                                                           
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" name="mobile_no" data-required="1" placeholder="Name " class="form-control input-height" value='<?php echo htmlentities($row->mobile_no);?>' /> </div>
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
<label class="control-label col-md-3">Consignee

<span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" name="consignee" data-required="1" placeholder="enter Consignee" class="form-control input-height"  value='<?php echo htmlentities($row->consignee);?>'/> </div>
</div>


<div class="form-group row">
<label class="control-label col-md-3">GST NO.
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" name="gst_no" data-required="1" placeholder="enter gst" class="form-control input-height" value='<?php echo htmlentities($row->gst_no);?>' /> </div>
</div>
<div class="col-md-12">
<div class="table-responsive m-t-40">
<table class="table table-hover">
<thead>
<tr>
<th>Product Name</th>
<th>Hsn code</th>
<th>Quantity</th>
<th>Rate</th>

<th>Amount</th>
<th>GST%</th>
<th>CGST%</th>
<th>CGST Amount</th>
<th>SGST%</th>
<th>SGST Amount </th>
<th>IGST%</th>
<th>IGST Amount</th>
<th>Total Amount</th>
</tr>
</thead>
<tbody>



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



<script>
$(document).ready(function(){

var amount1=0;
var cgst_amount1=0;
var sgst_amount1=0;
var igst_amount1=0;
var total_amount1=0;
var net_amount=0;
$( "input[name='rate1']" ).keyup(function() {
var quantity1 = $("input[name='quantity1']" ).val();
var rate1 =  $("input[name='rate1']" ).val();                                


if (quantity1!=undefined||rate1!=undefined) {
amount1 = rate1*quantity1;
//alert(quantity1+" rtr "+rate1);
$('#amount1').val(amount1);                                    
} else {
rate1=0; 
quantity1=0;  
$('#amount1').val(0);  
$("input[name='rate1']" ).val(0);   
$("input[name='quantity1']" ).val(0);                                    
}

});

$( "input[name='quantity1']" ).keyup(function() {
var quantity1 = $("input[name='quantity1']" ).val();
var rate1 =  $("input[name='rate1']" ).val();                                


if (quantity1!=undefined||rate1!=undefined) {
var amount = rate1*quantity1;
//alert(quantity1+" rtr "+rate1);
$('#amount1').val(amount);                                     
} else {
rate1=0; 
quantity1=0;  
$('#amount1').val(0);      
$("input[name='quantity1']" ).val(0); 
$("input[name='rate1']" ).val(0);    
return;                              
}

});

$( "input[name='gst1']" ).keyup(function() {
var gst1 = $("input[name='gst1']" ).val();
//var rate1 =  $("input[name='rate1']" ).val();                                


if (gst1!=undefined) {
var cgst1 = gst1/2;
//alert(quantity1+" rtr "+rate1);
$("input[name='cgst1']").val(cgst1);
$("input[name='sgst1']" ).val(cgst1);
cgst_amount1 = (amount1*cgst1)/100;
sgst_amount1=(amount1*cgst1)/100;
$("input[name='cgst_amount1']").val(cgst_amount1);   
$("input[name='sgst_amount1']").val(sgst_amount1); 

total_amount1= amount1+cgst_amount1+sgst_amount1;
$("input[name='total_amount1']" ).val(total_amount1); 
$("input[name='tm']" ).val(total_amount1); 

} else {
gst1=0; 
cgst1=0;  
cgst_amount1=0;
$("input[name='gst1']" ).val(0); 
$("input[name='cgst1']" ).val(0); 
$("input[name='sgst1']" ).val(0); 
$("input[name='sgst_amount1']" ).val(0);    
return;                              
}

});


$( "input[name='igst1']" ).keyup(function() {
var igst1 = $("input[name='igst1']" ).val();
//var rate1 =  $("input[name='rate1']" ).val();                                


if (igst1!=undefined) {
igst_amount1 = (amount1*igst1)/100;
$("input[name='igst_amount1']").val(igst_amount1);                                
} else {
igst_amount1=0;
igst1=0;  
$("input[name='igst1']" ).val(0); 
$("input[name='igst_amount1']" ).val(0);    

}
total_amount1= amount1+cgst_amount1+sgst_amount1+igst_amount1;
$("input[name='total_amount1']" ).val(total_amount1); 
$("input[name='tm']" ).val(total_amount1);   
});

$( "input[name='payable']" ).keyup(function() {
var payable = $("input[name='payable']" ).val();                               


if (payable!=undefined) {
var dues = net_amount-payable;
$("input[name='dues']").val(dues);                                
} else {
payable=0;
dues=0;  
$("input[name='payable']" ).val(0); 
$("input[name='dues']" ).val(0);    

}

});

$( "input[name='discount']" ).keyup(function() {
var discount = $("input[name='discount']" ).val();                               


if (discount!=undefined) {
net_amount = total_amount1-discount;
$("input[name='net_amount']").val(net_amount);                                
} else {
net_amount=0;
discount=0;  
$("input[name='discount']" ).val(0); 
$("input[name='net_amount']" ).val(0);    

}

});

$("input[name='total_amount2']" ).val(0);   
$("input[name='total_amount3']" ).val(0); 
$("input[name='total_amount4']" ).val(0);  

});

</script>

<tr>

<td class="center"> <input type="text"  name="product_name1"></td>
<td class="center"><input type="text"   name="hsn_code1"></td>
<td class="center"><input type="text" class="allow_only_int"  name="quantity1" id="quantity1"></td>
<td class="center"><input type="text" class="allow_only_num"  name="rate1" id="rate1"></td>
<td class="center"><input type="text" class="allow_only_num"  name="amount1" id="amount1" disabled></td>
<td class="center"><input type="text" class="allow_only_num"  name="gst1"></td>
<td class="center"><input type="text" class="allow_only_num"  name="cgst1" disabled></td>
<td class="center"><input type="text" class="allow_only_num"  name="cgst_amount1" disabled></td>
<td class="center"><input type="text" class="allow_only_num"  name="sgst1" disabled></td>
<td class="center"><input type="text" class="allow_only_num"  name="sgst_amount1" disabled></td>
<td class="center"><input type="text" class="allow_only_num"  name="igst1"></td>
<td class="center"><input type="text" class="allow_only_num"  name="igst_amount1" disabled></td>
<td class="center"><input type="text" class="allow_only_num"  name="total_amount1" disabled></td>


</tr>
<tr>

<td class="center"> <input type="text"  name="product_name2"></td>
<td class="center"><input type="text"   name="hsn_code2"></td>
<td class="center"><input type="text" class="allow_only_int"  name="quantity2"></td>
<td class="center"><input type="text" class="allow_only_num"  name="rate2"></td>
<td class="center"> <input type="text" class="allow_only_num"  name="amount2"></td>
<td class="center"><input type="text" class="allow_only_num"  name="gst2"></td>
<td class="center"><input type="text" class="allow_only_num"  name="cgst2"></td>
<td class="center"><input type="text" class="allow_only_num"  name="cgst_amount2"></td>
<td class="center"><input type="text" class="allow_only_num"  name="sgst2"></td>
<td class="center"><input type="text" class="allow_only_num"  name="sgst_amount2"></td>
<td class="center"><input type="text" class="allow_only_num"  name="igst2"></td>
<td class="center"><input type="text" class="allow_only_num"  name="igst_amount2"></td>
<td class="center"><input type="text" class="allow_only_num"  name="total_amount2" disabled></td>


</tr>
<tr>

<td class="center"> <input type="text"   name="product_name3"></td>
<td class="center"><input type="text"  name="hsn_code3"></td>
<td class="center"><input type="text" class="allow_only_int"  name="quantity3"></td>
<td class="center"><input type="text" class="allow_only_num"  name="rate3"></td>
<td class="center"> <input type="text" class="allow_only_num"  name="amount3"></td>
<td class="center"><input type="text" class="allow_only_num"  name="gst3"></td>
<td class="center"><input type="text" class="allow_only_num"  name="cgst3"></td>
<td class="center"><input type="text" class="allow_only_num"  name="cgst_amount3"></td>
<td class="center"><input type="text" class="allow_only_num"  name="sgst3"></td>
<td class="center"><input type="text" class="allow_only_num"  name="sgst_amount3"></td>
<td class="center"><input type="text" class="allow_only_num"  name="igst3"></td>
<td class="center"><input type="text" class="allow_only_num"  name="igst_amount3"></td>
<td class="center"><input type="text" class="allow_only_num"  name="total_amount3" disabled></td>

</tr>
<tr>

<td class="center"> <input type="text"  name="product_name4"></td>
<td class="center"><input type="text"   name="hsn_code4"></td>
<td class="center"><input type="text" class="allow_only_int"  name="quantity4"></td>
<td class="center"><input type="text" class="allow_only_num"  name="rate4"></td>
<td class="center"> <input type="text" class="allow_only_num"  name="amount4"></td>
<td class="center"><input type="text" class="allow_only_num"  name="gst4"></td>
<td class="center"><input type="text" class="allow_only_num"  name="cgst4"></td>
<td class="center"><input type="text" class="allow_only_num"  name="cgst_amount4"></td>
<td class="center"><input type="text" class="allow_only_num"  name="sgst4"></td>
<td class="center"><input type="text" class="allow_only_num"  name="sgst_amount4"></td>
<td class="center"><input type="text" class="allow_only_num"  name="igst4"></td>
<td class="center"><input type="text" class="allow_only_num"  name="igst_amount4"></td>
<td class="center"><input type="text" class="allow_only_num"  name="total_amount4" disabled></td>


</tr>



</tbody>

</table>
<tr>
<center><label class="control-label col-md-3">Total Amount </label><input type="text" name="tm" disabled><center>


</div>
</div>   
<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Discount
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input name="discount" type="text" placeholder="Discount" class="form-control input-height allow_only_num"  /> </div>
</div>
</div>
<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Net Amount 
<span class="required"> * </span>
</label>
<div class="col-md-8">
<input name="net_amount" type="text" placeholder="Net Amount" class="form-control input-height"  disabled/> </div>
</div>
</div>
<div class="form-group row">
<label class="control-label col-md-3">Payable
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input name="payable" type="text" placeholder="Payable" class="form-control input-height allow_only_num"  /> </div>
</div>
<div class="form-group row">
<label class="control-label col-md-3">Dues
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input name="dues" type="text" placeholder="Dues" class="form-control input-height" disabled/> </div>
</div>



<div class="form-group row">
<label class="control-label col-md-3">Payment Mode
<span class="required"> * </span>
</label>
<div class="col-md-5">
<select class="form-control input-height" name="payment_mode" >
<option >Select...</option>
<option >Cheque</option>
<option >Cash</option>
</select>
</div>

</div>
<div class="form-group row">
<label class="control-label col-md-3">Deposite Account
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input name="deposite_account" type="text" placeholder="Cheque NO." class="form-control input-height"  /> </div>
</div>
<div class="form-actions">
<div class="row">
<div class="offset-md-3 col-md-9">
<button type="submit" name="submit" class="btn btn-info">Submit</button>
<a href="add_productnew.php" style="color: black; padding-left: 550px;"><button  ><span style="color: black;><i class="fa fa-print"></i> Back</span></button></a>
</div>
</div>

</div>

<?php } } ?>




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
<div class="page-footer-inner"> 2017 &copy; Jagdamba Management By
<a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">succexa</a>
</div>
<div class="scroll-to-top">
<i class="icon-arrow-up"></i>
</div>
</div>
<!-- end footer -->
</div>
<!-- start js include path -->
<!--  <script src="../assets/jquery.min.js" ></script>-->
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

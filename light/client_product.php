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
<!-- here the php form submission start -->


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
<style>
input.add {
-moz-border-radius: 4px;
border-radius: 4px;
background-color: #6FFF5C;
-moz-box-shadow: 0 0 4px rgba(0, 0, 0, .75);
box-shadow: 0 0 4px rgba(0, 0, 0, .75);
}

input.add:hover {
background-color: #1EFF00;
-moz-border-radius: 4px;
border-radius: 4px;
}

input.removeRow {
-moz-border-radius: 4px;
border-radius: 4px;
background-color: #FFBBBB;
-moz-box-shadow: 0 0 4px rgba(0, 0, 0, .75);
box-shadow: 0 0 4px rgba(0, 0, 0, .75);
}

input.removeRow:hover {
background-color: #FF0000;
-moz-border-radius: 4px;
border-radius: 4px;
}

</style>
</head>


<!-- END HEAD -->

<!-- start page content -->
<body>
<div class="row">
<div class="col-md-12 col-sm-12">
<div class="card card-box">
<div class="card-head">
<header>Client Add Product</header>
<button id = "panel-button" 
class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
data-upgraded = ",MaterialButton">
<i class = "material-icons">more_vert</i>
</button>

</div>

<div class="card-body" id="bar-parent">
    <?php

if (isset($_GET['edit1'])) {
$client_id = $_GET['edit1'];
}
$sql = "SELECT * from  clients WHERE client_id ='$client_id'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row) 
{

?>
<!--  <form action="test_db.php" method="post" id="form_sample_1" class="form-horizontal"> -->
<form method="POST" action="client_product_config.php">
<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">
<span class="required">  </span>
</label>
<div class="col-md-5">
<input type="hidden" name="client_id" data-required="1" required  placeholder="Client Name" class="form-control input-height" value='<?php echo htmlentities($row->client_id);?>' /> </div>
</div>
</div>
<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Client Name                                                                                            
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" name="client_name" data-required="1" placeholder="Client Name"  required pattern="[a-z,A-Z\s]{3,30}" class="form-control input-height" value='<?php echo htmlentities($row->client_name);?>' readonly /> </div>
</div>
</div>

<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Mobile NO.                                                                                            
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" name="mobile_no" data-required="1" placeholder="Mobile NO."  required pattern ="[0-9]{10}"class="form-control input-height" value='<?php echo htmlentities($row->mobile_no);?>' readonly/> </div>
</div>
</div>

<div class="form-group row">
<label class="control-label col-md-3">GST NO.
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" name="gst_no" data-required="1" placeholder="enter gst"required  class="form-control input-height" value='<?php echo htmlentities($row->gst_no);?>' readonly/> </div>
</div>




<!-- new amarnath bhaia form here -->


<div class="container-fluid">
<div class="row">
<table class="table table-hover" id="purchaseItems">
<thead >
<tr >
<th>Product Name</th>
<th>Hsn code</th>
<th>Quantity</th>
<th>Per</th>
<th>Rate</th>
<th>Amount</th>
<th>GST%</th>
<th>IGST%</th>
<th>Total Amount(₹)</th>
<th>Action</th>
<th></th>
</tr>
</thead>
<tbody>
<tr >
<td><input type="text" name="product_name[]" class="next product_name form-control" size="45"  ></td>
<td><input type="text" name="hsn_code[]" class="next hsn_code form-control" size="5" ></td>
<td><input type="text" name="quantity[]"  class="next quantity form-control" size="5" required></td>
<td><input type="text" name="per[]"  class="next per form-control" size="4" ></td>
<td><input type="text" name="rate[]"  class="next rate allow_only_num form-control" size="5"> </td>
<td><input type="text" name="amount[]" class="next amount form-control" readonly size="7"></td> 
<td><input type="text" name="gst[]" class="next gst allow_only_num form-control" size="1" ></td>

<td><input type="text" name="igst[]" class="next igst allow_only_num form-control" size="1"></td>

<td><input type="text" name="total_amount[]" class="next last total_amount form-control"  value="0" readonly size="8"></td> 

<td><input type="button" name="addRow " class="add col-md-12" value='+'  ></td>
<td><input type="button" name="removeRow" class="removeRow col-md-12" value='-'></td>

<td class="hide"><input type="hidden" name="gst_amount[]" class="next gst_amount" ></td>
<td class="hide"><input type="hidden" name="cgst[]" class="next cgst"></td>
<td class="hide"><input type="hidden" name="cgst_amount[]" class="next cgst_amount"></td>
<td class="hide"><input type="hidden" name="sgst[]" class="next sgst"></td>
<td class="hide"><input type="hidden" name="sgst_amount[]" class="next sgst_amount"></td>
<td class="hide"><input type="hidden" name="igst_amount[]" class="next igst_amount"></td>

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

<div class="form-group row">
<label class="control-label col-md-3">Total(₹) :
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" name="totalPrice" id="totalPrice" class="totalPrice form-control input-height"> </div>
</div>


<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Discount
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input name="discount" type="text" placeholder="Discount" class="form-control input-height discount"  /> </div>
</div>
</div>
<input name="gst_total" type="hidden" class="gst_total"  />
<input name="tsum" type="hidden" class="tsum"  />
<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Net Amount 
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input name="net_amount" type="text" placeholder="Net Amount" class="net_amount  form-control input-height"  /> </div>
</div>
</div>
<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Payable
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input name="payable" type="text" placeholder="Payable" class="form-control input-height payable"  /> </div>
</div>
</div>
<div class="form-group row">
<label class="control-label col-md-3">Dues
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input name="dues" type="text" placeholder="Dues" class="form-control input-height dues" /> </div>
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
<option>Net Banking</option>
</select>
</div>

</div>
<div class="form-group row">
<label class="control-label col-md-3">Deposite Account No
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input name="deposite_account" type="text" placeholder="Cheque NO." class="form-control input-height"  /> </div>
</div>

<div class="form-group row">
<label class="control-label col-md-3">Utr No
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input name="utr_no" type="text" placeholder="utr NO." class="form-control input-height"  /> </div>
</div>
<div class="form-actions">
<div class="row">
<div class="offset-md-3 col-md-9">
<button type="submit" name="submit" class="btn btn-info" id="btnGeachrow">Submit</button>

</div>
</div>

</div>




</form>
<?php } } ?>
<!-- form ends here -->      
</div>
</div>
<!-- </form> -->
<a href="view_client.php" style="color: black; padding-left: 550px;"><button  ><span style="color: black;><i class="fa fa-print"></i> Back</span></button></a>
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
</body>

</html>

<script
src="https://code.jquery.com/jquery-3.3.1.min.js" >
</script>
<script>
//  $function show_total_amount(){

// }
//$(function(){
$(document).ready(function(){
$(".hide").hide();
var html='<tr><td><input type="text" name="product_name[]" class="next product_name form-control" size="45"></td><td><input type="text" name="hsn_code[]" class="next hsn_code form-control" size="5" ></td><td><input type="text" name="quantity[]" class="next quantity form-control" size="5" required></td><td><input type="text" name="per[]" class="next per form-control" size="4" ></td><td><input type="text" name="rate[]" class="next rate allow_only_num form-control" size="5"> </td><td><input type="text" name="amount[]" class="next amount form-control" readonly size="7"></td> <td><input type="text" name="gst[]" class="next gst allow_only_num form-control" size="1" ></td><td><input type="text" name="igst[]" class="next igst allow_only_num form-control" size="1"></td><td><input type="text" name="total_amount[]" class="next last total_amount form-control"  value="0" readonly size="8"></td> <td><input type="button" name="addRow " class="add col-md-12" value="+"  ></td><td><input type="button" name="removeRow" class="removeRow col-md-12" value="-"></td><td class="hide"><input type="hidden" name="gst_amount[]" class="next gst_amount" ></td><td class="hide"><input type="hidden" name="cgst[]" class="next cgst"></td><td class="hide"><input type="hidden" name="cgst_amount[]" class="next cgst_amount"></td><td class="hide"><input type="hidden" name="sgst[]" class="next sgst"></td><td class="hide"><input type="hidden" name="sgst_amount[]" class="next sgst_amount"></td><td class="hide"><input type="hidden" name="igst_amount[]" class="next igst_amount"></td></tr>'; 
//variables


//add row to form
$(document).on('click','.add',function(e){

$(this).parents('tr').parents("tbody").append(html);;

});



//remove rows form the table 
$(document).on('click','.removeRow',function(e){

if ($('#purchaseItems .add').length > 1) {

$(this).parents('tr').remove();
var total = 0;
var tsum = 0;
var gst_total = 0;
//calculate tsum
$(".amount").each(function() {

tsum = tsum + parseFloat($(this).val());

});
$(".tsum").val(tsum.toFixed(2));
//calculate gst_amount
$(".gst_amount").each(function() {

gst_total = gst_total + parseFloat($(this).val());

});
$(".gst_total").val(gst_total.toFixed(2));

//calcuate total_amount
$(".total_amount").each(function() {

total = total + parseFloat($(this).val());

});
$("#totalPrice").val(total.toFixed(2));

}else{

$('.next').val("");
$("#totalPrice").val('0.00');
$('.net_amount').val('0.00');
$('.dues').val('0.00');
$('.tsum').val('0.00');
$('.gst_amount').val('0.00');

}
});
//populate values form the first row


//on keypress
$(document).on('click', '.add', function() {

// var row = $(this).parents('tr');
//var clone = row.clone();

// clear the values
// var tr = clone.closest('tr');

//tr.find('.next').val('');


//  $(this).closest('tr').after(clone);

var total = 0;

$(".total_amount").each(function() {
if (!$(this).val() == '') {
total = total + parseFloat($(this).val());
}
});

$("#totalPrice").val(total.toFixed(2));
var tsum = 0;
var gst_total = 0;
//calculate tsum
$(".amount").each(function() {
if (!$(this).val() == '') {
tsum = tsum + parseFloat($(this).val());

}
});
$(".tsum").val(tsum.toFixed(2));
//calculate gst_amount
$(".gst_amount").each(function() {
if (!$(this).val() == '') {
gst_total = gst_total + parseFloat($(this).val());

}
});
$(".gst_total").val(gst_total.toFixed(2));
});


$(document).on('keyup', ".next,.discount,.payable", function() {



//Getting elements From table

var $product_name = $(this).parents("tr").find(".product_name");
var $hsn_code = $(this).parents("tr").find(".hsn_code");
var $quantity = $(this).parents("tr").find(".quantity");
var $per = $(this).parents("tr").find(".per");
var $rate = $(this).parents("tr").find(".rate");
var $amount = $(this).parents("tr").find(".amount");
var $gst = $(this).parents("tr").find(".gst");
var $gst_amount = $(this).parents("tr").find(".gst_amount");
var $cgst = $(this).parents("tr").find(".cgst");
var $cgst_amount = $(this).parents("tr").find(".cgst_amount");
var $sgst = $(this).parents("tr").find(".sgst");
var $sgst_amount = $(this).parents("tr").find(".sgst_amount");
var $igst = $(this).parents("tr").find(".igst");
var $igst_amount = $(this).parents("tr").find(".igst_amount");
var $total_amount = $(this).parents("tr").find(".total_amount");




//table 1 row data variable declaration
var quantity = 0;
var rate = 0;
var amount = 0;
var gst = 0;
var gst_amount = 0;
var cgst = 0;
var cgst_amount = 0;
var sgst = 0;
var sgst_amount = 0;
var igst = 0;
var igst_amount = 0;
var total = 0;    

//getting values from out side form
var discount = $(".discount").val();
var net_amount =0;
var payable = $(".payable").val();
var dues = 0;
var payment_mode = $(".payment_mode").val();
var deposite_account = $(".deposite_account").val();
var tsum = 0;
var gst_total = 0;

if ($quantity.val() == '' || $rate.val() == '') {
// console.log("No values found.");

amount = 0;
cgst_amount = 0;
sgst_amount = 0;
igst_amount = 0;
total_amount = 0;
payable = 0;
net_amount = 0;
total = 0;
tsum = 0;
gst_total = 0;
$("#totalPrice").val(total.toFixed(2));
//$(".tsum").val(tsum.toFixed(2));
//$(".gst_amount").val(gst_total.toFixed(2));
} 

else {

//console.log("Converting: ", $quantity.val(), $rate.val());
quantity = parseInt($quantity.val());
rate = parseFloat($rate.val());
//console.log("Values found: ", quantity, rate);

amount = quantity * rate;
gst=$gst.val();
gst_amount = amount*gst/100;
cgst = gst/2;
cgst_amount = gst_amount/2;
sgst = gst/2;
sgst_amount = gst_amount/2;
igst = $igst.val();

if(igst!='undefined'&&igst!=''&&igst!=0){igst_amount = amount*igst/100;}

total_amount = amount+gst_amount+igst_amount;

}

$amount.val(Math.round(amount * 100) / 100);
$gst_amount.val(gst_amount.toFixed(2));
$cgst.val(cgst);
$cgst_amount.val(cgst_amount);
$sgst.val(sgst);
$sgst_amount.val(sgst_amount);
$igst_amount.val(igst_amount);
$total_amount.val(total_amount.toFixed(2));
$sgst_amount.val(sgst_amount);


$(".total_amount").each(function() {

if (!$(this).val() == '') {

total = total + parseFloat($(this).val());

}});
$("#totalPrice").val(total.toFixed(2));

//calculate tsum
$(".amount").each(function() {
if (!$(this).val() == '') {
tsum = tsum + parseFloat($(this).val());

}});
$(".tsum").val(tsum.toFixed(2));

//calculate gst_amount
$(".gst_amount").each(function() {
if (!$(this).val() == '') {
gst_total = gst_total + parseFloat($(this).val());

}});
$(".gst_total").val(gst_total.toFixed(2));

net_amount = total-discount;
dues = net_amount-payable;
$('.net_amount').val(net_amount.toFixed(2));
$('.dues').val(dues.toFixed(2));
//alert();
});

});
</script>
<?php
include("config2.php");
error_reporting(1);
session_start();
//if($name = $_SESSION['name']) 
if ($_SESSION['name']=="") {
header('location:index.php');
}
$name=$_SESSION['name'];
$edit = $_GET['edit1'];
?>
<?php
//$update_id = $_GET['edit_form'];
$invoice_no = $_POST['invoice_no'];
$date_of_invoice = $_POST['date_of_invoice'];
$itotal = $_POST['itotal'];
$gst = $_POST['gst'];
$cgst = $_POST['cgst'];
$cgst_amount = $_POST['cgst_amount'];
$sgst = $_POST['sgst'];
$sgst_amount = $_POST['sgst_amount'];
$igst = $_POST['igst'];
$igst_amount = $_POST['igst_amount'];
$gst_amount = $_POST['gst_amount'];
$net_amount = $_POST['net_amount'];
$payble = $_POST['payble'];
$dues = $_POST['dues'];


if (isset($_POST['submit'])) {
  
  
  $update_qry = mysqli_query($db,"UPDATE `vendor_invoice` SET `invoice_no`='$invoice_no',
  `invoice_date`='$date_of_invoice',`invoice_total`='$itotal',`gst`='$gst',`cgst`='$cgst',`cgst_amount`='$cgst_amount',`sgst`='$sgst',
  `sgst_amount`='$sgst_amount',`igst`='$igst',`igst_amount`='$igst_amount',`gst_amount`='$gst_amount',`net_amount`='$net_amount',`payble`='$payble',
  `dues`='$dues' WHERE invoice_id='$edit'");
if ($update_qry) {
  
   echo "<script>alert('Updated...')</script>";
        echo "<script>window.open('view_vendor_product.php','_self')</script>";

}

else{
 echo "<script>alert('Not updated')</script>";
  echo "<script>window.open('edit_slip_vendor.php?edit1=$edit','_self')</script>";
}

}

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




</head>
<!-- END HEAD -->
<body >
<div class="row">
<div class="col-md-12 col-sm-12">
<div class="card card-box">


<div class="card-body" id="bar-parent">
    <?php
if (isset($_GET['edit1'])) {
$vendor_id = $_GET['edit1'];
}
$sql = "SELECT vi.*,v.* FROM `vendor_invoice` vi INNER JOIN vendors v ON v.vendor_id=vi.vendor_id WHERE invoice_id ='$edit'";
$query = mysqli_query($db,$sql);
//$query->execute();
//$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if(mysqli_num_rows($query) > 0)
{
while($row = mysqli_fetch_array($query)) 
{
?>
<form action="" method="post" id="form_sample_1" class="form-horizontal">

<br>
<br>


<h1 class="center"><u>   Edit Here   </u></h1>
<br>
<br>
<div class="form-group row">
<label class="control-label col-md-3">Invoice No.
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" name="invoice_no" data-required="1" 
placeholder="Enter Invoice No"  autofocus class="form-control input-height" required value='<?php echo $row['invoice_no'];?>' /> </div>
</div>


<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Date                                                                                            
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" name="date_of_invoice" data-required="1" id="datepicker" 
placeholder="DD-MM-YYYY" class="form-control input-height" required value='<?php echo $row['invoice_date'];?>' /> </div>
</div>
</div>


<div class="form-group row">
<label class="control-label col-md-3">Invoice Total(₹) :
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" name="itotal" id="itotal" class="itotal form-control input-height" 
value='<?php echo $row['invoice_total'];?>'> </div>
</div>


<hr>
<div class="form-group row">
<label class="control-label col-md-3">GST (%) :
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input type="text" name="gst" id="gst" class="gst form-control input-height" value='<?php echo $row['gst'];?>'> </div>
</div>


<div class="form-group row">
<label class="control-label col-md-3">IGST (%) :
</label>
<div class="col-md-5">
<input type="text" name="igst" id="igst" class="igst form-control input-height" value='<?php echo $row['igst'];?>'> </div>
</div>


<input type="hidden" name="cgst" class="cgst">
<input type="hidden" name="cgst_amount" class="cgst_amount">
<input type="hidden" name="sgst" class="sgst">
<input type="hidden" name="sgst_amount" class="sgst_amount">
<input type="hidden" name="igst" class="igst">
<input type="hidden" name="igst_amount" class="igst_amount">
<input type="hidden" name="gst_amount" class="gst_amount">

<hr>

<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Net Amount
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input name="net_amount" type="text" placeholder="Net Amaount" class="net_amaount form-control input-height" 
readonly value='<?php echo $row['net_amount'];?>' /> </div>
</div>
</div>

<div class="form-body">
<div class="form-group row">
<label class="control-label col-md-3">Payable
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input name="payble" type="text" placeholder="Payable" class="form-control input-height payable" 
value='<?php echo $row['payble'];?>'/> </div>
</div>
</div>
<div class="form-group row">
<label class="control-label col-md-3">Dues
<span class="required"> * </span>
</label>
<div class="col-md-5">
<input name="dues" type="text" placeholder="Dues" class="form-control input-height dues" 
readonly value='<?php echo $row['dues'];?>'/> </div>
</div>


<div class="form-actions">
<div class="row">
<div class="offset-md-3 col-md-9">
<button type="submit" name="submit" class="btn btn-info">update</button>

</div>
</div>

</div>

</div>
</div>
</form>
<?php } } ?>
</div>
</div>
</div>
</div>

<a href="view_vendor.php" style="color: black; padding-left: 550px;"><button  ><span style="color: black;><i class="fa fa-print"></i> Back</span></button></a>
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
<script src="../assets/jquery-validation/js/jquery.validate.min.js" ></script>
<script src="../assets/jquery-validation/js/additional-methods.min.js" ></script>
<script src="../assets/jquery.slimscroll.js"></script>
<!-- bootstrap -->
<script src="../assets/bootstrap/js/bootstrap.min.js" ></script>
<script src="../assets/bootstrap-switch/js/bootstrap-switch.min.js" ></script>
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

<script>


$(document).ready(function(){

$(".hide").hide();


//on keypress

$(document).on('keyup', ".next,.discount,.payable,.gst,.igst,.itotal", function() {


//getting values from out side form
var itotal = $(".itotal").val();
var payable = $(".payable").val();
var gst = $(".gst").val();
var gstp =gst; 
var igst = $(".igst").val();
var igstp =igst;
itotal = parseFloat(itotal);


if(gst==undefined||gst=='')
{
    gst=parseFloat(0);
}
else{

    gst = itotal*parseFloat(gst)/100;
}

if(igst==undefined||igst=='')
{
    igst=parseInt(0);
}
else{

    igst = itotal*parseFloat(igst)/100;
}



var net_amaount =  parseFloat(itotal)+parseFloat(gst)+parseFloat(igst);

$(".net_amaount").val(net_amaount.toFixed(2));

var dues = 0;
var payment_mode = $(".payment_mode").val();
var deposite_account = $(".deposite_account").val();

//$(".tsum").val(tsum.toFixed(2));

dues = net_amaount-payable;

$('.dues').val(dues.toFixed(2));




/*hidden data */

$('.cgst').val((gstp/2));
$('.cgst_amount').val((gst/2).toFixed(2));
$('.sgst').val((gstp/2));
$('.sgst_amount').val((gst/2).toFixed(2));


    $('.igst').val(igstp);




//alert(igstp);
$('.igst_amount').val((igst).toFixed(2));

$('.gst_amount').val((gst+igst).toFixed(2));



});





});
</script>
<script>
        $(function(){
    $("#datepicker").datepicker({
        dateFormat: "dd-mm-yy"
    });
});
    </script>
    
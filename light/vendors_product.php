<?php
session_start();
// initializing variables
$username = "root";
$password = "";
$errors = array();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'jagdamba');
if (isset($_POST['submit']))
{
$id = (rand(10,10000));
// receive all input values from the form
$vendor_id = mysqli_real_escape_string($db, $_POST['vendor_id']);
$vendor_name = mysqli_real_escape_string($db, $_POST['vendor_name']);
$date = mysqli_real_escape_string($db, $_POST['date']);
$mobile_no = mysqli_real_escape_string($db, $_POST['mobile_no']);
$address = mysqli_real_escape_string($db, $_POST['address']);
// $consignee = mysqli_real_escape_string($db, $_POST['consignee']);
$gst_no = mysqli_real_escape_string($db, $_POST['gst_no']);
$invoice_no = mysqli_real_escape_string($db, $_POST['invoice_no']);
$date_of_invoice = mysqli_real_escape_string($db, $_POST['date_of_invoice']);



$product_name = mysqli_real_escape_string($db, $_POST['product_name1']);
$hsn_code = mysqli_real_escape_string($db, $_POST['hsn_code1']);
$quantity= mysqli_real_escape_string($db, $_POST['quantity1']);
//$per = mysqli_real_escape_string($db, $_POST['per1']);
$rate= mysqli_real_escape_string($db, $_POST['rate1']);
$amount = mysqli_real_escape_string($db, $_POST['amount1']);




$product_name2 = mysqli_real_escape_string($db, $_POST['product_name2']);
$hsn_code2 = mysqli_real_escape_string($db, $_POST['hsn_code2']);
$quantity2= mysqli_real_escape_string($db, $_POST['quantity2']);
//$per2 = mysqli_real_escape_string($db, $_POST['per2']);
$rate2= mysqli_real_escape_string($db, $_POST['rate2']);
$amount2 = mysqli_real_escape_string($db, $_POST['amount2']);




$product_name3 = mysqli_real_escape_string($db, $_POST['product_name3']);
$hsn_code3 = mysqli_real_escape_string($db, $_POST['hsn_code3']);
$quantity3= mysqli_real_escape_string($db, $_POST['quantity3']);
// $per3 = mysqli_real_escape_string($db, $_POST['per3']);
$rate3= mysqli_real_escape_string($db, $_POST['rate3']);
$amount3 = mysqli_real_escape_string($db, $_POST['amount3']);






$product_name4 = mysqli_real_escape_string($db, $_POST['product_name4']);
$hsn_code4 = mysqli_real_escape_string($db, $_POST['hsn_code4']);
$quantity4= mysqli_real_escape_string($db, $_POST['quantity4']);
//$per4 = mysqli_real_escape_string($db, $_POST['per4']);
$rate4= mysqli_real_escape_string($db, $_POST['rate4']);
$amount4 = mysqli_real_escape_string($db, $_POST['amount4']);

$tm = mysqli_real_escape_string($db, $_POST['tm']);




$gst = mysqli_real_escape_string($db, $_POST['gst1']);
$cgst = mysqli_real_escape_string($db, $_POST['cgst1']);
$cgst_amount = mysqli_real_escape_string($db, $_POST['cgst_amount1']);
$sgst = mysqli_real_escape_string($db, $_POST['sgst1']);
$sgst_amount = mysqli_real_escape_string($db, $_POST['sgst_amount1']);
$igst = mysqli_real_escape_string($db, $_POST['igst1']);
$igst_amount = mysqli_real_escape_string($db, $_POST['igst_amount1']);


$net_amount = mysqli_real_escape_string($db, $_POST['net_amount']);
$payable = mysqli_real_escape_string($db, $_POST['payable']);
$dues = mysqli_real_escape_string($db, $_POST['dues']);
$payment_mode= mysqli_real_escape_string($db, $_POST['payment_mode']);
$deposite_account= mysqli_real_escape_string($db, $_POST['deposite_account']);
$utr_no = mysqli_real_escape_string($db, $_POST['utr_no']);


$vendor_id;
$vendor_name;
$date;
$mobile_no;
$address;
// $consignee;
$gst_no;
$product_name;

$hsn_code;
$quantity;
$rate;
$amount;
$gst;
$cgst;
$cgst_amount;
$igst;
$igst_amount;

$total_amount;
$payable;
$dues;
$payment_mode;
$deposite_account;





//"hello2";

// Finally, register user if there are no errors in the form




$query = "INSERT INTO vendors_product(
order_no,
product_id,
vendor_name,
date,
mobile_no,
address,
gst_no,
invoice_no,
date_of_invoice,
product_name,
hsn_code,
quantity,
rate,
amount,

product_name2,
hsn_code2,
quantity2,
rate2,
amount2,

product_name3,
hsn_code3,
quantity3,
rate3,
amount3,

product_name4,
hsn_code4,
quantity4,
rate4,
amount4,
tm,
gst,
cgst,
cgst_amount,
sgst,
sgst_amount,
igst,
igst_amount,
net_amount,
payable,
dues,
payment_mode,
deposite_account,
utr_no)

VALUES


('$id',
'$vendor_id',
'$vendor_name',
'$date',
'$mobile_no',
'$address',
'$gst_no',
'$invoice_no',
'$date_of_invoice',

'$product_name',
'$hsn_code',
'$quantity',
'$rate',
'$amount',

'$product_name2',
'$hsn_code2',
'$quantity2',
'$rate2',
'$amount2',


'$product_name3',
'$hsn_code3',
'$quantity3',
'$rate3',
'$amount3',


'$product_name4',
'$hsn_code4',
'$quantity4',
'$rate4',
'$amount4',


'$tm',

'$gst',
'$cgst',
'$cgst_amount',
'$sgst',
'$sgst_amount',
'$igst',
'$igst_amount',



'$net_amount',
'$payable',
'$dues',

'$payment_mode',
'$deposite_account',
'$utr_no')";

$query;
mysqli_query($db, $query);
//echo "hello";
// $query;
//$_SESSION['name'] = $username;
$_SESSION['success'] = "You are now logged in";
echo "<script>window.open('view_vendor_product.php','_self')</script>";

}
?>
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
// receive all input values from the form
echo $id = (rand(10,10000));

$client_id = mysqli_real_escape_string($db,$_POST['client_id']);
$client_name = mysqli_real_escape_string($db, $_POST['client_name']);

$date = mysqli_real_escape_string($db, $_POST['date']);
$mobile_no = mysqli_real_escape_string($db, $_POST['mobile_no']);
$address = mysqli_real_escape_string($db, $_POST['address']);
$consignee = mysqli_real_escape_string($db, $_POST['Consignee_no']);
$gst_no = mysqli_real_escape_string($db, $_POST['gst_no']);


$product_name = mysqli_real_escape_string($db, $_POST['product_name1']);
$hsn_code = mysqli_real_escape_string($db, $_POST['hsn_code1']);
$quantity= mysqli_real_escape_string($db, $_POST['quantity1']);
$per = mysqli_real_escape_string($db, $_POST['per1']);
$rate= mysqli_real_escape_string($db, $_POST['rate1']);
$amount = mysqli_real_escape_string($db, $_POST['amount1']);
$gst = mysqli_real_escape_string($db, $_POST['gst1']);
$cgst = mysqli_real_escape_string($db, $_POST['cgst1']);
$cgst_amount = mysqli_real_escape_string($db, $_POST['cgst_amount1']);
$sgst = mysqli_real_escape_string($db, $_POST['sgst1']);
$sgst_amount = mysqli_real_escape_string($db, $_POST['sgst_amount1']);
$igst = mysqli_real_escape_string($db, $_POST['igst1']);
$igst_amount = mysqli_real_escape_string($db, $_POST['igst_amount1']);
$total_amount = mysqli_real_escape_string($db, $_POST['total_amount1']);



$product_name2 = mysqli_real_escape_string($db, $_POST['product_name2']);
$hsn_code2 = mysqli_real_escape_string($db, $_POST['hsn_code2']);
$quantity2= mysqli_real_escape_string($db, $_POST['quantity2']);
$per2 = mysqli_real_escape_string($db, $_POST['per2']);
$rate2= mysqli_real_escape_string($db, $_POST['rate2']);
$amount2 = mysqli_real_escape_string($db, $_POST['amount2']);
$gst2 = mysqli_real_escape_string($db, $_POST['gst2']);
$cgst2 = mysqli_real_escape_string($db, $_POST['cgst2']);
$cgst_amount2 = mysqli_real_escape_string($db, $_POST['cgst_amount2']);
$sgst2 = mysqli_real_escape_string($db, $_POST['sgst2']);
$sgst_amount2 = mysqli_real_escape_string($db, $_POST['sgst_amount2']);
$igst2 = mysqli_real_escape_string($db, $_POST['igst2']);
$igst_amount2 = mysqli_real_escape_string($db, $_POST['igst_amount2']);
$total_amount2 = mysqli_real_escape_string($db, $_POST['total_amount2']);



$product_name3 = mysqli_real_escape_string($db, $_POST['product_name3']);
$hsn_code3 = mysqli_real_escape_string($db, $_POST['hsn_code3']);
$quantity3= mysqli_real_escape_string($db, $_POST['quantity3']);
$per3 = mysqli_real_escape_string($db, $_POST['per3']);
$rate3= mysqli_real_escape_string($db, $_POST['rate3']);
$amount3 = mysqli_real_escape_string($db, $_POST['amount3']);
$gst3 = mysqli_real_escape_string($db, $_POST['gst3']);
$cgst3 = mysqli_real_escape_string($db, $_POST['cgst3']);
$cgst_amount3 = mysqli_real_escape_string($db, $_POST['cgst_amount3']);
$sgst3 = mysqli_real_escape_string($db, $_POST['sgst3']);
$sgst_amount3 = mysqli_real_escape_string($db, $_POST['sgst_amount3']);
$igst3 = mysqli_real_escape_string($db, $_POST['igst3']);
$igst_amount3 = mysqli_real_escape_string($db, $_POST['igst_amount3']);
$total_amount3 = mysqli_real_escape_string($db, $_POST['total_amount3']);




$product_name4 = mysqli_real_escape_string($db, $_POST['product_name4']);
$hsn_code4 = mysqli_real_escape_string($db, $_POST['hsn_code4']);
$quantity4= mysqli_real_escape_string($db, $_POST['quantity4']);
$per4 = mysqli_real_escape_string($db, $_POST['per4']);
$rate4= mysqli_real_escape_string($db, $_POST['rate4']);
$amount4 = mysqli_real_escape_string($db, $_POST['amount4']);
$gst4 = mysqli_real_escape_string($db, $_POST['gst4']);
$cgst4 = mysqli_real_escape_string($db, $_POST['cgst3']);
$cgst_amount4 = mysqli_real_escape_string($db, $_POST['cgst_amount4']);
$sgst4 = mysqli_real_escape_string($db, $_POST['sgst4']);
$sgst_amount4 = mysqli_real_escape_string($db, $_POST['sgst_amount4']);
$igst4 = mysqli_real_escape_string($db, $_POST['igst4']);
$igst_amount4 = mysqli_real_escape_string($db, $_POST['igst_amount4']);
$total_amount4 = mysqli_real_escape_string($db, $_POST['total_amount4']);



$tm = mysqli_real_escape_string($db, $_POST['tm']);
$discount = mysqli_real_escape_string($db, $_POST['discount']);
$net_amount = mysqli_real_escape_string($db, $_POST['net_amount']);
$payable = mysqli_real_escape_string($db, $_POST['payable']);
$dues = mysqli_real_escape_string($db, $_POST['dues']);
$net_payble_amount = mysqli_real_escape_string($db, $_POST['net_payble_amount']);
$payment_mode= mysqli_real_escape_string($db, $_POST['payment_mode']);
$deposite_account= mysqli_real_escape_string($db, $_POST['deposite_account']);



echo $client_id;
echo $client_name;
echo $mobile_no;
echo $date;
echo $address;
echo $consignee;
echo $gst_no;
echo $product_name;
echo $hsn_code;
echo $quantity;
echo $rate;
echo $amount;
echo $gst;
echo $cgst;
echo $cgst_amount;
echo $igst;
echo $igst_amount;
echo $total_amount;
echo $payable;
echo $dues;
echo $payment_mode;




if($product_name == ""){
echo "<script> alert('please fill the product'); </script>";
echo "<script>window.open('client_product.php?edit1=  $client_id ','_self')</script>";
}

// Finally, register user if there are no errors in the form

else {
$query = "INSERT INTO clients_product(
product_id,
client_id,
client_name,
date,
mobile_no,
address,
consignee,
gst_no,
product_name,
hsn_code,
quantity,
per,
rate,
amount,
gst,
cgst,
cgst_amount,
sgst,
sgst_amount,
igst,
igst_amount,
total_amount,
product_name2,
hsn_code2,
quantity2,
per2,
rate2,
amount2,
gst2,
cgst2,
cgst_amount2,
sgst2,
sgst_amount2,
igst2,
igst_amount2,
total_amount2,
product_name3,
hsn_code3,
quantity3,
per3,
rate3,
amount3,
gst3,
cgst3,
cgst_amount3,
sgst3,
sgst_amount3,
igst3,
igst_amount3,
total_amount3,
product_name4,
hsn_code4,
quantity4,
per4,
rate4,
amount4,
gst4,
cgst4,
cgst_amount4,
sgst4,
sgst_amount4,
igst4,
igst_amount4,
total_amount4,
tm,
discount,
net_amount,
payable,
dues,
payment_mode,
deposite_account)

VALUES


('$id',
'$client_id',
'$client_name',
'$date',
'$mobile_no',
'$address',
'$consignee',
'$gst_no',
'$product_name',
'$hsn_code',
'$quantity',
'$per',
'$rate',
'$amount',
'$gst',
'$cgst',
'$cgst_amount',
'$sgst',
'$sgst_amount',
'$igst',
'$igst_amount',
'$total_amount',
'$product_name2',
'$hsn_code2',
'$quantity2',
'$per2',
'$rate2',
'$amount2',
'$gst2',
'$cgst2',
'$cgst_amount2',
'$sgst2',
'$sgst_amount2',
'$igst2',
'$igst_amount2',
'$total_amount2',
'$product_name3',
'$hsn_code3',
'$quantity3',
'$per3',
'$rate3',
'$amount3',
'$gst3',
'$cgst3',
'$cgst_amount3',
'$sgst3',
'$sgst_amount3',
'$igst3',
'$igst_amount3',
'$total_amount3',
'$product_name4',
'$hsn_code4',
'$quantity4',
'$per4',
'$rate4',
'$amount4',
'$gst4',
'$cgst4',
'$cgst_amount4',
'$sgst4',
'$sgst_amount4',
'$igst4',
'$igst_amount4',
'$total_amount4',
'$tm',
'$discount',
'$net_amount',
'$payable',
'$dues',
'$payment_mode',
'$deposite_account')";
echo $query;
mysqli_query($db, $query);
echo "hello";
// $_SESSION['name'] = $username;
$_SESSION['success'] = "You are now logged in";
echo "<script>window.open('invoice2.php?edit1=$client_id&id=$id','_self')</script>";
}
}
?>
<?php
session_start();
// initializing variables
$username = "root";
$password = "";
$errors = array();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'gst');
if (isset($_POST['submit']))
{
    // receive all input values from the form
    $vendor_id = mysqli_real_escape_string($db, $_POST['vendor_id']);
    $vendor_name = mysqli_real_escape_string($db, $_POST['vendor_name']);
    $date = mysqli_real_escape_string($db, $_POST['date']);
	$mobile_no = mysqli_real_escape_string($db, $_POST['mobile_no']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $consignee = mysqli_real_escape_string($db, $_POST['consignee']);
	$product_name = mysqli_real_escape_string($db, $_POST['product_name']);
    $gst_no = mysqli_real_escape_string($db, $_POST['gst_no']);
    $itc_hs_code = mysqli_real_escape_string($db, $_POST['itc_hs_code']);
    $quantity= mysqli_real_escape_string($db, $_POST['quantity']);
    $rate= mysqli_real_escape_string($db, $_POST['rate']);
    $amount = mysqli_real_escape_string($db, $_POST['amount']);

    $gst = mysqli_real_escape_string($db, $_POST['gst']);
    $cgst = mysqli_real_escape_string($db, $_POST['cgst']);
    $igst = mysqli_real_escape_string($db, $_POST['igst']);
    $tgst= mysqli_real_escape_string($db, $_POST['tgst']);
    $total_amount = mysqli_real_escape_string($db, $_POST['total_amount']);
    $payable = mysqli_real_escape_string($db, $_POST['payable']);
    $dues = mysqli_real_escape_string($db, $_POST['dues']);
    $payment_mode= mysqli_real_escape_string($db, $_POST['payment_mode']);
    $deposite_account= mysqli_real_escape_string($db, $_POST['deposite_account']);
     
    echo $vendor_id;
    echo $vendor_name;
    echo $date;
	echo $mobile_no;
    echo $address;
    echo $consignee;
	echo $product_name;
    echo $gst_no;
    echo $itc_hs_code;
    echo $quantity;
    echo $rate;
    echo $amount;
    echo $gst;
    echo $cgst;
    echo $igst;
    echo $tgst;
	 echo $total_amount;
    echo $payable;
    echo $dues;
    echo $payment_mode;
    echo $deposite_account;
   

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($vendor_id))
    {
        array_push($errors, "vendor _id is required");
    }
    if (empty($vendor_name))
    {
        array_push($errors, "vendor_name is required");
    }
	 if (empty($date))
    {
        array_push($errors, "date is required");
    }
    if (empty($mobile_no))
    {
        array_push($errors, "mobile_no is required");
    }

    if (empty($address))
    {
        array_push($errors, "address is required");
    }

    if (empty($consignee))
    {
        array_push($errors, "consignee is required");
    }
	if (empty($product_name))
    {
        array_push($errors, "product_name is required");
    }
    if (empty($gst_no))
    {
        array_push($errors, "gst_no is required");
    }
	 if (empty($itc_hs_code))
    {
        array_push($errors, "itc_hs_code is required");
    }
    if (empty($quantity))
    {
        array_push($errors, "quantity is required");
    }
	if (empty($rate))
    {
        array_push($errors, "rate is required");
    }
    if (empty($amount))
    {
        array_push($errors, "amount is required");
    }

    if (empty($gst))
    {
        array_push($errors, "gst is required");
    }
	if (empty($cgst))
    {
        array_push($errors, "cgst is required");
    }
    if (empty($igst))
    {
        array_push($errors, "igst is required");
    }
	 if (empty($tgst))
    {
        array_push($errors, "tgst is required");
    }
    if (empty($total_amount))
    {
        array_push($errors, "total_amount is required");
    }
    if (empty($payable))
    {
        array_push($errors, "payable is required");
    }
    if (empty($dues))
    {
        array_push($errors, "dues is required");
    }
	 if (empty($payment_mode))
    {
        array_push($errors, "payment_mode is required");
    }
    if (empty($deposite_account))
    {
        array_push($errors, "deposite_account is required");
    }
    
    

    
    echo "hello2";

    // Finally, register user if there are no errors in the form
    
    
    $query = "INSERT INTO vendors_product (product_id,vendor_name,date,mobile_no,address,consignee,product_name,gst_no,itc_hs_code,quantity,rate,amount,gst,cgst,igst,tgst,total_amount,payable,dues,payment_mode,deposite_account) VALUES ('$vendor_id','$vendor_name','$date','$mobile_no','$address','$consignee','$product_name','$gst_no','$itc_hs_code','$quantity','$rate','$amount','$gst','$cgst','$igst','$tgst','$total_amount','$payable','$dues','$payment_mode','$deposite_account')";
    echo $query;
    mysqli_query($db, $query);
    echo "hello";
    $_SESSION['name'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location:invoice.php?edit1='.$vendor_id);
   
}
?>
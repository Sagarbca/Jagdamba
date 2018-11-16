<?php $output = NULL;?>
<?php
include 'config.php';
$mysqli = NEW Mysqli('localhost','root','','jagdamba');
if (isset($_POST['submit']))
{
$pagename = $_GET['name'];
echo $pagename;

$vendor_id = $_POST['vendor_id'];
echo "hello i am in config file".$vendor_id;
//echo $client_id;

if($pagename != 'deposite_cash'){

$invoice_no = $_POST['invoice_no'];
$invoice_date = $_POST['date_of_invoice'];


$total_amount = $_POST['itotal'];
$dues = $_POST['dues'];


// for purchase table data

//$tsum = $_POST['tsum'];
//$gst_total = $_POST['gst_total'];
//$discount = $_POST['discount'];
//$net_amount = $_POST['net_amount'];

}
else{

$totalPrice = 0;
//$tsum = 0;
//$gst_total = 0;
//$discount = 0;
//$net_amount = 0;
$dues = -$_POST['payable'];
$invoice_no = 0;
$invoice_date = 0;

}
$payble = $_POST['payable'];

$payment_mode = $_POST['payment_mode'];
$deposite_account = $_POST['deposite_account'];
$utr_no = $_POST['utr_no'];
$total_due_1 = 0;


$duestatus = "unpaid";



// 
$querycount = "SELECT count(purchase_id) AS 'count' FROM vendor_purchase_table WHERE vendor_id = '$vendor_id'";
$insertcount = $mysqli->query($querycount);

// to count the no of rows 
$data1=mysqli_fetch_assoc($insertcount);
$purchase_id =  $data1['count'];

//echo $no_of_rows;
// here the starts the code of 2nd try 

if($purchase_id == 0){
$total_due_1 = 0;

//echo 'purcase id zero start<br>';

$querymaxcount = "SELECT max(purchase_id) AS max_id FROM `vendor_purchase_table`";
$insertcountmax = $mysqli->query($querymaxcount);

// to count the no of rows 
$data=mysqli_fetch_assoc($insertcountmax);
$purchase_id =  $data['max_id'];

//echo 'purcase id zero end<br>';

}

if($purchase_id>0){


$query_max_pi = "SELECT max(purchase_id) AS max_id FROM `vendor_purchase_table` WHERE vendor_id = '$vendor_id'";
$insertcount1 = $mysqli->query($query_max_pi);

// to max the no of rows 
$maxid=mysqli_fetch_assoc($insertcount1);
$maxpurchase_id =  $maxid['max_id'];

// max purchase id in table
$query_max_pi1 = "SELECT max(purchase_id) AS max_pid FROM `vendor_purchase_table`";
$insertcount11 = $mysqli->query($query_max_pi1);

// to max the no of rows 
$maxid1=mysqli_fetch_assoc($insertcount11);
$maxpurchase_id1 =  $maxid1['max_pid'];


$purchase_id = $maxpurchase_id1;

// echo "<h1> maxpurchase_id = </h1>";
// echo $maxpurchase_id . '<br>';
// echo "<h1> purchase_id = </h1>";
// echo $purchase_id . '<br>';

include 'config2.php';
//echo $maxpurchase_id; 
$result = $db->query ( " SELECT total_due FROM vendor_purchase_table WHERE invoice_no = '$maxpurchase_id'" );

while ( $item1 = $result->fetch_assoc () ) {

$total_due_1 =  $item1['total_due'];
// echo "<h1> total due</h1>";
// echo $total_due_1 . '<br>';

//echo "<h1> greater than 1 end</h1>";

}
}

$total_due_1 = $total_due_1 + $dues;

if($total_due_1 == 0){
$duestatus = "paid";
}

if($total_due_1 < 0){
$duestatus = "extra";
}

echo $total_due_1;

echo $duestatus;

// ends here 
echo "purchase_id upper= ".$purchase_id;
$purchase_id++;

//echo "purchase_id = ".$purchase_id;


if($pagename != 'deposite_cash'){



foreach($product_name AS $key => $value){
//echo $value;

//perform insert 

$query = "INSERT INTO vendor_product_master (  `purchase_id`,`invoice_date`,`vendor_id`, `product_name`, `hsn_code`, `quantity`, `per`, `rate`, `amount`, `gst`, `cgst`, `cgst_amount`, `sgst`, `sgst_amount`, `igst`, `igst_amount`, `total_amount`) VALUES ('".$mysqli->real_escape_string($purchase_id)."','".$mysqli->real_escape_string($invoice_date)."','".$mysqli->real_escape_string($vendor_id)."','".$mysqli->real_escape_string($product_name[$key])."','".$mysqli->real_escape_string($hsn_code[$key])."','".$mysqli->real_escape_string($quantity[$key])."','".$mysqli->real_escape_string($per[$key])."','".$mysqli->real_escape_string($rate[$key])."','".$mysqli->real_escape_string($amount[$key])."','".$mysqli->real_escape_string($gst[$key])."','".$mysqli->real_escape_string($cgst[$key])."','".$mysqli->real_escape_string($cgst_amount[$key])."','".$mysqli->real_escape_string($sgst[$key])."','".$mysqli->real_escape_string($sgst_amount[$key])."','".$mysqli->real_escape_string($igst[$key])."','".$mysqli->real_escape_string($igst_amount[$key])."','".$mysqli->real_escape_string($total_amount[$key])."')";

//echo $query;
//mysqli_query($, $query);

$insert = $mysqli->query($query);
}

}
// dues kariyakaram start 
if($pagename == 'deposite_cash'){

$dues = 0;
}
// dues kariyakarma ends 
/*  total due management ends here */

$query_purchase = "INSERT INTO `vendor_purchase_table`(`purchase_id`,`invoice_no`,  `vendor_id`,`payble`, `dues`, `payment_method`, `deposite_account`,`total_due`,`status`,`utr_no`) VALUES ('$purchase_id','$invoice_no','$vendor_id','$payble','$dues','$payment_mode','$deposite_account','$total_due_1','$duestatus','$utr_no')";
//echo $query_purchase;
$insert3 = $mysqli->query($query_purchase);


echo "purchase_id =====".$purchase_id;
echo "vendor_id ======".$vendor_id;
// echo "<script>window.open('test_invoice_pran.php?edit1=$purchase_id','_self')</script>";
}


?>
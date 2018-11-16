<?php
session_start();
// initializing variables
$username = "root";
$password = "";
$errors = array();
$mysqli = NEW Mysqli('localhost','root','','jagdamba');
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'jagdamba');
if (isset($_POST['submit1']))
{
// receive all input values from the form
$staff_id = mysqli_real_escape_string($db, $_POST['staff_id']);
$staff_name = mysqli_real_escape_string($db, $_POST['staff_name']);
$deposit_a_amt = mysqli_real_escape_string($db, $_POST['deposit_money']);
$remaining_amount = mysqli_real_escape_string($db, $_POST['remaining_balance']);
$deposit_remarks = mysqli_real_escape_string($db, $_POST['advance_remarks']);
// editing starting from here

$pv_advance_amt = 0;  
$remaining_a_amt = 0;
$ad_status = "UNPAID"; 
$advance_amt = 0;
$ad_count = 0;



$querycount = "SELECT count(ad_id) AS 'count' FROM advance_transaction ";

$insertcount = $mysqli->query($querycount);

// to count the no of rows 
$data1=mysqli_fetch_assoc($insertcount);
$ad_count =  $data1['count'];

if($ad_count == 0){
$pv_advance_amt = 0; 
}

if($ad_count > 0){

$ad_rem_result = $db->query ( " SELECT remaining_a_amt FROM advance_transaction WHERE ad_id = (SELECT MAX(ad_id) FROM `advance_transaction` WHERE staff_id = '$staff_id')" );

while ( $ad_rem = $ad_rem_result->fetch_assoc () ) {

$pv_advance_amt =  $ad_rem['remaining_a_amt'];


}

}

if($deposit_a_amt == NULL){
$deposit_a_amt = 0;
}



if($deposit_a_amt != NULL){
if ($deposit_a_amt >0) {
$remaining_a_amt = $pv_advance_amt - $deposit_a_amt;
}

}


if($remaining_a_amt == 0){
$ad_status  = "PAID";
}

if($remaining_a_amt < 0){
$ad_status  = "EXTRA";
}




$query = "INSERT INTO `advance_transaction`(`staff_id`,`pv_advance_amt`, `advance_amt`, `deposit_a_amt`, `remaining_a_amt`, `ad_status`, `ad_remarks`) VALUES ('$staff_id','$pv_advance_amt','$advance_amt','$deposit_a_amt','$remaining_a_amt','$ad_status','$deposit_remarks')";

mysqli_query($db, $query);
echo "<script>alert('Advance Money deposited successfully')</script>";
echo "<script>window.open('advance_money_staff.php?edit1=$staff_id','_self')</script>";
// close here editing 

}
?>
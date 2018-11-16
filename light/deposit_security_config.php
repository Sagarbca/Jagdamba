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
$deposit_s_amt = mysqli_real_escape_string($db, $_POST['deposit_money']);
$remaining_amount = mysqli_real_escape_string($db, $_POST['remaining_balance']);
$deposit_remarks = mysqli_real_escape_string($db, $_POST['deposit_remarks']);
// editing starting from here

$pv_security_amt = 0;  
$remaining_s_amt = 0;
$st_status = "UNPAID"; 
$security_amt = 0;




$querycount = "SELECT count(st_id) AS 'count' FROM security_transaction ";

$insertcount = $mysqli->query($querycount);

// to count the no of rows 
$data1=mysqli_fetch_assoc($insertcount);
$st_count =  $data1['count'];

if($st_count == 0){
$pv_security_amt = 0; 
}

if($st_count > 0){

$st_rem_result = $db->query ( " SELECT remaining_s_amt FROM security_transaction WHERE st_id = (SELECT MAX(st_id) FROM `security_transaction` WHERE staff_id = '$staff_id')" );

while ( $st_rem = $st_rem_result->fetch_assoc () ) {

$pv_security_amt =  $st_rem['remaining_s_amt'];


}

}

if($deposit_s_amt == NULL){
$deposit_s_amt = 0;
}



if($deposit_s_amt != NULL){
if ($deposit_s_amt >0) {
$remaining_s_amt = $pv_security_amt - $deposit_s_amt;
}

}


if($remaining_s_amt == 0){
$st_status  = "PAID";
}

if($remaining_s_amt < 0){
$st_status  = "EXTRA";
}




$query = "INSERT INTO `security_transaction`(`staff_id`,`pv_security_amt`, `security_amt`, `deposit_s_amt`, `remaining_s_amt`, `st_status`, `st_remarks`) VALUES ('$staff_id','$pv_security_amt','$security_amt','$deposit_s_amt','$remaining_s_amt','$st_status','$deposit_remarks')";

mysqli_query($db, $query);
echo "<script>alert('Security Money deposited successfully')</script>";
echo "<script>window.open('security_money_staff.php?edit1=$staff_id','_self')</script>";
// close here editing 

}
?>
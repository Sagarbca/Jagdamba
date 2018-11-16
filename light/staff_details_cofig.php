<?php
session_start();
include 'config.php';
$mysqli = NEW Mysqli('localhost','root','','jagdamba');
// initializing variables
$username = "succeky5_succexa";
$password = "~f_uR)+v,*bS";
$errors = array();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'jagdamba');
if (isset($_POST['submit1']))
{

$staff_id = mysqli_real_escape_string($db,$_POST['staff_id']);

$status = "unpaid";



$security_amt = mysqli_real_escape_string($db , $_POST['security_money']);
$sec_remarks = mysqli_real_escape_string($db , $_POST['sec_remarks']);
$advance_money = mysqli_real_escape_string($db , $_POST['advance_money']);
$ad_remarks = mysqli_real_escape_string($db , $_POST['adv_remarks']);
$salary = mysqli_real_escape_string($db , $_POST['salary']);
$salary_remarks = mysqli_real_escape_string($db , $_POST['salary_remarks']);


$counts = 0; 
$pv_security_amt = 0;
$remaining_s_amt = 0;
$deposit_s_amt = 0;
$st_status = "UNPAID";
$ad_status = "UNPAID";
$pv_advance_amt = 0;
$remaining_a_amt = 0;
$deposit_a_amt = 0;


if( $security_amt != 0 && $security_amt != ''){


$querycount = "SELECT count(st_id) AS 'count' FROM security_transaction ";
$insertcount = $mysqli->query($querycount);

// to count the no of rows 
$data1=mysqli_fetch_assoc($insertcount);
$st_count =  $data1['count'];
$temp_s =  $st_count;
$temp_s++;

if($st_count == 0){
$pv_security_amt = 0; 
}

if($st_count > 0){

$st_rem_result = $db->query ( " SELECT remaining_s_amt FROM security_transaction WHERE st_id = (SELECT MAX(st_id) FROM `security_transaction` WHERE staff_id = '$staff_id')" );

while ( $st_rem = $st_rem_result->fetch_assoc () ) {

$pv_security_amt =  $st_rem['remaining_s_amt'];
// echo $pv_security_amt."<br>";


}

}
/*echo "i am the outside of if";
return;
*/
if($security_amt == NULL){
$security_amt = 0;
}

if($deposit_s_amt == NULL){
$deposit_s_amt = 0;
}

if($security_amt != NULL){
if ($security_amt >0) {
$remaining_s_amt = $pv_security_amt + $security_amt;
}

}

if($remaining_s_amt == 0){
$st_status  = "PAID";
}

if($remaining_s_amt < 0){
$st_status  = "EXTRA";
}




$query = "INSERT INTO `security_transaction`(`staff_id`,`pv_security_amt`, `security_amt`, `deposit_s_amt`, `remaining_s_amt`, `st_status`, `st_remarks`) VALUES ('$staff_id','$pv_security_amt','$security_amt','$deposit_s_amt','$remaining_s_amt','$st_status','$sec_remarks')";

//echo $query;
mysqli_query($db, $query);
$counts++;


echo "<script>alert('Security Money inseted successfully')</script>";
//echo "<script>window.open('security_money_staff.php?edit1=$staff_id','_self')</script>";
echo "<script>window.open('security_money_voucher.php?edit1=$temp_s&edit2=$staff_id','_self')</script>";
// header('location:all_staff.php');
}




//advance money management starting from here


if ($advance_money != 0 && $advance_money != '' &&$advance_money != NULL) {
$querycount = "SELECT MAX(ad_id) AS 'count' FROM advance_transaction ";
$insertcount = $mysqli->query($querycount);

// to count the no of rows 

$data1=mysqli_fetch_assoc($insertcount);
$ad_count =  $data1['count'];
echo $ad_count;
$temp_ad_count = $ad_count;
$temp_a = $ad_count;
$temp_a++;
echo $temp_a;


if($ad_count == 0){
$pv_advance_amt = 0; 
}
if($ad_count > 0){


$ad_rem_result = $db->query ("SELECT remaining_a_amt FROM advance_transaction WHERE ad_id = (SELECT MAX(ad_id) FROM `advance_transaction` WHERE staff_id = '$staff_id')" );

while ( $ad_rem = $ad_rem_result->fetch_assoc () ) {

$pv_advance_amt =  $ad_rem['remaining_a_amt'];
// echo $pv_security_amt."<br>";


}

}
/*echo "i am the outside of if";
return;
*/
if($advance_money == NULL){
$advance_money = 0;
}

if($deposit_a_amt == NULL){
$deposit_a_amt = 0;
}

if($advance_money != NULL){
if ($advance_money >0) {
$remaining_a_amt = $pv_advance_amt + $advance_money;
}

}

if($remaining_a_amt == 0){
$ad_status  = "PAID";
}

if($remaining_a_amt < 0){
$ad_status  = "EXTRA";
}
$query = "INSERT INTO `advance_transaction`(`staff_id`,`pv_advance_amt`, `advance_amt`, `deposit_a_amt`, `remaining_a_amt`, `ad_status`, `ad_remarks`) VALUES ('$staff_id','$pv_advance_amt','$advance_money','$deposit_a_amt','$remaining_a_amt','$ad_status','$ad_remarks')";

//echo $query;
mysqli_query($db, $query);
$counts++;
echo "<script>alert('advance Money inseted successfully')</script>";
echo "<script>window.open('advance_money_voucher.php?edit1=$temp_a&edit2=$staff_id','_self')</script>"; 
// echo "<script>window.open('advance_money_staff.php?edit1=$staff_id','_self')</script>";
// header('location:all_staff.php');
}
/*$query = "INSERT INTO `advance_money`( `staff_id`,  `a_money`, `status`) VALUES ('$staff_id','$advance_money','$status')";
echo $query;
mysqli_query($db, $query);
$counts++;
echo "<script>alert('Advance Money successfully inserted')</script>";
echo "<script>window.open('advance_money_staff.php?edit1=;','_self')</script>";
//header('location:all_staff.php');
}*/
if ($salary != 0 && $salary != '') {

$no_of_days = mysqli_real_escape_string($db , $_POST['no_of_days']);
$actual_days = mysqli_real_escape_string($db , $_POST['actual_days']);
$general_salary = mysqli_real_escape_string($db , $_POST['general_salary']);
$ot = mysqli_real_escape_string($db , $_POST['ot']);
$total_salary = mysqli_real_escape_string($db , $_POST['total_salary']);
    

$query = "INSERT INTO `salary`( `staff_id`, `salary`,`nof_of_days`, `actual_days`, `general_salary`, `ot`, `total_salary`,`salary_remarks`) VALUES ('$staff_id','$salary','$no_of_days','$actual_days','$general_salary','$ot','$total_salary','$salary_remarks')";
//echo $query;
mysqli_query($db, $query);
$counts++;


// here the editing advance management 

$querycount = "SELECT count(ad_id) AS 'count' FROM advance_transaction ";

$insertcount = $mysqli->query($querycount);

// to count the no of rows 
$data1=mysqli_fetch_assoc($insertcount);
$ad_count =  $data1['count'];

/*$sl_am = $ad_count;
$sl_am++;*/

$querycounts = "SELECT count(salary_id) AS 'counts' FROM salary ";

$insertcounts = $mysqli->query($querycounts);

// to count the no of rows 
$data1s=mysqli_fetch_assoc($insertcounts);
$ads_count =  $data1s['counts'];

$sl_am = $ads_count;
$salary_id = $sl_am;
$sl_am++;

if($ad_count == 0){
$pv_advance_amt = 0; 
}

if($ad_count > 0){

$ad_rem_result = $db->query ( " SELECT remaining_a_amt FROM advance_transaction WHERE ad_id = (SELECT MAX(ad_id) FROM `advance_transaction` WHERE staff_id = '$staff_id')" );

while ( $ad_rem = $ad_rem_result->fetch_assoc () ) {

$pv_advance_amt =  $ad_rem['remaining_a_amt'];


}

}

if($salary == NULL){
$salary = 0;
}



/*if($salary != NULL){
if ($salary >0) {
$remaining_a_amt = $pv_advance_amt - $salary;
}

} */

$orignal_salary = $db->query ( " SELECT * from staffs WHERE staff_id = '$staff_id'" );

while ( $ad_remi = $orignal_salary->fetch_assoc () ) {

$staff_salary =  $ad_remi['salary'];


}



$advance_amt = 0;

                 
                 //$total_salary 9333.33 $staff_salary
                 $staff_salary =$total_salary;
                
$deposit_a_amt = $staff_salary - $salary;

if($deposit_a_amt < 0){
$advance_amt = (-1)*$deposit_a_amt;
$remaining_a_amt = $pv_advance_amt - $deposit_a_amt;
$deposit_a_amt = 0; 
} else {
$remaining_a_amt = $pv_advance_amt - $deposit_a_amt;
}

$ad_remarks = "Due To Salary.";



if($remaining_a_amt == 0){
$ad_status  = "PAID";
}

if($remaining_a_amt < 0){
$ad_status  = "EXTRA";
}



$query = "INSERT INTO `advance_transaction`(`staff_id`,`pv_advance_amt`, `advance_amt`, `deposit_a_amt`, `remaining_a_amt`, `ad_status`, `ad_remarks`) VALUES ('$staff_id','$pv_advance_amt','$advance_amt','$deposit_a_amt','$remaining_a_amt','$ad_status','$ad_remarks')";
//echo $query;
if($pv_advance_amt == 0 && $remaining_a_amt == 0){
    
}
else{
 mysqli_query($db, $query);   
}


// echo "<script>window.open('advance_money_staff.php?edit1=$staff_id','_self')</script>";
// header('location:all_staff.php');
//  here we closed ends
echo "<script>alert('salary successfully inserted')</script>";
echo "<script>window.open('salary_slip.php?edit1=$salary_id&edit2=$staff_id','_self')</script>";
//header('location:all_staff.php');
}
/*if(($security_money=='' || $s_emi == '' ) && $counts == 0){
$counts++;
echo "<script>alert('please fill data correctly security')</script>";
//echo "<script>window.open('staff_details.php?edit1 =  $staff_id,'_self')</script>";
//header('location:all_staff.php ');
}*/
if($advance_money == '' && $counts == 0)
{

echo "<script>alert('please fill data correctly advance')</script>";
echo "<script>window.open('staff_details.php?edit1=$staff_id','_self')</script>";
} 

if($salary == '' && $counts == 0)
{

echo "<script>alert('please fill data correctly advance')</script>";


}   


// Finally, register user if there are no errors in the form
/*$query = "INSERT INTO staff_detail (staff_id,staff_name,mobile_no,doj,address,email,aadhar_no,salary,date_of_advance,security_money,advance_money) VALUES ('$staff_id','$name1','$mobile_no','$doj','$address','$email','$aadhar_no','$salary','$date_of_advance','$security_money','$advance_money')";
echo $query;
mysqli_query($db, $query);
echo "hello";

$_SESSION['success'] = "You are now logged in";

header('location:all_staff.php');*/
}  
?>

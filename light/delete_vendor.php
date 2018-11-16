<?php
session_start();
// initializing variables


$username = "root";
$password = "";
$errors = array();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'jagdamba');

if (isset($_GET['name'])) {
$page = $_GET['name'];
echo $page;

if (isset($_GET['edit1'])) {
$vendor_id = $_GET['edit1'];

if($page == 'vendor'){
$query = "DELETE  FROM vendors WHERE vendor_id = $vendor_id";
echo $query;
mysqli_query($db, $query);
header('location:view_vendor.php'); 
}}
if($page == 'vendor_product'){
$query = "DELETE  FROM vendors_product WHERE order_no = $vendor_id";
echo $query;
mysqli_query($db, $query);
header('location:view_vendor_product.php'); 
}
if($page == 'staff'){
$query = "DELETE  FROM staffs WHERE staff_id = $vendor_id";
echo $query;
mysqli_query($db, $query); 
header('location:all_staff.php');
}
if($page == 'client'){
$query = "DELETE  FROM clients WHERE client_id = $vendor_id";
echo $query;
mysqli_query($db, $query); 
header('location:view_client.php');
}
if($page == 'client_product'){
$query = "DELETE  FROM purchase_table WHERE purchase_id = $vendor_id";
echo $query;
mysqli_query($db, $query); 
header('location:view_client_product.php');
}
if($page == 'expense_products'){
$query = "DELETE  FROM expenses WHERE expense_id = $vendor_id";
echo $query;
mysqli_query($db, $query); 
header('location:all_expenses.php');
}

}

$_SESSION['success'] = "You are now logged in";
// header('location:view_vendor.php');


?>
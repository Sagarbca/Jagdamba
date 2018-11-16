<?php
ini_set('display_errors', '1');
session_start();
// initializing variables
$username = "root";
$password = "";
$errors = array();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'jagdamba');
if(isset($_POST['prod_name']) && $_POST['prod_name'] != ''){
$prod_name = mysqli_real_escape_string($db, $_POST['prod_name']);    
$query = "INSERT INTO expense_products (exp_prod_name) VALUES ('$prod_name')";    
$res = mysqli_query($db, $query);  
if (!$res) {
$error_no =  mysqli_errno($db);
if($error_no == 1062){
$msg =  'The Product Already exists';            
}
else{
$msg = $db->error;
}
}
else{
$last_insert_id = mysqli_insert_id($db);
$msg = $last_insert_id;
}
echo $msg;exit;
}
if (isset($_POST['submit1']))
{
// receive all input values from the form
$doe = mysqli_real_escape_string($db, $_POST['date_of_expense1']);
$product_name = mysqli_real_escape_string($db, $_POST['product_name1']);
$quanity = mysqli_real_escape_string($db, $_POST['quantity1']);
$rate = mysqli_real_escape_string($db, $_POST['rate1']);
$Total = mysqli_real_escape_string($db, $_POST['Total1']);
$doe2 = mysqli_real_escape_string($db, $_POST['date_of_expense2']);
$product_name2 = mysqli_real_escape_string($db, $_POST['product_name2']);
$quanity2 = mysqli_real_escape_string($db, $_POST['quantity2']);
$rate2 = mysqli_real_escape_string($db, $_POST['rate2']);
$Total2 = mysqli_real_escape_string($db, $_POST['Total2']);
$doe3 = mysqli_real_escape_string($db, $_POST['date_of_expense3']);
$product_name3 = mysqli_real_escape_string($db, $_POST['product_name3']);
$quanity3 = mysqli_real_escape_string($db, $_POST['quantity3']);
$rate3 = mysqli_real_escape_string($db, $_POST['rate3']);
$Total3 = mysqli_real_escape_string($db, $_POST['Total3']);
$doe4 = mysqli_real_escape_string($db, $_POST['date_of_expense4']);
$product_name4 = mysqli_real_escape_string($db, $_POST['product_name4']);
$quanity4 = mysqli_real_escape_string($db, $_POST['quantity4']);
$rate4 = mysqli_real_escape_string($db, $_POST['rate4']);
$Total4 = mysqli_real_escape_string($db, $_POST['Total4']);
$total_no = mysqli_real_escape_string($db , $_POST['total_no']);
// image file directory
// form validation: ensure that the form is correctly filled ...
// first check the database to make sure
// a user does not already exist with the same username and/or email

echo "hello2";

// Finally, register user if there are no errors in the form
$query = "INSERT INTO expenses (doe,product_name,rate,quantity,total_amount,doe2,product_name2,quanity2,rate2,Total2,doe3,product_name3,quanity3,rate3,Total3,doe4,product_name4,quanity4,rate4,Total4,total_no) VALUES ('$doe','$product_name','$rate','$quanity','$Total','$doe2','$product_name2','$quanity2','$rate2','$Total2','$doe3','$product_name3','$quanity3','$rate3','$Total3','$doe4','$product_name4','$quanity4','$rate4','$Total4','$total_no')";

mysqli_query($db, $query);


$_SESSION['success'] = "You are now logged in";

header('location:all_expenses.php');
}  
?>

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
$date = mysqli_real_escape_string($db, $_POST['date']);
$name = mysqli_real_escape_string($db, $_POST['name']);
$manufacture = mysqli_real_escape_string($db, $_POST['manufacture']);
$stock = mysqli_real_escape_string($db, $_POST['stock']);
$used = mysqli_real_escape_string($db , $_POST['used']);
$used_date= mysqli_real_escape_string($db, $_POST['used_date']);
$rest_stock_after_used= mysqli_real_escape_string($db, $_POST['rest_stock_after_used']);
// form validation: ensure that the form is correctly filled ...
// by adding (array_push()) corresponding error unto $errors array
//echo "hello2";
// Finally, register user if there are no errors in the form
$query = "INSERT INTO `spare_parts`(`date`, `name`, `manufacture`, `stock`, `used`, `used_date`, `rest_stock_used`) VALUES ('$date','$name','$manufacture','$stock','$used','$used_date','$rest_stock_after_used')";
echo $query;
mysqli_query($db, $query);
//echo "hello";
// $_SESSION['name'] = $username;
$_SESSION['success'] = "You are now logged in";
header('location:spare_parts.php');
}
?>
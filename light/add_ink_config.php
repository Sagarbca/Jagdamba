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
$manufacturer = mysqli_real_escape_string($db, $_POST['manufacturer']);
$kg = mysqli_real_escape_string($db, $_POST['kg']);
$less = mysqli_real_escape_string($db , $_POST['less']);
$less_date= mysqli_real_escape_string($db, $_POST['less_date']);
$rest_stock_after_less= mysqli_real_escape_string($db, $_POST['rest_stock_after_less']);
// form validation: ensure that the form is correctly filled ...
// by adding (array_push()) corresponding error unto $errors array
//echo "hello2";
// Finally, register user if there are no errors in the form
$query = "INSERT INTO `ink_stock`(`date`, `name`, `manufacture`, `kg`, `less`, `less_date`, `rest_stock`) VALUES ('$date','$name','$manufacturer','$kg','$less','$less_date','$rest_stock_after_less')";
echo $query;
mysqli_query($db, $query);
//echo "hello";
// $_SESSION['name'] = $username;
$_SESSION['success'] = "You are now logged in";
header('location:ink_stock.php');
}
?>
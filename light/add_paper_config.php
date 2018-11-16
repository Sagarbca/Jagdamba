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
$kg = mysqli_real_escape_string($db, $_POST['kg']);
$rim = mysqli_real_escape_string($db, $_POST['rim']);
$sheet = mysqli_real_escape_string($db , $_POST['sheet']);
$less_stock_after_printing= mysqli_real_escape_string($db, $_POST['less_stock_after_printing']);
$printing_date= mysqli_real_escape_string($db, $_POST['printing_date']);
$less_stock_after_less= mysqli_real_escape_string($db, $_POST['less_stock_after_less']);
// form validation: ensure that the form is correctly filled ...
// by adding (array_push()) corresponding error unto $errors array
//echo "hello2";
// Finally, register user if there are no errors in the form
$query = "INSERT INTO `paper_stock`( `date`, `name`, `kg`, `rim`, `sheet`, `less_stock_after_printing`, `printing_date`, `rest_stock_after_printing`) VALUES ('$date','$name','$kg','$rim','$sheet','$less_stock_after_printing','$printing_date','$less_stock_after_less')";
echo $query;
mysqli_query($db, $query);
//echo "hello";
// $_SESSION['name'] = $username;
$_SESSION['success'] = "You are now logged in";
header('location:paper_stock.php');
}
?>
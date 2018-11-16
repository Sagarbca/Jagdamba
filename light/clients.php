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



$client_name = mysqli_real_escape_string($db, $_POST['client_name']);

$date = mysqli_real_escape_string($db, $_POST['date']);

$mobile_no = mysqli_real_escape_string($db, $_POST['mobile_no']);
$email_client = mysqli_real_escape_string($db, $_POST['email_client']);
$gst = mysqli_real_escape_string($db , $_POST['gst']);
// $consignee = mysqli_real_escape_string($db , $_POST['Consignee']);
$address= mysqli_real_escape_string($db, $_POST['address']);

$state= mysqli_real_escape_string($db, $_POST['state']);


$state_code= mysqli_real_escape_string($db, $_POST['state_code']);






echo $client_name;
echo $date;

echo $mobile_no;
echo $address;


// form validation: ensure that the form is correctly filled ...
// by adding (array_push()) corresponding error unto $errors array

if (empty($client_name))
{
array_push($errors, "client_name is required");
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




echo "hello2";

// Finally, register user if there are no errors in the form


$query = "INSERT INTO clients (client_name,date,mobile_no,email_client,gst_no,address,state,state_code) VALUES ('$client_name','$date','$mobile_no','$email_client','$gst','$address','$state','$state_code')";
echo $query;
mysqli_query($db, $query);
echo "hello";
// $_SESSION['name'] = $username;
$_SESSION['success'] = "You are now logged in";
header('location:view_client.php');

}
?>
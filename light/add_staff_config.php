<?php
session_start();
// initializing variables
$username = "root";
$password = "";
$errors = array();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'jagdamba');
if (isset($_POST['submit1']))
{
// receive all input values from the form
$doj = mysqli_real_escape_string($db, $_POST['date']);
$name1 = mysqli_real_escape_string($db, $_POST['name']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$mobile_no = mysqli_real_escape_string($db, $_POST['mobile_no']);
$address = mysqli_real_escape_string($db, $_POST['address']);
$aadhar_no = mysqli_real_escape_string($db, $_POST['aadhar_no']);
$salary = mysqli_real_escape_string($db, $_POST['salary']);

// image file directory
// form validation: ensure that the form is correctly filled ...
// first check the database to make sure
// a user does not already exist with the same username and/or email
$user_check_query = "SELECT * FROM staffs WHERE email ='$email'  LIMIT 1";
echo "hello i am in checked position";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);
if ($user)
{ // if user exists
if ($user['email'] === $email)
{

array_push($errors, "email already exist");

}
}


// Finally, register user if there are no errors in the form
$query = "INSERT INTO staffs (staff_name,mobile_no,doj,address,email,aadhar_no,salary) VALUES ('$name1','$mobile_no','$doj','$address','$email','$aadhar_no','$salary')";

mysqli_query($db, $query);


$_SESSION['success'] = "You are now logged in";

header('location:all_staff.php');
}  
?>

<?php
session_start();
// initializing variables
$username = "root";
$password = "";
$errors = array();
$email = $_SESSION['email']; 
//echo $email;
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'jagdamba');
if (isset($_POST['submit']))
{
// receive all input values from the form
//echo $email;
$old_password = mysqli_real_escape_string($db, $_POST['old_password']);
$new_password = mysqli_real_escape_string($db, $_POST['new_password']);
$confirm_new_password = mysqli_real_escape_string($db, $_POST['confirm_new_password']);



$getpassword = "SELECT password FROM users WHERE `email`='$email'";

$result = mysqli_query($db,$getpassword);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$orignal_password =  $row['password'];



if($orignal_password == $old_password){


if (empty($old_password))
{
echo "<script>alert('please fill the old password')</script>";
echo "<script>window.open('changepassword.php','_self')</script>";

}
if (empty($new_password))
{
echo "<script>alert('please fill the new password')</script>";
echo "<script>window.open('changepassword.php','_self')</script>";

}
if (empty($confirm_new_password))
{
echo "<script>alert('please fill the confirm new password')</script>";
echo "<script>window.open('changepassword.php','_self')</script>";

}

else{

/*$getpassword = "SELECT password FROM users WHERE `email`='$email'";
echo $getpassword;
$result = mysqli_query($db,$getpassword);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$orignal_password =  $row['password'];

if($orignal_password == $old_password){
echo "<script>alert('incorrect old password')</script>";
echo "<script>window.open('changepassword.php','_self')</script>";
}*/


if($new_password == $confirm_new_password){

$query = "UPDATE `users` SET `password`= '$new_password' WHERE `email`='$email'";

mysqli_query($db, $query);
header('location:logout.php');
}

else{
echo "<script>alert('password mismatch Please enter correct password in confirm new password')</script>";
echo "<script>window.open('changepassword.php','_self')</script>";
}

}
}

else{
echo "<script>alert('incorrect old password')</script>";
echo "<script>window.open('changepassword.php','_self')</script>";
}
}
?>
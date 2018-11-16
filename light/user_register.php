<?php
session_start();
// initializing variables
$username = "root";
$password = "";
$errors = array();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'jagdamba');
if (isset($_POST['add_user']))
{
    // receive all input values from the form
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $contact_no = mysqli_real_escape_string($db, $_POST['contact_no']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $user_password = mysqli_real_escape_string($db, $_POST['user_password']);
    // image file directory
    // form validation: ensure that the form is correctly filled ...
    // first check the database to make sure
    // a user does not already exist with the same username and/or email

    echo $email;
    $user_check_query = "SELECT * FROM users where email = '$email' ";
   // echo "hello i am in checked position";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_array($result);

    echo $email1 = $user['email'];
    if ($email==$email1) {
        echo "<script>alert('already exit')</script>";
        echo "<script>window.open('register.php','_self')</script>";
    }else{
        $query = "INSERT INTO users (user_name,email,mobile_no,address,password) VALUES ('$name','$email','$contact_no','$address','$user_password')";
    //echo $query;
    mysqli_query($db, $query);
   // echo "hello";
   
    $_SESSION['name'] = $name;
    $_SESSION['email1'] = $email;

    $_SESSION['success'] = "You are now logged in";
    $_SESSION['name'] = $name;
    header('location:index.php');

}   
    }
    
    
    //echo "hello2";

    // Finally, register user if there are no errors in the form
 
?>

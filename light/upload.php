<?php
$username = "root";
$password = "";
$errors = array();

//$email = $_SESSION['email']; 
//echo $email;
// connect to the database

$db = mysqli_connect('localhost', 'root', '', 'jagdamba');
if(isset($_POST["submit"])) {

$img_name = $_FILES['fileToUpload']['name'];
$img_type = $_FILES['fileToUpload']['type'];
$img_size = $_FILES['fileToUpload']['size'];
$img_tmp_name = $_FILES['fileToUpload']['tmp_name'];

$path = 'uploads/';
move_uploaded_file($img_tmp_name, "$path/$img_name");
$query = "UPDATE `profile_pic` SET `photo`= '$path$img_name' WHERE id = 1";

mysqli_query($db, $query);
header('location:dashboard.php');
}
?>

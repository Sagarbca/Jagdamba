<?php
include 'config2.php';
include 'config.php';


if(isset($_POST['submit']))						//reset password & send mail verify user email id
{
$mail1=$_POST['email'];
$password=$_POST['password'];
$id=$_POST['id'];
$sql2 = "UPDATE `users` SET `password`='$password' WHERE user_id='$id' ";


if ($result = mysqli_query($db,$sql2))
{

if(mysqli_affected_rows($db)>0)
{	
//code to mail reset link
echo '<script>alert("your password is reset");window.location.href="index.php";</script>';
}
else
{
echo '<script>alert("unable to reset password ");window.location.href="index.php";</script>';
}
} 
else
{
echo("Error description: " . mysqli_error($db));
}

}
else 
{
echo '<script>alert("unable to get the data ");window.location.href="index.php";</script>';


}
$con->close();
?>

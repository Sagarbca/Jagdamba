<?php
include 'config2.php';
include 'config.php';
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
require_once "phpmailer/PHPMailerAutoload.php";

if(isset($_POST['submit']))						//reset password & send mail verify user email id
{
$email=$_POST['email'];
// $mobile=$_POST['mobile'];
$sql2 = "SELECT * FROM `users` WHERE `email`='$email' ";


if ($result = mysqli_query($db,$sql2))
{


if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_array($result))
{
$id = $row['user_id'];
$message = 'http://192.168.0.2/jagdamba_final1/light/resetpassword.php?id='.$id.'';

//$message .= 'PLEASE RESET YOUR PASSWORD';
// creating the phpmailer object
$mail = new PHPMailer(true);

// telling the class to use SMTP
$mail->IsSMTP();

// enables SMTP debug information (for testing) set 0 turn off debugging mode, 1 to show debug result
$mail->SMTPDebug = 0;

// enable SMTP authentication
$mail->SMTPAuth = true;

// sets the prefix to the server
$mail->SMTPSecure = 'tls';

// sets GMAIL as the SMTP server
$mail->Host = 'smtp.gmail.com';

// set the SMTP port for the GMAIL server
$mail->Port = 587;

// your gmail address
$mail->Username = 'manojkumar11307@gmail.com';

// your password must be enclosed in single quotes
$mail->Password = 'ajaamahi7484thailand8548';

// add a subject line
$mail->Subject = ' Forget Password ';

// Sender email address and name
$mail->SetFrom('manojkumar11307@gmail.com', 'Manoj Kumar');

// reciever address, person you want to send
$mail->AddAddress($email);

// if your send to multiple person add this line again
//$mail->AddAddress('tosend@domain.com');

// if you want to send a carbon copy
//$mail->AddCC('ashtha11cse@gmail.com','Ashtha');


// if you want to send a blind carbon copy
//$mail->AddBCC('pranwant8@gmail.com','Pranwant');

// add message body
$mail->MsgHTML($message);


// add attachment if any
//$mail->AddAttachment('time.png');

try {
// send mail
$mail->Send();
$msg ='';
echo '<script>alert("link will be sent to your mail for password reset ");window.location.href="index.php";</script>';
} catch (phpmailerException $e) {
$msg = $e->getMessage();
} catch (Exception $e) {
$msg = $e->getMessage();
}
}
}
else
{
echo '<script>alert("No user registerd with this email please signup ");window.location.href="index.php";</script>';
}

} 
else
{
echo("Error description: " . mysqli_error($con));
}

}
else 
{
echo '<script>alert("unable to get the data ");window.location.href="index.php";</script>';


}
$con->close();
?>

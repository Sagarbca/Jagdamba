<?php
include 'config2.php';
include 'config.php';
?>
<?php
session_start();
if(isset($_POST["submit"])) {
//set timezone for server
//echo date_default_timezone_get();
//echo date_default_timezone_get();
// username and password sent from form 
$email = mysqli_real_escape_string($db,$_POST['email']);
$mypassword = mysqli_real_escape_string($db,$_POST['password']);
$sql = "SELECT * FROM users WHERE email = '$email' and password = '$mypassword'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
$_SESSION['name']= $row['user_name'];

// If result matched $myusername and $mypassword, table row must be 1 row
if($count == 1) {
$_SESSION['email'] = $row['email'];

header('location:index.php');
}else {
$error = "<h1>Your Login Name or Password is invalid</h1>";
echo $error;
}
}
?>
<!DOCTYPE html>
<head>
<title> Login Form </title>


<style>

@import url("https://necolas.github.io/normalize.css/3.0.2/normalize.css");
*,
*:before,
*:after {
-moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
}

:root {
background-color: #2e4049;
color: white;
}

form {
width: 50%;
max-width: 450px;
margin: 0 auto 30px;
}

fieldset {
background: #202d33;
border-radius: 4px;
border: none;
border-top: 2px solid tomato;
margin-bottom: 30px;
box-shadow: 0 5px 30px rgba(0, 0, 0, .3);
padding: 10px 15px;
}

legend {
font-weight: bold;
margin-bottom: 10px;
padding-right: 10px;
}

.number {
background: tomato;
margin-right: 10px;
padding: 10px 4px 4px;
}

h1 {
margin: 60px 0;
text-align: center;
font-size: 3em;
color: tomato;
text-shadow: 0 1px 0 #ea553a, 0 3px 0 #b72b12, 0 7px 0 #420900, 0 5px 10px #0b3f3b, 0 5px 11px #ff546a, 0 0 20px tomato;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
background: rgba(255, 255, 255, 0.1);
border: none;
font-size: 16px;
height: auto;
margin: 0;
outline: 0;
padding: 10px;
width: 100%;
background-color: #e8eeef;
color: #2E4049;
box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
margin-bottom: 20px;
}

input[type="checkbox"] {
margin: 0 4px 8px 0;
}



label {
display: inline-block;
margin-bottom: 10px;
}

button {
display: block;
width: 45%;
margin: 50px auto 0;
padding: 10px 20px;
background-color: tomato;
border: none;
border-radius: 5px;
font-weight: bold;
text-shadow: 0 1px 0 rgba(0, 0, 0, .5);
box-shadow: 0 2px 0 #ea553a, 0 4px 0 #b72b12, 0 6px 0 #420900, 0 6px 10px #0b3f3b, 0 6px 11px #ff546a, 0 0 20px tomato;
}

button:hover {
text-shadow: 0 3px 2px rgba(0, 0, 0, .5);
}

button:active {
box-shadow: 0 0px 0 #ea553a, 0 1px 0 #b72b12, 0 2px 0 #420900, 0 2px 10px #0b3f3b, 0 2px 11px #ff546a, 0 0 20px tomato;
outline: 0;
}

button:focus {
outline: 0;
}

/* Extra styles for the cancel button */
.cancelbtn {
width: auto;
padding: 10px 18px;
background-color: #f44336;
}


@media (max-width: 840px) {
form {
width: 70%;
}
}

@media (max-width: 490px) {
form {
width: 100%;
}
button {
width: 50%;
}
}

</style>
</head>

<body>

<form action="login.php" method="post">
<h1>Log In</h1>
<fieldset>

<label for="username">Email Id:</label>
<input type="email" id="username" name="email" required>
<label for="password">Password:</label>
<input type="password" id="password" name="password" required>

</fieldset>


<button type="submit" name="submit">Sign In</button>


</form>

</body>
</html>




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

input[type="radio"] {
margin: 0 2px 0 15px;
}

label {
display: inline-block;
margin-bottom: 10px;
}

button {
display: block;
width: 30%;
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

<form action="user_register.php" method="post">
<h1>Sign Up</h1>
<fieldset>
<legend><span class="number"></span> Your basic info</legend>
<label for="name">Name:</label>
<input type="text" id="name" name="name">


<label for="mail">Email:</label>
<input type="email" id="mail" name="email">

<label for="contact">Contact no:</label>
<input type="tel" id="contact" name="contact_no">
<label for="password">Password:</label>
<input type="password" id="password" name="user_password">

<label for="name">Address:</label>
<input type="text" id="name" name="address">
</fieldset>
<legend> Already have an account?<a href="index.php"><font color="red">Sign in</font></a>.</legend>

<button type="submit" name="add_user">Sign Up</button>


</form>

</body>
</html>
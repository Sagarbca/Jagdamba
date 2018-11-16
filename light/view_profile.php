<?php
error_reporting(1);
session_start();
//if($name = $_SESSION['name']) 
if ($_SESSION['name']=="") {
header('location:index.php');
}
$name=$_SESSION['name'];
?>



<!DOCTYPE html>
<head>
<title> PROFILE PAGE </title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
body {
font-family: 'Raleway', sans-serif;
background: url('pic3.jpg') ;
}

.card{
background-color: lavender;
text-align: left;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
max-width: 900px;
margin: auto;

font-family: arial;
}

</style>

</head>

<body>
<div class="container"><br>
<h1 style="text-align:center; font-size: 40px;"><font color="white"> 
<strong> VENDOR INFORMATION </strong></font></h1>
<br>
<div class="card"><br>
<h1 style="text-align:center"><font color="#001a57"><strong>Vendor Name:shivani</strong></font></h1>
<br>
<h3 style="margin-left:38px"><strong> Mobile No.: 3124545767 </strong></h3>
<h3 style="margin-left:38px"><strong> Consignee: HMVL </strong></h3>
<h3 style="margin-left:38px"><strong> GST NO: 10AAXXXXPP5221 </strong></h3>


<h3 style="margin-left:38px"><strong>  Address: Patna </strong></h3>

<br>

<table class="w3-table-all w3-centered w3-large">
<tr  class="w3-black">
<th>PRODUCT ID</th>
<th>PRODUCT NAME</th>
<th>PRODUCT DATE</th>
<th>ITC-HS-CODE</th>
<th>TOTAL AMOUNT</th>
<th>PAYABLE(in Rs.)</th>
<th>DUES MONEY(in Rs.)</th>

</tr>
<tr>
<td><strong>1</strong></td>
<td><strong>ABS</strong></td>
<td><strong>12-08-2018</strong></td>
<td><strong>4802</strong></td>
<td><strong>3000</strong></td>
<td><strong>2000</strong></td>
<td><strong>1000</strong></td>
</tr>

<tr>
<td><strong>1</strong></td>
<td><strong>ABS</strong></td>
<td><strong>12-08-2018</strong></td>
<td><strong>4802</strong></td>
<td><strong>3000</strong></td>
<td><strong>2000</strong></td>
<td><strong>1000</strong></td>
</tr>
<tr>
<td><strong>1</strong></td>
<td><strong>ABS</strong></td>
<td><strong>12-08-2018</strong></td>
<td><strong>4802</strong></td>
<td><strong>3000</strong></td>
<td><strong>2000</strong></td>
<td><strong>1000</strong></td>
</tr>
<tr>
<td><strong>1</strong></td>
<td><strong>ABS</strong></td>
<td><strong>12-08-2018</strong></td>
<td><strong>4802</strong></td>
<td><strong>3000</strong></td>
<td><strong>2000</strong></td>
<td><strong>1000</strong></td>
</tr>

<tr>
<td><strong>1</strong></td>
<td><strong>ABS</strong></td>
<td><strong>12-08-2018</strong></td>
<td><strong>4802</strong></td>
<td><strong>3000</strong></td>
<td><strong>2000</strong></td>
<td><strong>1000</strong></td>
</tr>

<tr>
<td><strong>1</strong></td>
<td><strong>ABS</strong></td>
<td><strong>12-08-2018</strong></td>
<td><strong>4802</strong></td>
<td><strong>3000</strong></td>
<td><strong>2000</strong></td>
<td><strong>1000</strong></td>
</tr>

</table>

</div>
</div>


</body>
</html>
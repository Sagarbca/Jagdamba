<?php
error_reporting(1);
session_start();
//if($name = $_SESSION['name']) 
if ($_SESSION['name']=="") {
header('location:index.php');

}

$name=$_SESSION['name'];
?>


<?php
session_start();
$name = $_SESSION['name']; 
?>
<?php
include("config.php");
?>
<?php


if (isset($_GET['edit1'])) {
$staff_id = $_GET['edit1'];
}
$sql = "SELECT * from  staff_detail WHERE staff_id ='$staff_id'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row) 
{



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

<strong> STAFF INFORMATION </strong></font></h1>
<br>
<div class="card"><br>
<h1 style="text-align:center"><font color="#001a57"><strong>  STAFF NAME : <?php echo htmlentities($row->staff_name);?> </strong></font></h1>
<br>
<h3 style="margin-left:38px"><strong> Mobile No.: <?php echo htmlentities($row->mobile_no);?> </strong></h3>
<h3 style="margin-left:38px"><strong> Date Of Joining: <?php echo htmlentities($row->doj);?> </strong></h3>
<h3 style="margin-left:38px"><strong> Address: <?php echo htmlentities($row->address);?> </strong></h3>
<h3 style="margin-left:38px"><strong>  Email: <?php echo htmlentities($row->email);?> </strong></h3>
<h3 style="margin-left:38px"><strong> Aadhar No.: <?php echo htmlentities($row->aadhar_no);?> </strong></h3>
<h3 style="margin-left:38px"><strong> Salary: Rs <?php echo htmlentities($row->salary);?>  </strong></h3>
<br>

<table class="w3-table-all w3-centered w3-large">
<tr  class="w3-black">
<th>DATE OF ADVANCE</th>
<th>ADVANCE MONEY(in Rs.)</th>


</tr>
<tr>
<td class="center"><?php echo htmlentities($row->date_of_advance);?></td>
<td class="center"><?php echo htmlentities($row->advance_money);?></td>

</tr>



</table>
<?php } }
?>
<a href="all_staff.php"><h1 style="color: black;"> Back </h1> </a>
</div>
</div>



</body>
</html>
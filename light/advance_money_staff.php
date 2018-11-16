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
$sql = "SELECT * from  staffs WHERE staff_id ='$staff_id'";
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

#back{
padding-top: 150px;
text-align: center;
}

.nowrap {
    white-space: nowrap;
}
</style>

</head>

<body>
<div class="container"><br>
<h1 style="text-align:center; font-size: 40px;"><font color="white"> 

<strong> ADVANCE MONEY INFORMATION </strong></font></h1>
<br>
<div class="card"><br>
<h1 style="text-align:center"><font color="#001a57"><strong>  STAFF NAME : <?php echo htmlentities($row->staff_name);?> </strong></font></h1>
<br>
<h3 style="margin-left:38px"><strong> Mobile No.: <?php echo htmlentities($row->mobile_no);?> </strong></h3>

<h3 style="margin-left:38px"><strong> Salary: Rs <?php echo htmlentities($row->salary);?>  </strong></h3>
<br>


<br>
<br>
<button class="w3-button w3-blue" style="margin-left: 750px;"><a href="advance_money_deposit.php?edit1=<?php echo $row->staff_id ;?>" >Deposit  Money</a></button><br><br>

<?php } }
?>
<table class="w3-table-all w3-centered w3-large">
<tr  class="w3-black">
<th>DATE                                                                                                                                        </th>
<th>PREVIOUS ADVANCE MONEY(in Rs.)</th>
<th> ADVANCE MONEY(in Rs.)</th>

<th>DEPOSIT ADVANCE MONEY</th>
<th>ADVANCE MONEY REMAINING</th>
<th>STATUS</th>
<th>REMARKS</th>
</tr>
<?php 
$sql = "SELECT * from  advance_transaction WHERE staff_id ='$staff_id'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row1) 
{
    
    $prevadv_amt = $row1->pv_advance_amt;
    $remadv_amt = $row1->remaining_a_amt;
    
    if($prevadv_amt == 0 && $remadv_amt==0){
     
     
    }   
     else{
?>  
<tr>
<td class="center nowrap"> <?php  $datee= ($row1->ad_date); echo date('d-m-Y', strtotime($datee)) ?></td>
<td class="center"><?php echo $prevadv_amt;  ?></td>
<td class="center"><?php echo htmlentities($row1->advance_amt);?></td>
<td class="center"><?php echo htmlentities($row1->deposit_a_amt);?></td>
<td class="center"><?php echo $remadv_amt;?></td>

<td class="center"><?php echo htmlentities($row1->ad_status);?></td>
<td class="center"><?php echo htmlentities($row1->ad_remarks);?></td>

</tr>
<?php } } 
}
?>
</table>

</div>
</div>


<div id="back">
<a href="all_staff.php" class="w3-button w3-black" ><h3 > Back </h3> </a>
</div>
</body>
</html>
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
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>
table, th, td {
border: 1px solid black;
border-collapse: collapse;
}
th, td {
padding: 5px;
text-align: left;    
}
.block-a{
width:50%;
float:left;
}
.block-b{
width:50%;
float:right;
}
</style>
</head>
<body> 
<h2 style="text-decoration-line: underline;"> <center> Employee Salary Slip</center></h2>
<div class="container">
<div class="row">
<div class="col-sm-4">
<?php 
if (isset($_GET['edit1'])) {
$salary_id = $_GET['edit1'];
$staff_id = $_GET['edit2'];

$sql = "SELECT * from salary WHERE salary_id = '$salary_id'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row) 
{ ?>
<br>
<?php
$sqll = "SELECT * FROM staffs WHERE staff_id  = '$staff_id'";
$queryl = $dbh -> prepare($sqll);
$queryl->execute();
$resultss=$queryl->fetchAll(PDO::FETCH_OBJ);
$cnts=1;
if($queryl->rowCount() > 0)
{
foreach($resultss as $rows) 
{ ?>
<h5><p>NAME: <label style="text-decoration-line: underline;"><?php echo htmlentities($rows->staff_name);?></label>  </p></h5>
<h5><p>Adress: <?php echo htmlentities($rows->address);?></p></h5> 
</div>

<div class="col-sm-4">
</div>
<div class="col-sm-4">
<h5><p>Date:  <?php echo htmlentities($row->date);?></p></h5>
</div>
</div>
<div class="row">
<div class="col-sm-4"> 
</div>
<div >
</div>
<div class="col-sm-4">
</div>
</div>
<table style="width:100%">
<table border="5">
<tr>
<th style="
width: 62px;">S.No.</th>
<th style="
width: 524px;">Remarks</th>

<th>Gross salary</th>
<th style="width: 195px;">Amount</th>
</tr>
<tr>
<th style="width: 62px;">1.</th>
<th style="width: 524px;"><?php echo htmlentities($row->salary_remarks);?><br><br></th>
<th style="width: 524px;"><?php echo htmlentities($rows->salary);?><br><br></th>
<th style="width: 108px;"><?php echo htmlentities($row->salary);?></th>
</tr>
</tr>
<tr>
    <?php }  }
?>
<th style="
width: 62px;"></th>
<th style="
width: 524px;"></th>
<th  >TOTAL</th>
<td><strong style="color: red; "><?php echo htmlentities($row->salary);?></strong></td>
<?php } ?>
</tr> 
<?php }  }
?>
</table>
<br>
<table style="width:100%">
<tr>
<th colspan="2"> Issuing Author
</th>
<td> <label></label>
<hr><b>Receiving Author</b>
</td>
</tr>
</table>
</table>
<hr> <center><p><b>This is a Computer Generated Invoice</b></p><center><hr>
</body>
<button onclick="javascript:window.print();" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
<a href="all_staff.php"><button style="color: black;"><span><i class="fa fa-print"></i> Back</span></button>
</html>
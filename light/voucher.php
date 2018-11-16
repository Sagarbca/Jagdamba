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
<link rel="stylesheet" href="css/font.css">
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
<h2 style="text-decoration-line: underline;"> <center> Expense voucher</center></h2>
<div class="container">
<div class="row">
<div class="col-sm-4">
<?php 
if (isset($_GET['edit1'])) {
$expense_id = $_GET['edit1'];

$sql = "SELECT *, (SELECT exp_prod_name FROM expense_products WHERE exp_prod_id = exp.product_name ) as exp_prod_name, (SELECT exp_prod_name FROM expense_products WHERE exp_prod_id = exp.product_name2 ) as exp_prod_name2,  (SELECT exp_prod_name FROM expense_products WHERE exp_prod_id = exp.product_name3 ) as exp_prod_name3, (SELECT exp_prod_name FROM expense_products WHERE exp_prod_id = exp.product_name4 ) as exp_prod_name4 from  expenses exp WHERE exp.expense_id = '$expense_id'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row) 
{ ?>

<h5><p>No.: <?php echo htmlentities($row->expense_id);?> </p></h5>
</div>
<div class="col-sm-4">
</div>
<div class="col-sm-4">
<h5><p>Date:   <label style="text-decoration-line: underline;"></label><?php echo htmlentities($row->doe);?></p></h5>
</div>
</div>
<div class="row">
<div class="col-sm-4"> 
</div>
<div class="col-sm-4">
<h5><p>NAME:  <label style="text-decoration-line: underline;">JAGDAMBA</label></p></h5> 
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
width: 524px;">Description of Goods</th>
<th style="
width: 200px;">Rate</th>
<th style="width: 108px;">Quantity</th>
<th style="width: 195px;">Amount</th>
</tr>
<tr>
<th style="width: 62px;">1.</th>
<th style="width: 524px;"><?php echo htmlentities($row->exp_prod_name);?><br><br></th>
<th style="width: 200px;"><?php echo htmlentities($row->rate);?></th>
<th style="width: 108px;"><?php echo htmlentities($row->quantity);?></th>
<th style="width: 108px;"><?php echo htmlentities($row->total_amount);?></th>
</tr>
<tr>
<th style="width: 62px;"> 2</th>
<th style="width: 524px;"><?php echo htmlentities($row->exp_prod_name2);?> <br><br></th>
<th style="width: 200px;"><?php echo htmlentities($row->rate2);?> </th>
<th style="width: 108px;"><?php echo htmlentities($row->quanity2);?> </th>
<th style="width: 108px;"> <?php echo htmlentities($row->Total2);?> </th>
</tr>
<tr>
<th style="width: 62px;"> 3</th>
<th style="width: 524px;"><?php echo htmlentities($row->exp_prod_name3);?> <br><br></th>
<th style="width: 200px;"> <?php echo htmlentities($row->rate3);?></th>
<th style="width: 108px;"><?php echo htmlentities($row->quanity3);?> </th>
<th style="width: 108px;"> <?php echo htmlentities($row->Total3);?>   </th>
</tr>
<tr>
<th style="width: 62px;">4 </th>
<th style="width: 524px;"><?php echo htmlentities($row->exp_prod_name4);?> <br><br></th>
<th style="width: 200px;"><?php echo htmlentities($row->rate4);?> </th>
<th style="width: 108px;"><?php echo htmlentities($row->quanity4);?> </th>
<th style="width: 108px;"><?php echo htmlentities($row->Total4);?>  </th>
</tr>

</tr>
<tr>
<th style="
width: 62px;"></th>
<th style="
width: 524px;"></th>
<th colspan="2">FREIGHT</th>
<td></td> 
</tr>
<tr>
<th style="
width: 62px;"></th>
<th style="
width: 524px;"></th>
<th colspan="2">TOTAL</th>
<td style="color: red;"><strong><?php echo htmlentities($row->total_no);?></strong></td> 
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
<a href="all_expenses.php"><button style="color: black;"><span><i class="fa fa-print"></i> Back</span></button>
</html>

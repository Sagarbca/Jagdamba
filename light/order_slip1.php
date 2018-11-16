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

<style>
.body_pdf{
font-size:13px;
margin-left: 90px;
margin-right: 90px;
}
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
<body class="body_pdf"> 

<h1> order slip </h1>
<table style="width:100%">
<?php 
if (isset($_GET['edit1'])) {
$vendor_id = $_GET['edit1'];

$sql = "SELECT * from vendors_product WHERE order_no = '$vendor_id'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row) 
{ ?>
<tr>
<th colspan="2"><b>Purchase Order No. :<?php echo htmlentities($row->order_no);?></b></th>
<td><b>Date :</b>

<b> 
<?php echo htmlentities($row->date);?><br></b></td>
</tr>
<tr>
<th colspan="2"><b>ITC-HS Codes :  <?php echo htmlentities($row->hsn_code);?> </b></th>
<td><b>Mode/Terms of Payment :</b>
<br>
<b> 
<?php echo htmlentities($row->payment_mode);?></b></td>
</tr> 
<tr>
<th colspan="2"><b>Consignor's GSTIN : 10AZNPP1854H1ZD </b></th>
<td><b>Consignee's GSTIN :</b>
<br>
<b> 
<?php echo htmlentities($row->consignee);?></b></td>
</tr>
<tr>
<th colspan="2"><b>Consignor <br>JAGDAMBA PRINT LINE </b><br>
Abulash Lane, Machhuatoli, Patna<br>Bihar  (Ph : 9771408591 / 7360811115)</th>
<td><b>Consignee</b>
<br>
<b><?php echo htmlentities($row->address);?></b></td>
</tr>
<tr>
<th></th>
<th></th> 
<th></th>
</tr>
<table style="width:100%" border="5">
<tr>
<th style="
width: 62px;">S.No.</th>
<th style="
width: 524px;">Particular</th>
<th style="
width: 200px;">Quantity</th>
<th style="
width: 108px;">per</th>
<th style="
width: 108px;">Rate</th>
<th style="
width: 195px;">Amount</th>
</tr>
<tr>
<th style="width: 62px;">1.</th>
<th style="width: 524px;"><?php echo htmlentities($row->product_name);?><b></th>
<th style="width: 200px;"><?php echo htmlentities($row->quantity);?></th>
<th style="width: 108px;"><?php echo htmlentities($row->rate);?></th>
<th style="width: 108px;"><?php echo htmlentities($row->rate);?></th>
<th style="width: 195px;"><?php echo htmlentities($row->amount);?></th>
</tr>
<tr>
<th style="width: 62px;">2.</th>
<th style="width: 524px;"><?php echo htmlentities($row->product_name2);?> </th>
<th style="width: 200px;"><?php echo htmlentities($row->quantity2);?> </th>
<th style="width: 108px;"><?php echo htmlentities($row->rate2);?> </th>
<th style="width: 108px;"><?php echo htmlentities($row->rate2);?> </th>
<th style="width: 195px;"> <?php echo htmlentities($row->amount2);?></th>
</tr>
<tr>
<th style="width: 62px;">3.</th>
<th style="width: 524px;"><?php echo htmlentities($row->product_name3);?> </th>
<th style="width: 200px;"> <?php echo htmlentities($row->quantity3);?></th>
<th style="width: 108px;"><?php echo htmlentities($row->rate3);?> </th>
<th style="width: 108px;"><?php echo htmlentities($row->rate3);?> </th>
<th style="width: 195px;"> <?php echo htmlentities($row->amount3);?></th>
</tr>
<tr>
<th style="width: 62px;">4.</th>
<th style="width: 524px;"><?php echo htmlentities($row->product_name4);?> </th>
<th style="width: 200px;"><?php echo htmlentities($row->quantity4);?> </th>
<th style="width: 108px;"> <?php echo htmlentities($row->rate4);?></th>
<th style="width: 108px;"><?php echo htmlentities($row->rate4);?> </th>
<th style="width: 195px;"><?php echo htmlentities($row->amount4);?> </th>
</tr>
<tr>
<th style="
width: 62px;"></th>
<th style="
width: 524px;">Total</th>
<th style="
width: 200px;"> </th>
<th style="
width: 108px;"> </th>
<th style="
width: 108px;"> </th>
<th style="
width: 195px;"><b><u><?php echo htmlentities($row->tm);?></u></b></th>
</tr>
<tr>
<th style="
width: 62px;"></th>
<th style="
width: 524px;"></th>
<th rowspan="2">OUTPUT    <?php echo htmlentities($row->gst);?>  </th>
<td>CGST</td>
<td><?php echo htmlentities($row->cgst);?></td>
<td><?php echo htmlentities($row->cgst_amount);?></td>
</tr>
<tr>
<th style="
width: 62px;"></th>
<th style="
width: 524px;"></th>
<td>SGST</td>
<td><?php echo htmlentities($row->sgst);?></td>
<td><?php echo htmlentities($row->sgst_amount);?></td>
</tr>
<tr>
<th style="
width: 62px;"></th>
<th style="
width: 524px;">Spl Discount.</th>
<th style="
width: 200px;"> </th>
<th style="
width: 108px;"> </th>
<th style="
width: 108px;"> </th>
<th style="
width: 195px;"><?php echo htmlentities($row->discount);?></th>
</tr>
<tr>
<th style="
width: 62px;"></th>
<th style="
width: 524px;">Net Amount</th>
<th style="
width: 200px;"> </th>
<th style="
width: 108px;"> </th>
<th style="
width: 108px;"> </th>
<th style="
width: 195px;"><?php echo htmlentities($row->net_amount);?></th>
</tr>
<tr>
<th style="
width: 62px;"></th>
<th style="
width: 524px;">Dues</th>
<th style="
width: 200px;"> </th>
<th style="
width: 108px;"> </th>
<th style="
width: 108px;"> </th>
<th style="
width: 195px;"><?php echo htmlentities($row->dues);?></th>
</tr>
<tr>
<th style="
width: 62px;"></th>
<th style="
width: 524px;">Net Payable Amount</th>
<th style="
width: 200px;"> </th>
<th style="
width: 108px;"> </th>
<th style="
width: 108px;"> </th>
<th style="
width: 195px;"><?php echo htmlentities($row->payable);?></th>
</tr>
</table>
<br>
<table style="width:100%">
<tr>
<th colspan="2"><b>Amount Chargeable (in words)Rupees Three Thousand Twenty Four only.</b><br><hr>
Company's<br>SSI (EM) No.    : 100281105722 [PART - II]<br>PAN NO. : AZNPP1854H<hr>
<b>Declaration :-</b><br>
<b>*  Materials will be changed as per requirements.</b><br>
<br>
</th>
<td><b>AUTHORISED SIGNATORY</b>
<hr>
</td>
</tr>
</table>
</table>
<hr> <center><p><b>This is a Computer Generated Invoice</b></p><center><hr>
</body>
<button onclick="javascript:window.print();" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
<a href="view_vendor_product.php"><button>Back</button></a>
<?php } }  }
?>
</html>
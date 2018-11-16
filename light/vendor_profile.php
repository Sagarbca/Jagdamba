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
$vendor_id = $_GET['editsz'];
?>
<?php
include("config.php");
?>
<!DOCTYPE html>
<head>
<title> PROFILE PAGE </title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/font.css">
<style>
body {
background: url('pic3.jpg') ;
}

.card{
background-color: lavender;
text-align: left;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
max-width: 1200px;
margin: auto;


}

</style>

</head>

<body>
<div class="container-fluid"><br>
<h1 style="text-align:center; font-size: 40px;"><font color="white"> 
<strong> VENDOR INFORMATION </strong></font></h1>
<br>
<?php 

$sql = "SELECT * from  vendors WHERE vendor_id = $vendor_id";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row) 
{ ?>
<?php } }
?>

<div class="card"><br>
<h1 style="text-align:center"><font color="#001a57"><strong>Vendor Name:<?php echo htmlentities($row->vendor_name);?></strong></font></h1>
<br>
<h3 style="margin-left:38px"><strong> Mobile No.:<?php echo htmlentities($row->mobile_no);?></strong></h3>
<h3 style="margin-left:38px"><strong> GST NO: <?php echo htmlentities($row->gst_no);?> </strong></h3>


<h3 style="margin-left:38px"><strong>  Address: <?php echo htmlentities($row->address);?> </strong></h3>
<button class="w3-button w3-blue" style="margin-left: 1050px;"><a href="deposite_cash_vendor.php?edit=<?php echo $row->vendor_id ;?>" >Deposit Cash</a></button><br><br>
<form action="function.php?vendor_id=<?php echo $vendor_id ;?>" method="post">
<button class="w3-button w3-blue" style="margin-left: 1050px;" name="vendor_profile">Export</button></form><br>
<button class="w3-button w3-blue" style="margin-left: 1050px;" name="vendor_profile" ><a href="add_invoice.php?edit1=<?php echo $row->vendor_id ;?>">Add Invoice</a></button>
<br>

<table class="w3-table-all w3-centered w3-large">
<tr  class="w3-black">
<th>INVOICE NO</th>

<th>INVOICE DATE </th>
<th>CREATED DATE</th>
<th>TOTAL AMOUNT</th>

<th>PAY(in Rs.)</th>
<th>DUES MONEY(in Rs.)</th>
<th>LAST DUE REMAINING</th>
<th>STATUS </th>

<th>Action </th>

</tr>
<tbody>
<?php 

$sql = "SELECT * from  vendor_invoice WHERE vendor_id = $vendor_id";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row) 
{ ?><tr>
<input type="hidden" value="<?php echo htmlentities($row->invoice_id);?>">
<td class="center"><?php echo htmlentities($row->invoice_no);?></td>  
<td class="center"><?php echo htmlentities($row->invoice_date); ?></td>
<td class="center"><?php $datee= $row->v_date; echo date('d-m-Y', strtotime($datee)) ?></td>
<td class="center"><?php echo htmlentities($row->net_amount); 
$invtot = $row->invoice_total;
$invoice_n = $row->invoice_no;
$invoice_d = $row->invoice_date;
?></td>
<td class="center"><?php echo htmlentities($row->payble); ?></td>
<td class="center"><?php echo htmlentities($row->dues); ?></td>
<td class="center"><?php echo htmlentities($row->pv_dues_remaining);?></td>
<td class="center"><?php echo htmlentities($row->status);?></td>
<?php 
if($invtot == 0 ){
    ?>
   <td style="color:red;">
    <div class="w3-dropdown-hover">
      <button class="w3-button">Action</button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" class="w3-bar-item w3-button">Edit Bill</a>
        <a href="#" class="w3-bar-item w3-button">Delete</a>
       
      </div>
    </div></td>
<?php
}
else{
?>

<td style="color:red;"><a href="order_slip_vendor_final.php?edit1=<?php echo $row->invoice_id ;?>&name=staff"  class="w3-btn w3-red" >
<i class="">View Invoice</i>
</a></td>
<?php  
}
?>




</tr>

<td></td>
<td></td>

<td style="">   </td>

<td > <?php  $duetotal = $row->total_due; ?> <?php  $finalduestatus = $row->status; ?> </td>
<td></td>
<td></td>

<?php } }
?>

</tbody>
<tfoot>
<td  colspan="18">&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;  Total Dues  Rs = <?php echo $row->pv_dues_remaining;  ?> &#160; &#160; &#160;  <?php echo $finalduestatus; ?> </td>  

</tfoot>                                 





</tbody>
</table>

</div>


</body>
<button onclick="javascript:window.print();" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
<a href="view_vendor.php"><button style="color: black;"><span><i class="fa fa-print"></i> Back</span></button>
</html>
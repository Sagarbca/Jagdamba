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
$client_id = $_GET['edit'];
?>
<?php
include("config.php");
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
max-width: 1200px;
margin: auto;

font-family: arial;
}
#back{
padding-top: 180px;
text-align: center;
}
</style>
</head>
<body>
<div class="container"><br>
<h1 style="text-align:center; font-size: 40px;"><font color="white"> 
<strong> CLIENT INFORMATION </strong></font></h1>
<br>
<?php 

$sql = "SELECT * from  clients where client_id =  $client_id";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row) 
{ ?>


<div class="card"><br>
<h1 style="text-align:center"><font color="#001a57"><strong>Client Name:<?php echo htmlentities($row->client_name); ?></strong></font></h1>
<br>
<h3 style="margin-left:38px"><strong> Mobile No.:<?php echo htmlentities($row->mobile_no);?></strong></h3>
<h3 style="margin-left:38px"><strong> GST NO: <?php echo htmlentities($row->gst_no);?> </strong></h3>


<h3 style="margin-left:38px"><strong>  Address: <?php echo htmlentities($row->address);?> </strong></h3>

<h3 style="margin-left:38px"><strong>  State: <?php echo htmlentities($row->state);?> </strong></h3>
<h3 style="margin-left:38px"><strong>  State Code: <?php echo htmlentities($row->state_code);?> </strong></h3>

<button class="w3-button w3-blue" style="margin-left: 1050px;"><a href="deposite_cash.php?edit=<?php echo $row->client_id ;?>" >Deposit Cash</a></button><br><br>
<form action="function.php?client_id=<?php echo $row->client_id ;?> method="post" ><button class="w3-button w3-blue" style="margin-left: 1050px;" name="client_profile">Export</button></form>
<br>
<?php } }
?>
<br>

<table class="w3-table-all w3-centered w3-large">
<tr  class="w3-black">
<th>Purchase ID</th>
<th>Purchase Date</th>
<th>Net Amount</th>
<th>Paid(In Rs.)</th>
<th>Dues(In Rs.)</th>
<th>last due remaining</th>
<th>Status</th>
<th>Action</th>


</tr>
<tbody>
<?php 
$duetotal = 0;

$sql = "SELECT * from  purchase_table WHERE client_id = $client_id";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row) 
{ ?><tr>
<td class="center"><?php echo htmlentities($row->purchase_id);?></td>  
<td class="center"><?php  $date=$row->datept; $localtime= new DateTime($date);
$localtime->add(new DateInterval('PT8H'));
$exacttime= $localtime->format('d-m-Y '); echo $exacttime; ?></td>
<td class="center"><?php echo htmlentities($row->net_amount); 
$net_amount1 = $row->net_amount;



?></td>

<td class="center"><?php echo htmlentities($row->payble); ?></td>
<td class="center"><?php echo htmlentities($row->dues); ?></td>
<td class="center"><?php echo htmlentities($row->total_due); ?></td>
<td class="center"><?php echo htmlentities($row->status); ?></td>
<?php 
if($net_amount1 == 0){
    
}
else{
?><td style="color:red;"><a href="sales_pdf.php?edit1=<?php echo $row->purchase_id ;?>&name=staff"  class="w3-btn w3-red" >
<i class="">View Invoice</i>
</a></td><?php  
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
<td  colspan="18">&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;  Total Dues  Rs = <?php echo $duetotal;  ?> &#160; &#160; &#160;  <?php echo $finalduestatus; ?> </td>  

</tfoot>

</table>

</div>
</div>
<div id="back">
<a href="view_client.php" class="w3-button w3-black" ><h3 > Back </h3> </a>
</div>


</body>
</html>
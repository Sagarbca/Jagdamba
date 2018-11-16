<?php $mysqli = NEW Mysqli('localhost','root','','jagdamba');
$cgst_sum = 0;  $sgst_sum = 0;  $igst_sum = 0;
?>
<!DOCTYPE html>
<html>
<head>
<title>Invoice</title>


<style>
body{
font-family: arial;
font-size: 10px;
}
.table, th, td
{
border: 1px solid black;
}
.table td .table1 td
{
border: 1px solid black;
}
.table 
{
width: 70%;
}
.table table td
{
border: 0px solid black;
}

</style>
</head>
<body>

<?php  //$name=$_SESSION['name'];
$purchase_id = $_GET['edit1']; ?>

<table align="center" class="table" style="border: 1px solid black; border-collapse: collapse">
<tbody>

<?php
include 'config2.php'; 
$result = $db->query ( "SELECT p.*,
c.* 
FROM vendor_invoice p
JOIN vendors c ON c.vendor_id = p.vendor_id WHERE p.invoice_id = $purchase_id" );
$count = 0;

while ( $item = $result->fetch_assoc () ) {

?>

<tr>
<td colspan="6" align="center"><h3>  Order Slip</h3></td>
<td colspan="6"><h3>Date <?php $datee= $item['invoice_date']; echo date('d-m-Y', strtotime($datee)) ?></h3></td>
</tr>
<tr>
<td colspan="6" align="left" rowspan="2">
<table width="330px">
<tr>
<td><img src="logo.jpg" alt="Company Logo" width="100" height="40"> 
</td>
<td>
<b>Consignee</b><br> 
Name :  <b>JAGDAMBA PRINT LINE</b> <br>
<span>Address: Jagdamba Print Line, Abulash Lane, Machhuatoli, Patna Bihar<?php?>	<span><br>
Phone 9771408591 / 7360811115<?php /*echo $data[0]->biller_telephone;*/ ?><br> 

Email: sahilsanjan@gmail.com <?php /*echo $data[0]->biller_email;*/ ?><br>
GST NO: 10AZNPP1854H1ZD<?php?><br>
State: BIHAR, Code: 10<br>
</td>
<td>

</td>
</tr>
</table>			

<!-- <td colspan="6">
<input type="checkbox" value="Original for Recipient">Original for Recipient<br>
<input type="checkbox" value="Original for Recipient">Duplicate for Transport<br>
<input type="checkbox" value="Original for Recipient">Triplicate for Supplier
</td> -->
</tr>
<tr>

<td colspan="6">
<b> Consignor </b><br>
Name : <b><?php echo strtoupper($item['vendor_name'])  ?></b><br>
<span>Address: <?php echo $item['address'] ?> <span><br>
Phone: <?php echo $item['mobile_no'] ?><br> 

GST NO: <?php echo $item['gst_no'] ?><br>


</td>
</tr>
<tr>
<td colspan="4">
Invoice Id: <?php echo $item['invoice_id'] ?>
</td>
<td colspan="7"><!-- Invoice:<br> -->


Date: <?php $datee= $item['invoice_date']; echo date('d-m-Y', strtotime($datee)) ?>

</td>

</tr>	
<!-- removing code form here -->





<tr>
<th style="width:5%">Sr.no</th>
<th colspan="1">INVOICE NO</th>
<th colspan="2">HSN/SAC</th>
<th > GST% </th>
<th>Per</th>
<th>Quantity</th>
<th >Rate</th>

<th colspan="2">Amount</th>


</tr>
<?php /*$i = 1;$tot = 0;foreach ($items as $value) {*/ ?>
<tr>
<?php

$result = $db->query ( " SELECT * FROM vendor_invoice WHERE invoice_id = '$purchase_id';" );
$sn_no = 0;
while ( $item1 = $result->fetch_assoc () ) {

$sn_no = $sn_no + 1;

?>

<td ><?php echo $sn_no; ?></td>
<td colspan="1" ><b><?php echo $item1['invoice_no'] ?></b></td>
<td colspan="2" style="text-align: center;"><?php echo 0; ?></td>
<td style="text-align: center;"><?php echo $item1['gst']; ?>%</td>
<td style="text-align: center;"><?php echo 0; ?></td>
<td style="text-align: center;"><?php echo 0; ?></td>
<td align="right" style="text-align: center;"><?php echo 0; ?></td>
<td align="right" colspan="2" style="text-align: center;" ><b><?php echo $item1['invoice_total'] ?></b></td>

<!-- 
<td align="right"><?php  ?></td>
<td align="right" colspan="2"><?php  ?></td> -->
</tr>


<tr>
<td colspan="12" style="height: 50px;"></td>
</tr>
<tr>
<td colspan="5"></td>
<td colspan="3">Total Amount</td>

<td align="right" colspan="4"><b> <?php echo $item1['invoice_total']; ?></b></td>
</tr>
<tr>
<td colspan="5"></td>

<td colspan="3">Discount</td>

<td align="right" colspan="4"> <?php echo 0; ?></td>
</tr>


<tr>
<td colspan="5">Sales Remark : </td>
<td colspan="3">Amount Before Tax</td>

<td align="right" colspan="4"> <b><?php echo 0;?></b></td>
</tr>
<tr>
<td colspan="6" style="padding: : 0px;">
<table style="border-collapse: collapse; width: 450px;" class="table1">
<tr>
<td rowspan="2" width="20%" align="center">HSN/SAC</td>
<td rowspan="2" width="15%" align="center">Taxable Value</td>
<td colspan="2" align="center">CGST</td>
<td colspan="2" align="center">SGST</td>
<td colspan="2" align="center">IGST</td>
<td colspan="2" align="center">Total GST</td>
</tr>
<tr>
<td align="center">%</td>
<td align="center">Amt.</td>
<td align="center">%</td>
<td align="center">Amt.</td>
<td align="center">%</td>
<td align="center">Amt.</td>
<td align="center">Amt.</td>
</tr>

<tr>
<?php

$resultfetch = $db->query ( " SELECT DISTINCT hsn_code FROM product_master WHERE purchase_id = $purchase_id" );
$sn_no = 0;
while ( $item11 = $resultfetch->fetch_assoc () ) {

$sn_no = $sn_no + 1;

?>

<td><?php $hsn =   $item11['hsn_code']; echo 0; ?></td>

<?php
$querycount = "SELECT SUM(amount) AS amt FROM product_master WHERE purchase_id = '$purchase_id' AND hsn_code = '$hsn' ";
$insertcount = $mysqli->query($querycount);

// to count the no of rows 
$data1=mysqli_fetch_assoc($insertcount);
$amt =  $data1['amt']; ?>

<td align="right"><?php echo "sagar"; ?></td>



<!-- FOR CGST SGST AND IGST -->

<?php

$resultfetchcgst = $db->query ( " SELECT * FROM product_master WHERE purchase_id = '$purchase_id' AND hsn_code = $hsn LIMIT 1" );
$sn_no = 0; $cgst = 0; $sgst = 0; $igst = 0; 
while ( $item111 = $resultfetchcgst->fetch_assoc () ) {



?>
<td align="right"> <?php  $cgst = $item1['cgst']; echo $cgst; ?></td>

<td align="right"><?php   echo  $item1['cgst_amount'];

/*$cgst_sum = $cgst_sum + $cgstamt;*/



?></td>
<td align="right"><?php $sgst = $item1['sgst']; echo $sgst;?></td>


<td align="right"><?php echo  $item1['sgst_amount'];


?></td>
<td align="right"><?php $igst =  $item1['igst']; echo $igst; ?></td>
<td align="right"><?php 

if( $igst==null)
{
$igst = 0;
}





?></td>

<!--  start calculate the gst amount-->

<?php

$gstfetch = $db->query ( " SELECT * FROM product_master WHERE purchase_id = '$purchase_id'  AND hsn_code = $hsn LIMIT 1;" );

while ( $item2 = $gstfetch->fetch_assoc () ) {

$querycount1 = "SELECT SUM(gst_amount+igst_amount) AS igstamt FROM product_master WHERE purchase_id = '$purchase_id' AND hsn_code = '$hsn' ";
$insertcount1 = $mysqli->query($querycount1);

// to count the no of rows 
$data11=mysqli_fetch_assoc($insertcount1);
$amt1 =  $data11['igstamt'];


?>
<!--stop calculate the gst amount   -->
<td align="right"><?php echo  $item1['gst_amount']; ?></td>


<?php } }	
?>


</tr>

<?php } ?>
</table>
</td>
<td colspan="6" style="padding: 0px;">
<table style="border-collapse: collapse; width:250px;">
<tr>
<td style="border-right: 1px solid black;">Add CGST :</td>
<td align="right">
<?php 
echo  $item1['cgst_amount'];

?>
</td>
</tr>
<tr>
<td style="border-right: 1px solid black;">Add SGST :</td>
<td align="right">
<?php 
echo  $item1['sgst_amount'];
?>
</td>
</tr>
<tr>
<td style="border-right: 1px solid black;">Add IGST :</td>
<td align="right">
<?php 
echo  $item1['igst_amount'];
?>
</td>
</tr>
<tr>
<td style="border-right: 1px solid black;border-top: 1px solid black;"><b>Tax Amount GST</b></td>

<?php

$result3 = $db->query ( "SELECT sum( pm.igst_amount) as igst_tot,
pt.gst_total 
FROM purchase_table pt
JOIN product_master pm ON pm.client_id = pt.client_id WHERE pt.purchase_id = '$purchase_id'" );



while ( $item3 = $result3->fetch_assoc () ) {

$finalgst_igst =  $item3['igst_tot'] +
$item3['gst_total'];


?>
<td align="right" style="border-top: 1px solid black;"><b> <?php echo  $item1['gst_amount']; ?></b></td> <?php } ?>
</tr>
<tr>
<td style="border-right: 1px solid black;border-top: 1px solid black;border-bottom: 1px solid black;">&#160;</td>
<td align="right" style="border-top: 1px solid black;border-bottom: 1px solid black;"></td>
</tr>
<tr>
<td><b>***Invoice Amount</b></td>
<td align="right"><b> <?php $data1 =  $item1['net_amount'];  echo $data1; ?></b></td>
</tr>
</table>
</td>
</tr>

<?php }  ?>
<tr>
<td colspan="5" >Total Amount(in words)<br>
<b><div id="inword"></div></b>

<br>			
</td>
<td colspan="7">
<?php /*if($data[0]->gst_payable!=NULL)
{
echo $data[0]->gst_payable;
}
else
{
echo "No";
}*/
?>

</td>
</tr>
<tr>
<td colspan="12">Company's Bank Details -  
Bank Name : <b>Bank Of India</b>, 
Account No: <b>446830110000049</b>, 
Branch: <b>Danapur</b> , IFSC: <b>BKID0004468</b>
</td>
</tr>
<tr>
<td colspan="5" style="font-size: 12px;"><b>Company's<br>SSI(EM) No.100281105722[PART-II]<br>PAN NO:AZNPP1854H</b>
<?php /*echo $company[0]->terms_condition;*/ ?><br>
</td>					
<td colspan="7">
<table>
<tr>
<td align="center" colspan="2" style="font-size: 10px;">Declaration :-</b><br>
*  Goods once sold will not be taken back<br>
*  Interest @18%p.a. will be charged if the payment is not made with in the stipulated time<br>
*  Subject to Patna Jurisdiction<br></td>
</tr>
<tr>
<td align="center" colspan="2" style="font-size: 12px;"><b></b><br><br><br><br><br></td>
</tr>
<tr>
<td align="center" style="font-size: 12px;"> <b>Authorised Signatory</b></td>
<td style="font-size: 12px;" align="right"><b>E.& O.E.</b></td>
</tr>
</table>
<?php } ?>
</td>
</tr>
</tbody>
</table>		
</body>
</html>
<script>
window.print();
</script>

<script>



function number2text(value) {

var fraction = Math.round(frac(value)*100);
var f_text  = "";

if(fraction > 0) {
f_text = "AND "+convert_number(fraction)+" PAISE";
}

return convert_number(value)+" RUPEE "+f_text+" ONLY";
}

function frac(f) {
return f % 1;
}

function convert_number(number)
{
if ((number < 0) || (number > 999999999)) 
{ 
return "NUMBER OUT OF RANGE!";
}
var Gn = Math.floor(number / 10000000);  /* Crore */ 
number -= Gn * 10000000; 
var kn = Math.floor(number / 100000);     /* lakhs */ 
number -= kn * 100000; 
var Hn = Math.floor(number / 1000);      /* thousand */ 
number -= Hn * 1000; 
var Dn = Math.floor(number / 100);       /* Tens (deca) */ 
number = number % 100;               /* Ones */ 
var tn= Math.floor(number / 10); 
var one=Math.floor(number % 10); 
var res = ""; 

if (Gn>0) 
{ 
res += (convert_number(Gn) + " CRORE"); 
} 
if (kn>0) 
{ 
res += (((res=="") ? "" : " ") + 
convert_number(kn) + " LAKH"); 
} 
if (Hn>0) 
{ 
res += (((res=="") ? "" : " ") +
convert_number(Hn) + " THOUSAND"); 
} 

if (Dn) 
{ 
res += (((res=="") ? "" : " ") + 
convert_number(Dn) + " HUNDRED"); 
} 


var ones = Array("", "ONE", "TWO", "THREE", "FOUR", "FIVE", "SIX","SEVEN", "EIGHT", "NINE", "TEN", "ELEVEN", "TWELVE", "THIRTEEN","FOURTEEN", "FIFTEEN", "SIXTEEN", "SEVENTEEN", "EIGHTEEN","NINETEEN"); 
var tens = Array("", "", "TWENTY", "THIRTY", "FOURTY", "FIFTY", "SIXTY","SEVENTY", "EIGHTY", "NINETY"); 

if (tn>0 || one>0) 
{ 
if (!(res=="")) 
{ 
res += " AND "; 
} 
if (tn < 2) 
{ 
res += ones[tn * 10 + one]; 
} 
else 
{ 

res += tens[tn];
if (one>0) 
{ 
res += ("-" + ones[one]); 
} 
} 
}

if (res=="")
{ 
res = "zero"; 
} 
return res;
}





window.onload = function() {
/* your code */
console.log("hello amarnath");

var newValue = number2text(<?php echo $data1 ?>);
var showInText =  number2text(123);
//alert(newValue);

document.getElementById("inword").innerHTML = newValue;
//$("#inword").html(newValue);




}

</script>

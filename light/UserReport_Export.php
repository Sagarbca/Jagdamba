<?php
error_reporting(1);
session_start();

$conn = new mysqli('localhost', 'root', '','jagdamba');
//$email = $_SESSION['email']; 
//$merchantId = $_SESSION['merchantid'];
$whereCondition = " ";
if (isset( $_GET['vendor']) ) {
    if ( $_GET['vendor'] != '' ) {
        $whereCondition .= "WHERE vendor_id='".$_GET["vendor"]."' ";
    }
}

if (isset( $_GET['from'], $_GET["to"])) {
    if ( $_GET['from'] != '' && $_GET['to'] != '' ) {
        $whereCondition .= " AND `invoice_date` BETWEEN '".$_GET["from"]."' AND '".$_GET["to"]."' ";
    }
}
if (isset( $_GET['invoice']) ) {
    if ( $_GET['invoice'] != '' ) {
        $whereCondition .= " AND invoice_no='".$_GET["invoice"]."' ";
    }
}

 $setSql = "SELECT `invoice_no`, `invoice_date`, `vendor_id`, `invoice_total`, `payble`, `dues`, `payment_mode`, `cheque_no`, `utr_no` FROM `vendor_invoice`" .$whereCondition;


//echo $setSql;
$setRec = mysqli_query($conn,$setSql);

//exit();
$columnHeader ='';
$columnHeader = "invoice No"."\t"."Invoice Date"."\t"."Vendor Id"."\t"."Total Amount"."\t"."Pay"."\t"."Dues"."\t"."Payment Method"."\t"."cheque No"."\t"."Utr No"."\t";


$setData=''; 

while($rec = mysqli_fetch_row($setRec))  
{
  $rowData = '';
  foreach($rec as $value)       
  {
    $value = strip_tags($value);
    $value = str_replace("&nbsp;", '', $value);
    $value = '"' . $value . '"' . "\t";
    $rowData .= $value;
  }
  $setData .= trim($rowData)."\n";
}
//echo $setData; exit();
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=Order_Detail_Reoprt.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo ucwords($columnHeader)."\n".$setData."\n";

?>


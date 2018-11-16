<?php
error_reporting(1);
session_start();

$conn = new mysqli('localhost', 'root', '','jagdamba');
//$email = $_SESSION['email']; 
//$merchantId = $_SESSION['merchantid'];
$whereCondition = " ";
//if (isset( $_GET['invoice']) ) {
   // if ( $_GET['invoice'] != '' ) {
      //  $whereCondition .= "WHERE purchase_id='".$_GET["invoice"]."' ";
   // }
//}

if (  isset( $_GET['from'], $_GET["to"] ) ) {
    if ( $_GET['from'] != '' && $_GET['to'] != '' ) {
        $whereCondition .= " WHERE `datept` BETWEEN '".$_GET["from"]."' AND '".$_GET["to"]."' ";
    }
}

$setSql = "SELECT `purchase_id`, `datept`, `client_id`, `tsum`, `discount`, `net_amount`, `payble`, `dues`, `payment_method`, `deposite_account` FROM `purchase_table` " .$whereCondition;


//echo $setSql;
$setRec = mysqli_query($conn,$setSql);

//exit();
$columnHeader ='';
$columnHeader = "invoice No"."\t"."Invoice Date"."\t"."client Id"."\t"."Total Amount"."\t"."discount"."\t"."Net Amount"."\t"."Pay"."\t"."dues"."\t"."Payment Method"."\t"."Cheque No"."\t";


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


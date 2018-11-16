<?php $output = NULL;?>
<?php
include 'config.php';
include 'config2.php';
$mysqli = NEW Mysqli('localhost','root','','jagdamba');
if (isset($_POST['submit']))
{

    $pagename = $_GET['name'];
    echo $pagename;

    if($pagename != "deposite_cash"){

   
    $invoice_no = $_POST['invoice_no'];
    $invoice_date = $_POST['date_of_invoice'];
    $total_amount = $_POST['itotal'];
    $dues = $_POST['dues'];
    
}

else{
    $invoice_no = 0;
    $invoice_date = 0;
    $total_amount = 0;
    $dues = 0;
    
}
$vendor_id = $_POST['vendor_id'];
$payble = $_POST['payble'];
$gst = $_POST['gst'];
    
if($pagename == "deposite_cash"){
    if($payble == "")
    {
        echo "hello";
        return;
        echo "<script>alert('please fill the payble amount')</script>";
        echo "<script>window.open('deposite_cash_vendor.php?edit=$client_id','_self')</script>"; 
    }
}

 $gst = $_POST['gst'];
 $cgst = $_POST['cgst'];
 $cgst_amount = $_POST['cgst_amount'];
 $sgst = $_POST['sgst'];
 $sgst_amount = $_POST['sgst_amount'];
 $igst = $_POST['igst'];
 $igst_amount = $_POST['igst_amount'];
 $gst_amount = $_POST['gst_amount'];
 $net_amount = $_POST['net_amount'];


    $dues = $_POST['dues'];
    $payment_mode = $_POST['payment_mode'];
    $cheque_no = $_POST['cheque_no'];
    $utr_no = $_POST['utr_no'];
    $remarks = $_POST['remarks'];
    $status = "unpaid";
    

    $pv_dues_remaining = 0;

    // here we count the columns 
    $querycount = "SELECT count(invoice_id) AS 'count' FROM vendor_invoice WHERE vendor_id = '$vendor_id'";
    $insertcount = $mysqli->query($querycount);

      // to count the no of rows 
    $data1=mysqli_fetch_assoc($insertcount);
    $count_collumns =  $data1['count'];

    if ($count_collumns == 0) {
       $pv_dues_remaining = $dues;
    }
 // end the count columns
    else{
        // here we fetch the pv remaining due 
        $st_rem_result = $db->query ( " SELECT  pv_dues_remaining FROM vendor_invoice WHERE invoice_id = (SELECT MAX(invoice_id) FROM `vendor_invoice` WHERE vendor_id = '$vendor_id')" );

            while ( $st_rem = $st_rem_result->fetch_assoc () ) {

            $pv_dues_remaining =  $st_rem['pv_dues_remaining'];
           



        }

        if ($pagename != "deposite_cash") {
            $pv_dues_remaining = $pv_dues_remaining + $dues;
        }
        else{
            $pv_dues_remaining = $pv_dues_remaining - $payble;
        }





        // here we stop 
    }

    if($pv_dues_remaining == 0)
    {
        $status = "PAID";
    }


    if($pv_dues_remaining  < 0)
    {
        $status = "EXTRA";
    }
   

    $query = "INSERT INTO `vendor_invoice`( `invoice_no`, `invoice_date`, `vendor_id`, `invoice_total`,`gst`,`cgst`,`cgst_amount`,`sgst`,`sgst_amount`,`igst`,`igst_amount`,`gst_amount`,`net_amount` ,`payble`, `dues`,`pv_dues_remaining`,`status`, `payment_mode`, `cheque_no`, `utr_no`, `remarks`) VALUES ('$invoice_no','$invoice_date','$vendor_id','$total_amount','$gst','$cgst','$cgst_amount','$sgst','$sgst_amount','$igst','$igst_amount','$gst_amount','$net_amount','$payble','$dues','$pv_dues_remaining','$status','$payment_mode','$cheque_no','$utr_no','$remarks')";
        //echo $query;
       mysqli_query($db, $query);
       header('location:vendor_profile.php?editsz='.$vendor_id.'');

    }
    
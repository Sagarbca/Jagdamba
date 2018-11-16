<?php
	include_once 'config2.php';
	$delete_id = $_GET['del'];
	$delete_qry = mysqli_query($db,"DELETE FROM `vendor_invoice` WHERE invoice_id='$delete_id'");
	if ($delete_qry) {
		
		echo "<script>alert('Deleted...')</script>";
        echo "<script>window.open('view_vendor_product.php','_self')</script>";
	}

?>
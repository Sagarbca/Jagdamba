<?php
	include_once 'config2.php';
	$delete_id = $_GET['del'];
	$delete_qry = mysqli_query($db,"DELETE FROM `purchase_table` WHERE purchase_id='$delete_id'");
	if ($delete_qry) {
		
		echo "<script>alert('Deleted...')</script>";
        echo "<script>window.open('view_client_product.php','_self')</script>";
	}

?>
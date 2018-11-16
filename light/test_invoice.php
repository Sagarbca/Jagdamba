
<style type="text/css">
    .panel-heading a{float: right;}
    #importFrm{margin-bottom: 20px;display: none;}
    #importFrm input[type=file] {display: inline;}
    .btn-action {
    font-weight: 600;
    white-space: normal;
    height: 38px;
    border: 0;
    color: white;
    min-width: 120px;
}
.bgm-cyan {
    background-color: #00BCD4 !important;
}
.m-l-10 {
    margin-left: 10px !important;
}
.ecom-bg-csv {
    background-color: #48C0B9 !important;
}
.form-control {
    
    font-weight: 600;
}
b,strong {
    font-weight: 600;
}
  </style>
  

<div class="row" style="margin-top: 45px;">
	<div class="k_merchant"> 
	   <h4>Darkstore - Create Inventory</h6>
	</div>
	<div class="col-md-12">
	   	<div class="panel panel-default">
	   		<div class="panel-body">
		   		<center>
		   		
		   			<?php
		   			if ( count($product) > 0 ) {
		   			?>
		   			
                    
                  
			<div id="dvContainer">
			   			<h4 style="font-weight:700;">Transit Details</h4>
			   			<form name="checkout" action="" method="post" style="">
			   			
			   			<div class="row" style="margin-top:15px;border: 1px deepskyblue solid;margin-left: 0px;
    margin-right: 0px;padding-top: 10px;">
			   				
			   					<label class="col-md-2 col-sm-2 col-xs-12">Send to-</label>
			   					<div class="col-md-4 col-sm-4 col-xs-12" style="height:76px;">
		   					 	<select class="form-control" name="deliver_city" onchange="giveAddress(this.value)">
	   					 		<?php
	   					 		foreach ($del_address as $value) {
	   					 		 	?>
	   					 		 	<option value="<?= $value['id'] ?>" ><?= $value['business_name'] ?></option>
	   					 		 	<?php
	   					 		} 
	   					 		?>
			                        	</select>
			                        	<label  id="warehouse_address"> <b><i><?= $del_address[0]['o_address'] ?></i></b> </label>
			                        	</div>
			                        	
			                        	
			                        	
								<label class="col-md-2 col-sm-2 col-xs-12">Pickup From</label>
								
							<div class="col-md-4 col-sm-4 col-xs-12">
								<?php
								$add_1 = $address[0]['operatingname'] != ''?$address[0]['operatingname'].", ":'';
		   						$add_2 = $address[0]['operatingaddress'] != ''?$address[0]['operatingaddress'].", ":'';
		   						$add_3 = $address[0]['pincode'] != ''?$address[0]['pincode']:'';
		   						
		   						$final = $add_1."".$add_2."".$add_3;

								?>
								<input type="radio" name="deliver_city_address" id="deliver_city" value="<?= $final ?>" onclick = "checkUnCheck(1, this.value)" checked>Operating Address
								<input type="radio" name="deliver_city_address" id="deliver_city_other" onclick = "checkUnCheck(2, this.value)" >Other
								
								<div id="city_name" style="margin-top:10px;margin-bottom:10px;"></div>
			   				</div>

			   				
			   					<center>
			   						<label class="col-md-2 col-sm-2 col-xs-12">Send Inventory Via -</label>
			   						
			   						<div class="col-md-4 col-sm-4 col-xs-12">
			   						<input type="radio" name="delygo_courier" onclick="checkUncheck_2(this.value)" value="1" checked>Delygo Courier
									<input type="radio" name="delygo_courier" value="0" onclick="checkUncheck_2(this.value)">Other

									<input type='text' name='courier_name' id='courier_name' class='form-control' value='' placeholder='Courier Name' style="display:none;" />
									<br/>
									<input type='text' name='tracking_no' id='tracking_no' class='form-control' value='' placeholder = 'Tracking Number' style="display:none;margin-bottom:10px;"/>

									<!-- <div id="city_address"></div> -->
									</div>
									
						<label class="col-md-2 col-sm-2 col-xs-12">Remark -</label>
						<div class="col-md-4 col-sm-4 col-xs-12">
					<input type='text' name='courier_name'  class='form-control'  placeholder='Remark' style="margin-bottom:10px;" />
						</div>
			   					</center>
			   				
			   			</div>
			   			<div class="table-responsive">
		   			<h4 style="font-weight:700;">Item Details</h4>
                    <div id="example1_wrapper" class="dataTables_wrapper" role="grid">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
    
                                <th><strong style="font-weight: 700;">Product Id</strong></th>
                                <th><strong style="font-weight: 700;">Product Name</strong></th>
                                <th><strong style="font-weight: 700;">Brand Name</strong></th>
                                <th><strong style="font-weight: 700;">Category</strong></th>
                                <th><strong style="font-weight: 700;">Model#</strong></th>
                                <th><strong style="font-weight: 700;">Color</strong></th>
                                <th><strong style="font-weight: 700;">Size</strong></th>
                                <th><strong style="font-weight: 700;">SKU</strong></th>
                                <th><strong style="font-weight: 700;">Quantity</strong></th>
                                <th><strong style="font-weight: 700;" class="action">Action</strong></th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
			   			foreach ( $product as $key => $value ) {
		   				?>
                                <tr>
	                        <td><p style=""><?= "PROD00".$value['id'] ?></p></td>
	                        <td><p style=""><?= $value['product_name'] ?></p></td>
                                <td><p style=""><?= $value['brand_name'] ?></p></td>
                                <td><p style=""><?= $value['category'] ?></p></td>
                                <td><p style=""><?= $value['model_no'] ?></p></td>
                                <td><p style=""><?= $value['color'] ?></p></td>
                                <td><p style=""><?= $value['size']." ".$value['unit'] ?></p></td>
	                        <td><p style=""><?= $value['sku'] ?></p></td>
	                        <td><input type="number" name="quantity" id="quant_<?= $value['id'] ?>" step="0.00000001" min="0.00000001" value="<?= $value['quantity'] ?>" <?= $disable?'disabled':'' ?>/>
	                        </td>
	                        <td>
	                        <?php
	                        if ( !$disable ) {
				 ?>
				 <a href="javascript:void(0)" onclick="addQuantity('<?= $value['id']?>','<?= $value['inventory_id'] ?>')" class="btn btn-info" role="button" >change</a>
	                                	<?php
	                                	}
	                                	?>
	                        </td>
	                        </tr>
	                        <?php } ?>
                                </tbody>
                                </table>
                                  </div>
                                    </div>
                                    </div>
			   			<div class="row" style="margin-top:15px;">
			   				<?php
			   				if ( $disable ) {
			   					if ($approve[0]['approve']) {
			   						?>
			   						<input type="button" class="btn btn-success" value="Approved">
			   						<?php
			   					} else {
			   						?>
			   						<input type="button" class="btn btn-danger" value="Awaiting Approval">
			   						<?php

			   					}
		   					?>
		   					<input type="button" class="btn btn-success" value="Export" onclick="export_xls( '<?= $merchantId ?>', '<?= $iid ?>', '<?= $pid ?>' )">
		   					<?php
			   				} else {
			   				?>
			   				<input type="hidden" name="iid" value="<?= $iid ?>"/>
			   				<input type="hidden" name="type" value="add_confirm_address"/>
			   				<a href="dashbord.php?chk=view_inventory" class="btn btn-info">Back</a>
			   				<input type="submit" class="btn btn-info" value="Save">
			   				<input type="button" class="btn btn-info" value="Print" id="btnPrint" />
			   				<?php
			   				}
			   				?>
		   				</div>
		   				 </form>
		   				 <?php
			   			 
		   			} else {

		   				echo "<script>
		   				window.alert('Pleade add quantity')</script>";
		   				echo "<script>window.open('dashbord.php?chk=view_inventory','_self')</script>";
		   			}
		   			?>
	   			<center>
			</div>
	   	</div>
		<!-- /.box-body -->
	</div>
	</div>
</div>
</div>
<!-- /.col -->
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
        $("#btnPrint").live("click", function () {
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>Confirm Products</title><style> div {display: block;}body {font-family: "Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size: 14px;line-height: 1.42857143;color: #333;}@media (min-width: 992px){.col-md-2 {width: 16.66666667%;float: left;}}@media (min-width: 992px){.col-md-4 {width: 33.33333333%;float: left;}}.form-control {font-weight: 600;}.form-control {box-shadow: none !important;resize: none;}.form-control {border-radius: 0;border-color: #d2d6de;}.form-control {display: block;width: 100%;height: 34px;padding: 6px 12px;font-size: 14px;line-height: 1.42857143;color: #555;background-color: #fff;background-image: none;border: 1px solid #ccc;transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;}label {font-weight: 500;}label {display: inline-block; max-width: 100%;margin-bottom: 5px;}.table-responsive {min-height: .01%;}@media (min-width: 768px){.col-sm-6 { width: 50%;}}div.dataTables_length label {font-weight: normal;text-align: left;white-space: nowrap;display: none;}div.dataTables_filter {text-align: right;display: none;}@media (min-width: 768px){.col-sm-12 {width: 100%;}}table.table-bordered.dataTable {border-collapse: separate !important;}table.dataTable {clear: both;margin-top: 6px !important;margin-bottom: 6px !important;max-width: none !important;}.table-bordered {border: 1px solid #f4f4f4;}@media (min-width: 768px){.col-sm-5 {width: 41.66666667%;float:left;}}div.dataTables_info {padding-top: 8px;white-space: nowrap;display: none;}@media (min-width: 768px){.col-sm-7 {width: 58.33333333%;float:left;}}div.dataTables_paginate {margin: 0;white-space: nowrap;text-align: right;display: none;}.btn {border: 0;font-weight: bold;display: none;}.btn-info {background-color: #00c0ef;}.action{display: none;}.col-sm-6 { width: 50%;float: left;}.col-sm-12 {width: 100%;}.col-sm-5 {width: 41.66666667%;float:left;}.col-sm-7 {width: 58.33333333%;float:left;}</style>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
           printWindow.document.close();
            printWindow.print();
            
        });
    </script> 
<script type="text/javascript">

$(document).ready(function(){
	a = $('#deliver_city').val();
	checkUnCheck( 1, a );

});

function addQuantity( ids, invid ){
    var a = $('#quant_'+ids).val();
    if (a>0){
    $.ajax({
            type: "POST",
            url: 'add_quantity.php',
            data:{'ids':ids, 'type':'add_quantity', 'quantity':a, 'invid':invid, 'mid':<?= $merchantId ?>},
            success: function(response)
            {  
               $('#quant_'+ids).val(response);
               alert('inserted');
            }
        });
      }else{
    	alert('Enter a valid quantity');
    }
}

function checkUnCheck( num, val ){
	if ( num == 1) {
		   $('#city_name').empty();
		   if( $('#deliver_city').is(':checked')) { 
		   	var html = "<input type='text' name='pickup_address' class='form-control' value='"+val+"'/>";
		   } else {
		   	var html = "<input type='text' name='pickup_address' class='form-control' value=''/>";
		   }

		   $('#city_name').html( html );
	};

	if ( num == 2) {

		 $('#city_name').empty();
		if( $('#deliver_city_other').is(':checked')) { 
			var html = "<input type='text' name='pickup_address' id='deliver_city_name' class='form-control' value=''/>";
		} else {
			var html = "<input type='hidden' name='pickup_address' id='deliver_city_name' class='form-control' value='"+val+"'/>";
		}

	    $('#city_name').html( html );
	}
}


function checkUncheck_2( val ){
	if ( val == 1) {
		$('#tracking_no').hide();
		$('#courier_name').hide();
     } else {
     	$('#tracking_no').show();
		$('#courier_name').show();
     }
}

function giveAddress( ids ){
     $.ajax({
            type: "POST",
            url: 'add_quantity.php',
            data:{'ids':ids, 'type':'warehouse_address'},
            success: function(response)
            {  
               $('#warehouse_address').html(response);
            }
        });
}

function export_xls( mid, iid, pid ) {
	window.location.href = "export_excel_inventory.php?mid=" + mid +"&iid=" + iid + "&pid="+pid;
}

</script> 





?>
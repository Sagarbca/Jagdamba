<?php $output = NULL;?>
<?php
//include 'config.php';
$mysqli = NEW Mysqli('localhost','root','','gst');
if (isset($_POST['submit']))
{
    $client_id = $_POST['client_id'];
    $product_name = $_POST['product_name'];
    $hsn_code = $_POST['hsn_code'];
    $quantity = $_POST['quantity'];
    $per = $_POST['per'];
    $rate = $_POST['rate'];
    $amount = $_POST['amount'];
    $gst = $_POST['gst'];
    $cgst = $_POST['cgst'];
    $cgst_amount = $_POST['cgst_amount'];
    $sgst = $_POST['sgst'];
    $sgst_amount = $_POST['sgst_amount'];
    $igst = $_POST['igst'];
    $igst_amount = $_POST['igst_amount'];
    $total_amount = $_POST['total_amount'];

     
    foreach($product_name AS $key => $value){
    //echo $value;
       $purchase_id = '1';
    //perform insert 

    $query = "INSERT INTO product_master (  `purchase_id`, `client_id`, `product_name`, `hsn_code`, `quantity`, `per`, `rate`, `amount`, `gst`, `cgst`, `cgst_amount`, `sgst`, `sgst_amount`, `igst`, `igst_amount`, `total_amount`) VALUES ('".$mysqli->real_escape_string($purchase_id)."','".$mysqli->real_escape_string($client_id[$key])."','".$mysqli->real_escape_string($product_name[$key])."','".$mysqli->real_escape_string($hsn_code[$key])."','".$mysqli->real_escape_string($quantity[$key])."','".$mysqli->real_escape_string($per[$key])."','".$mysqli->real_escape_string($rate[$key])."','".$mysqli->real_escape_string($amount[$key])."','".$mysqli->real_escape_string($gst[$key])."','".$mysqli->real_escape_string($cgst[$key])."','".$mysqli->real_escape_string($cgst_amount[$key])."','".$mysqli->real_escape_string($sgst[$key])."','".$mysqli->real_escape_string($sgst_amount[$key])."','".$mysqli->real_escape_string($igst[$key])."','".$mysqli->real_escape_string($igst_amount[$key])."','".$mysqli->real_escape_string($total_amount[$key])."')";
    
    echo $query;
    //mysqli_query($, $query);

    $insert = $mysqli->query($query);
}

}

    ?>
<html>

    <head>

        <script
            src="https://code.jquery.com/jquery-3.3.1.min.js" >
        </script>
        <script>
        $(document).ready(function(e){

           var html='<tr ><td class="center"> <input type="text" name="product_name[]" class="next product_name col-xs-12"  /></td> <td class="center"><input type="text" name="hsn_code[]" class="next hsn_code col-md-12" ></td><td class="center"><input type="number" name="quantity[]" required  class="next quantity col-md-12" ></td><td class="center"><input type="text" name="per[]"  class="next per col-md-12" ></td><td class="center"><input type="text" name="rate[]"  class="next rate allow_only_num col-md-12"> </td><td class="center"><input type="text" name="amount[]" class="next amount col-md-12" readonly> </td><td class="center"><input type="text" name="gst[]" class="next gst allow_only_num col-md-12" ></td><td class="center"><input type="hidden" name="cgst[]" class="next cgst" readonly></td><td class="center"><input type="hidden" name="cgst_amount[]" class="next cgst_amount" readonly></td><td class="center"><input type="hidden" name="sgst[]" class="next sgst" readonly></td><td class="center"><input type="hidden" name="sgst_amount[]" class="next sgst_amount" readonly></td><td class="center"><input type="text" name="igst[]" class="next igst allow_only_num col-md-12" ></td><td class="center"><input type="hidden" name="igst_amount[]" class="next igst_amount" readonly></td><td class="center"><input type="text" name="total_amount[]" class="next last total_amount col-md-12" value="0" readonly></td><td> <input type="button" name="addRow" class="add col-md-12" value="+"> </td><td> <input type="button" name="removeRow" class="removeRow col-md-12" value="-"> </td></tr> <input type="hidden" name="client_id[]" value="1">'; 
        //variables
            

        //add row to form
            $(".tbody").on('click','.add',function(e){

                $(this).parents('tr').parents(".tbody").append(html);;
                // $(".tbody").append(html);

            });

           /* $(".add").click(function(e){
                $(".tbody").append(html);

            });*/
        //remove rows form the table 
            $(".tbody").on('click','.removeRow',function(e){

                $(this).parents('tr').remove();

            });
        //populate values form the first row
        
            
        //on keypress
            $(document).on('click', '.add', function() {

           // var row = $(this).parents('tr');
            //var clone = row.clone();

            // clear the values
           // var tr = clone.closest('tr');

            //tr.find('.next').val('');


          //  $(this).closest('tr').after(clone);

            var total = 0;

            $(".total_amount").each(function() {
                if (!$(this).val() == '') {
                    total = total + parseFloat($(this).val());
                }
            });

            $("#totalPrice").html(total.toFixed(2));

            });


            $(document).on('keyup', ".next", function() {

            //alert("amarnath");
            //Getting elements From table
            var $product_name = $(this).parents("tr").find(".product_name");
            var $hsn_code = $(this).parents("tr").find(".hsn_code");
            var $quantity = $(this).parents("tr").find(".quantity");
            var $per = $(this).parents("tr").find(".per");
            var $rate = $(this).parents("tr").find(".rate");
            var $amount = $(this).parents("tr").find(".amount");
            var $gst = $(this).parents("tr").find(".gst");
            var $cgst = $(this).parents("tr").find(".cgst");
            var $cgst_amount = $(this).parents("tr").find(".cgst_amount");
            var $sgst = $(this).parents("tr").find(".sgst");
            var $sgst_amount = $(this).parents("tr").find(".sgst_amount");
            var $igst = $(this).parents("tr").find(".igst");
            var $igst_amount = $(this).parents("tr").find(".igst_amount");
            var $total_amount = $(this).parents("tr").find(".total_amount");




            //table 1 row data variable declaration
            var quantity = 0;
            var rate = 0;
            var amount = 0;
            var gst = 0;
            var gst_amount = 0;
            var cgst = 0;
            var cgst_amount = 0;
            var sgst = 0;
            var sgst_amount = 0;
            var igst = 0;
            var igst_amount = 0;

            //getting values from out side form
            var discount = $(".discount").val();
            var net_amount = $(".net_amount").val();
            var payable = $(".payable").val();
            var dues = $(".dues").val();
            var payment_mode = $(".payment_mode").val();
            var deposite_account = $(".deposite_account").val();


            if ($quantity.val() == '' || $rate.val() == '') {
            // console.log("No values found.");

            amount = 0;
            cgst_amount = 0;
            sgst_amount = 0;
            igst_amount = 0;
            total_amount = 0;
            payable = 0;
            net_amount = 0;

            } 

            else {

            //console.log("Converting: ", $quantity.val(), $rate.val());
            quantity = parseInt($quantity.val());
            rate = parseFloat($rate.val());
            //console.log("Values found: ", quantity, rate);

            amount = quantity * rate;
            gst=$gst.val();
            gst_amount = amount*gst/100;
            cgst = gst/2;
            cgst_amount = gst_amount/2;
            sgst = gst/2;
            sgst_amount = gst_amount/2;
            igst = $igst.val();

            if(igst!='undefined'&&igst!=''&&igst!=0){
            igst_amount = amount*igst/100;
            }


            total_amount = amount+gst_amount+igst_amount;

            var total = 0;

            $(".total_amount").each(function() {

                if (!$(this).val() == '') {

                    total = total + parseFloat($(this).val());

            }});




            net_amount = total-discount;
            dues = net_amount-payable;





            }


            $amount.val(Math.round(amount * 100) / 100);
            $cgst.val(cgst);
            $cgst_amount.val(cgst_amount);
            $sgst.val(sgst);
            $sgst_amount.val(sgst_amount);
            $igst_amount.val(igst_amount);
            $total_amount.val(total_amount.toFixed(2));
            $sgst_amount.val(sgst_amount);
            $net_amount.val(net_amount);
            $dues.val(dues);

            $("#totalPrice").html(total.toFixed(2));
            });

        });
        </script>
    </head>
    <body>
        <form method="POST" action="test_new.php    ">
            <div class="container">
                <table class="table table-hover" id="purchaseItems">
                    <thead class="">
                        <tr>
                            <th class="col-xs-3">Product Name</th>
                            <th  class="col-xs-2">Hsn code</th>
                            <th class="col-xs-2">Quantity</th>
                            <th  class="col-xs-2">Per</th>
                            <th  class="col-xs-1">Rate</th>
                            <th  class="col-xs-1">Amount</th>
                            <th  class="col-xs-1">GST%</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th  class="col-xs-1">IGST%</th>
                            <th></th>
                            
                            <th>Total Amount(₹)</th>
                            <th>Action</th>
                        </tr>
                  </thead>
                        <tbody class="tbody">
                            <tr >

                                 
                                <td class="center"> <input type="text" name="product_name[]" class="next product_name col-xs-12"  /></td>
                                <td class="center"><input type="text" name="hsn_code[]" class="next hsn_code col-md-12" ></td>
                                <td class="center"><input type="number" name="quantity[]" required  class="next quantity col-md-12" ></td>
                                <td class="center"><input type="text" name="per[]"  class="next per col-md-12" ></td>
                                <td class="center"><input type="text" name="rate[]"  class="next rate allow_only_num col-md-12"> </td>
                                <td class="center"><input type="text" name="amount[]" class="next amount col-md-12" readonly> </td>
                                <td class="center"><input type="text" name="gst[]" class="next gst allow_only_num col-md-12" ></td>
                                <td class="center"><input type="hidden" name="cgst[]" class="next cgst" readonly></td>
                                <td class="center"><input type="hidden" name="cgst_amount[]" class="next cgst_amount" readonly></td>
                                <td class="center"><input type="hidden" name="sgst[]" class="next sgst" readonly></td>
                                <td class="center"><input type="hidden" name="sgst_amount[]" class="next sgst_amount" readonly></td>
                                <td class="center"><input type="text" name="igst[]" class="next igst allow_only_num col-md-12" ></td>
                                <td class="center"><input type="hidden" name="igst_amount[]" class="next igst_amount" readonly></td>
                                <td class="center"><input type="text" name="total_amount[]" class="next last total_amount col-md-12"  value="0" readonly></td>
                            
                                <td> <input type="button" name="addRow" class="add col-md-12" value='+' /> </td>
                                <td> <input type="button" name="removeRow" class="removeRow col-md-12" value='-' /> </td>
                                <input type="hidden" name="client_id[]" value="1">
                            
                            </tr>
                  
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Total(₹) :</th>
                                <td colspan='2' id="totalPrice"></td>
                                <td><td>
                            </tr>

                            <button name="submit">submit</button>
                        </tfoot>
                </table>

            </div>




        </form>
    <?php echo $output;  ?>
    </body>
</html>
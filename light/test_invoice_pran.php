<?php
error_reporting(1);
session_start();
//if($name = $_SESSION['name']) 
if ($_SESSION['name']=="") {
 header('location:index.php');

}

  $name=$_SESSION['name'];
   $purchase_id = $_GET['edit1'];
   
?>
<?php
 session_start();
 $name = $_SESSION['name']; 
?>
<?php
include("config.php");
?>



<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
.body_pdf{
	font-size:13px;
	    margin-left: 90px;
		    margin-right: 90px;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;    
}

.block-a{
  width:50%;
  
  float:left;
  
}

.block-b{
  width:50%;
   float:right;
}
@media only screen and (max-width: 768px) {
    .table1 {
        width: 115.5%;
    }
    .table2 {
      width: 100%;
    }
  }
@media only screen and (max-width: 1366px) {
    .table1 {
        width: 100%;
    }
    .table2 {
      width: 100%;
    }
}
</style>
</head>
<body class="body_pdf"> 

<div id="dvContainer">
  <h1 style="text-align: center;"> JAGDAMBA PRINT LINE </h1>
<table class="table1" style="">
  

  <tr>
  
    <th rowspan="3"><b>GST INVOICE /<br>SUPPLY BILL</b></th>
    <td>Invoice No. 

       <b><?php echo $purchase_id; ?></b></td>
  <?php 
  /*if (isset($_GET['edit1'])) {
  $purchase_id = $_GET['edit1'];
  //echo $purchase_id;
  $sql = "SELECT p.*,
  c.* 
  FROM purchase_table p
  JOIN clients c ON c.client_id = p.client_id
  JOIN purchase_table pm ON pm.client_id = p.client_id WHERE p.purchase_id = $purchase_id;";
  $query = $dbh -> prepare($sql);
  $query->execute();
  $results=$query->fetchAll(PDO::FETCH_OBJ);
  $cnt=1;
  if($query->rowCount() > 0)
  {
  foreach($results as $row) 
  {*/ ?>

    <?php
    include 'config2.php'; 
    $result = $db->query ( " SELECT p.*,
  c.* ,
  pm.*
  FROM purchase_table p
  JOIN clients c ON c.client_id = p.client_id
  JOIN purchase_table pt ON pt.client_id = p.client_id
  JOIN product_master pm ON pm.client_id = p.client_id WHERE p.purchase_id = $purchase_id;" );

    while ( $item = $result->fetch_assoc () ) {

        ?>
 
 
  <td>Date:
 
  <b><?php echo $item['datept'] ?></b></td>
  </tr>
  <tr>
    
  </tr>
  <tr>
    
  
  </tr>
   <tr>
   
 
    <th colspan="2"><b>Consignor: <br>JAGDAMBA PRINT LINE </b><br>
  Abulash Lane, Machhuatoli, Patna<br>Bihar  (Ph : 9771408591 / 7360811115)</th>
    <td><b>Consignee:</b>
  <br>
  <b> <?php echo $item['client_name'] ?></b><br><?php echo $item['address'] ?></td>
  
  </tr>
   <tr>
    <th colspan="2"><b>Consignor's GSTIN :  10AZNPP1854H1ZD </b></th>
    <td><b>Consignee's GSTIN :</b>
 
  <b> 
  <?php echo $item['gst_no'] ?></b></td>
  
  </tr>
   
  </table>
  <table class="table2"  border="5">
  <tr>
    <th class="th_font" style="">S.No.</th>
    <th class="th_font th_width" style="">Particular</th>
	 <th class="th_font" style="">HSN/<br>SAC</th>
   <th class="th_font" style="">Quantity</th>
  <!--  <th class="th_font" style="width: 58px;">per</th>-->
    <th class="th_font" style="">Rate</th>
    <th class="th_font" style="">Amount</th>
    <th class="th_font" style="">GST %<br>(CGST+<br>SGST)</th>
    <!--  <th class="th_font" style="width: 50px;">Cgst%</th>-->
    <th class="th_font" style="">GST <br>Amount</th>
     <!--  <th class="th_font" style="width: 50px;">Sgst%</th>-->
    <!--  <th class="th_font" style="width: 50px;">Sgst Amount</th>-->
  <th class="th_font" style="">Total <br>Amount</th>
  </tr>
  <!-- here the starts the table loop -->
  <?php 
     /*if (isset($_GET['edit1'])) {
    $purchase_id = $_GET['edit1'];
    
    $sql = "SELECT * FROM product_master WHERE purchase_id = '$purchase_id';";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $cnt=1;
    if($query->rowCount() > 0)
    {
    foreach($results as $row1) 
    {*/ ?>

      <?php
    include 'config2.php'; 
    $result = $db->query ( " SELECT * FROM product_master WHERE purchase_id = '$purchase_id';" );

    while ( $item1 = $result->fetch_assoc () ) {
              $sn_no = $sn_no + 1;
              
        ?>

  <tr>
    <th class="th_font"><?php echo $sn_no; ?> </th>
    <th class="th_font" ><?php echo $item1['product_name'] ?></th>
	  <th class="th_font" ><?php echo $item1['hsn_code'] ?></th>
    <th class="th_font"><?php echo $item1['quantity'] ?></th>
   
    <th class="th_font"><?php echo $item1['rate'] ?></th>
    <th class="th_font"><?php echo $item1['amount'] ?></th>
    <th class="th_font"><?php echo $item1['gst'] ?></th>
    
    <th class="th_font"><?php echo $item1['gst_amount'] ?></th>
    <th class="th_font"><?php echo $item1['total_amount'] ?></th>
  </tr>


<?php }  ?>
  <tr>
    <tr>
    <td></td>
    <th></th>
   <th></th>
   <th >    <br>  </th>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
    
   <td></td>

  

   </tr>
  <tr>
    <th></th>
    <th class="align">Total</th>
   <th> </th>
  <th> </th>
    <th> </th>
    <td><?php echo $item['tsum'] ?></td>
    <td></td>
    <td><?php echo $item['gst_total'] ?></td>
    <?php $data1 = $item['payble'];?>
    <td><u><?php echo $item['totalPrice'] ?></u></td>

     
    

  <b><u>  </u></b>
  
  </tr>
  

   <tr>
    <th></th>
    <th class="align">Spl Discount.</th>
   <th> </th>
  <th> </th>
    <th> </th>
    <th> </th>
    <th> </th>
    <th> </th>
    <th><?php echo $item['discount'] ?>   </th>
     
     
    
   
  
  </tr>
   <tr>
    <th></th>
    <th class="align">Net Amount</th>
   <th> </th>
  <th> </th>
    <th> </th>
    <th> </th>
    <th> </th>
    <th> </th>
    <th><?php echo $item['net_amount'] ?> </th>
  </tr>
  

  <tr>
    <th></th>
    <th class="align" id="123">Net Payable Amount</th>
   <th> </th>
  <th> </th>
    <th> </th>
    <th> </th>
    <th> </th>
    <th> </th>
    <th> <?php echo $item['payble'] ?> </th>
     
    

  </tr>
   <tr>
    <th></th>
    <th class="align">Dues</th>
   <th> </th>
  <th> </th>
   <th> </th>
    <th> </th>
    <th> </th>
    <th> </th>
    <th> <?php echo $item['dues'] ?>  </th>
     
     

  </tr>
   <?php } 
?>
   </table>
   
  
<!--   testing area -->

<!--   testing area  end-->
   
    <table class="table1" >
    <tr>

 <th style="
    FONT-SIZE: 10PX;
"><b>Amount Chargeable (in words) Rupees:<p id="inword"></p>
 
 </b><hr>
  Company's<br>SSI (EM) No.    : 100281105722 [PART - II]<br>PAN NO. : AZNPP1854H<hr>
  A/C: 446830110000049 &#160; &#160; &#160; Ifsc: BKID0004468  &#160; &#160; &#160; Bank:Bank Of India
  <hr>
  <b style="
    FONT-SIZE: 10PX;
">Declaration :-</b><br>
  *  Goods once sold will not be taken back<br>
  *  Interest @18%p.a. will be charged if the payment is not made with in the stipulated time<br>
  *  Subject to Patna Jurisdiction<br>
   
  </th>
    <td><b>AUTHORISED SIGNATORY</b>
  <hr>
   </td>
  
  </tr>
</table>
<hr> <center><p><b>This is a Computer Generated Invoice</b></p></center><hr>
</div>
</body>
<button id="btnPrint" class="btn btn-default btn-outline" type="button" style="    margin-left: 50%;"> <span><i class="fa fa-print"></i> Print</span> </button>
<a href="view_client_product.php"><button style="color: black;"><span><i class="fa fa-print"></i> Back</span></button>
</html>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
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

 

$(document).ready(function(){
    
   


    //console.log(<?php $data;?>);

    var newValue = number2text(<?php echo $data1;?>);
   var showInText =  number2text(123);
//alert(newValue);
  $("#inword").html(newValue);
});

//   $(document).ready(function(){

// myFunction();

// function myFunction() {
//     document.getElementById("inword").innerHTML = "Iframe is loaded.";
// }

   /*  $("button").click(function(){
        $("p").slideToggle();
    }); */
// });

/* document.getElementById("123").onload = function() {myFunction()};

function myFunction() {
    document.getElementById("inword").innerHTML = "Iframe is loaded.";
} */
</script>
<script type="text/javascript">
        $("#btnPrint").live("click", function () {
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>Confirm Products</title><style> table {border: 1px solid black;border-collapse: collapse;} th {border: 1px solid black;border-collapse: collapse;} td {border: 1px solid black;border-collapse: collapse;} b{font-size:13px;} div {display: block;}body {font-family: "Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;line-height: 1.42857143;font-size:13px;margin-left:0px;margin-right:0px;color: #333;}@media (min-width: 992px){.col-md-2 {width: 16.66666667%;float: left;}}@media (min-width: 992px){.col-md-4 {width: 33.33333333%;float: left;}}.form-control {font-weight: 600;}.form-control {box-shadow: none !important;resize: none;}.form-control {border-radius: 0;border-color: #d2d6de;}.form-control {display: block;width: 100%;height: 34px;padding: 6px 12px;font-size: 14px;line-height: 1.42857143;color: #555;background-color: #fff;background-image: none;border: 1px solid #ccc;transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;}label {font-weight: 500;}label {display: inline-block; max-width: 100%;margin-bottom: 5px;}.table-responsive {min-height: .01%;}@media (min-width: 768px){.col-sm-6 { width: 50%;}}div.dataTables_length label {font-weight: normal;text-align: left;white-space: nowrap;display: none;}div.dataTables_filter {text-align: right;display: none;}@media (min-width: 768px){.col-sm-12 {width: 100%;}.table1{width:115.5%;}}table.table-bordered.dataTable {border-collapse: separate !important;}table.dataTable {clear: both;margin-top: 6px !important;margin-bottom: 6px !important;max-width: none !important;}.table-bordered {border: 1px solid #f4f4f4;}@media (min-width: 768px){.col-sm-5 {width: 41.66666667%;float:left;}}div.dataTables_info {padding-top: 8px;white-space: nowrap;display: none;}@media (min-width: 768px){.col-sm-7 {width: 58.33333333%;float:left;}}div.dataTables_paginate {margin: 0;white-space: nowrap;text-align: right;display: none;}.btn {border: 0;font-weight: bold;display: none;}.btn-info {background-color: #00c0ef;}.action{display: none;}.col-sm-6 { width: 50%;float: left;}.col-sm-12 {width: 100%;}.col-sm-5 {width: 41.66666667%;float:left;}.col-sm-7 {width: 58.33333333%;float:left;} @media (max-width:768px){.table1{width:1000px;}.table2 {width: 1000px;}} @media (max-width:1366px){.table1{width:100%;}.table2 {width: 100%;height:50%;font-size: 14px;}.th_width{}} .th_font{font-weight:normal;}.align{text-align: left;}</style>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
           printWindow.document.close();
            printWindow.print();
            
        });
    </script>
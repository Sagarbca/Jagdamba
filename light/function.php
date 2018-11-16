 <?php
 $servername = "localhost";
$username = "succeky5_succexa";
$password = "~f_uR)+v,*bS";
$db = "succeky5_jgdmba";
try {
   
    $conn = mysqli_connect($servername, $username, $password, $db);
     //echo "Connected successfully"; 
    }
catch(exception $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
  
 
 if(isset($_POST["Export"])){
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=all_vendor.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('vendor_id', 'vendor_name', 'gst_no', 'mobile_no', 'date','address'));  
      $query = "SELECT * from vendors ORDER BY vendor_id DESC";  
      $result = mysqli_query($conn, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 } 
 
 if(isset($_POST["Export_all_vendor_product"])){
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=all_vendor_product.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array( 'invoice_no','invoice_date','Entry_date','vendor_name','invoice_total', 'gst', 'igst',  'gst_amount', 'net_amount', 'payble', 'dues',  'status', 'payment_mode', 'cheque_no', 'utr_no', 'remarks'));  
      $query = "SELECT  `invoice_no`, `invoice_date`, `v_date`, `vendor_id`, `invoice_total`, `gst`,  `igst`,  `gst_amount`, `net_amount`, `payble`, `dues`,  `status`, `payment_mode`, `cheque_no`, `utr_no`, `remarks` FROM `vendor_invoice` ";  
      $result = mysqli_query($conn, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }
 
  if(isset($_POST["vendor_profile"])){
      
      $vendor_id = $_GET['vendor_id'];
    
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=vendor_profile.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('invoice_id', 'invoice_no', 'invoice_date', 'v_date', 'vendor_id', 'invoice_total', 'gst', 'cgst', 'cgst_amount', 'sgst', 'sgst_amount', 'igst', 'igst_amount', 'gst_amount', 'net_amount', 'payble', 'dues', 'pv_dues_remaining', 'status', 'payment_mode', 'cheque_no', 'utr_no', 'remarks'));  
      $query = "SELECT * from  vendor_invoice WHERE vendor_id = $vendor_id";  
      $result = mysqli_query($conn, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }
 
 if(isset($_POST["client"])){
      
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=all_client.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('client_id', 'client_name', 'date', 'mobile_no', 'email_client', 'gst_no', 'address', 'state', 'state_code'));  
      $query = "SELECT * from  clients ORDER BY client_id DESC";  
      $result = mysqli_query($conn, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }
 if(isset($_POST["client_profile"])){
    
      
      $client_id = $_GET['client_id'];
    
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=client_profile.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Invoice_id', 'date', 'client_id', 'Price', 'Gst_Total', 'Total_Amount', 'discount', 'Net_amount', 'payble', 'dues', 'payment_method', 'Cheque_no', 'total_due', 'status', 'utr_no'));  
      $query = "SELECT * from  purchase_table WHERE client_id = $client_id";  
      $result = mysqli_query($conn, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }
 
 if(isset($_POST["all_client_report"])){
    
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=all_client_profile.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Invoice_id', 'date', 'client_id', 'Price', 'Gst_Total', 'Total_Amount', 'discount', 'Net_amount', 'payble', 'dues', 'payment_method', 'Cheque_no', 'total_due', 'status', 'utr_no'));  
      $query = "SELECT * from  purchase_table";  
      $result = mysqli_query($conn, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }
 
 if(isset($_POST["all_staff"])){
    
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=all_staff.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('staff_id', 'staff_name', 'mobile_no', 'doj', 'address', 'email', 'aadhar_no', 'salary', 'date_of_advance', 'advance_money'));  
      $query = "SELECT * from  staffs";  
      $result = mysqli_query($conn, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }
 
 if(isset($_POST["all_expenses"])){
    
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=all_staff.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Expense_Id', 'Product_Name', 'Total_Amount'));  
      $query = "SELECT *, (SELECT exp_prod_name FROM expense_products WHERE exp_prod_id = exp.product_name ) as exp_prod_name, (SELECT exp_prod_name FROM expense_products WHERE exp_prod_id = exp.product_name2 ) as exp_prod_name2,  (SELECT exp_prod_name FROM expense_products WHERE exp_prod_id = exp.product_name3 ) as exp_prod_name3, (SELECT exp_prod_name FROM expense_products WHERE exp_prod_id = exp.product_name4 ) as exp_prod_name4 from  expenses exp";  
      $result = mysqli_query($conn, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }
 
   return $conn;
   
 ?>
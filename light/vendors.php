<?php
session_start();
$username = "root";
$password = "";
$errors = array();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'jagdamba');
if (isset($_POST['submit']))
{
    // receive all input values from the form
    $vendor_name = mysqli_real_escape_string($db, $_POST['vendor_name']);

   // $consignee = mysqli_real_escape_string($db, $_POST['consignee']);
    $gst_no = mysqli_real_escape_string($db, $_POST['gst_no']);
    $mobile_no = mysqli_real_escape_string($db, $_POST['mobile_no']);
    $date = mysqli_real_escape_string($db, $_POST['date']);
    $address= mysqli_real_escape_string($db, $_POST['address']);
    
   

     
    echo $vendor_name;
   // echo $consignee;
    echo $gst_no;
    echo $mobile_no;
    echo $address;
   

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($vendor_id))
    {
        array_push($errors, "vendor_id is required");
    }
    if (empty($vendor_name))
    {
        array_push($errors, "vendor_name is required");
    }

   /* if (empty($consignee))
    {
        array_push($errors, "consignee is required");
    }*/
    if (empty($gst_no))
    {
        array_push($errors, "gst_no is required");
    }
	 if (empty($mobile_no))
    {
        array_push($errors, "mobile_no is required");
    }
    if (empty($address))
    {
        array_push($errors, "address is required");
    }
    
    

    
    echo "hello2";

    // Finally, register user if there are no errors in the form
    
   // $_SESSION['email1'] = $email;
    $query = "INSERT INTO vendors (vendor_name,gst_no,mobile_no,date,address) VALUES ('$vendor_name','$gst_no','$mobile_no','$date','$address')";
    echo $query;
    mysqli_query($db, $query);
    echo "hello";
    
    $_SESSION['success'] = "You are now logged in";
    header('location:view_vendor.php');
   
}
?>
<?php
session_start();
// initializing variables
$username = "root";
$password = "";
$errors = array();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'gst');
if (isset($_POST['submit']))
{
    // receive all input values from the form
    //$patient_id = mysqli_real_escape_string($db, $_POST['patient_id']);
    $date = mysqli_real_escape_string($db, $_POST['date']);
    $consignee = mysqli_real_escape_string($db, $_POST['consignee']);
    $consignee_gst_no = mysqli_real_escape_string($db, $_POST['consignee_gst_no']);
    $total_amount = mysqli_real_escape_string($db, $_POST['total_amount']);
    $sale% = mysqli_real_escape_string($db, $_POST['sale%']);
    $cgst = mysqli_real_escape_string($db,$_POST['cgst']);
    $igst = mysqli_real_escape_string($db, $_POST['igst']);
    $tgst = mysqli_real_escape_string($db, $_POST['tgst']);
    $payable = mysqli_real_escape_string($db, $_POST['payable']);



    //echo $patient_id;

    echo $date;
    echo $consignee;
    echo $consignee_gst_no;
    echo $total_amount;
    echo $sale%;
    echo $cgst;
    echo $igst;
    echo $tgst;
   
    echo $payable;
   
    

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
     if (empty($date))
    {
        array_push($errors, "date is required");
    }
    if (empty($consignee))
    {
        array_push($errors, "consignee is required");
    }
    if (empty($consignee_gst_no))
    {
        array_push($errors, "consignee_gst_no is required");
    }
    if (empty($total_amount))
    {
        array_push($errors, "total_amount is required");
    }
    if (empty($sale%))
    {
        array_push($errors, "sale% is required");
    }
    if (empty($cgst))
    {
        array_push($errors, "cgst is required");
    }
    if (empty($igst))
    {
        array_push($errors, "igst is required");
    }
    if (empty($tgst))
    {
        array_push($errors, "tgst is required");
    }
    if (empty($payable))
    {
        array_push($errors, "payable is required");
    }
     
    

    
    echo "hello2";

    // Finally, register user if there are no errors in the form
    
    $_SESSION['email1'] = $email;
    $_SESSION['first_name'] = $first_name;


    $query = "INSERT INTO patient_master (title,first_name,middle_name,last_name,gender,weight,date_of_birth,age,blood_group,marital_status,blood_pressure,email,personal_id_type,personal_id_no,mobile_no,address,locality,city,state) VALUES ('$title','$first_name','$middle_name','$last_name','$gender','$weight','$date_of_birth','$age','$blood_group','$marital_status','$blood_pressure','$email','$personal_Id_Type','$personal_Id_No','$mobile_no','$address','$locality','$City','$State')";
    echo $query;

    mysqli_query($db, $query);
    echo "hello";
    header('location:successfull_add_patient.php');
}
?>


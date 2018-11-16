<?php
 session_start();
 $name = $_SESSION['name']; 
?>
<?php
include("config.php");
?>

<!DOCTYPE html>
<head>
<title> PRODUCT PAGE </title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
body {
  font-family: 'Raleway', sans-serif;
   background: url('pic3.jpg') ;
}

.card{
	background-color: lavender;
	text-align: center;
	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 1100px;
  margin: auto;
  
  font-family: arial;
}

</style>

</head>

<body>
<div class="container" style="margin-top: 250px;">
 <h1 style="text-align:center; font-size: 40px;"><font color="white"> 
<strong> PRODUCT INFORMATION </strong></font></h1>
  <br>
  
  <div class="card">
   <table class="w3-table-all w3-centered w3-large">
    <tr  class="w3-black">
      <?php 
                                            if (isset($_GET['edit1'])) {
                                            $expense_id = $_GET['edit1'];

                                            $sql = "SELECT * from  expenses WHERE expense_id = '$expense_id'";
                                            $query = $dbh -> prepare($sql);
                                            $query->execute();
                                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt=1;
                                            if($query->rowCount() > 0)
                                            {
                                            foreach($results as $row) 
                                            { ?>
      <th>DATE :  </th>
      <th>PRODUCTS NAME</th>
	  <th>RATE(in Rs.)</th>
	  <th>QUANTITY</th>
	  <th>TOTAL AMOUNT(in Rs.)</th>
     
    </tr>
     
	<tr>
      <td><strong><?php echo htmlentities($row->doe);?></strong></td>
      <td><strong> <?php echo htmlentities($row->product_name); ?>  </strong></td>
	   <td><strong><?php echo htmlentities($row->rate); ?></strong></td>
	    <td><strong><?php echo htmlentities($row->quantity); ?></strong></td>
		 <td><strong><?php echo htmlentities($row->total_amount); ?></strong></td>
    </tr>
  
  <tr>
      <td><strong></strong></td>
      <td><strong><?php echo htmlentities($row->product_name2); ?></strong></td>
	   <td><strong><?php echo htmlentities($row->rate2); ?></strong></td>
	    <td><strong><?php echo htmlentities($row->quanity2); ?></strong></td>
		 <td><strong><?php echo htmlentities($row->Total2); ?></strong></td>
    </tr>
	
	 <tr>
      <td><strong></strong></td>
      <td><strong><?php echo htmlentities($row->product_name3); ?></strong></td>
	   <td><strong><?php echo htmlentities($row->rate3); ?></strong></td>
	    <td><strong><?php echo htmlentities($row->quanity3); ?></strong></td>
		 <td><strong><?php echo htmlentities($row->Total3); ?></strong></td>
    </tr>
	
	 <tr>
      <td><strong></strong></td>
     <td><strong><?php echo htmlentities($row->product_name4); ?></strong></td>
	   <td><strong><?php echo htmlentities($row->rate4); ?></strong></td>
	    <td><strong><?php echo htmlentities($row->quanity4); ?></strong></td>
		 <td><strong><?php echo htmlentities($row->Total4); ?></strong></td>
    </tr>
	

	 <tr  class="w3-black">
      <td colspan="3" rowspan="3">TOTAL(in Rs.)</td>
     <td colspan="2" rowspan="3"><?php echo htmlentities($row->total_no);?></td>
    </tr>
	
  </table>
  </div><br><br><br><br>
  <a href="all_expenses.php" style="color: black; padding-left: 550px;"><button  ><span style="color: black;><i class="fa fa-print"></i> Back</span></button>
</div>


</body>
</html>
<?php } }  }
?>
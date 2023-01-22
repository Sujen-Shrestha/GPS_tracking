<?php
include 'database.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $number = $_SESSION['number'];
      $product_id = $_POST['product_id'];
      $sql = "SELECT * FROM products WHERE id='$product_id'";
      $result = mysqli_query($con, $sql);
      if ($result) {
            if (mysqli_num_rows($result) == 1) {
                  $product = mysqli_fetch_assoc($result);
                  $invoice_no = $product['id'] . time();
                  $total  = $product['amount'];
                  $created_at = date('Y-m-d H:i:s');
                  $query = "INSERT INTO orders(product_id,invoice_no, total, status, created_at ,user_number)
					VALUES( '$product_id','$invoice_no', '$total', 0, '$created_at', '$number')";
                  if (!mysqli_query($con, $query)) {
                        die('Error!');
                  }
            }
      }
}
?>
<!DOCTYPE html>
<html>

<head>
       <!--for reloading-->
       <meta http-equiv="Cache-control" content="no-cache">
      <meta content="width=device-width, initial-scale=1" name="viewport" />
      <!--css for whole website-->
      <link rel="stylesheet" href=".\css\style.css">
      <!--css for responsive-->
      <link rel="stylesheet" href=".\css\responsive.css">
      <!--css for animations-->
      <link rel="stylesheet" href=".\css\animate.css">
      <!--link to use google fonts-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400&display=swap" rel="stylesheet">
      <!--for favicon-->
      <link rel="icon" type="images/logo.png" href="images/logo.png">
      <title>Check-out Page</title>
</head>

<body>
                              <div class="paymentbody">
                                    <img src="images/checkout.png" alt="checkout image" width="400px">
                                    <div class="pbody">
                                          <div class="ptitle">
                                                <h1 class="question">Pay with</h1>
                                          </div>
                                          <div class="pbody_body">
                                                <ul class="list-group">
                                                      <li class="list-group-item">
                                                            <form action="https://uat.esewa.com.np/epay/main" method="POST">
                                                                  <input value="<?php echo $total; ?>" name="tAmt" type="hidden">
                                                                  <input value="<?php echo $total; ?>" name="amt" type="hidden">
                                                                  <input value="0" name="txAmt" type="hidden">
                                                                  <input value="0" name="psc" type="hidden">
                                                                  <input value="0" name="pdc" type="hidden">
                                                                  <input value="epay_payment" name="scd" type="hidden">
                                                                  <input value="<?php echo $invoice_no; ?>" name="pid" type="hidden">
                                                                  <input value="http://localhost/GPS_tracking/GPS_tracking/esewa_payment_success.php" type="hidden" name="su">
                                                                  <input value="http://localhost/GPS_tracking/GPS_tracking/esewa_payment_failed.php" type="hidden" name="fu">
                                                                  <input type="image" src="images/esewa.png" width="100px">
                                                      </li>
                                                </ul>
                                          </div>
                                          
                                    </div>
                                    
                              </div>
</body>

</html>
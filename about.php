<!DOCTYPE html>
<html>

<head>
      <!--for reloading-->
      <meta http-equiv="Cache-control" content="no-cache">
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
      <title>GPS tracking and Scheduling System</title>
</head>

<body>
      <!--This will add the upper navigation to the website-->
      <?php include './frontend/menu.php';
      session_name(); ?>
    <div class="paymentbody">
        <div class="payment_element">
            <div class="ptitle">
                <h1 class="question">Basic</h1>
            </div>
            <div class="pbody">
                <img src="images/good.png" alt="good image" width="300px" >
                <ul>
                    <li>Collected once per week</li>
                    <li>Live location feature</li>
                    <li>Email notification</li>   
                </ul>
                
                <div class="price_body">
                    <h2>Price: Rs 100/month</h2>
                    <button class="payment_button">Pay</button>
                </div>
            </div>
        </div>
        <div class="payment_element">
            <div class="ptitle">
                    <h1 class="question" >Standard</h1>
                </div>
                <div class="pbody">
                    <img src="images/better.png" alt="good image" width="300px">
                    <ul>
                        <li>Collected twice per week</li>
                        <li>Live location feature</li>
                        <li>Email notification</li>  
                        <li>Sms notification</li> 
                    </ul>
                    
                    <div class="price_body">
                        <h2>Price: Rs 200/month</h2>
                        <button class="payment_button">Pay</button>
                    </div>
                </div>
            </div>
        <div class="payment_element">
            <div class="ptitle">
                    <h1 class="question" >Plus Ultra</h1>
                </div>
                <div class="pbody">
                    <img src="images/best.png" alt="good image" width="300px">
                    <ul>
                        <li>Collected <em>Three times</em> per week</li>
                        <li>Live location feature</li>
                        <li>Email notification</li>
                        <li>Sms notification</li> 
                        
                    </ul>
                    
                    <div class="price_body">
                        <h2>Price: Rs 250/month</h2>
                        <button class="payment_button">Pay</button>
                    </div>
                </div>
        </div>
    </div>
</body>
<script src="./js/script.js"></script>

</html>
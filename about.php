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
                <img src="images/good.png" alt="good image" width="300px">
                <ul>
                    <li>collected once per week</li>
                    <li>live location feature</li>
                    <li>email notification</li>
                    
                </ul>
            </div>
        </div>
        <div class="payment_element">
            <div class="ptitle">
                    <h1 class="question" >Standard</h1>
                </div>
                <div class="pbody">
                    <img src="images/better.png" alt="good image" width="300px">
                    <ul>
                        <li>collected once per week</li>
                        <li>live location feature</li>
                        <li>email notification</li>
                        
                    </ul>
                </div>
            </div>
        <div class="payment_element">
            <div class="ptitle">
                    <h1 class="question" >Plus Ultra</h1>
                </div>
                <div class="pbody">
                    <img src="images/best.png" alt="good image" width="300px">
                    <ul>
                        <li>collected <em>once</em> per week</li>
                        <li>live location feature</li>
                        <li>email notification</li>
                        
                    </ul>
                </div>
        </div>
    </div>
</body>
<script src="./js/script.js"></script>

</html>
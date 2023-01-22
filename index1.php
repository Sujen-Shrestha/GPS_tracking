<!DOCTYPE html>
<html>
<?php session_start(); ?>

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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400&display=swap" rel="stylesheet">
  <!--for favicon-->
  <link rel="icon" type="images/logo.png" href="images/logo.png">
  <title>GPS tracking and Scheduling System</title>
</head>

<body>
      <!--This will add the upper navigation to the website-->
      <?php include './frontend/menu.php';?>
      <div class="login_body">
      <?php
            if (isset($_GET['error'])) {
            if ($_GET['error'] == "invaliduid") {
                  echo "<font color='red'><p align='center'>Incorrect ID or Password or Not Approved</p></font>";
            } elseif ($_GET['error'] == "sucess") {
                  echo "<font color='red'><p align='center'>Registeration sucessful wait for approval....</p></font>";
            }
            }
      ?>
            <form action="login.php" method="post" class="form1">
                        <p class="sign" align="center">Sign in</p>   
                        <input align="center" type="number" class="un" id="number" name="number" placeholder="Enter your Mobile Number " required>
                        <input align="center" type="password" class="un" name="password" id="password" placeholder="Enter your password" required>
                        <div class="login_button_body">
                             <input align="center"  type="checkbox" class="show_pass" onclick="myFunction()">Show Password <br>
                              <button class="login_button" type="submit">Login</button><br>  
                        </div>
                        <div class="optional_buttons">
                                    <a href="registerpage.php" target="_self"><button type="button" class="login_button" name="button">Register</button></a> 
                                    <button class="login_button"><a class="admin" href="admin.php">Admin Login</a></button>  
                        </div>
            </form>
      </div>
  


      <?php include './frontend/footer.php';?>
</body>
<script>
      function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                  x.type = "text";
            } else {
                  x.type = "password";
            }
      }
</script>
<script src="./js/script.js"></script>
</html>
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
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet">
      <!--for font-->     
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
           // session_start();
            if (isset($_GET['error'])) {
                  if ($_GET['error'] == "invalidadminid") {
                        echo "<br><br><font color='red'><p align='center'>Incorrect Credentials</p></font>";
                  }
            }
      ?>
                  <form class="form1" action="adminlogin.php" method="post">
                  <p class="sign" align="center">WELCOME ADMIN</p>
                  <input class="un" type="number" class="form-control" id="number" name="number" placeholder="Enter Your Mobile NO" required>
                         <span></span>
                  <input class="un" type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
                  
                        <span></span>
                        <br>
                  <select class="form-control un" name="role" id="role">
                        <option value="" disabled selected>Select your Role</option>
                        <option value="manager">Manager</option>
                        <option value="super admin">Super Admin</option>
                  </select><br>
                  <div class="login_button_body">
                        <input class="show_pass" type="checkbox" onclick="myFunction()">Show Password<br>
                        <button class="login_button" type="submit">Login</button><br>  
                  </div>
                                          <button class="login_button_inverse"onclick="goBack()">Go Back</button>

                                          <script>
                                                function goBack() {
                                                      window.location.href = 'index1.php?sucess';
                                                }
                                          function myFunction() {
                                                var x = document.getElementById("password");
                                                if (x.type === "password") {
                                                      x.type = "text";
                                                } else {
                                                      x.type = "password";
                                                }
                                          }
                                          </script>
                        </div>
            </form>   
      </div>
      <?php include './frontend/footer.php';?>                                    
</body>
<script src="./js/script.js"></script>
</html>
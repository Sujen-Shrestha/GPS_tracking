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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400&display=swap" rel="stylesheet">
  <title>GPS tracking and Scheduling System</title>
</head>
<body>
      <!--This will add the upper navigation to the website-->
      <?php include './frontend/menu.php';?>
      <div class="login_body">
      <?php
            if (isset($_GET['error'])) {
                  if ($_GET['error'] == "already_exist") {
                        echo "<font color='red'><p align='center'>Number already exist.</p></font>";
                  }
            }
      ?>
            <form class="form1" name="myform" action="register.php" method="POST" enctype="multipart/form-data">
                  <p class="sign" align="center">Register Here</p>
                  <input class="un" type="text" name="name" id="name" placeholder="Full Name"  required></input>
                  
                  <!--Database bata tannu parcha yeta-->
                  <select class="un" name="location" id="location" required>
                        <option value="" disabled selected>Choose your area </option>
                        <option value="gongabu">Gongabu</option>
                        <option value="kalanki">Kalanki</option>
                  </select>

                  <!--location-->
                  <span class="co-input">
                        <input class="un" type="text" id="lat" placeholder="Latitude" >
                        <input class="un" type="text" id="long" placeholder="Longitude">
                  </span>
                  <div class="button-wrapper">
                        <button class="small_button"onclick="geolocator()">
                              Get location
                        </button><br>
                  </div>


            <script>
                  var paraGraph = document.getElementById("paraGraph");
                  var user_loc = navigator.geolocation;

                  function geolocator() {
                        if (user_loc) {
                              user_loc.getCurrentPosition(success);
                        } else {
                              "Your browser doesn't support geolocation API";
                        }
                  }

                  function success(data) {
                        var lat = data.coords.latitude;
                        var long = data.coords.longitude;
                        document.getElementById('lat').value = lat;
                        document.getElementById('long').value = long;

                        paraGraph.innerHTML = "Latitude: " +
                              lat +
                              "<br>Longitude: " +
                              long;
                  }
            </script>






                  <input class="un" type="number" name="number" id="number" placeholder="Mobile Number" pattern="(\+977)?[9][6-9]\d{8}" required></input>
                  <span class="span_class" align="center"></span>
                  <input class="un" type="file" placeholder="Upload Citizenship" name="file" id="file" required></input>
                  <input class="un" type="password" name="password" id="password" placeholder="Enter your new password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                  <span class="span_class1" align="center"></span>
                  <div class="login_button_body">
                        <input class="show_pass"  type="checkbox" onclick="myFunction()">Show Password<br>
                        <button class="login_button" id="submit_btn" type="submit" value="submit_btn name=" submit_btn">Register</button>
                  </div>
                  
                  
                  <button class="login_button_inverse" onclick="goBack()">Go Back</button>

                  <script type="text/javascript">
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
                        let password = document.getElementById('password');
                        let number = document.getElementById('number');
                        let span = document.getElementsByTagName('span');

                        password.onkeyup = function() {
                              const regexo = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
                              if (regexo.test(password.value)) {
                                    span[5].innerText = "Your password is valid";
                                    span[5].style.color = 'Green';

                              } else {
                                    span[5].innerText = "**Your password must have one uppercase letter,lowercase letter and Number ";
                                    span[5].style.color = 'Red';
                              }
                        }
                        number.onkeyup = function() {
                              const regexoo = /(\+977)?[9][6-9]\d{8}/;
                              if (regexoo.test(number.value)) {
                                    span[4].innerText = "Your Mobile Number is valid";
                                    span[4].style.color = 'Green';

                              } else {
                                    span[4].innerText = "**Your Mobile Number is invalid ";
                                    span[4].style.color = 'Red';
                              }
                        }
                  </script>
            </form>   
      </div>
      <?php include './frontend/footer.php';?>                
</body>
<script src="./js/script.js"></script>
</html>
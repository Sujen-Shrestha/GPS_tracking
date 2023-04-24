<?php
ini_set('display_errors', 0);
include('database.php');
session_start();


if ($number = $_SESSION['number']) {
?>
      <!DOCTYPE html>
      <html lang="en">

      <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
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
            <!--link to fonts-->
            <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
            <!--for favicon-->
            <link rel="icon" type="images/logo.png" href="images/logo.png">
            <title>User-panel</title>





      </head>

      <body>
            <input type="checkbox" id="nav-toggle">
            <?php include './user/sidebar-user.php'; ?>
            <div class="main-content">
                  <?php include './user/header-user.php'; ?>
                  <main>
                        <div class="content homepage active">

                              <div class="cards">
                                    <div class="card-single">
                                          <div>
                                                <h1>
                                                      <?php
                                                      $con = mysqli_connect('localhost', 'sagar', 'Iamsagar456@');
                                                      mysqli_select_db($con, 'sagar');
                                                      $result_1 = mysqli_query($con, "SELECT * FROM schedule WHERE date = cast(Date(Now()) as Date) AND location = '$l'");
                                                      if ($result = mysqli_num_rows($result_1) > 0) {
                                                            // there are results in $result
                                                            echo "YES";
                                                      } else 
                                                      {
                                                            // no results
                                                            echo "NO";
                                                      }
                                                      ?>


                                                </h1>
                                                <span>Schedule-today</span>
                                          </div>
                                          <div>
                                                <span class="las la-calendar-day"></span>
                                          </div>
                                    </div>
                                    <div class="card-single">
                                          <div>
                                                <h1>
                                                      <?php
                                                      $con = mysqli_connect('localhost', 'sagar', 'Iamsagar456@');
                                                      mysqli_select_db($con, 'sagar');
                                                      $number = $_SESSION['number'];
                                                      $result_1 = mysqli_query($con, "SELECT status FROM orders WHERE user_number= '$number' ORDER BY created_at DESC LIMIT 1;");
                                                      while ($row = mysqli_fetch_array($result_1)) {
                                                            if ($row['status'] == 0) {
                                                                  echo "Not paid";
                                                            } else {
                                                                  echo "Paid";
                                                            }
                                                      }
                                                      ?>
                                                </h1>
                                                <span>Account-Status</span>
                                          </div>
                                          <div>
                                                <span class="las la-wallet"></span>
                                          </div>
                                    </div>
                                    <div class="card-single-time">
                                          <div>
                                                <h1>
                                                      <?php
                                                      $con = mysqli_connect('localhost', 'sagar', 'Iamsagar456@');
                                                      mysqli_select_db($con, 'sagar');
                                                      $number = $_SESSION['number'];
                                                      $result_1 = mysqli_query($con, "SELECT created_at,status FROM orders WHERE user_number='$number'");
                                                      while ($row = mysqli_fetch_array($result_1)) {
                                                            $date = $row['created_at'];
                                                            $status = $row['status'];
                                                      }

                                                      if($status == 1){
                                                            $date = $row['created_at'];
                                                            echo date('Y-m-d', strtotime($date . ' + 30 days'));
                                                      }
                                                      else{
                                                            echo "Payment must be done....";
                                                      }

                                                 
                                                      ?>
                                                </h1>

                                                <span>Account Expiry Date</span>
                                          </div>
                                          <div>
                                                <span class="las la-calendar-times"></span>
                                          </div>
                                    </div>
                                    <div class="card-single">
                                          <div>
                                                <h1>
                                                      <?php
                                                      $con = mysqli_connect('localhost', 'sagar', 'Iamsagar456@');
                                                      mysqli_select_db($con, 'sagar');
                                                      $number = $_SESSION['number'];
                                                      $result_1 = mysqli_query($con, "SELECT location FROM usertable WHERE number='$number'");
                                                      while ($row = mysqli_fetch_array($result_1)) {
                                                            echo $row['location'];
                                                      }
                                                      ?>


                                                </h1>
                                                <span>My-Area</span>
                                          </div>
                                          <div>
                                                <span class="las la-map-marker"></span>
                                          </div>
                                    </div>

                              </div>
                        </div>
                        <div class="content paymentpage in-active">
                              <div class="paymentbody_user">
                                    <div class="payment_element">
                                          <div class="ptitle">
                                                <h1 class="question">Basic</h1>
                                          </div>
                                          <div class="pbody">
                                                <img src="images/good.png" alt="good image" width="250px">
                                                <ul>
                                                      <li>~Collected once per week</li>
                                                      <li>~Live location feature</li>
                                                      <li>~Email notification</li>
                                                </ul>
                                                <div class="price_body">
                                                      <?php include 'database.php';
                                                      $sql = "SELECT * FROM products WHERE id = 1";
                                                      $result = mysqli_query($con, $sql);
                                                      //var_dump($result);

                                                      ?>
                                                      <?php $product = mysqli_fetch_assoc($result);  ?>
                                                      <h2>Price: Rs. <?php echo $product['amount']; ?>/month</h2>
                                                      <form method="post" action="checkout.php">
                                                            <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                                                            <input type="submit" name="submit" value="Buy Now" class="payment_button">
                                                      </form>

                                                </div>

                                          </div>
                                    </div>
                                    <div class="payment_element">
                                          <div class="ptitle">
                                                <h1 class="question">Standard</h1>
                                          </div>
                                          <div class="pbody">
                                                <img src="images/better.png" alt="good image" width="250px">
                                                <ul>
                                                      <li>~Collected twice per week</li>
                                                      <li>~Live location feature</li>
                                                      <li>~Email notification</li>
                                                      <li>~Sms notification</li>

                                                </ul>
                                                <div class="price_body">
                                                      <?php include 'database.php';
                                                      $sql = "SELECT * FROM products WHERE id = 2";
                                                      $result = mysqli_query($con, $sql);
                                                      //var_dump($result);

                                                      ?>
                                                      <?php $product = mysqli_fetch_assoc($result);  ?>
                                                      <h2>Price: Rs. <?php echo $product['amount']; ?>/month</h2>
                                                      <form method="post" action="checkout.php">
                                                            <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                                                            <input type="submit" name="submit" value="Buy Now" class="payment_button">
                                                      </form>

                                                </div>
                                          </div>
                                    </div>
                                    <div class="payment_element">
                                          <div class="ptitle">
                                                <h1 class="question">Plus Ultra</h1>
                                          </div>
                                          <div class="pbody">
                                                <img src="images/best.png" alt="good image" width="250px">
                                                <ul>
                                                      <li>~Collected <em>Thrice</em> per week</li>
                                                      <li>~Live location feature</li>
                                                      <li>~Email notification</li>
                                                      <li>~Sms notification</li>

                                                </ul>

                                                <div class="price_body">
                                                      <?php include 'database.php';
                                                      $sql = "SELECT * FROM products WHERE id = 3";
                                                      $result = mysqli_query($con, $sql);
                                                      //var_dump($result);

                                                      ?>
                                                      <?php $product = mysqli_fetch_assoc($result);  ?>
                                                      <h2>Price: Rs. <?php echo $product['amount']; ?>/month</h2>
                                                      <form method="post" action="checkout.php">
                                                            <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                                                            <input type="submit" name="submit" value="Buy Now" class="payment_button">
                                                      </form>

                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>



                        <div class="content schedulepage in-active">
                              <div class="table-contact-panel">
                                    <h3>Schedule</h3>
                                    <table width="100%">
                                          <thead>
                                                <tr>
                                                      <td>Date</td>
                                                      <td>Message</td>
                                                      <td>location</td>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <?php
                                                $con = mysqli_connect('localhost', 'sagar', 'Iamsagar456@');
                                                mysqli_select_db($con, 'sagar');
                                                $number = $_SESSION['number'];
                                                $sql = mysqli_query($con, "SELECT location From usertable WHERE number= '$number'");
                                                while ($row = mysqli_fetch_array($sql)) {
                                                      $l = $row['location'];
                                                }

                                                $result_1 = mysqli_query($con, "SELECT * FROM schedule WHERE location='$l' ORDER BY date desc limit 3");
                                                while ($row = mysqli_fetch_array($result_1)) {
                                                ?>
                                                      <tr>
                                                            <td><?php echo $row['date']; ?></td>
                                                            <td><?php echo $row['msg']; ?></td>
                                                            <td><?php echo $row['location']; ?></td>


                                                      </tr>

                                                <?php }

                                                ?>
                                          </tbody>
                                    </table>
                              </div>
                        </div>



                        <div class="content mappage in-active">
                              <?php
                              $con = mysqli_connect('localhost', 'sagar', 'Iamsagar456@');
                              mysqli_select_db($con, 'sagar');
                              $number = $_SESSION['number'];
                              $result_1 = mysqli_query($con, "SELECT status FROM orders WHERE user_number= '$number' ORDER BY created_at DESC LIMIT 1");
                              while ($row = mysqli_fetch_array($result_1)) {
                                    if ($row['status'] == 0) {
                              ?>
                                          <div>
                                                Pay first....
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                          <div id="map" class="map-panel"></div>
                                          <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
                                          <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
                                          <script>
                                                <?php
                                                $con = mysqli_connect('localhost', 'sagar', 'Iamsagar456@');
                                                mysqli_select_db($con, 'sagar');

                                                $result = mysqli_query($con, "SELECT * FROM locations");
                                                while ($row = mysqli_fetch_array($result)) {
                                                      $lat_d = $row['latitude'];
                                                      $long_d = $row['longitude'];
                                                }

                                                $result = array(array('latitude' => $lat_d, 'longitude' => $long_d));
                                                // Set the latitude and longitude coordinates of the location
                                                $latitude = $lat_d;
                                                $longitude = $long_d;
                                                ?>
                                                const lat = <?php echo $latitude; ?>;
                                                const long = <?php echo $longitude; ?>;;
                                                // Creating map options


                                                var mapOptions = {
                                                      center: [lat, long],
                                                      zoom: 14
                                                }

                                                // Creating a map object
                                                var map = new L.map('map', mapOptions);

                                                // Creating a Layer object
                                                var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');

                                                // Adding layer to the map
                                                map.addLayer(layer);

                                                const leafletMarkers = L.layerGroup([


                                                      //adding marker
                                                      <?php

                                                      $result = mysqli_query($con, "SELECT * FROM locations");
                                                      while ($row = mysqli_fetch_array($result)) {

                                                            echo "new L.Marker([" . $row['latitude'] . ", " . $row['longitude'] . "]),\n";
                                                      } ?>
                                                ]);
                                                leafletMarkers.addTo(map);
                                          </script>
                              <?php  }
                              }
                              ?>


                        </div>





                        <div class="content accountpage in-active">
                              <div class="table-contact-panel">
                                    <h3 class="question-inverse">Your Details</h2>
                                          <table width="100%">
                                                <thead>
                                                      <tr>
                                                            <td>Name</td>
                                                            <td>Number</td>
                                                            <td>Location</td>
                                                            <td>Email</td>
                                                            <td>
                                                                  Document
                                                            </td>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      <?php
                                                      $con = mysqli_connect('localhost', 'sagar', 'Iamsagar456@');
                                                      mysqli_select_db($con, 'sagar');
                                                      $number = $_SESSION['number'];
                                                      $result = mysqli_query($con, "SELECT * FROM usertable WHERE number = '$number'");
                                                      while ($row = mysqli_fetch_array($result)) {
                                                      ?>
                                                            <tr>
                                                                  <td><?php echo $row['name']; ?></td>
                                                                  <td><?php echo $row['number']; ?></td>
                                                                  <td><?php echo $row['location']; ?> </td>
                                                                  <td><?php echo $row['email']; ?> </td>
                                                                  <td><a style="color:blue;" href="uploads/<?php echo $row['file'] ?>" target="managerpanel.php">CLICK TO VIEW</a></td>
                                                            </tr>

                                                      <?php } ?>
                                                </tbody>
                                          </table>

                                          <div class="login_body" style="margin-top:1rem">
                                                <form class="form1" name="myform" action="update_user_main.php" method="POST" enctype="multipart/form-data">
                                                      <p class="sign" align="center">Edit Your Details</p>
                                                      <input class="un" type="text" name="name" id="name" placeholder="Full Name" required></input>
                                                      <input class="un" type="email" name="email" id="email" placeholder="User Email" required></input>
                                                      <?php
                                                      $con = mysqli_connect('localhost', 'sagar', 'Iamsagar456@');
                                                      mysqli_select_db($con, 'sagar');
                                                      $number = $_SESSION['number'];
                                                      ?>
                                                      <select class="un" name="id" id="id" required>
                                                            <option value="" disabled selected>Choose your user id</option>
                                                            <?php
                                                            include_once 'database.php';
                                                            $sql = mysqli_query($con, "SELECT * From usertable WHERE number = $number");
                                                            $row = mysqli_num_rows($sql);
                                                            while ($row = mysqli_fetch_array($sql)) 
                                                            {
                                                                  echo "<option value='" . $row['id'] . "'>" . $row['id'] . "</option>";
                                                            }
                                                            ?>
                                                      </select>


                                                      <!--Database bata tannu parcha yeta-->
                                                      <select class="un" name="location" id="location" required>
                                                            <option value="" disabled selected>Choose your area </option>
                                                            <?php
                                                            include_once 'database.php';
                                                            $sql = mysqli_query($con, "SELECT * From area");
                                                            $row = mysqli_num_rows($sql);
                                                            while ($row = mysqli_fetch_array($sql)) {
                                                                  echo "<option value='" . $row['area'] . "'>" . $row['area'] . "</option>";
                                                            }
                                                            ?>
                                                      </select>

                                                      <!--location-->
                                                      <span class="co-input">
                                                            <input class="un" type="text" id="lat" name="latitude" placeholder="Latitude">
                                                            <input class="un" type="text" id="long" name="longitude" placeholder="Longitude">
                                                      </span>
                                                      <div class="button-wrapper">
                                                            <button class="small_button" onclick="geolocator()">
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
                                               
                                                      <input class="un" type="password" name="password" id="password" placeholder="Enter your new password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                      <span class="span_class1" id="span_class1" align="center"></span>
                                                      <div class="login_button_body" style="padding-botton:1rem;">
                                                            <input class="show_pass" type="checkbox" onclick="myFunction()">Show Password<br>
                                                            <button class="login_button" id="submit_btn_1" type="submit" value="submit_btn_1" name="submit_btn_1">Update Details</button>
                                                      </div>
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

                                                                        document.getElementById('span_class1').innerText = "Your password is valid";
                                                                        document.getElementById('span_class1').style.color = 'Green';

                                                                  } else {
                                                                        document.getElementById('span_class1').innerText = "**password must atleast one uppercase,lowercase letter and Number ";
                                                                        document.getElementById('span_class1').style.color = 'Red';
                                                                  }
                                                            }
                                                            number.onkeyup = function() {
                                                                  const regexoo = /(\+977)?[9][6-9]\d{8}/;
                                                                  if (regexoo.test(number.value)) {
                                                                        const box = document.getElementById('box');
                                                                        document.getElementById('span_class').innerText = "Your Mobile Number is valid";
                                                                        document.getElementById('span_class').style.color = 'Green';

                                                                  } else {
                                                                        document.getElementById('span_class').innerText = "**Your Mobile Number is invalid ";
                                                                        document.getElementById('span_class').style.color = 'Red';
                                                                  }
                                                            }
                                                      </script>
                                                </form>
                                          </div>
                              </div>


                  </main>
            </div>
      </body>

<?php } else {
?>
      <script>
            alert("Login Again");
            window.location.href = 'index1.php';
      </script>
<?php
}
?>

      </html>
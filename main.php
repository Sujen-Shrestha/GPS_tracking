<?php
include('database.php');
session_start();
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
                                          <h1>Yes</h1>
                                          <span>Schedule-today</span>
                                    </div>
                                    <div>
                                          <span class="las la-calendar-day"></span>
                                    </div>
                              </div>
                              <div class="card-single">
                                    <div>
                                          <h1>Active</h1>
                                          <span>Account-Status</span>
                                    </div>
                                    <div>
                                          <span class="las la-wallet"></span>
                                    </div>
                              </div>
                              <div class="card-single-time">
                                    <div>
                                          <h1>3</h1>
                                          <span>Time-Remaining</span>
                                    </div>
                                    <div>
                                          <span class="las la-calendar-times"></span>
                                    </div>
                              </div>
                              <div class="card-single">
                                    <div>
                                          <h1>Gongabu</h1>
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
                                          <li>collected once per week</li>
                                          <li>live location feature</li>
                                          <li>email notification</li>
                                          
                                    </ul>
                                    <button class="login_button">Pay</button>
                                    </div>
                              </div>
                              <div class="payment_element">
                                    <div class="ptitle">
                                          <h1 class="question" >Standard</h1>
                                    </div>
                                    <div class="pbody">
                                          <img src="images/better.png" alt="good image" width="250px">
                                          <ul>
                                                <li>collected once per week</li>
                                                <li>live location feature</li>
                                                <li>email notification</li>
                                                
                                          </ul>
                                          <button class="login_button">Pay</button>
                                    </div>
                                    </div>
                              <div class="payment_element">
                                    <div class="ptitle">
                                          <h1 class="question" >Plus Ultra</h1>
                                    </div>
                                    <div class="pbody">
                                          <img src="images/best.png" alt="good image" width="250px">
                                          <ul>
                                                <li>collected <em>once</em> per week</li>
                                                <li>live location feature</li>
                                                <li>email notification</li>
                                                
                                          </ul>
                                          <button class="login_button">Pay</button>
                                    </div>
                              </div>
                        </div>
                  </div>

                  <div class="content schedulepage in-active">
                        <p>schedule page</p>

                  </div>

                  <div class="content mappage in-active">
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
                                    zoom: 13
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
                  </div>

                  <div class="content accountpage in-active">
                        <p>account page</p>
                  </div>


            </main>
      </div>
</body>


</html>
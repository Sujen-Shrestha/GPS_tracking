<?php
include('database.php');
session_start();
?>
<?php if ($_SESSION['role'] == 'manager') {
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
            <title>Manager-panel</title>





      </head>

      <body>
            <input type="checkbox" id="nav-toggle">
            <?php include './manager/sidebar-manager.php'; ?>
            <div class="main-content">
                  <?php include './manager/header-manager.php'; ?>
                  <main>
                        <div class="content homepage active">
                              <div class="cards">
                                    <div class="card-single">
                                          <div>
                                                <h1>
                                                      <?php
                                                      $con = mysqli_connect('localhost', 'sagar', 'Iamsagar456@');
                                                      mysqli_select_db($con, 'sagar');
      $number = $_SESSION['number'];
      $result_1 = mysqli_query($con, "SELECT location FROM admintable WHERE number='$number'");
      while ($row = mysqli_fetch_array($result_1)) {
            $l =  $row['location'];
      }
                                                      $result = mysqli_query($con, "SELECT COUNT(id) as total FROM usertable WHERE location = '$l'");
                                                      while ($row = mysqli_fetch_array($result)) {
                                                            echo $row['total'];
                                                      }
                                                      ?>
                                                </h1>
                                                <span>Customers</span>
                                          </div>
                                          <div>
                                                <span class="las la-users"></span>
                                          </div>
                                    </div>
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
                                                <h1>
                                                <?php      
                                                $con = mysqli_connect('localhost', 'sagar', 'Iamsagar456@');
                                                      mysqli_select_db($con, 'sagar');
                                                      $number = $_SESSION['number'];
                                                      $result_1 = mysqli_query($con, "SELECT location FROM admintable WHERE number='$number'");
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

                        <div class="content customerpage in-active">
                              <div class="table-contact-panel">
                                    <h3 class="question-inverse">Customer Details</h2>
                                          <table width="100%">
                                                <thead>
                                                      <tr>
                                                            <td>Name</td>
                                                            <td>Number</td>
                                                            <td>Location</td>
                                                            <td>Account Status</td>
                                                            <td>
                                                                  Document
                                                            </td>
                                                            <td>
                                                                  Action
                                                            </td>

                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      <?php
                                                      $con = mysqli_connect('localhost', 'sagar', 'Iamsagar456@');
                                                      mysqli_select_db($con, 'sagar');
                                                      $number = $_SESSION['number'];
                                                      $result_1 = mysqli_query($con, "SELECT location FROM admintable WHERE number='$number'");
      while ($row = mysqli_fetch_array($result_1)) {
            $l =  $row['location'];
      }

                                                      $result = mysqli_query($con, "SELECT * FROM usertable WHERE location = '$l'");
                                                      while ($row = mysqli_fetch_array($result)) {
                                                      ?>
                                                            <tr>

                                                                  <td><?php echo $row['name']; ?></td>
                                                                  <td><?php echo $row['number']; ?></td>
                                                                  <td><?php echo $row['location']; ?> </td>

                                                                  <td>
                                                                        <?php
                                                                        if ($row['status'] == 0) {
                                                                              echo "Not verified &#10060;";
                                                                        } else {
                                                                              echo "Verified &#9989;";
                                                                        }
                                                                        ?>
                                                                  </td>

                                                                  <td><a style="color:blue;" href="uploads/<?php echo $row['file'] ?>" target="managerpanel.php">CLICK TO VIEW</a></td>
                                                                  <td>
                                                                        <form action="update_user.php" method="post">
                                                                              <input type="hidden" name="change_id" value="<?php echo $row['id']; ?>">
                                                                              <button class="small_button" type="submit" name="change_btn" class="btn_btn_danger btn btn-info">Verify</button>
                                                                        </form>
                                                                        <br>
                                                                        <form action="delete_user.php" method="POST">
                                                                              <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                                                              <button class="small_button" type="submit" name="delete_btn" class="btn_btn_danger btn btn-info">Delete</button>
                                                                        </form>
                                                                  </td>
                                                            </tr>

                                                      <?php } ?>
                                                </tbody>
                                          </table>
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

<?php } else {
      header('location:adminlogin.php');
}

?>
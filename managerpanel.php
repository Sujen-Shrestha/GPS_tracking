<?php
include('database.php');
session_start();
ini_set('display_errors', 0);
ini_set('display_notice', 0);
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
                                                <h1>

                                                      <?php
                                                      $con = mysqli_connect('localhost', 'sagar', 'Iamsagar456@');
                                                      mysqli_select_db($con, 'sagar');

                                                      $number = $_SESSION['number'];
                                                      $result_1 = mysqli_query($con, "SELECT location FROM admintable WHERE number='$number'");
                                                      while ($row = mysqli_fetch_array($result_1)) {
                                                            $l =  $row['location'];
                                                      }

                                                      $result_1 = mysqli_query($con, "SELECT * FROM schedule WHERE date = cast(Date(Now()) as Date) AND location = '$l'");
                                                      if ($result = mysqli_num_rows($result_1) > 0) {
                                                            // there are results in $result
                                                            echo "YES";
                                                      } else {
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
                              <div class="recent-grid">
                                    <div class="projects">
                                          <div class="card">
                                                <div class="card-header">
                                                      <h3>Recent added schedules</h3>
                                                      <button> See all <span class="las al-arrow-right"></span></button>
                                                </div>
                                                <div class="card-body">
                                                      <div class="table-responsive">

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
                                                            <td>Email</td>
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
                                                                  <td><?php echo $row['email']; ?></td>
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
                                                                              <button class="small_button" type="submit" name="change_btn">Verify</button>
                                                                        </form>
                                                                        <br>
                                                                        <form action="delete_user.php" method="POST">
                                                                              <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                                                              <button class="small_button" type="submit" name="delete_btn">Delete</button>
                                                                        </form>
                                                                        <br>
                                                                        <form action="mail.php" method="post">
                                                                              <input name="email" id="email" type="hidden" value="<?php echo $row['email'] ?>">
                                                                              <button class="small_button" type="submit" name="mail_btn" id="mail_btn">Confirmation email</button>

                                                                        </form>
                                                                  </td>





                                                            </tr>

                                                      <?php } ?>
                                                </tbody>
                                          </table>
                              </div>


                        </div>



                        <div class="content schedulepage in-active">

                              <form action="create_schedule.php" method="POST">
                                    <p class="sign" align="center">Create Schdeule</p>
                                    <input placeholder="Select Date" class="un" type="date" name="date" id="date" min="<?php echo date("Y-m-d"); ?>">
                                    <textarea name="msg" id="msg" class="un" placeholder="Enter Schedule message..." rows="6"></textarea>
                                    <select class="un" name="location" id="location" required>
                                          <option value="" disabled selected>Choose your area </option>
                                          <?php
                                          include 'database.php';
                                          $number = $_SESSION['number'];
                                          $sql = mysqli_query($con, "SELECT location  From admintable WHERE number= '$number'");
                                          $row = mysqli_num_rows($sql);
                                          while ($row = mysqli_fetch_array($sql)) {
                                                echo "<option value='" . $row['location'] . "'>" . $row['location'] . "</option>";
                                          }
                                          ?>
                                    </select>
                                    <select class="un" name="title" id="title" required>
                                          <option value="" disabled selected>Choose the package</option>
                                          <?php
                                          include 'database.php';
                                          $sql = mysqli_query($con, "SELECT * From products");
                                          $row = mysqli_num_rows($sql);
                                          while ($row = mysqli_fetch_array($sql)) {
                                                echo "<option value='" . $row['title'] . "'>" . $row['title'] . "</option>";
                                          }
                                          ?>
                                    </select>

                                    <div class="login_button_body" style="margin-left: 41%; padding-bottom: 3%;">
                                          <button class="login_button" id="insert_btn" type="submit" value="insert_btn" name="insert_btn">Submit</button>

                                    </div>


                              </form>
                        </div>
                        <div class="content mappage in-active"> <!-- MAP div-->
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
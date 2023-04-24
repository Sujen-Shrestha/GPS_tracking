<?php
include('database.php');
session_start();
ini_set('display_errors', 0);
ini_set('display_notice', 0);
?>
<?php if ($_SESSION['role'] == 'super admin') {
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
            <title>Admin-panel</title>




      </head>

      <body>
            <input type="checkbox" id="nav-toggle">
            <?php include './admin/sidebar.php'; ?>
            <div class="main-content">
                  <?php include './admin/header1.php'; ?>
                  <main>
                        <div class="content homepage active">
                              <div class="cards">
                                    <div class="card-single">
                                          <div>
                                                <h1>
                                                      <?php
                                                      $con = mysqli_connect('localhost', 'sagar', 'Iamsagar456@');
                                                      mysqli_select_db($con, 'sagar');

                                                      $result = mysqli_query($con, "SELECT COUNT(*) as total FROM usertable");
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

                                                      $result = mysqli_query($con, "SELECT COUNT(*) as total FROM area");
                                                      while ($row = mysqli_fetch_array($result)) {
                                                            echo $row['total'];
                                                      }
                                                      ?>




                                                </h1>
                                                <span>Areas</span>
                                          </div>
                                          <div>
                                                <span class="las la-map-marker"></span>
                                          </div>
                                    </div>
                                    <div class="card-single">
                                          <div>
                                                <h1>
                                                      <?php
                                                      $con = mysqli_connect('localhost', 'sagar', 'Iamsagar456@');
                                                      mysqli_select_db($con, 'sagar');

                                                      $result = mysqli_query($con, "SELECT COUNT(*) as total FROM admintable WHERE role = 'manager'");
                                                      while ($row = mysqli_fetch_array($result)) {
                                                            echo $row['total'];
                                                      }
                                                      ?>
                                                </h1>
                                                <span>Managers</span>
                                          </div>
                                          <div>
                                                <span class="las la-user-tie"></span>
                                          </div>
                                    </div>

                                    <div class="card-single">
                                          <div>
                                                <?php if ($_SESSION['role'] == 'super admin') : ?>
                                                      <h1>
                                                            <?php
                                                            $con = mysqli_connect('localhost', 'sagar', 'Iamsagar456@');
                                                            mysqli_select_db($con, 'sagar');

                                                            $result = mysqli_query($con, "SELECT SUM(total) as total FROM orders");
                                                            while ($row = mysqli_fetch_array($result)) {
                                                                  echo "Rs.";
                                                                  echo $row['total'];
                                                            }
                                                            ?>



                                                      </h1>
                                                      <span>Income</span>
                                          </div>
                                    <?php endif; ?>
                                    <div>
                                          <span class="lab la-google-wallet"></span>
                                    </div>
                                    </div>

                              </div>

                              <?php if ($_SESSION['role'] == 'super admin') : ?>
                                    <div class="recent-grid">
                                          <div class="projects">
                                                <div class="card">
                                                      <div class="card-header">
                                                            <h3>Recent added managers</h3>
                                                            <button> See all <span class="las al-arrow-right"></span></button>
                                                      </div>
                                                      <div class="card-body">
                                                            <div class="table-responsive">
                                                                  <table width="100%">
                                                                        <thead>
                                                                              <tr>
                                                                                    <td>Manager Id</td>
                                                                                    <td> Manager Name </td>
                                                                                    <td> Location Area </td>
                                                                              </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                              <?php

                                                                              $con = mysqli_connect('localhost', 'sagar', 'Iamsagar456@');
                                                                              mysqli_select_db($con, 'sagar');
                                                                              $result = mysqli_query($con, "SELECT * FROM admintable WHERE role = 'manager'");
                                                                              while ($row = mysqli_fetch_array($result)) {
                                                                              ?>

                                                                                    <tr>
                                                                                          <td><?php echo $row['admin_id']; ?></td>
                                                                                          <td><?php echo $row['name']; ?></< /td>
                                                                                          <td><?php echo $row['location']; ?></< /td>

                                                                                    </tr>
                                                                              <?php } ?>

                                                                        </tbody>
                                                                  </table>
                                                            <?php endif; ?>

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
                                                            <td>Location</td>
                                                            <td>Payment Status</td>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      <?php
                                                      $con = mysqli_connect('localhost', 'sagar', 'Iamsagar456@');
                                                      mysqli_select_db($con, 'sagar');
      $result = mysqli_query($con, "SELECT name,number,location,orders.status as status FROM usertable INNER JOIN orders ON usertable.number = orders.user_number");
                                                      while ($row = mysqli_fetch_array($result)) {
                                                      ?>
                                                            <tr>
                                                                  <td><?php echo $row['name']; ?></td>
                                                                  <td><?php echo $row['number']; ?></td>
                                                                  <td><?php echo $row['location']; ?> </td>
                                                                  <td> <?php
                                                                        if ($row['status'] == 0) {
                                                                              echo "Payment Due &#10060;";
                                                                        } else {
                                                                              echo "Payment Cleared &#9989;";
                                                                        }
                                                                        ?>
                                                                  </td>
                                                            </tr>
                                                      <?php } ?>
                                                </tbody>
                                          </table>
                              </div>


                        </div>
                        <div class="content managerpage in-active">
                              <div class="table-contact-panel">
                                    <h3>Managers Details</h3>
                                    <table width="100%">
                                          <thead>
                                                <tr>
                                                      <td>ID</td>
                                                      <td>Name</td>
                                                      <td>Number</td>
                                                      <td>Password</td>
                                                      <td>Location</td>
                                                      <td>Delete</td>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <?php
                                                $con = mysqli_connect('localhost', 'sagar', 'Iamsagar456@');
                                                mysqli_select_db($con, 'sagar');
                                                $result = mysqli_query($con, "SELECT * FROM admintable WHERE role='manager'");
                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                      <tr>
                                                            <td><?php echo $row['admin_id']; ?></td>

                                                            <td><?php echo $row['name']; ?></td>
                                                            <td><?php echo $row['number']; ?></td>
                                                            <td><?php echo $row['password']; ?> </td>
                                                            <td><?php echo $row['location']; ?> </td>

                                                            <td>
                                                                  <form action="delete_admin.php" method="post">
                                                                        <input type="hidden" name="delete_id" value="<?php echo $row['admin_id']; ?>">
                                                                        <button type="submit" name="delete_btn" class="small_button">Delete</button>
                                                                  </form>
                                                            </td>


                                                      </tr>
                                                <?php } ?>
                                          </tbody>
                                    </table>
                              </div>
                              <div class="login-wrapper">
                                    <div class="login_body">
                                          <form class="form1" action="update_admin.php" method="POST">
                                                <p class="sign" align="center">Update Manager</p>
                                                <select class="un" name="admin_id" required><br>
                                                      <option value="" disabled selected>Choose ID</option>
                                                      <?php
                                                      include_once 'database.php';
                                                      $sql = mysqli_query($con, "SELECT * From admintable WHERE role='manager'");
                                                      $row = mysqli_num_rows($sql);
                                                      while ($row = mysqli_fetch_array($sql)) {
                                                            echo "<option value='" . $row['admin_id'] . "'>" . $row['admin_id'] . "</option>";
                                                      }
                                                      ?>
                                                </select>
                                                <br><input class="un" type="text" name="name" placeholder="Name of Manager">
                                                <input class="un" type="number" name="number" placeholder="Manager Phone Number">
                                                <input class="un" type=" password" name="password" placeholder="Manager Password">

                                                <select class="un" name="location" id="location" required>
                                                      <option value="" disabled selected>Choose new area </option>
                                                      <?php
                                                      include_once 'database.php';
                                                      $sql = mysqli_query($con, "SELECT * From area");
                                                      $row = mysqli_num_rows($sql);
                                                      while ($row = mysqli_fetch_array($sql)) {
                                                            echo "<option value='" . $row['area'] . "'>" . $row['area'] . "</option>";
                                                      }
                                                      ?>
                                                </select>
                                                <div class="login_button_body_panel">
                                                      <button class="login_button" name="update_btn">Update</button>
                                                </div><br>
                                          </form>
                                    </div>
                                    <div class="login_body">
                                          <form class="form1" action="add_admin.php" method="POST">
                                                <p class="sign" align="center">Add Manager</p>
                                                <input class="un" type="text" name="name" placeholder="Name of Manager">
                                                <input class="un" type="number" name="number" placeholder="Manager Number">
                                                <input class="un" type=" password" name="password" placeholder="Manager Password">

                                                <select class="un" name="location" id="location" required><br>
                                                      <option value="" disabled selected>Choose new area </option>
                                                      <?php
                                                      include_once 'database.php';
                                                      $sql = mysqli_query($con, "SELECT * From area");
                                                      $row = mysqli_num_rows($sql);
                                                      while ($row = mysqli_fetch_array($sql)) {
                                                            echo "<option value='" . $row['area'] . "'>" . $row['area'] . "</option>";
                                                      }
                                                      ?>
                                                </select>
                                                <div class="login_button_body_panel">
                                                      <button class="login_button" name="add_btn">ADD</button>
                                                </div><br>

                                          </form>
                                    </div>
                              </div>






                        </div>
                        <div class="content areapage in-active">
                              <div class="table-contact-panel">
                                    <h3>
                                          Avaliable Areas
                                    </h3>
                                    <table width="100%">
                                          <thead>
                                                <tr>
                                                      <td>Id</td>
                                                      <td>Area</td>
                                                      <td>Area Manager</td>


                                                </tr>
                                          </thead>
                                          <tbody>
                                                <?php
                                                $con = mysqli_connect('localhost', 'sagar', 'Iamsagar456@');
                                                mysqli_select_db($con, 'sagar');
                                                $result = mysqli_query($con, "SELECT id,area,name FROM area INNER JOIN admintable ON area.area = admintable.location");
                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                      <tr>

                                                            <td><?php echo $row['id']; ?></td>
                                                            <td><?php echo $row['area']; ?></td>
                                                            <td><?php echo $row['name']; ?> </td>
                                                      </tr>
                                                <?php } ?>
                                          </tbody>
                                    </table>
                              </div>
                        </div>
                        <div class="content paymentpage in-active">
                              <div class="table-contact-panel">
                                    <h3>Payments</h3>
                                    <table width="100%">
                                          <thead>
                                                <tr>
                                                      <td>ID</td>
                                                      <td>Customer Name</td>
                                                      <td>location</td>
                                                      <td>Number</td>
                                                      <td>Amount</td>
                                                      <td>Last payment</td>



                                                      <td>Payment Status</td>
                                                      <td>Expiry Date</td>

                                                      <td>Change status</td>

                                                </tr>
                                          </thead>
                                          <tbody>
                                                <?php
                                                $con = mysqli_connect('localhost', 'sagar', 'Iamsagar456@');
                                                mysqli_select_db($con, 'sagar');
                                                $result = mysqli_query($con, "SELECT orders.id as id ,name,location,number,total,created_at,orders.status as status FROM usertable INNER JOIN orders ON usertable.number = orders.user_number");
                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                      <tr>

                                                            <td><?php echo $row['id']; ?> </td>
                                                            <td><?php echo $row['name']; ?></td>
                                                            <td><?php echo $row['location']; ?></td>
                                                            <td><?php echo $row['number']; ?> </td>
                                                            <td><?php echo $row['total']; ?> </td>
                                                            <td><?php echo $row['created_at']; ?> </td>


                                                            <td>

                                                                  <?php
                                                                  if ($row['status'] == 0) {
                                                                        echo "Payment Due &#10060;";
                                                                  } else {
                                                                        echo "Payment Cleared &#9989;";
                                                                  }
                                                                  ?>

                                                            </td>
                                                            <td>
                                                                  <?php
                                                                  $date = $row['created_at'];
                                                                  echo date('Y-m-d', strtotime($date . ' + 30 days'));
                                                                  ?>
                                                            </td>
                                                            <td>
                                                                  <form action="change_payment.php" method="post">
                                                                        <input type="hidden" name="change_id" value="<?php echo $row['id']; ?>">
                                                                        <button class="small_button" type="submit" name="change_btn" class="btn_btn_danger btn btn-info">Disable</button>
                                                                  </form>
                                                            </td>

                                                      </tr>
                                                <?php } ?>

                                          </tbody>
                                    </table>
                              </div>

                        </div>
                  </main>
            </div>
      </body>

      </html>
<?php } else {
      header('location:adminlogin.php');
}
?>

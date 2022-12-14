<?php
include('database.php');
session_start();
?>
<?php if ($_SESSION['role'] == 'manager' || $_SESSION['role'] == 'super admin') {
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

                                                            $result = mysqli_query($con, "SELECT SUM(amount) as total FROM payment GROUP BY amount");
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
                                                                  <?php

                                                                  $con = mysqli_connect('localhost', 'sagar', 'Iamsagar456@');
                                                                  mysqli_select_db($con, 'sagar');
                                                                  $result = mysqli_query($con, "SELECT * FROM admintable WHERE role = 'manager'");
                                                                  while ($row = mysqli_fetch_array($result)) {
                                                                  ?>

                                                                        <table width="100%">
                                                                              <thead>
                                                                                    <tr>
                                                                                          <td>Manager Id</td>
                                                                                          <td> Manager Name </td>
                                                                                          <td> Location Area </td>
                                                                                    </tr>
                                                                              </thead>
                                                                              <tbody>
                                                                                    <tr>
                                                                                          <td><?php echo $row['admin_id']; ?></td>
                                                                                          <td><?php echo $row['name']; ?></< /td>
                                                                                          <td><?php echo $row['location']; ?></< /td>

                                                                                    </tr>
                                                                              </tbody>
                                                                        </table>
                                                            <?php }
                                                            endif;
                                                            ?>
                                                            </div>

                                                      </div>
                                                </div>

                                          </div>
                              </div>
                        </div>
                        <div class="content customerpage in-active">
                              <h1>Customer</h1>
                        </div>
                        <div class="content managerpage in-active">
                              <h1>Manager halne</h1>
                        </div>
                        <div class="content areapage in-active">
                              <h1>area halne</h1>
                        </div>
                        <div class="content paymentpage in-active">
                              <h1>payment halne</h1>
                        </div>
                  </main>
            </div>
      </body>

      </html>
<?php } else {
      header('location:adminlogin.php');
}

?>


<?php
//$sql = "SELECT amount,name FROM `payment`INNER JOIN usertable ON payment.user_id = usertable.id";
?>
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
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet">
      <!--link to fonts-->
      <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
      <!--for favicon-->
      <link rel="icon" type="images/logo.png" href="images/logo.png">
      <title>User-panel</title>




</head>

<body>
      <input type="checkbox" id="nav-toggle">
      <?php include './user/sidebar-user.php';?>
      <div class="main-content">
            <?php include './user/header-user.php';?>
            <main>
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


            </main>
      </div>
</body>

</html>
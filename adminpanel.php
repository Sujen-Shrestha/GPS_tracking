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
      <title>Admin-panel</title>




</head>

<body>
      <input type="checkbox" id="nav-toggle">
      <?php include './admin/sidebar.php';?>
      <div class="main-content">
            <?php include './admin/header1.php';?>
            <main>
                  <div class="cards">
                        <div class="card-single">
                              <div>
                                  <h1>54</h1>
                                  <span>Customers</span>  
                              </div>
                              <div>
                                    <span class="las la-users"></span>
                              </div>
                        </div>
                        <div class="card-single">
                              <div>
                                  <h1>79</h1>
                                  <span>Areas</span>  
                              </div>
                              <div>
                                    <span class="las la-map-marker"></span>
                              </div>
                        </div>
                        <div class="card-single">
                              <div>
                                  <h1>79</h1>
                                  <span>Managers</span>  
                              </div>
                              <div>
                                    <span class="las la-user-tie"></span>
                              </div>
                        </div>
                        <div class="card-single">
                              <div>
                                  <h1>Rs. 10,000</h1>
                                  <span>Income</span>  
                              </div>
                              <div>
                                    <span class="lab la-google-wallet"></span>
                              </div>
                        </div>

                  </div>

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
                                                            <tr>
                                                                  <td>001</td>
                                                                  <td> Sujen Shrestha </td>
                                                                  <td> Gongabu </td>
                                                            </tr>
                                                      </tbody>
                                                </table> 
                                          </div>
                                         
                                    </div>
                              </div>
                              
                        </div>
                  </div>

            </main>
      </div>
</body>

</html>
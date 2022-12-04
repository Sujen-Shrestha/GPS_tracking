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
      <?php if ($_SESSION['role'] == 'manager') : ?>
            <h1>Hello you are logged in as Admin</h1>
      <?php endif; ?>
      <input type="checkbox" id="nav-toggle">
      <div class="sidebar">
            <div class="sidebar-brand">
                  <h2><span class="las la-dumpster"></span><span>GPS tracker System</span></h2>
            </div>
            <div class="sidebar-menu">
                  <ul>
                        <li>
                              <a href="" class="active"><span class="las la-igloo" ></span><span>Dashboard</span></a>
                        </li>
                        <li>
                              <a href=""><span class="las la-users" ></span><span>Customers</span></a>
                        </li>
                        <li>
                              <a href=""><span class="las la-map-marker" ></span><span>Location</span></a>
                        </li>
                        <li>
                              <a href=""><span class="las la-user-tie" ></span><span>Managers</span></a>
                        </li>
                        <li>
                              <a href=""><span class="las la-wallet" ></span><span>Payments</span></a>
                        </li>
                        <li>
                              <a href=""><span class="las la-user-circle" ></span><span>Accounts</span></a>
                        </li>
                        <li>
                              <a href=""><span class="las la-calendar-check" ></span><span>Schedule</span></a>
                        </li>
                  </ul>
            </div>
      </div>
      <div class="main-content">
            <header1>
                <h1>
                  <label for="nav-toggle">
                        <span class="las la-bars"></span>
                  </label>
                  Dashboard
                </h1>

                <div class="search-wrapper">
                  <span class="las la-search"></span>
                  <input type="search" placeholder="search here">
                </div>

                <div class="user-wrapper">
                        <img src="images/admin.png" width="40px" height="40px" alt="admin-photo">
                        <div>
                              <h4>Super Admin</h4>
                              <small>Super admin</small>
                        </div>
                </div>
            </header1>
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
                                  <span>Projects</span>  
                              </div>
                              <div>
                                    <span class="las la-clipboard-list"></span>
                              </div>
                        </div>
                        <div class="card-single">
                              <div>
                                  <h1>123</h1>
                                  <span>Orders</span>  
                              </div>
                              <div>
                                    <span class="las la-shopping-bag"></span>
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
<!--Dashbaord ko top search ko area
Must be placed inside main-content div-->
<?php
include "./database.php";
session_start();
?>



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
    <img src="images/admin.png" width="40px" height="40px" alt="user-photo">
    <div>
      <h4> <?php echo $_SESSION['number']; ?></h4>
      <small>User</small>
     
    </div>
  </div>
</header1>
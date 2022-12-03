<!-- Upper menu-->
<div class="main_header">
  <div class="overlay fade-in"></div>
  <header>
    <nav class="header">
      <a href ="#">
        <img src = "images/logo.png" class="header_logo" alt = "Main_icon" >
        <span class="username"><?php echo $n;?></span>
      </a>

      <a id="btnHamburger" href="#" class="menu hide-for-desktop">
        <span></span>
        <span></span>
        <span></span>
      </a>

       <div class="header_links hide-for-mobile">
        
        <a href="index.php">Home</a>

        <a href="order.php">Request blood</a>

        <a href="donate.php">Donate blood</a>
        
        <a href="#">Contact</a>

        </div>

        <button type="button" class="login_button hide-for-mobile"><a href="logout.php">logout</a> </button>
      
    </nav>
  </header>
  <!--navigation for hamburger-->
  <div class="header_menu">
      <a href="#">Home</a>

      <a href="order.php">Request blood</a>

      <a href="donate.php">Donate blood</a>

      <a href="#">Contact</a>
      
      <a href="logout.php">Log out</a>
      </div>
</div>
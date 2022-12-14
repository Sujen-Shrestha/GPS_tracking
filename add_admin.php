<html>

<head>
      <?php include("database.php"); ?>

<body>

      <?php
      if ((isset($_POST)) && (!empty($_POST))) {
            $name = mysqli_real_escape_string($con, $_POST['name']);
            $number = mysqli_real_escape_string($con, $_POST['number']);
            $password = mysqli_real_escape_string($con, $_POST['password']);
            $location = mysqli_real_escape_string($con, $_POST['location']);



            $query = mysqli_query($con, "SELECT * FROM admintable WHERE number='$number' OR location = '$location'");
            if (mysqli_num_rows($query) != 0) {
      ?>
                  <script>
                        alert("Number or Area already in use");
                        window.location = 'adminpanel.php';
                  </script>

                  <?php
            } else {
                  $sql = "INSERT INTO admintable(name,number,password,location) 
      VALUES('$name','$number','$password','$location')";

                  $result = mysqli_query($con, $sql);
                  if (isset($result)) {
                  ?> <script>
                              alert("Changed Sucessfully");
                              window.location = 'adminpanel.php';
                        </script>
                  <?php
                  } else {
                  ?>
                        <script>
                              alert("Error");
                              window.location = 'adminpanel.php';
                        </script>
      <?php
                  }
            }
      }
      ?>
</body>

</html>
<html>

<head>
      <?php include("database.php"); ?>

<body>

      <?php
      if ((isset($_POST)) && (!empty($_POST))) {
            $name = mysqli_real_escape_string($con, $_POST['name']);
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $location = mysqli_real_escape_string($con, $_POST['location']);
            $latitude = mysqli_real_escape_string($con, $_POST['latitude']);
            $longitude = mysqli_real_escape_string($con, $_POST['longitude']);
            $password = mysqli_real_escape_string($con, $_POST['password']);
            $id = mysqli_real_escape_string($con, $_POST['id']);




            $query = mysqli_query($con, "SELECT * FROM usertable WHERE email= '$email'");
            if (mysqli_num_rows($query) != 0) {
      ?>
                  <script>
                        alert("Email already in use!!!");
                        window.location = 'main.php';
                  </script>';
            <?php
            } else {
                  $sql = "UPDATE usertable SET name = '" . $name . "', email = '" . $email . "', location = '" . $location . "', latitude='" . $latitude . "',longitude='" . $longitude . "',password = '" . $password . "' 
                 WHERE id = '$id' ";
                  mysqli_query($con, $sql);
           ?>
                  <script>
                  alert("User details Updated.....");
                  window.location = 'main.php';
            </script>';
            <?php 
            }
      } else {
            ?>
            <script>
                  alert("Error");
                  window.location = 'main.php';
            </script>';

      <?php
      }
      ?>


</body>

</html>
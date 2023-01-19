<html>

<head>
      <?php include("database.php"); ?>

<body>

      <?php
      if ((isset($_POST)) && (!empty($_POST))) {
            $admin_id = mysqli_real_escape_string($con, $_POST['admin_id']);
            $name = mysqli_real_escape_string($con, $_POST['name']);
            $number = mysqli_real_escape_string($con, $_POST['number']);
            $password = mysqli_real_escape_string($con, $_POST['password']);
            $location = mysqli_real_escape_string($con, $_POST['location']);


            $query = mysqli_query($con, "SELECT * FROM admintable WHERE number='$number' OR admin_id= '$admin_id'");
            if (mysqli_num_rows($query) != 0) {
      ?>
                  <script>
                        alert("Number already in use");
                        window.location = 'adminpanel.php';
                  </script>';
            <?php
            } else {
                  $sql = "UPDATE admintable SET name = '" . $name . "', number = '" . $number . "', password = '" . $password . "', location='" . $location . "' WHERE role = 'manager' AND admin_id = '" . $admin_id . "' ";
                  mysqli_query($con, $sql);
                  echo "Sucessfuly updated";
            }
      } else {
            ?>
            <script>
                  alert("Error");
                  window.location = 'adminpanel.php';
            </script>';

      <?php
      }
      ?>


</body>

</html>
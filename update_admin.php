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


            $sql = "UPDATE admintable SET name = '" . $name . "', number = '" . $number . "', password = '" . $password . "', location='" . $location . "' WHERE role = 'manager'";

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

      ?>
</body>

</html>
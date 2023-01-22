<html>

<head>
      <?php include("database.php"); ?>

<body>

      <?php
      if (isset($_POST['insert_btn'])){
            $date = mysqli_real_escape_string($con, $_POST['date']);
            $msg = mysqli_real_escape_string($con, $_POST['msg']);
            $location = mysqli_real_escape_string($con, $_POST['location']);
            $title = mysqli_real_escape_string($con, $_POST['title']);

            $query = mysqli_query($con, "SELECT * FROM schedule WHERE date='$date' AND location = '$location'");
            if (mysqli_num_rows($query) != 0) {
      ?>
                  <script>
                        alert("Cant do that!!!!");
                        window.location = 'managerpanel.php';
                  </script>

                  <?php
            } else {
                  $sql = "INSERT INTO schedule(date,msg,location,title) 
      VALUES('$date','$msg','$location','$title')";
                  $result = mysqli_query($con, $sql);
                  if (isset($result)) {
                  ?> <script>
                              alert("Updated sucessfully");
                              window.location = 'managerpanel.php';
                        </script>
                  <?php
                  } else {
                  ?>
                        <script>
                              alert("Error");
                              window.location = 'managerpanel.php';
                        </script>
      <?php
                  }
            }
      }
      ?>
</body>

</html>
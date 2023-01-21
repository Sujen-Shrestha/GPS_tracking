<?php
session_start();
include 'database.php';
if (isset($_POST['delete_btn'])) {
      $id = $_POST['delete_id'];
      $query = "Delete from usertable WHERE id = $id";
      $query_run = mysqli_query($con, $query);

      if ($query_run) {
?>
            <script>
                  alert('Request rejected');
                  window.location.href = 'managerpanel.php';
            </script>
      <?php

      } else {
      ?>
            <script>
                  alert('Error');
                  window.location.href = 'managelpanel.php';
            </script>
<?php
      }
}
?>


<?php
session_start();
include 'database.php';
if (isset($_POST['mail_btn'])) {
      $id = $_POST['change_id'];
      $query = "UPDATE usertable set status = 1 WHERE id = $id";
      $query_run = mysqli_query($con, $query);

      if ($query_run) {
?>
            <script>
                  alert('Account Activated');
                  window.location.href = 'managerpanel.php';
            </script>
      <?php

      } else {
      ?>
            <script>
                  alert('Error');
                  window.location.href = 'managerpanel.php';
            </script>
<?php
      }
}
?>
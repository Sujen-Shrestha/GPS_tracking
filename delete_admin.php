<?php
include 'database.php';
if (isset($_POST['delete_btn'])) {
      $id = $_POST['delete_id'];
      $query = "DELETE FROM `admintable` WHERE admin_id='$id' ";
      $query_run = mysqli_query($con, $query);

      if ($query_run) {
?>
            <script>
                  alert('successfully deleted');
                  window.location.href = 'adminpanel.php?success';
            </script>
      <?php

      } else {
      ?>
            <script>
                  alert('Error');
                  window.location.href = 'adminpanel.php?success';
            </script>
<?php
      }
}
?>
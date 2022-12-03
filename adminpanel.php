<?php
include('database.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>

<body>
      <h1>Hello</h1>

      <?php if ($_SESSION['role'] == 'manager') : ?>
            <h1>Hello you are logged in as Admin</h1>
      <?php endif; ?>

</body>

</html>
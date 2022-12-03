<?php
$db_host = 'localhost';
$db_user = 'sagar';
$db_pass = 'Iamsagar456@';
$db_name = 'sagar';


$con = mysqli_connect($db_host, $db_user, $db_pass);


if (!$con) {
      die("Database conn Failed" . mysqli_error($con));
}

$select_db = mysqli_select_db($con, $db_name);

if(!$select_db) {
      die("Database Selection Failed" . mysqli_error($con));
}
?>
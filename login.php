<?php
ini_set('display_errors', 0);
ini_set('display_notice', 0);

session_start();
$con = mysqli_connect('localhost', 'sagar', 'Iamsagar456@');
mysqli_select_db($con, 'sagar');
$number = $_POST['number'];
$password = $_POST['password'];
$status = $_POST['status'];

//$pass = md5($password);

$query = mysqli_query($con, "select * from usertable where number = '$number' and password = '$password' and status = 1");

if (mysqli_num_rows($query) != 0) {
      session_start();
      $_SESSION['ID'] = $id;
      $_SESSION['number'] = $number;
      header('location:main.php');
} else {
      header('location:index1.php?error=invaliduid');
}
?>
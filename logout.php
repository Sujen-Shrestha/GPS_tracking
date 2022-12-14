<?php
session_start();
unset($_SESSION["ID"]);
session_destroy();
header("Location:index1.php");
?>
<?php 
session_start();
unset($_SESSION['instituteName']);
session_destroy();
header("location:admin_login");

?>
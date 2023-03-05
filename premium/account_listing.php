<?php 

session_start();
session_destroy();
unset($_SESSION['instituteName']);

header("location:upgrade_account");


?>
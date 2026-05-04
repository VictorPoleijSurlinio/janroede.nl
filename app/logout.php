<?php
include __DIR__."/inc/config.inc.php";

session_start();
unset($_SESSION['app_'.$branchSessionVar.'_logged_in']);
unset($_SESSION['app_'.$branchSessionVar.'_user']);
unset($_SESSION['app_'.$branchSessionVar.'_level']);
header('location:'. SITE_URL.'login/');
?>
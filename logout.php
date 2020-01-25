<?php
    session_start();
    unset($_SESSION['name']);
    unset($_SESSION['admin_name']);
    unset($_SESSION['admin_aadhar']);
    unset($_SESSION['kcc']);
    unset($_SESSION['trader_name']);
    unset($_SESSION['trader_aadhar']);
    session_destroy();
    header("location:index.php");
?>


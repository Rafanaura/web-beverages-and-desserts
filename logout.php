<?php 
    session_start();
    unset($_SESSION['id']);
    unset($_SESSION['email']);
    unset($_SESSION['full_name']);
    unset($_SESSION['status_login']);
    header("location: index.php");
?>
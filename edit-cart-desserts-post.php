<?php
    session_start();
    
    $_SESSION['cart'][intval($_POST['id'])]['qty']=$_POST['jumlah_beli'];
    header('location: cartdesserts.php');
?>
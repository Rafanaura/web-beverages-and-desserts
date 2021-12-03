<?php 
session_start();
    if($_POST){
        include "connection.php";
        
        $qry_get_makanan=mysqli_query($conn,"select * from makanan where id_makanan = '".$_POST['id_makanan']."'");
        $dt_makanan=mysqli_fetch_array($qry_get_makanan);
            $_SESSION['cart'][]=array(
                'id_makanan'=>$dt_makanan['id_makanan'],
                'nama_makanan'=>$dt_makanan['nama_makanan'],
                'qty'=>$_POST['jumlah_beli'],
                'harga'=>$dt_makanan['harga']
            );
                }
    header('location: cartdesserts.php');
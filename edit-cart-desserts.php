<?php
        session_start();
        include "header.php";
        include "connection.php";

        $id = $_GET['id'];
        $session_makanan=$_SESSION['cart'][$id];
        $id2=$session_makanan['id_makanan'];
        $qry_ubah=mysqli_query($conn,"select * from makanan where id_makanan=".$id2);
        $dt_makanan=mysqli_fetch_array($qry_ubah);
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
        background-image: url("image/bghome.jpg");
    }
    td{
        color:white;
    }
    .orderbutton{
        width: 100px;
        height: 50px;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        font-size: 20px;
        background-color: black;
        border-radius: 20px;
        color: white;
        border-color: transparent;
        box-shadow: 3px 3px 10px #333;
        align-items:center;
    }
    
    </style>
<h3 align="center">Update Desserts</h3>
         <form action="edit-cart-desserts-post.php" method="post">
            <input type="hidden" name="id" value="<?=$id?>">
            <table class="tabel">
                <thead>
                    <tr>
                        <td>Nama Makanan : </td><td><?=$dt_makanan['nama_makanan']?></td>
                    </tr>
                    <tr>
                        <td>Harga Awal</td><td><?=$dt_makanan['harga']?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Beli</td><td><input type="number" name="jumlah_beli" value="jumlah_beli"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="orderbutton" type="submit" value="Change"></td>
                    </tr>
                </thead>
                </table>
        
                <script
                    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
                    crossorigin="anonymous"></script>
        </body>
</html>
        
    
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
    td, thead, h2{
        text-align:center;
        color:white;
    }
   
   a{
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
<h2>Histori Pembelian Makanan</h2>
<table class="table table-hover table-striped">

 <thead>
 
        <th>NO</th>
        <th>Nama Makanan</th>
        <th>Tanggal Beli</th>
        <th>Tanggal Datang</th>
        <th>Status</th>
        <th colspan="2">Aksi</th>
    </thead>
    <tbody>
        <?php 
        include "connection.php";
        $qry_histori=mysqli_query($conn,"select * from pembelian_makanan order by id_pembelian_makanan desc");
        $no=0;
        while($dt_histori=mysqli_fetch_array($qry_histori)){
            $no++;
            
            //menampilkan comic yang dibeli
            $makanan_dibeli="<ol>";
            $qry_makanan=mysqli_query($conn,"select * from  detail_pembelian_makanan join makanan on makanan.id_makanan=detail_pembelian_makanan.id_makanan where id_pembelian_makanan = '".$dt_histori['id_pembelian_makanan']."'");
            while($dt_makanan=mysqli_fetch_array($qry_makanan)){
                $makanan_dibeli.=$dt_makanan['nama_makanan'];
            }
            $makanan_dibeli.="</ol>";
            //menampilkan status sudah dibeli atau belum
            $qry_cek_datang=mysqli_query($conn,"select * from kedatangan_makanan where id_pembelian_makanan = '".$dt_histori['id_pembelian_makanan']."'");
            if(mysqli_num_rows($qry_cek_datang)>0){
                $dt_beli=mysqli_fetch_array($qry_cek_datang);
                $status_datang="<label class='alert alert-success'>Sudah datang <br></label>";
                $button_datang="";
            } else {
                $status_datang="<label class='alert alert-danger'>Belum datang</label>";
                $button_datang="<a href='datang-makanan.php?id=".$dt_histori['id_pembelian_makanan']."' class='btn btn-warning' onclick='return confirm(\"apakah anda yakin makanan sudah datang?\")'>Konfirmasi</a>";
            }
        ?>
        <tr>
            <td ><?=$no?></td>
            <td style = "text-align: center;"><?=$makanan_dibeli?></td>
            <td style = "text-align: center;"><?=$dt_histori['tanggal_beli']?></td>
            <td style = "text-align: center;"><?=$dt_histori['tanggal_kedatangan']?></td>
            <td style = "text-align: center;"><?=$status_datang?></td>
            <td style = "text-align: center;"><a href="upload.php?id=<?php echo $dt_histori['id_pembelian_makanan'] ?>" target="_blank" class="btn btn-sm btn-secondary">Upload</a></td>
            <td><?=$button_datang?></td>            
        </tr>
        <?php
        }
        ?>
</tbody>
    </table>


    <script>
        window.print()
        </script>
        <a href="upload.php">Upload</a>
        
</html>

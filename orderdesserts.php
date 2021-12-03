<?php 
    include "connection.php";
    $qry_detail_makanan=mysqli_query($conn,"select * from makanan where id_makanan = '".$_GET['id_makanan']."'");
    $dt_makanan=mysqli_fetch_array($qry_detail_makanan);
    
?>
<h2>Order Desserts</h2>
<hr>
<style>
    body{
        background-image: url("image/bghome.jpg");
    }
    h2{
        color:white;
    text-align:center;
    font-size:30px;
    font-family:Arial, Helvetica, sans-serif;
    }
    img{
        width:380px;
        height:350px;
        padding-top:50px;
        align-items:center;
        justify-content:center;
    }
    .tabel{
        align-items:center;

    }
    thead td{
        color:white;
        padding-top:15px;
        font-family:'Times New Roman', Times, serif;
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
<div class="row">
    <div class="col-md-4">
        <img src="desserts/<?=$dt_makanan['foto_makanan']?>" class="card-img-top">
    </div>
    <div class="col-md-8">
        <form action="masukkankeranjang-desserts.php" method="post">
        <input type="hidden" name="id_makanan" value="<?=$dt_makanan['id_makanan']?>">"
        
            <table class="tabel">
                <thead>
                    <tr>
                        <td>Nama Makanan : </td><td><?=$dt_makanan['nama_makanan']?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Beli</td><td><input type="number" name="jumlah_beli" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="orderbutton" type="submit" value="Order"></td>
                    </tr>
                </thead>
                </table>
        </form>
    </div>
</div>


<?php 
    include "connection.php";
    session_start();
   
?>
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
    .tabel{
        align-items:center;

    }
    thead tr{
        color:white;
        padding-top:15px;
        font-family:'Times New Roman', Times, serif;
    }
    tbody tr{
        color:white;
        padding-top:15px;
        font-family:'Times New Roman', Times, serif;
    }
    .orderbutton{
        width: 250px;
        height: 150px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    font-size: 20px;
    background-color: black;
    border-radius: 20px;
    color: white;
    border-color: transparent;
    box-shadow: 3px 3px 10px #333;
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
    }
</style>
<h2>Daftar Makanan di Keranjang</h2>
<table class="tabel">
    <thead>
        <tr>
            <th>NO</th>
            <th>Nama Makanan</th>
            <th>Jumlah Beli</th>
            <th>Harga Awal</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
      
 foreach (@$_SESSION['cart'] as $key_produk => $val_produk): 
    ?>
 <tr>
<td><?=($key_produk+1)?></td>
<td><?=$val_produk['nama_makanan']?></td>
<td><?=$val_produk['qty']?></td>
<td><?=$val_produk['harga']?></td>
<td><?=$val_produk['harga']*$val_produk['qty']?></td>
<td style="text-align: right;"><a href="edit-cart-desserts.php?id=<?=$key_produk?>" class="btn btn-success">Edit</a></td>
            <td ><a href="hapus_cart_desserts.php?id=<?=$key_produk?>" class="btn btn-danger">Delete</a></td>

 </tr>

 <?php endforeach ?>
 </tbody>
</table>
<a href="desserts.php" >See Menu</a>
<a href="checkout-desserts.php" class="btn btn-primary">Check Out</a>

    </tbody>
</table>
</div>
        </body>
        </html>
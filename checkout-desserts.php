<?php 
    session_start();
    include "connection.php";
    $cart=@$_SESSION['cart'];
    if(count($cart)>0){
        $lama_perjalanan=3; //satuan hari

        $tgl_harus_datang=date('Y-m-d',mktime(0,0,0,date('m'),(date('d')+$lama_perjalanan),date('Y')));

        $qry1=mysqli_query($conn,"insert into pembelian_makanan (id_user, tanggal_beli, tanggal_kedatangan) value('".$_SESSION['id_user']."','".date('Y-m-d')."','".$tgl_harus_datang."')");

        $id=mysqli_insert_id($conn);
        foreach ($cart as $key_produk => $val_produk) {
            $qry2=mysqli_query($conn,"insert into detail_pembelian_makanan(id_pembelian_makanan, id_makanan, qty) value('".$id."','".$val_produk['id_makanan']."','".$val_produk['qty']."')");

        }
        unset($_SESSION['cart']);
        echo '<script>alert("Anda berhasil membeli makanan");location.href="histori_pembelian_makanan.php"</script>';
    }
?>

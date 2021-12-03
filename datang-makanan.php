<?php 
if($_GET['id']){
    include "connection.php";
    $id_pembelian_makanan=$_GET['id'];
    $cek_terlambat=mysqli_query($conn, "select * from pembelian_makanan where id_pembelian_makanan = '".$id_pembelian_makanan."' ");
    $dt_beli=mysqli_fetch_array($cek_terlambat);
    if(strtotime($dt_beli['tanggal_kedatangan'])>=strtotime(date('Y-m-d'))){
        $hutang=0;
    } else{
        $harga_hutang_perhari=5000;
        $tanggal_datang = new DateTime();
        $tgl_harus_datang = new DateTime($dt_beli['tanggal_kedatangan']); 
        $selisih_hari = $tanggal_datang->diff($tgl_harus_datang)->d;
        $hutang=$selisih_hari*$harga_hutang_perhari;

    }
    mysqli_query($conn, "insert into kedatangan_makanan (id_pembelian_makanan, tanggal_kedatangan, hutang) value('".$id_pembelian_makanan."','".date('Y-m-d')."', '".$hutang."')");
    header('location: histori_pembelian_makanan.php');
}
?>

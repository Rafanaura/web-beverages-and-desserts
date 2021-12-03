<?php
include "connection.php";
	if($_POST){
		$nama_makanan = $_POST['nama_makanan'];

		//mulai upload file
        $nama = $_FILES['file']['name'];
		$ukuran	= $_FILES['file']['size'];
		$file_tmp = $_FILES['file']['tmp_name'];
		//akhir upload file
		
        if(empty($nama_makanan)){
			echo "<script>alert('nama makanan tidak boleh kosong');location.href='upload.php';</script>";
        }else{
			include "connection.php";
			
			
			//mulai upload file
            move_uploaded_file($file_tmp, 'uploads/'.$nama);
            $insert=mysqli_query($conn,"insert into bukti (nama_makanan, foto_makanan) value ('".$nama_makanan."', '".$nama."')");
			//akhir upload file
			
			if($insert){
				echo "<script>alert('Sukses menambahkan dokumen');location.href='histori_pembelian_makanan.php';</script>";
			} else {
				echo "<script>alert('Gagal menambahkan dokumen');location.href='upload-proses.php';</script>";
			}
		}		
	}
?>
</html>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Upload Bukti Pembayaran Disini : </h1>
    <form action="upload-proses.php" method="post" enctype="multipart/form-data">
	<div class="table-responsive">
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<div class="mb-3 row">
    			<td><label class="col-sm-2 col-form-label">Nama Makanan</label></td>
    			<div class="col-sm-10" style="background: ">
     			<td><input type="text" name="nama_makanan" placeholder="Masukkan Nama Makanan" class="form-control"></td>
				</div>
			</div>
			</tr>
		
			<tr>
				<div class="mb-3 row">
				<td><label class="col-sm-2 col-form-label">Foto</label></td>
				<td><input class="form-control" name="file" type="file" id="formFile"></td>
				</div>
			</tr>
			<tr>
				<td colspan="4"><input type="submit"  class="btn btn-secondary" value="SUBMIT" style="background: #753422; color:#FFEBC9"></td>
			</tr>
		</thead>
	</table>
	</div>
	</div>
</form>
</body>
</html>
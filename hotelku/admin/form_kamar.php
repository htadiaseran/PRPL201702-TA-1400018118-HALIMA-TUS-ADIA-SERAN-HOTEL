<?php
include 'reservasi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/bootstrap.css" rel="stylesheet">
	  <link rel="stylesheet/less" type="text/css" href="js/bootswatch.less" />
		<link rel="stylesheet/less" type="text/css" href="js/variables.less" />

</head>
<style type="text/css">

    body { 
  background-color: lightblue;
  text-align: center;
  font-size: 20px;
}

div.ex
{
width: 220px;
padding: 10px;
border: 5px kelabu;
margin: 0px;
}
</style>
<body>

</body>
</html>
<?php include "header.php";?>
<div class="container">
	<div class="content">
	<div class="col-md-4 col-md-offset-4">

<h2 class="center">INPUT DATA KAMAR</h2>
<form action="proses.php?aksi=inputMobil" method="POST"  enctype="multipart/form-data">
<table>
	<tr>
		<td>
 		<div class="form-group">
		<div class="col-dm-4">
		<input  class="form-control type="text" name="kode_kmr" placeholder="Kode Kamar" required>
</div>
</div>

		</td>
	</tr>
	<tr>
		<td>
		<div class="form-group">
		<div class="col-dm-4">
		<input  class="form-control type="text" name="nama_kmr" placeholder="Nama Kamar" required>
		</div>
		</div>
		</td>
	</tr>
	<tr>
		<td>
		<div class="form-group">
		<div class="col-dm-4">
		<input  class="form-control type="text" name="fasilitas" placeholder="Fasilitas Kamar" required>
		</div>
		</div>
		</td>
	</tr>
	
	
	<td>
		<div class="form-group">
		<div class="col-dm-4">
		<input  class="form-control type="text" name="Harga" placeholder="Harga" required>
		</div>
		</div>
		</td>
	</tr>
	<tr>
		<div class="form-group">
		<div class="col-dm-4">
		<td>Upload Gambar </td>
		</div>
	</div>
	</tr>
	<tr>

		<td>
		<div class="form-group">
		<div class="col-dm-4">
		<input  type="file" name="gambar">
		</div>
		</div>
		</td>
	</tr>
	<tr>

		<td>
		<div class="form-group">
		<div class="col-dm-4">
		<input class="btn btn-sm btn-primary" type="submit" name="aksi " value="simpan">
		</div>
		</div>
		</td>
	</tr>
</table>

</form>
		</div>
	</div>
</div>
</form>

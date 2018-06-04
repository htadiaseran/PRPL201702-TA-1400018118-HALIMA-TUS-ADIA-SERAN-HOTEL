<?php
include "koneksi.php";
include 'reservasi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="css/bootstrap.css" rel="stylesheet">
	  <link rel="stylesheet/less" type="text/css" href="js/bootswatch.less" />
		<link rel="stylesheet/less" type="text/css" href="js/variables.less" />
</head>
<style type="text/css">

	body { 
  background-color: lightblue;
  text-align:;
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
<?php include "header.php" ?>
<div class="container">

		<section class="col-lg-12">
			<h3>Daftar Reservasi</h3>
			<hr/>
			
			<a href="formboking.php" title="Tambah data" class="btn btn-primary btn-sm">Add <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a><br><br>
			<table class="table table-striped table-hover" >
				<tr align="center">
					<th>NO</th>
					<th>No Reservasi </th>
					<th>Nama</th>
					<th>Email</th>
					<th>No. Telp</th>
          <th>Kode Kamar</th>
          <th>Nama Kamar</th>
          <th>Tanggal Booking</th>
          <th>Tanggal Cek Out</th>
          <th>Total Harga</th>
					<th>AKSI</th>
				</tr>
				<?php
				$no=1;
				foreach ($dbc->tampilReservasi() as $x)
				{
				?>
				<tr>
					<td><?php echo $no++;?></td>
					<td><?php echo $x['no_reservasi'];?></td>
					<td><?php echo $x['nama_plg'];?></td>
					<td><?php echo $x['email'];?></td>
          <td><?php echo $x['no_hp'];?></td>
          <td><?php echo $x['kode_kamar'];?></td>
          <td><?php echo $x['nama_kamar'];?></td>
          <td><?php echo $x['tgl_booking'];?></td>
					<td><?php echo $x['tgl_out'];?></td>
					<td><?php echo $x['harga'];?></td>

					<td>
						<a href="edit_sewa.php?id=<?php echo $x['id'];?>" title="Edit data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
						<a href="hapus_sewa.php?id=<?php echo $x['id'];?>"  title="Hapus data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

					</td>
				</tr>
				<?php
				}
				?>
			</table>
		</section>
</div>
<script src="js/less.min.js" type="text/javascript"></script>
</body>
</html>

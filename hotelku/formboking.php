<script language='javascript'>
function validAngka(a)
{
    if(!/^[0-9.]+$/.test(a.value))
    {
    a.value = a.value.substring(0,a.value.length-1000);
    }
}
</script>


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

<?php include "header.php";?>
<div class="container">
	<div class="content">

	<h2 >INPUT DATA RESERVASI</h2>
  <table  class="table table-striped table-bordered table-hover">
<form action="proses.php?aksi=inputReservasi" method="POST">
<tr>
    <td>  Nomor Reservasi :</td><td><input class="form-control" type="text" name="no_reservasi"  
    required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"></td>
  </tr> 
<tr>
    <td>  Nama Pelanggan:</td><td><input class="form-control" type="text" name="nama_plg"  
    required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"></td>
  </tr>  <tr>
<td>Email :</td><td><input class="form-control" type="email" name="email"
 required oninvalid="this.setCustomValidity('Mohon masukan email dengan @ dan . example : example@gmail.com')" 
 oninput="setCustomValidity('')" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" 
 oninput="setCustomValidity('')"></td>
</tr><tr>
<td>  No. Hp :</td><td><input class="form-control" type="text" name="no_hp" onkeyup="validAngka(this)"  
required oninvalid="this.setCustomValidity('data tidak boleh kosong dan data harus berupa angka')" 
oninput="setCustomValidity('')"></td>
</tr><tr>
<td>  Kode Kamar :</td><td><input class="form-control" type="text" name="kode_kamar"  
required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"></td>
</tr>
<tr>
<td>  Nama Kamar :</td><td><input class="form-control" type="text" name="nama_kamar"  
required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"></td>
</tr><tr>
<td>  Tanggal Booking :</td><td><input class="form-control" type="date" name="tgl_booking" placeholder="dd/mm/yyyy" 
required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"></td>
</tr><tr>
<td>  Tanggal Cek Out :</td><td><input class="form-control" type="date" name="tgl_out" placeholder="dd/mm/yyyy" 
required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"></td>
</tr><tr>
<td>  Harga :</td><td><input class="form-control" type="text" name="harga" onkeyup="validAngka(this)" 
required oninvalid="this.setCustomValidity('data tidak boleh kosong dan harus berupa angka')" oninput="setCustomValidity('')"></td>
</tr>
<table class="table table-hover">
<tr><td><input type="submit" name="submit" value="SIMPAN" class="btn btn-primary"/></td></tr>
</table>
</form>
		</div>
	</div>
</div>
</body>
</html>

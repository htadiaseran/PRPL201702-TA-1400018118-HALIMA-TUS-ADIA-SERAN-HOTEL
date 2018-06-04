<?php
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
<?php
include 'header.php';
require 'koneksi.php';
$kode_kmr=$_GET['kode_kmr'];
        $query1=mysql_query("SELECT * FROM `kamar` where kode_kmr='$kode_kmr'");

        while ($data = mysql_fetch_array($query1)) {
            
            $jenis_kmr=$data['jenis_kmr'];
            $spek=$data['spek'];
            $harga=$data['harga'];
            $file=$data['file'];
        }
?>
<table><br>
<tr>   
  <td>
    <td><img alt="gambar1" src="<?php echo $file;?>" height="180" width="290" title="Suite "/></td>    
    <td class="border"><b><div style="text-align:top"><font face="Century Gothic" color="#A52A2A">
    Kode Kamar : <?php echo $kode_kmr;?></br>
Nama Kamar : <?php echo $jenis_kmr;?></br>
Fasilitas : <?php echo $spek;?></br><br>
<center>Harga :</center>
Rp. <?php echo $harga;?>/Hari *</i></br>
</font></div></b>
</td>
<td class="transaksi"><b><div style="text-align:top"><font face="Century Gothic" color="#A52A2A">
    Apakah Anda ingin membooking ?</br><br>
    <a href="formboking.php?><?php echo $kode_kmr;?>"><button type="button" class="btn btn-danger">YA</button></a>
    <a href="tampil_kmr.php"><button type="button" class="btn btn-danger" style="margin-left:10px;">TIDAK</button></a></font></div></b>
 </br>
 </td>

</tr>

</table><br>

</div>

</body>
</html>

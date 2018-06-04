<?php
include "koneksi.php";
include "reservasi.php";
$aksi = $_GET['aksi'];
if($aksi == "inputReservasi"){
	$dbc->inputReservasi($_POST['no_reservasi'],$_POST['nama_plg'],$_POST['email'],$_POST['no_hp'],$_POST['kode_kamar'],$_POST['nama_kamar'],$_POST['tgl_booking'],$_POST['tgl_out'],$_POST['harga']);
	header("location:tampil_sewa.php");
}


?>

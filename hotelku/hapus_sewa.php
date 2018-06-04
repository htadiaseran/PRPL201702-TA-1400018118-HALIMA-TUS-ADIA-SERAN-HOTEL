<?php
include "reservasi.php";
include 'koneksi.php';
$dbc = new Reservasi('localhost','root','','reservasi');
$id = $_GET['id'];
$dbc->hapusReservasi($id);
header("location:tampil_sewa.php");
?>

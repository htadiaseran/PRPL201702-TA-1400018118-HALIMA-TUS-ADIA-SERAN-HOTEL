<?php
include "rentalmobil.php";
include 'koneksi.php';
$dbc = new Rentalmobil('localhost','root','','rentalmobil');
$id = $_GET['id'];
$dbc->hapusSopir($id);
header("location:tampil_sopir.php");
?>

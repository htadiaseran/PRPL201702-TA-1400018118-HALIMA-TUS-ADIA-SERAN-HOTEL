<?
session_start();
?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">HOTEL KU</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="tampil_kmr.php">Data Kamar</a></li>
        <li><a href="form_kamar.php">Input Kamar</a></li>
        <li><a href="tampil_sewa.php">Data Reservasi</a></li>
         <li><a href="formboking.php">Form Reservasi</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" >
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
      </form>
      <ul class="nav navbar-nav navbar-right">

        <li><a href="Login.php"><span class="glyphicon glyphicon-log-out"> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php 
function cariSewa($key){
  $data  = array();
  $query = "SELECT *FROM sewa WHERE nama LIKE '%$key%'
  or email LIKE '%$key%'
  or no_telp LIKE '%$key%'
  or kode_mobil LIKE '%$key%'
  or merek_mobil LIKE '%$key%'
  or tglbok LIKE '%$key%'
  or tgl_kem LIKE '%$key%'
  or harga LIKE '%$key%'";  
  $sql = $this->dbc->query($query);
  while ($d =mysqli_fetch_array($sql) ){
    $data[] = $d; 
  }
  return $data;
}
?>
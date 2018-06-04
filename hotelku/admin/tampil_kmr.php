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
<?php include "header.php" ?>
<div class="container">

		<section class="col-lg-12">

<table align="center">
    <tr>
    <?php
        require 'koneksi.php';
        $query1=mysql_query("SELECT * FROM `kamar` where baris=1");

        while ($data = mysql_fetch_array($query1)) {
            $kode_kmr=$data['kode_kmr'];
            $nama_kmr=$data['jenis_kmr'];
            $spek=$data['spek'];
            $harga=$data['harga'];
            $file=$data['file'];
            if ($data['status']==1) {
                $disable="disabled";
            }
            else $disable=" ";
        ?>
        <td><br><center><img alt="Suite" src="<?php echo $file;?>" height="120" width="200" title="Suite I"/><br>
    
        <b><div style="text-align:center"><font face="Century Gothic" color="#A52A2A" >Kode Kamar : <?php echo $kode_kmr;?> </br>
        Nama Kamar : <?php echo $nama_kmr;?> </br>
        <?php echo $harga;?>/12 Jam</br>
        <a href="detail.php?kode_kmr=<?php echo $kode_kmr;?>"><button type="button" class="btn btn-danger" <?php echo $disable;?>>Detail</button></font></div></b>
        
        <?php
            }
        ?>
        </td>
    </tr>

       <tr>
    <?php
       
        $query2=mysql_query("SELECT * FROM `kamar` where baris=2");

        while ($data = mysql_fetch_array($query2)) {
           $kode_kmr=$data['kode_kmr'];
            $jenis_kmr=$data['jenis_kmr'];
            $spek=$data['spek'];
            $harga=$data['harga'];
            $file=$data['file'];
            if ($data['status']==1) {
                $disable="disabled";
            }
            else $disable=" ";

        ?>
        <td><br><center><img alt="suite2" src="<?php echo $file;?>" height="120" width="200" title="uite II"/><br>
    
        <b><div style="text-align:center"><font face="Century Gothic" color="#A52A2A">Kode Kamar : <?php echo $kode_kmr;?> </br>
        Nama Kamar : <?php echo $jenis_kmr;?> </br>
        <?php echo $harga;?>/12 Jam</br> 
        <a href="detail.php?kode_kmr=<?php echo $kode_kmr;?>"><button type="button" class="btn btn-danger" <?php echo $disable;?>>Detail</button></font></div></b>
        
        <?php
            }
        ?>
        </td>
    </tr>

    <tr>
    <?php
       
        $query3=mysql_query("SELECT * FROM `kamar` where baris=3");

        while ($data = mysql_fetch_array($query3)) {
           $kode_kmr=$data['kode_kmr'];
            $jenis_kmr=$data['jenis_kmr'];
            $spek=$data['spek'];
            $harga=$data['harga'];
            $file=$data['file'];
            if ($data['status']==1) {
                $disable="disabled";
            }
            else $disable=" ";

        ?>
        <td><br><center><img alt="xenia" src="<?php echo $file;?>" height="120" width="200" title="Xenia Red"/><br>
    
        <b><div style="text-align:center"><font face="Century Gothic" color="#A52A2A">Kode Kamar : <?php echo $kode_kmr;?> </br>
        Nama Kamar : <?php echo $jenis_kmr;?> </br>
        <?php echo $harga;?>/24 Jam</br>
        <a href="detail.php?kode_kmr=<?php echo $kode_kmr;?>"><button type="button" class="btn btn-danger" <?php echo $disable;?>>Detail</button></font></div></b>
        
        <?php
            }
        ?>
        </td>
    </tr>
     <tr>
    <?php
       
        $query3=mysql_query("SELECT * FROM `kamar` where baris=4");

        while ($data = mysql_fetch_array($query3)) {
           $kode_kmr=$data['kode_kmr'];
            $jenis_kmr=$data['jenis_kmr'];
            $spek=$data['spek'];
            $harga=$data['harga'];
            $file=$data['file'];
            if ($data['status']==1) {
                $disable="disabled";
            }
            else $disable=" ";

        ?>
        <td><br><center><img alt="xenia" src="<?php echo $file;?>" height="120" width="200" title="Xenia Red"/><br>
    
        <b><div style="text-align:center"><font face="Century Gothic" color="#A52A2A">Kode Kamar : <?php echo $kode_kmr;?> </br>
        Nama Kamar : <?php echo $jenis_kmr;?> </br>
        <?php echo $harga;?>/24 Jam</br>
        <a href="detail.php?kode_kmr=<?php echo $kode_kmr;?>"><button type="button" class="btn btn-danger" <?php echo $disable;?>>Detail</button></font></div></b>
        
        <?php
            }
        ?>
        </td>
    </tr>


</table><br>


</div>

</body>
</html>

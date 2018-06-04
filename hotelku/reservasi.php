<?php 
$dbc = new Reservasi('localhost','root','','reservasi');
class Reservasi{

private $dbc;

public function __construct($host,$username,$password,$db){
	$this->dbc = new mysqli($host,$username,$password,$db);

	if($this->dbc->connect_error){
		die("Koneksi databse error".$this->dbc->connect_error);
	}
}


	function hapusReservasi($id){
	$query = "DELETE FROM reservasi WHERE id= $id";
	$sql=$this->dbc->query($query);
}

function tampilKamar(){
	$data  = array();
	$query = "SELECT *FROM kamar";
	$sql = $this->dbc->query($query);

	while ($d =mysqli_fetch_array($sql) ){
		$data[] = $d;
	}
	return $data;

}


//SEWA
function inputReservasi($no_reservasi,$nama_plg,$email,$no_hp,$kode_kamar,$nama_kamar,$tgl_booking,$tgl_out,$harga){
	$query = "INSERT INTO reservasi (no_reservasi,nama_plg,email,no_hp,kode_kamar,nama_kamar,tgl_booking,tgl_out,harga) VALUES ('$no_reservasi','$nama_plg','$email
		','$no_hp','$kode_kamar','$nama_kamar','$tgl_booking','$tgl_out','$harga')";
	$sql=$this->dbc->query($query);
	return $sql;
	}


	function tampilReservasi(){
	$data  = array();
	$query = "SELECT *FROM reservasi";
	$sql = $this->dbc->query($query);

	while ($d =mysqli_fetch_array($sql) ){
		$data[] = $d;
	}
	return $data;

}



}//akhir class
?>

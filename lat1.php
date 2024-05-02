<?php
/** contoh kelas **/
 class kendaraan{
 	private $warna;
 	private $jumlah_pintu;
 	private $jumlah_roda;
 	public $harga;
 	public $merk;
 	 
public function construkct(){
	echo "ini adalah objek kendaraan. <br>";
}
public function set_harga ($harga){
	$this ->harga = $harga;
}
public function show_harga(){
	echo "harga kendaraan : Rp.".$this ->harga.'.<br>';
}
public function jalan (){
	echo "broooom";
}

 }
 $saya_adalah_objek = new kendaraan;
 $saya_adalah_objek ->set_harga(100000);
 $saya_adalah_objek ->show_harga();
 $saya_adalah_objek -> jalan();
 /** end of class **/
 ?>
 
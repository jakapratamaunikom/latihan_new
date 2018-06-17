<?php
/**
 * 
 */
class objek
{
	// ini merupakan fungsi yang akan di eksekusi intrepeter pertama kali
	function __construct()
	{
		# code...
	}
	// fungis untuk menampilkan kalimat 
	function do_pesan(){
		echo "Perkenalkan Saya Jaka";
	}

	// fungsi untuk memberikan nilai balikan 
	public function setNilai(){
		return 100;
	}
}
// cara untuk inisiasi objek bernama 'objek'
$objek = new objek();

// cara pemamnggilan fungsi 
echo $objek->do_pesan()."<br>";
echo $objek->setNilai();
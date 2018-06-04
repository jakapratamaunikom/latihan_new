<?php
/**
 * 
 */
class objek
{
	
	function __construct()
	{
		# code...
	}

	function do_pesan(){
		echo "Perkenalkan Saya Jaka";
	}

	public function setNilai(){
		return 100;
	}
}
$objek = new objek();

echo $objek->do_pesan()."<br>";
echo $objek->setNilai();
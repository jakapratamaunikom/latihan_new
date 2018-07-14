	<?php
	/**
	* Inisiasi class manusia
	*/
	class Manusia{

		var $jk = 'Laki-laki';
		var $nama = 'Jaka Pratama'; 
		public $panjang, $lebar;

		function panggil_property(){
			echo $this->jk;
		}

		function hitung(){

			
			return $this->panjang * $this->lebar;
		}

		function setNama(){
			return $this->jk = 'embee';
		}

	} 

	

	//instanisasi variabel manusia 
	$People = new Manusia();
	$jk_elma = new Manusia();
	$jk_jaka = new Manusia();

	// pengisian nilai property 
	$jk_jaka->jk = 'Pria';
	$jk_elma->jk = 'Wanita';

	// akses properti 
	echo $jk_jaka->jk;
	echo $jk_elma->jk;

	echo '<br>';
	

	// memanggil properti jk secara
	echo $People->jk;

	
	// memanggil fungsi melalui instanisasi
	$People->panggil_property();

	// $People = new Manusia(3,2);
	echo $People->hitung(2,3);

	echo $People->setNama();

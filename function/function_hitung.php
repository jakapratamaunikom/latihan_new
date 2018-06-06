<?php
	function tambah($bil1,$bil2){
		echo "$bil1 +$bil2 = ";
	}

	// return function value dengan keluaran di parameter yaitu (float)
	function getTambah(float $bil1, float $bil2):float{
		 return $bil1+$bil2;
	}

	tambah(2,3);
	echo getTambah(2,3);

	echo '<br>';
	
	// input dengan tipe data float
	tambah(2.5,3.284);
	echo getTambah(2.5,3.284);

?>
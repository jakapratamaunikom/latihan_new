<?php
	function setNama(){
		echo "Hai Jaka Pratama ";
	}

	function setNamaParam($nama = 'Lovely Jaka Paratam'){
		echo 'adalah : '.$nama;
	}

	// tanpa parameter
	setNama();
	setNama('john');
	echo '<br>';	
	echo '<hr>';

	// parameter diubah saat pemanggilan 
	setNamaParam($nama = 'aga');
	echo '<br>';	
	// set paramater => variabel nya bedain
	setNamaParam($namas = 'koko');
?>
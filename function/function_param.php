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

	setNamaParam($nama = 'aga');
	echo '<br>';	
	// set paramater => variabel nya bedain
	setNamaParam($namas = 'koko');
?>
<?php
	//inisialisasi array
	$arrTest = array();
	//array dengan key
	$arrKeluarga = array(
		"Bapak" => "Uep",
		"Ibu" => "Suketi",
		"Anak" => "Ujang");

	//mengisi array
	for($i=0;$i<5;$i++){
		$arrTest[$i] = $i;
	}

	//menampilkan array dengan for
	echo "Menampilkan array dengan for <br>";
	for($i=0;$i<5;$i++){
		echo $arrTest[$i]."<br>";
	}

	echo "<br>";

	//menampilkan array dengan foreach
	echo "Menampilkan array dengan foreach <br>";
	foreach($arrTest as $arrTestValue){
		echo $arrTestValue."<br>";
	}

	echo "<br>";
	echo "Menampilkan array dengan foreach menggunakan key dan value <br>";
	foreach($arrKeluarga as $arrKeluargaKey => $arrKeluargaValue){
		echo $arrKeluargaKey." : ".$arrKeluargaValue."<br>";
	}

	echo "<br>";
	echo "Menampilkan array dengan foreach hanya menggunakan value <br>";
	foreach($arrKeluarga as $arrKeluargaValue){
		echo $arrKeluargaValue."<br>";
	}

	//fungsi explode => mengubah string mnjadi array
	echo "<br>";
	echo "Fungsi Explode - Mengubah Strng menjadi array <br>";

	$kalimat = "Saya, Dia, Kamu, Mereka, Ganteng";
	echo "String Sebelum Explode : $kalimat <br>";
	
	$arrKalimat = explode(",", $kalimat);
	echo "Setelah di explode dengan pemisah ','<br>";
	var_dump($arrKalimat);

	echo "<br>";
	echo "<br>";

	$kalimat_1 = "Dia adalah wanita tercantik di dunia mimpi saja";
	echo "String Sebelum Explode : $kalimat <br>";
	
	$arrKalimat_1 = explode(" ", $kalimat_1);
	echo "Setelah di explode dengan pemisah spasi<br>";
	var_dump($arrKalimat_1);

	echo "<br>";
	echo "<br>";
	
	//fungsi implode => mengubah array menjadi string
	$implodeArrKalimat = implode(",", $arrKalimat);
	var_dump($implodeArrKalimat);

	//debug
	//var_dump($arrTest);
	//var_dump($arrKeluarga);
	//var_dump($arrKalimat_1);
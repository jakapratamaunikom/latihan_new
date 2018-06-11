<?php
// --------------------------------//
// FORMAT AKSES FILE

//  r  : baca file
//  r+ : baca dan menulis ke dalam file, pointer di awal file
//  w  : menulis ke dalam file, menghapus data
//  w+ : baca dan menulis ke dalam file, pointer di awal file
//  a  : simpan data ke dalam file, pointer di akhir
//  a+ : baca dan tulis, pointer  di akhir file
//  b  : binary digunakan agar file disimpan tidak dbidakan sbg
	  // teks atau biner 

// --------------------------------//

// open file
$file_open = fopen("tes.txt",'r');

// baca file
 //-- menggunakan perulangan 
 //-- parameter 100 itu merupakan formating string
			
while ($isi=fgets($file_open,100)) {
	echo $isi.'<br>';
    
}
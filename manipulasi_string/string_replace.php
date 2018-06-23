<?php
// error_reporting(0); => digunakan untuk menghilangkan pesan error, notice dari server PHP

// FORMAT :  str_replace(find, replace, string, count)
	/*
		find : apa yang dicari 'value / nilai'
		replace : digantikan dengan
		string : pencarian 'karakter'
		count : sudah berapa banyak yang direplace
	*/
$pakaian =array('kemeja','kaos','singlet','torso');
var_dump(str_replace('kaos', 'jas', $pakaian, $i));
echo '<br>';
// fungsi implode digunakan untuk menggabungkan isian dari variabel array
echo implode(" ", $pakaian);

echo 'Replacement : '.$i;


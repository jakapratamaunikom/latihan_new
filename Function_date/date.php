<?php
// <?=  : merupakan TAG pembukaan PHP untuk single line (DRY {Don't Repeat Yourself}) */
	// WET : {Wet Everything Twice}
	
// START

	// menampilkan format 'am'
	$tanggal = date('a');
	echo $tanggal;

/* Format karakter
	d : hasil : 06
	D : hasil : Friday
	m : bulan : 07
	M : bulan : Jul
	y : tahun : 18
	Y : tahun : 2018
	h : jam : 05 
	i : menit : 20
	s : detik : 10
*/

	// menampilkan format 'am'
	date_default_timezone_set('asia/jakarta'); // butuh format ini karena php bingung mau pake timeZone manaa???
	$tanggal = date('D M Y');
	echo $tanggal;

	echo '<br>';
	$jam = date('h i s ');
	echo $jam;


?>
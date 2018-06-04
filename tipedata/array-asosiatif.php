<?php

	$hp=array(
		1,2,3
	);
	$anak[0] = 2;
	$anak[1] = "dua";
	
	echo 'anak[0] (berisi numerik): '. $anak[0].'<br>';
	echo 'anak[1] (berisi numerik): '. $anak[1].'<br>';
	
	// echo 'Array Asosiatif  : '.$hp['samsung'];

	$gabung = array_merge($hp, $hp);

	var_dump($gabung);
?>
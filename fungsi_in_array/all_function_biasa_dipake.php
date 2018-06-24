<?php
$keboard = array(
	'Gaming','Programming','Cashier'
);
echo 'Array : '. implode(' - ',$keboard);
echo '<hr>';
// fungsi membalikan nilai dalam array 
$balik =array_reverse($keboard);

echo 'Array Reverse : '.implode(' , ',$balik).'<br>';
echo '<br>';

sort($keboard);
echo 'Sort (Ascending) : '.implode(' ',$keboard);
echo '<br>';

// function in_array 
	// return value : 1 (true)
	// return value : 0 (false)
$cariArayKebord = in_array('asf', $keboard);
echo 'Mencari kata "Programming dalam array diatas "';
echo 'Function Pencarian Array (in_array) : '. $cariArayKebord;
?>
<?php
$kota = array(
			"Bandung",
			"Jakarta",
			"Semarang",
			"Bali",
			"Tenggarong"
				
		);
echo 'Daftar Kota ';
echo '<br><br>';
for($i=0; $i<4;$i++){
	echo ($i+1). $kota[$i].'<br>';
}
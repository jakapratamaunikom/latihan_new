<?php
function tulisArray(...$arraydata){
	for($i=0; $i<count($arraydata); $i++){
		if($i>=0)	echo $arraydata[$i].' , ';
	}	
}

function penjumlahanArray(float ...$arrayPenjumlahan):float{
	$jml=0;
	for($i=0; $i<count($arrayPenjumlahan); $i++){
		// echo $arrayPenjumlahan[$i];
		$jml=$jml+$arrayPenjumlahan[$i];
	}
	// perhatikan posisi return {TIDAK BOLEH DALAM PERULANGAN}
	return $jml;
		

}

 tulisArray(1,4,2,24,2,2,1,4,2,4,24,2,4,2);
 echo '<br>';
 echo '<br>';
  echo 'Penjumlahan Aarray  : ';
 echo tulisArray(24.1,24.56,12.024);
 echo ' = '.penjumlahanArray(24.1,24.56,12.024);

?>
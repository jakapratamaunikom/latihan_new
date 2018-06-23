<?php
$jalan =200;
$turun =50;
$inpu=300;
for($i=200; $i<=$inpu; $i++){
	echo $i.'<br>';
	if($i ==200){
		$penurunan = $i-$turun;
	}
	echo $penurunan;
}
?>
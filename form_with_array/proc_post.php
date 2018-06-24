<?php
$kel =$_POST['kel'];


for ($i=0; $i<count($kel); $i++ ) {
	// membuat nilai bertambah (counter++)
	$no= $i+1;
	// $kel[$i] : adalah menampilkan data yang ada dalam perulangan
	echo $no.' - '.$kel[$i].'<br>';
}
?>
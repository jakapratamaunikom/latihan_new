<?php

$pjg=$_GET['pjg'];
$lbr=$_GET['lbr'];


$luas = $pjg * $lbr;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Hasil Perhitungan Luas Persegi Panjang </h1>

	<?php
	 echo 'Panjang : '.$pjg.'<br>';
	 echo 'Lebar   : '.$lbr.'<br>';
	 echo 'Luas    : '. '<b>'.$luas.'</b>'; 
	?> 
</body>
</html>


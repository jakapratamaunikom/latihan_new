<?php

$pjg=$_POST['pjg'];
$lbr=$_POST['lbr'];


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


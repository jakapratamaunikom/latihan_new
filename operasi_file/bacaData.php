<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- beda nya fungsi operasi file -->
		<!-- fgets : memberikan baris baru... (sesuai dengan isi teks binary) -->
		<!-- fread : tidak memberikan garis baru -->
	<?php
		$fp=fopen('biodata.txt','r');
		while($isi=fgets($fp,100)){
			echo $isi.'<br>';
		}

		?>
</body>
</html>
<?php

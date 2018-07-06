	<?php
	// menampilkan variabel session
	$_SESSION['id'] = 'ADMIN01';
	$_SESSION['nama'] = 'JAKA';
	$_SESSION['role'] = 'SUPERADMIN';
	$_SESSION['tgl'] = date ('d m y');
	var_dump($_SESSION);

	echo '<br>';
	// session 'id' dihapuskan 
	unset($_SESSION['id']);
	var_dump($_SESSION);
	
	
	?>
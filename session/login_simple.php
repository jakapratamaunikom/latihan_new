	<?php
	session_start();
	$_SESSION['username'] = 'asf';

	if(!empty($_SESSION['username']) == 'asf') echo 'selamat datang';
	?>

	<?php
		// session_start();
		unset($_SESSION['username']);
		echo 'session is end';
	?>
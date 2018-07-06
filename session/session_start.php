<?=
	session_start(); // nilai balikan nya :  true 1
	$_SESSION['id_session'] ='Log01';
	// $counter = 999;

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Demo Session</h2>
	<p>Selamat Datang .. SESSION anda  : </p><?php echo $_SESSION['id_session'];?>

	<!-- unset session -->
	<?= 
	session_unset();
	session_destroy();
	 ?>
	

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- Perbedaan Method POST dan GET -->
		<!-- POST : hanya mengirimkan string yang dibutuhkan $_POST[] -->
		<!-- GET  : 1. memberikan seluruh URL ke dalam file proses $_GET ,
				    2. tidak menampilkan hasil input di box address {Browser}  -->
	<form method="post" action="process_post_Luas.php">
		<h1>Perhitungan Luas Persegi Panjang</h1>

	<table>
		<tr>
			<td>Panjang</td>
			<td>:</td>
			<td><input type="text" name="pjg"></td>
		</tr>
		<tr>
			<td>Lebar</td>
			<td>:</td>
			<td><input type="text" name="lbr"></td>
		</tr>
	</table>
	<input type="submit" name="submit">
	</form>
	
</body>
</html>
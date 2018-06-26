<?php
	// inisiasi Var
	$KosongKTP= $KosongNama = $KosongAlamat = '';
	$ktp = $nama = $alamat = '';
	// variabel server dengan method nya POST
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(empty($_POST['ktp'])){
			$KosongKTP = 'KTP Field Is Required';
		}
		else{
			$ktp= $_POST['ktp'];
		}

		if(empty($_POST['nama'])){
			$KosongNama = 'Nama Field Is Required';
		}
		else{
			$nama= $_POST['nama'];
		}

		if(empty($_POST['alamat'])){
			$KosongAlamat = 'Alamat Field Is Required';
		}
		else{
			$alamat= $_POST['alamat'];
		}


	}


	?>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="">
		<style type="text/css" media="screen">
		.error{
			color: red;
		}
		</style>
	</head>
	<body>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<table>
				<caption>Ujian Calon Karyawan PT JAKAPRA</caption>
				<tbody>
					<tr>
						<td>No. KTP</td>
						<td>:</td>
						<td><input type="text" name="ktp" value="" placeholder="Masukan No KTP">
							<span class="error"><?php echo $KosongKTP; ?></span></td>
					</tr>
					<tr>
						<td>nama</td>
						<td>:</td>
						<td><input type="text" name="nama" value="" placeholder="Masukan Nama"><span class="error"><?php echo $KosongNama; ?></span></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td><textarea name="alamat" placeholder="Masukan Alamat"></textarea><span class="error"><?php echo $KosongAlamat; ?></span></td>
					</tr>
					<tr>
						<td colspan="3"><input type="submit" name="proses" value="PROSES" placeholder=""></td>	
					</tr>
				</tbody>
			</table>
		</form>	
	</body>
	</html>


	<?php
	// Tampil Data
		echo '<hr>';
		echo '<h2>Data Calon Karyawan</h2>';

		echo $ktp .' | '. $nama. ' | '. $alamat. ' |';
		echo "<br>";

	if(!empty($_POST['proses'])){
			echo '<b>Sukses</b>';
		}
	?>

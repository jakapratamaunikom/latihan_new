<?php

	$id=$_POST['id'];
	$kegiatan=$_POST['kegiatan'];
	$status=$_POST['status'];

	// proses menyimpan dalam file
	/*
		insiasi akses pembuatan file
	*/
	$file_open=fopen('task_harian.txt', 'a+');
	fwrite($file_open, $id. ' | '. $kegiatan. ' | '. $status. '<>');
	fclose($file_open);


?>
<h2>Laporan Tambah Data</h2>
	<table>
		<tr>
			<td>ID</td>
			<td>:</td>
			<td><?php echo $id; ?></td>
		</tr>
		<tr>
			<td>Kegiatan</td>
			<td>:</td>
			<td><?php echo $kegiatan; ?></td>
		</tr>
		<tr>
			<td>Status</td>
			<td>:</td>
			<td><?php echo $status; ?>
			</td>
		</tr>
	</table>
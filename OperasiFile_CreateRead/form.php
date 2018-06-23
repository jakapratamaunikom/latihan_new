<!DOCTYPE html>
<html>
<head>
	<title>Task Harian</title>
</head>
<body>
	<h2>TASK HARIAN APPS</h2>
	<form method="post" action="proc_add.php">
		<table>
			<tr>
				<td>ID</td>
				<td>:</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Kegiatan</td>
				<td>:</td>
				<td><input type="text" name="kegiatan"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>:</td>
				<td>Selesai<input type="radio" name="status" checked value="Selesai"> 
					Belum Selesai<input type="radio" name="status" value="Belum Selesai ">
				</td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" name="submit" value="submit">
					<input type="reset" name="reset"></td>
			</tr>
			
			
		</table>
	
	</form>
	
</body>
</html>
<?php
include 'koneksi.php';
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload File</title>
</head>
<body>
<form action="tambah.php?mode=simpan" method="post">
<table>
	<tr>
		<td colspan="3"><center>Admin Upload File</center></td>
	</tr>
	<tr>
		<td>ID File</td><td>:</td><td><input type="text" name="id"></td>
	</tr>
	<tr>
		<td>URL Download</td><td>:</td><td><input type="text" name="url"></td>
	</tr>
	<tr>
		<td>Nama File</td><td>:</td><td><input type="text" name="nama_file"></td>
	</tr>
	<tr>
		<td>Preview File</td><td>:</td><td><input type="text" name="preview"></td>
	</tr>
	<tr>
		<td></td><td></td><td><button type="submit">Simpan</button></td>
	</tr>
	
</table>
<hr>
	<table border="1">
		<tr>
			<td>No</td><td>ID File</td><td>Nama File</td><td>Url Download</td><td>Deskripsi</td>
		</tr>
		<?php 
		$data=mysql_query("Select *from file_download");
		$no=1;
		while ( $p = mysql_fetch_array($data)) {
		?>
		<tr>
			<td><?php echo $no;?> </td><td><?php echo $p[id_file];?> </td><td><?php echo $p[nama_file];?> </td><td><?php echo $p[url_file];?> </td><td><?php echo $p[preview_file];?> </td>
		</tr>
		<?php

		$no++;	
		}
		?>
	</table>
<hr>

</form>
<?php
if ($_GET[mode]=='simpan')
{

$sql=mysql_query("INSERT INTO file_download(id_file,url_file,nama_file,preview_file) VALUES('$_POST[id]','$_POST[url]','$_POST[nama_file]','$_POST[preview]') ");

} ?>
</body>
</html>